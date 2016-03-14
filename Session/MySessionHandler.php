<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 14/03/16
 * Time: 09:52
 */

namespace Site\Session;


class MySessionHandler extends \SessionHandler
{
    public function close()
    {
        echo "I have closed the session <br />";
        return parent::close();
    }

    public function destroy($session_id)
    {
        echo "I have destroyed the session <br />";
        return parent::destroy($session_id);
    }

    public function gc($maxlifetime)
    {
        return parent::gc($maxlifetime);
    }

    public function open($save_path, $session_id)
    {
        echo "open <br />";
        return parent::open($save_path, $session_id);
    }

    public function read($session_id)
    {
       echo "Reading from: $session_id <br />" ;
       return parent::read($session_id);
    }

    public function write($session_id, $session_data)
    {
        echo "write to id: $session_id <br />";
        return parent::write($session_id, $session_data);
    }

}