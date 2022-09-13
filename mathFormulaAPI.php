<?php
//Getting values
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$results = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "result" => getSolution($a, $b, $c)
];

//returning a JSON object
echo json_encode($results);

function getSolution($a, $b, $c){
    //Returning solution
    return  pow($a,3) + ($b * $c) - ($a / $b);
}
?>