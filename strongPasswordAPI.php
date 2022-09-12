<?php
$password = $_POST['password'];

$results = [
    "password" => $password,
    "status" => validatePassword($password)
];

echo json_encode($results);

function validatePassword($password){
    $checkNum = preg_match('@[0-9]@', $password);
    $checkUppercase = preg_match('@[A-Z]@', $password);
    $checkLowercase = preg_match('@[a-z]@', $password);
    $checkSpeicalChar = preg_match('@[^\w]@', $password);
 
    if(strlen($password) < 12 || !$checkNum || !$checkUppercase || !$checkLowercase || !$checkSpeicalChar) {
        return "Weak";
    }else{
        return "Strong";
    }
}
?>