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


//Cau 5
echo 'Question 5:';
function findMaxAndMin($array) {
    $max = $array[0];
    $min = $array[0];
  
    foreach ($array as $value) {
      if ($value > $max) {
        $max = $value;
      }
  
      if ($value < $min) {
        $min = $value;
      }
    }
  
    return array($max, $min);
  }
  
  $array = array(1, 5, 3, 2, 4);
  
  $maxAndMin = findMaxAndMin($array);
  
  echo "The maximum value is $maxAndMin[0].";
  echo "The minimum value is $maxAndMin[1].";
echo '<br>';



//Cau 6
echo 'Question 6:';
function sortArray($array) {
    $sortedArray = array();
  
    foreach ($array as $value) {
      $sortedArray[] = $value;
    }
  
    asort($sortedArray);
  
    return $sortedArray;
  }
  
  $array = array(1, 5, 3, 2, 4);
  
  $sortedArray = sortArray($array);
  
  echo "The sorted array is: ";
  print_r($sortedArray);
echo '<br>';