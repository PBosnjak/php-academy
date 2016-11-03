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
    public function login($username, $pass)
    {
        if( isset($username) && $username == 'admin' &&
        isset($pass) && $pass == 'php'
        ) {
            $_SESSION['is_logged_in'] = true;
        }
    }

    /**
     * Logs user out
     */
    public function logout()
    {
        session_unset('is_logged_in');
        session_destroy();
    }

    /**
     * Checks if user is logged in or not
     */
    public function isLoggedIn()
    {
        return isset($_SESSION['is_logged_in']) ? TRUE : null;
    }
    
    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}
