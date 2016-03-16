<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 16/03/16
 * Time: 09:35
 */


//waiting on stack overflow - i though backend/index.php would come from cli, frontend/index.php from web
include('phar://./build/app.phar');

//pick a file out specifically
//include('phar://./build/app.phar/frontend/index.php');

