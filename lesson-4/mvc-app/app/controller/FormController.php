<?php

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {
        $view = new View();
        $view->render('index', []);
    }

    /**
     * Form submit
     */
    public function submit()
    {
        
            
       
        $view = new View();
        $view->render('form', []);
    }
    public function admin()
    {
        
            
       
        $view = new View();
        $view->render('admin', []);
    }
 

}