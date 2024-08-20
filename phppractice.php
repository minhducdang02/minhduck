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

//Cau 2
echo 'Question 2:';
function sumOfNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
    }
    return $sum;
  }
  
  $n = 50;
  
  $sum = sumOfNumbers($n);
  
  echo "The sum of numbers from 1 to $n is $sum.";

echo '<br>';