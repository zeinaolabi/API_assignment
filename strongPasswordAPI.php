<?php
$password = $_POST['password'];


function validatePassword($password){
    $checkNum = preg_match('@[0-9]@', $password);
    $checkUppercase = preg_match('@[A-Z]@', $password);
    $checkLowercase = preg_match('@[a-z]@', $password);
    $checkSpeicalChar = preg_match('@[^\w]@', $password);
 
    if(strlen($password) < 12 || !$checkNum || !$checkUppercase || !$checkLowercase || !$checkSpeicalChar) {
        echo "Weak";
    }else{
        echo "Strong";
    }
}
?>