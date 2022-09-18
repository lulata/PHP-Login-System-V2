<?php
 include_once 'partials/header.php'
 ?>
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2">
   <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
          echo "
            <div class='alert alert-success mt-3' role='alert'>
            <h4 class='alert-heading'>Well done!</h4>
            <hr>
            <p class='text-center'>You successfuly created an account.</p>
            </div>";
        }else if ($_GET["error"] == "emptyinput") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>You must fill in all fields.</p>
          </div>";
        }else if ($_GET["error"] == "invalidUid") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Enter a valid username</p>
          </div>";
        }else if ($_GET["error"] == "invalidEmail") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Enter a valid email.</p>
          </div>";
        }else if ($_GET["error"] == "passwordsdontmatch") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Passwords Don't Match.</p>
          </div>";
        }else if ($_GET["error"] == "stmtfailed") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Something went wrong. Try Again!</p>
          </div>";
        }else if ($_GET["error"] == "usernametaken") {
          echo "
          <div class='alert alert-danger mt-3' role='alert'>
          <h4 class='alert-heading'>Opps!</h4>
          <hr>
          <p class='text-center'>Username Already Taken. Try Again!</p>
          </div>";
        }
      }

    ?>
  </div>
</div>
    <h2 class="text-center mt-3"> Sign Up</h2>
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="includes/signup.inc.php" method="POST">
        <div class="form-group">
          <label for="exampleInputPassword1">Full Name</label>
          <input type="text" class="form-control" name="name" placeholder="Full Name">
        </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" class="form-control" name="uid" placeholder="User Name">
       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pwd" placeholder=" Password">
       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" name="pwdrepeat" placeholder="Confirm  Password">
       </div>
       <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Sing Up</button>
       </div>
       </form>
       </div>
     </div>
   </div>


<?php
  include_once 'partials/footer.php'
?>
