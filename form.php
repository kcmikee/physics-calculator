<?php
include("nav.php");

 ?>



<div class="row">
<div class="col sidebar">
    <div class="card card-body">
      <form class="form d-flex justify-content-center" action="processes/process.php" method="post">
        <fieldset>
          <legend class="text-primary border-bottom text-center">Calculator</legend>
          <div class="form-group">
            <label for="Num1">What do you want to calculate?</label>
            <br>
            <label for="Num1">First figure</label><br>
            <input type="text" name="num1" class="form-control" placeholder="Enter the first number">
          </div>

          <div class="form-group">
            <label for="Num2">Second figure</label><br>
            <input type="text" name="num2" class="form-control" placeholder="Enter the second number">
          </div>

          <select class="form-group rounded col-9" name="operation">
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
          </select>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>
  </div>
</div>

<div class="col work_power_time">
  <div class="collapse multi-collapse" id="multiCollapseExample3">
    <div class="card card-body">
      <form class="form d-flex justify-content-center" action="processes/process2.php" method="post">
        <fieldset>
          <legend class="text-center text-primary border-bottom">Calculator For Work, Power & Time</legend>
          <div class="form-group">
            <label for="Num1">Enter the values</label><br>
            <select class="form-group col-lg-12 rounded" name="operation">
              <option value="work">Work(W)</option>
              <option value="time">Time(T)</option>
              <option value="power">Power(P)</option>
            </select>
            <br>
            <label for="Num1">First Integer</label><br>
            <input type="text" name="num1" class="form-control" placeholder="Enter the first number">
          </div>

          <div class="form-group">
            <label for="Num2">Second Integer</label><br>
            <input type="text" name="num2" class="form-control" placeholder="Enter the second number">
          </div>

          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>
      <div class="formula mt-2">
          W = F x D <br>
          P = W/T <br>
          T = W/P <br>
      </div>
    </div>
  </div>
</div>


<div class="col">
  <div class="collapse multi-collapse" id="multiCollapseExample2">
    <div class="card card-body">
      <form class="form d-flex justify-content-center" action="processes/process.php" method="post">
        <fieldset>
          <legend class="resist">Resistance</legend>
          <div class="form-group">
            <label for="Num1">Enter value</label><br>

            <label for="Num1">Resistivity of material(Ω.m)</label><br>
            <input type="text" name="num1" class="form-control" placeholder="Enter the first value">
          </div>

          <div class="form-group">
            <label for="Num2">Length of material</label><br>
            <input type="text" name="num2" class="form-control" placeholder="Enter the second value">
          </div>

          <div class="form-group">
            <label for="Num2">Second figure</label><br>
            <input type="text" name="num2" class="form-control" placeholder="Enter the second number">
          </div>



          <select class="form-group" name="operation">
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
          </select>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>
      <div class="formula">
        <p class="border-bottom">R = ρL/A </p><br>
        R = Resistance <br>
        L = Length of the material <br>
        A = Cross-sectional area of the wire <br>
        ρ = Resistivity Constant of the material <br>
        <a href="resistable.php" class="btn btn-primary"> List of resistance values</a>
      </div>
    </div>
  </div>
</div>


<div class="col">
  <div class="collapse multi-collapse" id="multiCollapseExample2">
    <div class="card card-body">
      <form class="form d-flex justify-content-center" action="processes/process.php" method="post">
        <fieldset>
          <legend>Calculator</legend>
          <div class="form-group">
            <label for="Num1">What do you want to calculate?</label><br>
            <select class="form-group col-lg-12 rounded" name="choice">
              <option value="">Work(W)</option>
              <option value="">Time(T)</option>
              <option value="">Power(P)</option>
            </select>
            <br>
            <label for="Num1">First figure</label><br>
            <input type="text" name="num1" class="form-control" placeholder="Enter the first number">
          </div>

          <div class="form-group">
            <label for="Num2">Second figure</label><br>
            <input type="text" name="num2" class="form-control" placeholder="Enter the second number">
          </div>

          <select class="form-group" name="operation">
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
          </select>
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          <br>

        </fieldset>
      </form>
    </div>
  </div>
