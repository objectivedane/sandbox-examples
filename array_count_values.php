/**
* Count the occurences of array element values, returning them in assoc array of $value => $occurences
* This example coverts a json string to an array using json_decode with the associative flag set true
* 
**/

//example json
$json = '{"countries":["Ghana","Kenya","Thailand","India","Tanzania","Kenya","Cameroon","India","Uganda","Argentina","Kenya","Uganda"]}';

//convert the json object to an associative array
$jsonToArray = json_decode($json, true);

//count the occurences with array_count_values
$values = array_count_values($jsonToArray['countries']);

//do something with your knowledge :)
foreach ($values as $country => $occurences)
{
    echo "$country appeared $occurences times." . PHP_EOL;
}
