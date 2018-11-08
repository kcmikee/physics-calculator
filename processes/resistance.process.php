    <?php

    include "../calc/resistance.calc.php";



    if (!$_POST['submit']) {
      die("Error: Submit button wasn't clicked");
    }else {
      $first_number = $_POST["num1"];
      $second_number = $_POST["num2"];
      $third_number = $_POST["num3"];
    }


    $result = new Calculator($first_number,$second_number,$third_number);
    //echo $result ->actualCalc();
    header("location:../resistance.php?message=".$result ->actualCalc());

    ?>
