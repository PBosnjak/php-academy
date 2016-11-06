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
            
            $sql = "SELECT * FROM prijave";
            $config['name'] = "php-akademija";
            $config['user'] = "root";
            $config['password'] = "";
            $db = Db::connect($config);
            $result = $db->query($sql);
            $view->render('admin', ['array' => $result->fetchAll()]); 
        }
        
        
        
    }
    public function logout(){
        $sess = Session::getInstance();
        $view = new View(); 
        $sess->logout();
        $view->render('login');
    }


}