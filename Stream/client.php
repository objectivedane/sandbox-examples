<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 16/03/16
 * Time: 08:44
 */

//connect to the remote socket
$socket = stream_socket_client('tcp://0.0.0.0:8888');

//continue providing we are not at the end of the stream
while(!feof($socket)){
    //read in 1 byte chunks
    echo fread($socket, 1) . ':';
}
//close the stream
fclose($socket);