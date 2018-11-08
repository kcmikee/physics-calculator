<?php
 include("connection.php");
 include("nav.php");


 $id2 = $_GET['id'];
 $sql_1 = "SELECT * from project where id = $id2 limit 1";
 $query = mysqli_query($con,$sql_1);
 while($row = mysqli_fetch_array($query)){
 $bod=$row['body'];
 $tod=$row['title'];
 $created=$row['created_at'];
 $author=$row['author'];
 echo "<div class='container'>".
   "<div class='container-fluid'>".
   "<div class='jumbotron'>".
   "<h1>".$tod."</h1>".
   "</div>".
   "<p>".$bod."</p>"."<br>".
   "<sub>".$author."</sub>"."<br>"."<br>".
   "<sub>".$created."</sub>".
   "</div>".
   "</div>";

 }


 ?>
<!--
<style >
body{
  font-family: lato;
  background:
}
.container{
  margin-right: auto;
  margin-left: auto;
  width: 100%;

}

.container-fluid{
   border:2px solid #c0c0c0;
   border-radius: 5px;
  display: inline-block;
  width:70%;
  margin-right: auto;
  margin-left:15%;
  padding: 5px;
  margin-top: 20%;
  margin-bottom: 20%;
  /* float:left; */
}

sub{
  float:right;
  text-align: justify;

}
</style> -->
