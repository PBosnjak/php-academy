<?php

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {
        $view = new View();
        $view->render('index');
    }

    public function form()
    {
        $view = new View();
        $view->render('form');
    }
    /**
     * Form submit
     */
    public function submit()
    {
        $ime = Request::post('ime');
        $email = Request::post('email');
        $smjer = Request::post('smjer'); 
        $godina = Request::post('godina');
        $motiv = Request::post('comm');
        $znanje = Request::post('comm2');
        $php = Request::post('php');
        $python = Request::post('python');
        $java = Request::post('java');
        $c = Request::post('c');
        $drugi = Request::post('drugi');
        $kod = Request::uploadFile('fileUpload', 'name', 'tmp_name');
        
        $view = new View();
        $view->render('thankyou', []);
             
        
    }
    public function admin()
    {
        $sess = Session::getInstance();
        $view = new View();  
        $username = Request::post('username');
        $pass = Request::post('password');

        $sess->login($username, $pass);
        
        if ($sess->isLoggedIn() == null){
            $view->render('login');
        } else {
            

            $view->render('admin'); 
        }
        
        
        
    }
 

}