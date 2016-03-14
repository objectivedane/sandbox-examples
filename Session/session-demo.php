<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 14/03/16
 * Time: 09:47
 */

//include the session handler class
require_once 'MySessionHandler.php';

//change the path to the tmp directory
session_save_path('/tmp/');

//apply the custom session handler
session_set_save_handler(new Site\Session\MySessionHandler());

//start session (before any output)
session_start();
//session_regenerate_id();

//Assign some data to session
//$_SESSION['name'] = 'Dane';

var_dump($_SESSION);

