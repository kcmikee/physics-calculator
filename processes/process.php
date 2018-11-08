<?php

include "../calc/normal.php";
include "../nav.php";


if (!$_POST['submit']) {
  die("Error: Submit button wasn't clicked");
}else {
  $first_number = $_POST["num1"];
  $second_number = $_POST["num2"];
  $operation = $_POST["operation"];
}


$result = new Calculator($first_number,$second_number,$operation);
//echo $result ->actualCalc();
header("location:../form.php?message=".$result ->actualCalc());

?>
