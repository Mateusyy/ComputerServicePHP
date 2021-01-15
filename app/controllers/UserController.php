<?php

class UserController extends Controller
{
    public function login()
    {
        $user = $this->model('User');
        
        if ($user->is_logged_in())
        {
            $this->redirect("/");
        }
        else 
        {
            $this->partial("header");
            $this->view('login');
            $this->partial("footer");
        }
    }
    
    public function auth()
    {
        if (!isset($_POST) || empty($_POST))
        {
            $this->redirect("/");
            die();
        }
        else
        {
            $user = $this->model('User');
            
            if ($user->auth($_POST))
            {
                $this->redirect("/");
            }
            else 
            {
                $this->redirect("/user/login");
            }
        }
    }
    
    public function logout()
    {
        session_destroy();
        $this->redirect("/");
    }
    
    public function adminPanel()
    {
        $this->partial("header");
        $this->view("adminPanel");
        $this->partial("footer");
    }
}