<?php
//Getting day, month and year
$day = $_GET["day"];
$month = $_GET["month"];

//Checking if input is a number
if(!is_numeric($day) || !is_numeric($month)){
    throw new Exception("Numbers only");
}

//Getting the date
$date = date('Y-'.$month.'-'.$day);

$results = [
    "currentDate" => $date,
    "christmas" => "December 25",
    "daysTillChristmans" => getDaysLeft($date)
];

echo json_encode($results);

function getDaysLeft($date){
    //Getting christmas date
    $christmas = date('Y-12-25');

    //Calculating the difference between christmas and current date after converting them to time(seconds)
    return(round((strtotime($christmas) - strtotime($date)) / 86400));
}
?>