<?php
 include_once 'partials/header.php'
 ?>

    <div class="container">

      <?php
        if (isset($_SESSION["useruid"])) {
          echo "
          <div class='card text-center mt-5'>
            <div class='card-header text-white bg-dark'>
                Hello And Welcome You Are Loged In ". $_SESSION["useruid"] . "
              </div>
              <div class='card-body text-white bg-dark'>
                <h5 class='card-title '>Version 2</h5>
                <p class='card-text'>We are creating this to be better then the first login version.</p>
              </div>
            </div>
          </div>";
        }else {
          echo "
          <div class='card text-center mt-5'>
            <div class='card-header'>
                Hello And Welcome Please Log In
              </div>
              <div class='card-body'>
                <h5 class='card-title'>Version 2</h5>
                <p class='card-text'>We are creating this to be better then the first login version.</p>
              </div>
            </div>
          </div>";

        }
       ?>


        <div class="container mt-5">
          <div class="row">
          <div class="col-sm-6">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
<?php
  include_once 'partials/footer.php'
?>
