<?php

class IndexController
{
    public function index()
    {
        $view = new View();
        //$view->layout('layout');
        $view->render('index');
    }

}