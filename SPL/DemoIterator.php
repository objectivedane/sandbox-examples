<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 22/03/16
 * Time: 09:52
 */

namespace Site\SPL;


class DemoIterator extends \RecursiveIteratorIterator
{

    /**
     * This method is only called (by foreach) when traversing into a nested array.
     * The first level getDepth is 1, the next is 2 and so on
     */
    function beginChildren()
    {
        $int = $this->getDepth();
        echo "Entering level $int of array" . PHP_EOL;

    }

    function endChildren()
    {
        $int = $this->getDepth();
        echo "Leaving level $int of array" . PHP_EOL;
    }

}