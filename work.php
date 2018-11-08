<?php
include("nav.php");

?>


<div class="col mt-2">
  <div class="card card-body">
    <div class="row">
      <form class="form col-lg-6 col-sm-7 col-md-7 border-right" action="processes/process2.php" method="post">
        <fieldset>
          <legend class="resist text-primary text-center border-bottom">Work, Power, Time</legend>
          <div class="form-group">
            <label for="Num1">Enter the values</label><br>
            <select class="form-group col-lg-12 rounded" name="operation">
              <option value="work">Work(W)</option>
              <option value="time">Time(T)</option>
              <option value="power">Power(P)</option>
            </select>

            <br>
            <label for="Num1">First Integer</label><br>
            <input type="number" name="num1" class="form-control" placeholder="Enter the first number">
          </div>

          <div class="form-group">
            <label for="Num2">Second Integer</label><br>
            <input type="number" name="num2" class="form-control" placeholder="Enter the second number">
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>

      <div class="formula mt-2 ml-3">
        <h4 class="text-primary text-center border-bottom">Definition</h4>
        <p><b>Work:</b>is a measure of energy transfer that occurs when an object is moved<br> over a distance by an external force at least part of which is
                        applied in the <br> direction of the displacement  </p>
        <br>

        <p><b>Power:</b>is the rate at which work is done, the amount of energy transferred <br> per unit time. Having no direction, it is a scalar quantity  </p>
<br>

        <h4 class="text-primary text-center border-bottom">Formula</h4>
        W = F x D <br>
        P = W/T <br>
        T = W/P <br>
      </div>
    </div>
  </div>
</div>

<!--Answer region-->
<div class="row">
  <label class="mt-2 ml-4 text-success">Your Answer is:</label>
  <?php
    if (isset($_GET['message'])) {
      $edu = $_GET['op'];
      echo "<h1 class='delete text-success'>".$_GET['message']."</h1>";
        if($edu=="work"){
          echo "Joules";
        }
        elseif ($edu=="time"){
          echo "sec";
        }
        elseif ($edu=="power"){
          echo "Watts";
        }
    }
  ?>
</div>
<!--end Answer-->

<?php
include 'footer.php';
 ?>
