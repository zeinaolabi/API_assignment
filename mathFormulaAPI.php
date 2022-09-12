<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$results = [
    "a" => $a,
    "b" => $b,
    "c" => $c,
    "result" => getSolution($a, $b, $c)
];

echo json_encode($results);

function getSolution($a, $b, $c){
    return  pow($a,3) + ($b * $c) - ($a / $b);
}
?>