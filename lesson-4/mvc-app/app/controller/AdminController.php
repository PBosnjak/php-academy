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
            //$view->render('admin', ['array' => $result->fetchAll()]); 
            $content = $db->getTable($result->fetchAll());
            $view->render('proba', ['content' => $content]);
        }
        
        
        
    }
    public function logout(){
        $sess = Session::getInstance();
        $view = new View(); 
        $sess->logout();
        $location = "Location: " . App::config('app_url') . "admin/admin"; 
        header($location);
    }
    
    public function download() {
        $file = Request::post('submit');

        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            
        }
    }
}