</div>


</div>

<!--Answer region-->
<div class="row">
  <label class="mt-2 ml-4 text-success">Your Answer is:</label>
  <?php
    if (isset($_GET['message'])) {
      //$edu = $_GET['op'];
      echo "<h1 class='delete text-success'>".$_GET['message']."</h1>";
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
  include("footer.php");
 ?>


 <!-- Sidenave-->
 <!--

 <div class="container-fluid">
<div class="row">
<div class="col-md-3 col-sm-3 sidebar2">
    <div class="logo text-center">
        <img src="http://lorempixel.com/output/people-q-g-64-64-6.jpg" class="img-responsive center-block" alt="Logo">
      <h4>Arshi S.</h4>
        <div class="coins">
          <i class="fa fa-dollar" aria-hidden="true"></i>
        </div>
          <p class="coins">2,342</p>
          <div>
        <button type="button" class="btn btn-default Add-friend">
<i class="fa fa-rocket" aria-hidden="true"></i> LAUNCH A CHALLENGE
</button></div>

    </div>
    <br>

    <div class="left-navigation">

        <ul class="list">

            <li><i class="fa fa-safari" aria-hidden="true"></i>Activities</li>
            <li><i class="fa fa-thumbs-up" aria-hidden="true"></i>Challenges Accepted</li>
            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>Challenges posed</li>
           <li><i class="fa fa-trophy" aria-hidden="true"></i>Achievements</li>
           <li><i class="fa fa-certificate" aria-hidden="true"></i>Badges</li>
           <li><i class="fa fa-users" aria-hidden="true"></i></i>Pals</li>
            <li><i class="fa fa-bar-chart" aria-hidden="true"></i>Statistics</li>
        </ul>
    </div>
</div>
<div class="col-md-9 col-sm-8 main-content">

    //Central content goes here

    <h1>FEEDBACK APPRECIATED! :)</h1>
</div>
</div>
</div>

-->

 <!-- //the css is here -->
<!-- body{
  font-family: 'Raleway', sans-serif;
}
html,body, .container-fluid, .sidebar2,.main-content{
  height:100%;
}
.sidebar2 {
    background-color: #1a1f27;
    padding: 0px !important;
    box-shadow: 2px 2px 5px #262a35;
    z-index: 1000;
    height: 100%;
    position: fixed;

}
.logo {
    min-height:200px;
    color:#afb1b5;
}
.logo>img {
    margin-top: 30px;
    padding: 1px;
    border: 3px solid #F17153;
    border-radius: 100%;
    background-color: #fff;
}
.btn.Add-friend
{
  background-color:#F17153;
//#e65e50
  border: 1px solid #50e6df;
  color:#eee;
}
.btn.Add-friend:hover,.btn.Add-friend:active,.btn.Add-friend:active:focus,.btn.Add-friend:active:hover,.btn.Add-friend:visited,.btn.Add-friend:focus
{
  background-color:#F17153;
  border: 0.5px solid transparent;
  color:white;
  outline:none;
  font-weight:600;
}
.coins
{
  display:inline-block;
  font-size:20px;
font-family:'"Helvetica Neue",Helvetica,Arial,sans-serif';
}
.list {
    color: #eee;
    list-style: none;
    padding-left: 0px;
}
li:nth-child(odd) {
    background-color:#13171d;
}
li>i {margin-right:15px;
}
.list> li {
    padding: 15px 0px 15px 40px;
    font-size: 16px;
    font-weight:lighter;
}
.list>li:hover {

    color: white;
    box-shadow:1px 1px 10px 1px #50e6df inset;
    transition: padding-left 0.2s linear;
    padding-left: 60px;

}
 -->
