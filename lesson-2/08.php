<?php

$csv = array_map('str_getcsv', file('postanski-uredi.csv'));
/*
echo'<pre>';
var_dump($csv);
echo'</pre>';
 * */
 
array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
array_shift($csv);





/*
function getRegionName($array) {
     foreach ($array as $k => $val) {
        $return[$k] = $val['naselje'];
    };
}
*/

function groupBy ($array, $key) {
    $return = [];  
    foreach ($array as $k => $val) {       
        $return[$val[$key]][] = $val ;
    };
   
    
        //$return[$val[$key]][] = $val;
        
       
       // $return[$val[$key]] [] .= $val['brojPu'];
        //$return[$val[$key]] [] .= $val['naselje'];
    
    return $return;
};


$b = groupBy($csv, "zupanija");


echo'<pre>';
var_dump($b);
echo'</pre>';

