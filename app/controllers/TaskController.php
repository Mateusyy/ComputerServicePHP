<?php

class TaskController extends Controller
{
    public function taskInsert()
    {
        $model = $this->model('pricecatalog');
        $result = $model->get_all_items();
        
        $this->partial("header");
        $this->view("tasks/taskInsert", $result);
        $this->partial("footer");
    }
    
    public function taskInsertFunc()
    {
        $model = $this->model('task');
        $result = $model->addTask($_POST);
        
        $this->redirect("/admin/tasks");
    }
    
    public function taskShow()
    {
        $id = $_GET['id'];
        
        $model = $this->model('task');
        $result = $model->get_task_by_id($id);
        
        $this->partial("header");
        $this->view("tasks/taskView", $result);
        $this->partial("footer");
    }
    
    public function taskEdit()
    {
        $id = $_GET['id'];
        
        $model = $this->model('task');
        $result = $model->get_task_by_id($id);
        
        //var_dump($result);
        
        $this->partial("header");
        $this->view("tasks/taskEdit", $result);
        $this->partial("footer");
    }
    
    public function taskEditFunc()
    {
        $model = $this->model('task');
        $result = $model->updateTask($_POST);
        
        $this->redirect("/admin/tasks");
    }
    
    public function taskDelete()
    {
        $id = $_GET['id'];
        
        $model = $this->model('task');
        $result = $model->delete_task_by_id($id);
        
        $this->redirect("/admin/tasks");
    }
}

