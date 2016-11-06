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
        $data = [
            'ime'       =>  Request::post('ime'), 
            'email'     =>  Request::post('email'), 
            'smjer'     =>  Request::post('smjer'), 
            'godina'    =>  Request::post('godina'), 
            'motiv'     =>  Request::post('comm'), 
            'znanje'    =>  Request::post('comm2'), 
            'php'       =>  Request::post('php'), 
            'python'    =>  Request::post('python'), 
            'java'      =>  Request::post('java'), 
            'c'         =>  Request::post('c'), 
            'drugi'     =>  Request::post('drugi'), 
            'kod'       =>  Request::uploadFile('fileUpload', 'name', 'tmp_name')
           
        ];

        $sql = "INSERT INTO prijave (ime, email, smjer, godina, motiv,"
             . " predznanje, php, java, python, c, drugi , kod) "
             . "VALUES (:ime, :email, :smjer, :godina, :motiv, "
             . ":znanje, :php, :python, :java, :c, :drugi, :kod)";
        
        $config['name'] = "php-akademija";
        $config['user'] = "root";
        $config['password'] = "";
        $db = Db::connect($config);
        $db->queryPrepared($sql, $data);
        $view = new View();
        $view->render('thankyou');
             
        
    }

}