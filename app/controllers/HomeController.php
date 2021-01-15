<?php

class HomeController extends Controller {

    public function index()
    {
        $this->partial('header');
        
        $this->view('home');
        
        $this->partial('footer');
    }
}