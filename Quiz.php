<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$a1 = "Lisbon";
$a2 = "16";
$a3 = "Mercury";
$a4 = "Giraffe";
$a5 = "February";

$count = 0;
echo "Question 1: What was the capital of Portugal? <br>";
echo "You answered: " . $q1 . "<br>";
echo "Correct answer: " . $a1 . "<br>";
if($q1 == $a1)
{
  $count++;
}

echo "Question 2: What is the square root of 256? <br>";
echo "You answered: " . $q2 . "<br>";
echo "Correct answer: " . $a2 . "<br>";
if($q2 == $a2)
{
  $count++;
}

echo "Question 3: Which planet is closest to our sun? <br>";
echo "You answered: " . $q3 . "<br>";
echo "Correct answer: " . $a3 . "<br>";
if($q3 == $a3)
{
  $count++;
}

echo "Question 4: Which is the tallest mammal? <br>";
echo "You answered: " . $q4 . "<br>";
echo "Correct answer: " . $a4 . "<br>";
if($q4 == $a4)
{
  $count++;
}

echo "Question 5: What is the second month of the year? <br>";
echo "You answered: " . $q5 . "<br>";
echo "Correct answer: " . $a5 . "<br>";
if($q5 == $a5)
{
  $count++;
}

echo "Questions answers correctly: " . $count .;
echo "Your score is " . ($count*20) . "% ";
?>
