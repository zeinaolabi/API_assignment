<?php
//Getting the password
$password = $_POST['password'];

$results = [
    "password" => $password,
    "status" => validatePassword($password)
];

//Sending back a JSON object
echo json_encode($results);

function validatePassword($password){
    //Getting the ncessary values to check password
    $checkNum = preg_match('@[0-9]@', $password);
    $checkUppercase = preg_match('@[A-Z]@', $password);
    $checkLowercase = preg_match('@[a-z]@', $password);
    $checkSpeicalChar = preg_match('@[^\w]@', $password);
 
    //Validating password
    if(strlen($password) < 12 || !$checkNum || !$checkUppercase || !$checkLowercase || !$checkSpeicalChar) {
        return "Weak";
    }else{
        return "Strong";
    }
}
?>