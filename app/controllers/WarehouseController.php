<?php

class WarehouseController extends Controller
{
    public function itemInsert()
    {
        $this->partial("header");
        $this->view("warehouse/itemInsert");
        $this->partial("footer");
    }
    
    public function itemInsertFunc()
    {
        $model = $this->model('warehouse');
        $result = $model->addItem($_POST);
        
        $this->redirect("/admin/warehouse");
    }
    
    public function itemShow()
    {
        $id = $_GET['id'];
        
        $model = $this->model('warehouse');
        $result = $model->get_item_by_id($id);
        
        $this->partial("header");
        $this->view("warehouse/itemView", $result);
        $this->partial("footer");
    }
    
    public function itemEdit()
    {
        $id = $_GET['id'];
        
        $model = $this->model('warehouse');
        $result = $model->get_item_by_id($id);
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("warehouse/itemEdit", $result);
        $this->partial("footer");
    }
    
    public function itemEditFunc()
    {
        $model = $this->model('warehouse');
        $result = $model->updateItem($_POST);
        
        $this->redirect("/admin/warehouse");
    }
    
    public function itemDelete()
    {
        $id = $_GET['id'];
        
        $model = $this->model('warehouse');
        $result = $model->delete_item_by_id($id);
        
        $this->redirect("/admin/warehouse");
    }
}

