<link rel="stylesheet" href="../css/bootstrap.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/app.js"></script>
<link rel="stylesheet" href="../css/all.css">


<nav class="navbar navbar-expand-lg navbar-light container-fluid bg-primary sticky-top">
  <a class="navbar-brand" href="home.php"><i class="fa fa-atom"></i> PhyCalc </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mr-3">
        <a class="nav-link text-dark" href="home.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item mr-3">
        <a class="nav-link text-dark" href="form.php"><i class="fa fa-calculator"></i> Calculator</a>
      </li> -->
      <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle text-dark" href="../extras/resistable.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-book"></i>  Tables
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="extras/resistable.php">Resistivity and Conductivity</a>
          <a class="dropdown-item" href="#">Projectile</a>
          
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 border-dark" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
