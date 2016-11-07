<?php

/**
 * Class Request
 *
 * Handles everything request related
 */
class Request
{
    /**
     * Resolves path info from $_SERVER to use with mod rewrite
     *
     * @return string
     */
    public static function pathInfo()
    {
        if(isset($_SERVER['PATH_INFO'])) {
            return $_SERVER['PATH_INFO'];
        } elseif(isset($_SERVER['REDIRECT_PATH_INFO'])) {
            return $_SERVER['REDIRECT_PATH_INFO'];
        } else {
            return '';
        }
    }

    /**
     * @param $key string
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default='')
    {
        return isset($_GET[$key]) ? $_GET[$key] : $default;
    }

    /**
     * @param $key string
     * @param mixed $default
     * @return mixed
     */
    public static function post($key, $default='')
    {
        return isset($_POST[$key]) ? $_POST[$key] : $default;
    }
    
    public static function uploadFile($key, $name, $tmp, $default='')
    {
        $destination = BP . "public\uploads\\" . $_FILES[$key][$name];
        move_uploaded_file($_FILES[$key][$tmp], $destination);
        return isset($_FILES[$key][$name]) ? $destination : $default;
    }
    

}