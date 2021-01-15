<?php

class PersonelController extends Controller
{
    public function userInsert()
    {
        $this->partial("header");
        $this->view("personel/userInsert");
        $this->partial("footer");
    }
    
    public function userInsertFunc()
    {
        $model = $this->model('personel');
        $result = $model->addUser($_POST);
        
        $this->redirect("/admin/personel");
    }
    
    public function personelShow()
    {
        $id = $_GET['id'];
        
        $model = $this->model('personel');
        $result = $model->get_user_by_id($id);
        
        $this->partial("header");
        $this->view("personel/personelView", $result);
        $this->partial("footer");
    }
    
    public function personelEdit()
    {
        $id = $_GET['id'];
        
        $model = $this->model('personel');
        $result = $model->get_user_by_id($id);
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("personel/personelEdit", $result);
        $this->partial("footer");
    }
    
    public function personelEditFunc()
    {
        $model = $this->model('personel');
        $result = $model->updateUser($_POST);
        
        $this->redirect("/admin/personel");
    }
    
    public function personelDelete()
    {
        $id = $_GET['id'];
        
        $model = $this->model('personel');
        $result = $model->delete_user_by_id($id);
        
        $this->redirect("/admin/personel");
    }
}