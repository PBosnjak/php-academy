<?php
class AdminController
{
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
    public function logout(){
        $sess = Session::getInstance();
        $view = new View(); 
        $sess->logout();
        $view->render('login');
    }


}