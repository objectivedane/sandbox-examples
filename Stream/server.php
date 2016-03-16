<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 16/03/16
 * Time: 08:42
 */

//Create the socket, listen on 8888
$socket = stream_socket_server("tcp://0.0.0.0:8888");

//Start accepting connections on the socket
while($connection = stream_socket_accept($socket))
{
    //Write to the stream using fwrite
    fwrite($connection, 'The Server Says: Hello!' . PHP_EOL);
    //Close the resource
    fclose($connection);
}
//Close the socket
fclose($socket);