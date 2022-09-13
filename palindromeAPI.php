<?php
//Getting value
$text = $_GET["string"];

$results = [
    "string" => $text,
    "palindrome" => Palindrome($text)
];

//Sending JSON object
echo json_encode($results);

function Palindrome($string) {
  $first = 0;
  $last = strlen($string) - 1;
  $bool = true;

  while($last > $first){
    //Checking if the first letter of the string is the same as the last
    //Then decrasing/increasing the indeices to check the letters after
    if ($string[$first] != $string[$last]){
      $bool = false;
      break;
    }

    $first++;
    $last--;
  }
  
  if($bool){
      return "Palindrome";
  }else{
      return "not a Palindrome";
  }
  }
?>