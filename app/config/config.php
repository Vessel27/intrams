<?php

/*
 *  -------------------------------------------
 *  Base URL
 *  -------------------------------------------
 *
*/
class url{
    function base_url(){
        return "http://192.168.1.61/capstone%20ni%20carl/";
     }
}
 

 /*
 *  -------------------------------------------
 *  App General Config
 *  -------------------------------------------
 *
*/

$GLOBALS['config'] = array(
    "mysql" => array(
        "db_host" => "localhost",
        "db_user" => "root",
        "db_pass" => "",
        "db_name" => "ims",
        "db_charset" => "utf8"
    ),
     
);

?>