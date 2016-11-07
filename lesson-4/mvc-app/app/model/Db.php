<?php 
class Db extends PDO
{
    static private $_instance = array();
    
    public function __construct($config)
    {
        //@todo: die if callee not this ?
        
        if(!isset($config['host'])) {
            $config['host'] = 'localhost';
        }
        
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['name'].';charset=utf8';
        
        parent::__construct($dsn, $config['user'], $config['password']);
        
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        //$this->exec('SET NAMES utf8');
    }
    
    public static function connect($config, $name = 'db')
    {
        if(!isset(self::$_instance[$name])) {
            self::$_instance[$name] = new self($config);
        }
    
        return self::$_instance[$name];
    }
    
    public function queryPrepared($sql, $bind)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($bind);
        
        return $stmt;
    }
    
    public function fetchOne($result){
        while ($row = $result->fetch()){
               $arr = [
                   'ime' => $row['ime'],
                   'email' => $row['email']
               ];
        };
        return $arr;
    }
   
     public function getTable($result){
         foreach ($result as $row) {
             $string = '<tr>';
             $string .= '<td>' . $row['ime'] . '</td>';
             $string .= '<td>' . $row['email'] . '</td>';
             $string .= '<td>' . $row['smjer'] . '</td>';
             $string .= '<td>' . $row['godina'] . '</td>';
             $string .= '<td>' . $row['motiv'] . '</td>';
             $string .= '<td>' . $row['predznanje'] . '</td>';
             $string .= '<td>';
             if(isset($row['php']) && $row['php'] == 1){ $string .= 'PHP&nbsp';};
             if(isset($row['java']) && $row['java'] == 1){ $string .= 'Java&nbsp';};
             if(isset($row['python']) && $row['python'] == 1){ $string .= 'Python&nbsp';};
             if(isset($row['c']) && $row['c'] == 1){ $string .= 'C++&nbsp';};
             if(isset($row['drugi']) && $row['drugi'] == 1){ $string .= 'Drugi';};
             $string .='</td>';
             $string .= '<td>'
                     . '<form method="post" action="'.  App::config("app_url")  . 'admin/download">'
                     . '<button class="btn btn-default" type="submit" name="submit" value=' .  $row['kod'] . '>Download</button>'
                     . '</td>';
             $string .= '<tr>';
           
             $array[]= $string;
         }

           return $array;      
                 
                 
     }  
         
    
}