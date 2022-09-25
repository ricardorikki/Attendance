<?php include_once 'includes/session.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/site.css" rel="stylesheet" >
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <title>Attendance - <?php echo $title ?></title>
  </head>

  <body>




  <div class="boxContainer"><!--Box opening Div-->
        <!-------NAV BAR STARTS------->


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
            <img src="img/atten.jpg" alt="" width="150" height="34">
         </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      <a class="nav-link" href="viewrecords.php">Attendees</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link ml-auto" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
      <div class="navbar-nav ms-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only"></span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
          <?php } ?>
        </div>
    </div>
  </div>
</nav>




       
        <!-------NAV BAR ENDS------->