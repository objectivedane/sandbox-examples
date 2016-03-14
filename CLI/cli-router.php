<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 14/03/16
 * Time: 09:21
 */

//Just to make typing easier
$pageRequested = $_SERVER['REQUEST_URI'];

//Does the requested file actually exist?
if(file_exists(__DIR__ . $pageRequested))
{

    //Found the file, so serve it up whilst acknowledging its existence
    echo "I found the page, here:<hr />";

    //Return false tells the PHP server to continue as normal
    return false;

} else {

    //Didn't find the page, so print a message and serve up the cli-demo page.
    //Here you could call a router function to try and find this page
    echo "I couldn't find $pageRequested, how about this? <hr />";
    include('cli-demo.php');

    //Return true tells the PHP server not to send the requested page.
    //Return false would show the 404
    return true;

}

