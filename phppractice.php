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

//Cau 3
echo 'Question 3:';
function multiplicationTable(){
    for ($x=1; $x<=10; $x++){
        for ($y=1; $y <= 10; $y++){
            $total= $x * $y;
            echo "$x*$y= $total <br>";
        }
        echo "<br>";
    }
}
echo  multiplicationTable() ;
echo '<br>';

//Cau 4
echo 'Question 4:';
function containsWord($string, $word) {
    if (strpos($string, $word) !== false) {
      return true;
    } else {
      return false;
    }
  }
  
  $string = "Tai lieu hoc tap";
  $word = "lieu";
  
  if (containsWord($string, $word)) {
    echo "The string contains the word $word.";
  } else {
    echo "The string does not contain the word $word.";
  }
echo '<br>';