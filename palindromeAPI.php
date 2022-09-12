<?php
function Palindrome($string) {
    $first = 0;
    $second = strlen($string) - 1;
    $bool = true;
  
    while($first > $second){
      if ($string[$first] != $string[$second]){
        $bool = false;
        break;
      }
      $first++;
      $second--;
    }
  
    if ($bool){
        return "Palindrome";
    }else {
        return "not a Palindrome";
    }
  }
?>