<?php
  session_start();
 ?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title> PHP Login System Version 2  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link relx="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">PHP Login System V.2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link active" href="index.php">Home </a>
          <a class="nav-link" href="discover.php">About us</a>
          <a class="nav-link" href="blog.php">Blog</a>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<a class='nav-link' href='profile.php'>Profile</a>";
              echo "<a class='nav-link' href='includes/logout.inc.php'>Log Out</a>";
            }else {
              echo "<a class='nav-link' href='signup.php'>Sign Up</a>";
              echo "<a class='nav-link' href='login.php'>Login</a>";
            }
           ?>
        </div>
      </div>
    </nav>
