<?php

/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 22/03/16
 * Time: 08:35
 */
namespace Site\SPL;

/**
 * Class MyArrayAccessImp
 * @package Site\SPL
 * The idea is to make the array datatype more useful.  I can enforce numeric keys this way, I could compress or encrypt etc. etc.
 */
class MyArrayAccessImp implements \ArrayAccess
{
    protected $array = [];

    public function __construct(Array $array)
    {
        //Check for numeric values
        $keys = array_keys($array);
        foreach($keys as $key){
            if(!is_numeric($key)){ throw new \Exception("Invalid key: $key. Should be numeric"); }
        }

        $this->array = $array;
    }

    public function offsetExists($key)
    {
        //is the key a numeric value
        if(!is_numeric($key)){ throw new \Exception("Invalid key: $key. Should be numeric");}

        return isset($this->array[$key]);

    }

    public function offsetGet($key)
    {
        //is the key a numeric value
        if(!is_numeric($key)){ throw new \Exception("Invalid key: $key. Should be numeric");}

        //return the requested value
        return $this->array[$key];
    }

    public function offsetSet($key, $value)
    {
        //is the key a numeric value
        if(!is_numeric($key)){ throw new \Exception("Invalid key: $key. Should be numeric");}

        //key is ok so proceed
        $this->array[$key] = $value;
    }

    public function offsetUnset($key)
    {
        //is the key a numeric value
        if(!is_numeric($key)){ throw new \Exception("Invalid key: $key. Should be numeric");}
        if(!array_key_exists($key, $this->array)){ throw new Exception("Array key $key does not exist");}
        unset($this->array[$key]);
    }

}