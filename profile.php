<?php
  session_start();
  // print_r($_SESSION);
  if(!isset($_SESSION['id'])) {
    header("location: signIn.php");
    exit();
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/display&profile.css">
    <script src="js/js styling/profileStyle.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Profile</title>
  </head>
  <body>
    
    <!-- IDEA : header & navbar  -->

    <?php
      include 'includes/navBar.php';
    ?>

    <!-- IDEA : main profile  -->

    <div class="wrapper">
      <div class="wrapper-child">
        <div class="left">
        <img src="./images/profile.jpg" alt="user" width="150" class="rounded mb-4 mx-auto">
        <h4 class="left-h4">
          <?php 
            echo $_SESSION['fname'];
          ?>
        </h4>
        <p class="left-para">User</p>
        </div>
        <div class="right">
          <div class="info mb-5">
            <h3 class="right-h3">Information</h3>
            <div class="info_data">
              <div class="data">
                <h4 class="data_title">Email</h4>
                <p class="data_answer">
                  <?php 
                    echo $_SESSION['email'] 
                  ?>
                </p>
              </div>
            </div>
            <div class="info_data">
              <div class="data">
                <h4 class="data_title">SignUp Date</h4>
                <p class="data_answer">
                  <?php 
                    echo $_SESSION['signUp_date'] 
                  ?>
                </p>
              </div>
              <div class="data">
                <h4 class="data_title">Last LogIn</h4>
                <p class="data_answer">
                  <?php 
                    echo $_SESSION['last_login'] 
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </body>
</html>