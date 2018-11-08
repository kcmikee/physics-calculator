<?php include("connection.php");
      include("style.php");
      include("nav.php");
 ?>
<?php
$views="SELECT * FROM project";
$result=mysqli_query($con,$views);
while ($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $title=$row['title'];
  $body=$row['body'];
  $created=$row['created_at'];
  $author=$row['author'];
  echo "<div class='container'>".
       "<div class='container-fluid'>".
       "<h1 class='display-4'>".
       $title.
       "</h1>".
       "<p class='lead'>".
       $body.
       "</p>".
       "<br>".
       "<a class='button' href='view.php?id=$id'>view</a>".
       "<sub>".$author."</sub>"."<br>".
       "<sub>".$created."</sub>".
       "</div>".
       "</div>";
}


 ?>
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
     width:50%;
     margin-right: auto;
     margin-left:10px;
     padding: 5px;
     margin-bottom: 5px;
     /* float:left; */
   }

   sub{
     float:right;
     text-align: justify;
     margin-bottom: 5px;

   }
 </style>
