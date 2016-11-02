<?php

/**
 * Class Session
 * include functions
 */
class Session
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }

    /**
     * Logs user in
     */
    public function login()
    {
        if( isset($_POST['username']) && $_POST['username'] == 'admin' &&
        isset($_POST['password']) && $_POST['password'] == 'php'
        ) {
            $_SESSION['is_logged_in'] = true;
        }
    }

    /**
     * Logs user out
     */
    public function logout()
    {
        //@todo
    }

    /**
     * Checks if user is logged in or not
     */
    public function isLoggedIn()
    {
        
    
    }
    
    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}
