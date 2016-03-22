<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 22/03/16
 * Time: 08:35
 */

$sampleArray = ['dog', 'cat', 'onion'];
$sampleNestedArray = array(
    'notnested',
    array('nested level one',
        array('nested level two')
    )
);

/**
 * Create an array datatype which only allows numeric values (DEMO)
 * @param $sampleArray
 * @throws Exception
 *
 */
function demoArrayAccess($sampleArray)
{
    include 'MyArrayAccessImp.php';

    //instantiate the class with a small array
    //The purpose of my class is to enforce numeric keys
    $arrayAccessInstance = new \Site\SPL\MyArrayAccessImp($sampleArray);

    //alter an existing element
    $arrayAccessInstance->offsetSet(0, 'Dane');

    //add an element
    $arrayAccessInstance->offsetSet(3, 'Knowler');

    //add an associative key - will throw an exception (desired behaviour)
    //$arrayAccessInstance->offsetSet('key', 'value');

    //dump that bee cha cho
    var_dump($arrayAccessInstance);
}

/** Create an iterator and loop through the object with a foreach
 * @param $sampleArray
 */
function demoIterator($sampleArray){

    include('MyIteratorImp.php');
    $iterator = new \Site\SPL\MyIteratorImp($sampleArray);
    foreach($iterator as $key => $value){
        echo "$key: $value" . PHP_EOL;
    }

}

/**
 * This appears useful for scenarios where there are unknown nested arrays.  They can be parsed according to their nested level AND if the foreach
 * comes across a further nested array it won't break, it will just iterate through it like it was in the array.
 * @param $sampleNestedArray
 *
 */
function demoRecursiveIterator($sampleNestedArray){
    include 'CustomisedArrayObject.php';
    include "DemoIterator.php";

    //create an Array Object, inside that object the getIterator method returns my custom iterator.
    $arrayObject = new \Site\SPL\CustomisedArrayObject($sampleNestedArray);

    //instantiate the iteratoriterator and pass the arrayObject
    $demoIterator = new \Site\SPL\DemoIterator($arrayObject);

    //loop through the iteratoriterator, we don't perform any code but the iterator is echoing output in the background
    //to demonstrate the traversal of nested arrays.  This seems to have the effect of merging the nested arrays into our own
    //because the echo doesn't break the foreach, where foreaching the array would give the 'array to string' error.
    foreach($demoIterator as $item)
    {
        echo $item . PHP_EOL;
    }
}

//demoArrayAccess($sampleArray);

//demoIterator($sampleArray);

//demoRecursiveIterator($sampleNestedArray);

