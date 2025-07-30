<?php

/*
 *  -------------------------------------------
 *  Base URL
 *  -------------------------------------------
 *
*/
class url{
    function base_url(){
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];
        $path = dirname($_SERVER['SCRIPT_NAME']);
        return $protocol . $host . $path . '/';
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
