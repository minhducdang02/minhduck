<?php
//Cau 1
echo 'Question 1:';
function isEven($number) {
    if ($number % 2 == 0) {
      return true;
    } else {
      return false;
    }
  }
  
  $number = 135;
  
  if (isEven($number)) {
    echo "The number $number is even.";
  } else {
    echo "The number $number is odd.";
  }
echo '<br>';

