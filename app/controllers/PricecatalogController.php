<?php

class PricecatalogController extends Controller
{
    public function itemInsert()
    {
        $this->partial("header");
        $this->view("pricecatalog/pricecatalogInsert");
        $this->partial("footer");
    }
    
    public function itemInsertFunc()
    {
        $model = $this->model('pricecatalog');
        $result = $model->addItem($_POST);
        
        $this->redirect("/admin/pricecatalog");
    }
    
    public function itemShow()
    {
        $id = $_GET['id'];
        
        $model = $this->model('pricecatalog');
        $result = $model->get_item_by_id($id);
        
        $this->partial("header");
        $this->view("pricecatalog/pricecatalogView", $result);
        $this->partial("footer");
    }
    
    public function itemEdit()
    {
        $id = $_GET['id'];
        
        $model = $this->model('pricecatalog');
        $result = $model->get_item_by_id($id);
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("pricecatalog/pricecatalogEdit", $result);
        $this->partial("footer");
    }
    
    public function itemEditFunc()
    {
        $model = $this->model('pricecatalog');
        $result = $model->updateItem($_POST);
        
        $this->redirect("/admin/pricecatalog");
    }
    
    public function itemDelete()
    {
        $id = $_GET['id'];
        
        $model = $this->model('pricecatalog');
        $result = $model->delete_item_by_id($id);
        
        $this->redirect("/admin/pricecatalog");
    }
}

