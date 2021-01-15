<?php

class AdminController extends Controller
{
    public function tasks()
    {
        $model = $this->model('task');
        $result = $model->get_all_tasks();
        
        //$result = array_merge($result_1, $result_2);
        //var_dump($result);
        
        $this->partial("header");
        $this->view("tasks/tasks", $result);
        $this->partial("footer");
    }
    
    public function personel()
    {
        $model = $this->model('personel');
        $result = $model->get_all_users();
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("personel/personel", $result);
        $this->partial("footer");
    }
    
    public function warehouse()
    {
        $model = $this->model('warehouse');
        $result = $model->get_all_items();
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("warehouse/warehouse", $result);
        $this->partial("footer");
    }
    
    public function pricecatalog()
    {
        $model = $this->model('pricecatalog');
        $result = $model->get_all_items();
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("pricecatalog/pricecatalog", $result);
        $this->partial("footer");
    }
}