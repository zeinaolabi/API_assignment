<?php
$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];

if(!is_numeric($day) || !is_numeric($month) || !is_numeric($year)){
    throw new Exception("Numbers only");
}

$date = date($year.'-'.$month.'-'.$day);
$christmas = strtotime('December 25');

$results = [
    "currentDate" => $date,
    "christmas" => "December 25",
    "daysTillChristmans" => getDaysLeft($date)
];

echo json_encode($results);

function getDaysLeft($date){
    $christmas = date('Y-12-25');

    return round((strtotime($christmas) - strtotime($date)) / 86400);
}
?>