<?php
 include_once 'partials/header.php'
 ?>
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2">
   <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>You must fill in all fields.</p>
          </div>";
        }else if ($_GET["error"] == "wronglogin") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Incorrect Login Creditanls</p>
          </div>";
        }
      }
    ?>
  </div>
</div>
    <h2 class="text-center mt-3"> Login</h2>
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="includes/login.inc.php" method="POST">
       <div class="form-group">
        <label for="exampleInputEmail1">Email or Username</label>
        <input type="text" class="form-control" name="uid" placeholder="Email/Username">
       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pwd" placeholder=" Password">
       </div>
       <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Login Up</button>
       </div>
       </form>
       </div>
     </div>
   </div>


<?php
  include_once 'partials/footer.php'
?>
