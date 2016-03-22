<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 22/03/16
 * Time: 09:41
 */

namespace Site\SPL;


class CustomisedArrayObject extends \ArrayObject
{

    /**
     * @return \RecursiveArrayIterator
     */
    public function getIterator()
    {
        //return a new RecursiveArrayIterator passing the given array to it
        return new \RecursiveArrayIterator($this);
    }

}