<?php
include("nav.php");

?>


<div class="col mt-2">
  <div class="card card-body">
    <div class="row">
      <form class="form col-lg-7 col-sm-7 col-md-7 border-right" action="processes/resistance.process.php" method="post">
        <fieldset>
          <legend class="resist text-primary text-center border-bottom">Resistance</legend>
          <div class="form-group">


            <label for="Num1">Resistivity of material ( Ω.m )</label><br>
            <input type="number" name="num1" class="form-control" placeholder="Enter the first value">
          </div>

          <div class="form-group">
            <label for="Num2">Length of material (m)</label><br>
            <input type="number" name="num2" class="form-control" placeholder="Enter the second value">
          </div>

          <div class="form-group">
            <label for="Num3">Cross-sectional Area ( m^2 )</label><br>
            <input type="number" name="num3" class="form-control" placeholder="Enter the second value">
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>
      <div class="formula mt-2 ml-3">
        <h4 class="text-primary text-center border-bottom">Definition</h4>
        <p>This is the opposition of the flow of current</p>
        <br> <br>
        <h4 class="text-primary text-center border-bottom">Formula</h4>
        <p>R = ρL/A </p><br>
        R = Resistance <br>
        L = Length of the material <br>
        A = Cross-sectional area of the wire <br>
        ρ = Resistivity Constant of the material <br>
        <a href="extras/resistable.php" class="btn btn-dark pull-right">View resistance values >></a>

      </div>
    </div>
  </div>
</div>

<!--Answer region-->
<div class="row">
  <label class="mt-2 ml-4 text-danger display-4">Your Answer is:</label>
  <?php
    if (isset($_GET['message'])) {
    //  $edu = $_GET['op'];
      echo "<h1 class='delete text-success border-bottom'>".$_GET['message']." Ohms</h1>";
        // if($edu=="work"){
        //   echo "Joules";
        // }
        // elseif ($edu=="time"){
        //   echo "sec";
        // }
        // elseif ($edu=="power"){
        //   echo "Watts";
        // }
    }
  ?>
</div>
<!--end Answer-->

<?php
include 'footer.php';
 ?>
