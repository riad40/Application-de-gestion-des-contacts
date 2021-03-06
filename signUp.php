<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login&signup.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/signup.js" defer></script>
    <title>Sign Up</title>
    
  </head>
  <body>

    <div class="flex justify-center items-center h-screen">
      <div class="login px-7 py-10">
        <h1 class="block py-4 text-white text-2xl font-400 text-center">Sign Up</h1>

        <form action="includes/register.php" method="post" id="signupForm">

          <label for="fname" class="font-medium">Enter Your full name</label>
          <input type="text" name="fname" id="fname" placeholder="Jhon Doe" class="block mt-4 mb-1 p-3 w-full">
          <div id="fnameErrors" class="text-red-300 font-mono mb-4"></div>

          <label for="email" class="font-medium">Enter Your Email</label>
          <input type="email" name="email" id="email" placeholder="example@gmail.com" class="block mt-4 mb-1 p-3 w-full">
          <div id="emailErrors" class="text-red-300 font-mono mb-4"></div>

          <label for="password" class="font-medium">Enter Your Password</label>
          <input type="password" name="pwd" id="pwd" placeholder="example123" class="block mt-4 mb-1 p-3 w-full">
          <div id="pwdErrors" class="text-red-300 font-mono mb-4"></div>

          <label for="Rpassword" class="font-medium">Confirm Your Password</label>
          <input type="password" name="Rpwd" id="Rpwd" placeholder="example123" class="block mt-4 mb-1 p-3 w-full">
          <div id="RpwdErrors" class="text-red-300 font-mono mb-4"></div>

          <input type="submit" name="register" value="Sign Up" class="block my-5 text-dark font-medium cursor-pointer">
        </form>
        <?php
          if (isset($_GET["error"])) {

            if ($_GET["error"] == "emptyInputs") {
              echo '<div class="text-red-300 text-center font-mono">Fill all the fields</div>';
            }
            else if ($_GET["error"] == "invalidEmail") {
              echo '<div class="text-red-300 text-center font-mono">Invalid email format</div>';
            }
            else if ($_GET["error"] == "passwordsDosentMache") {
              echo '<div class="text-red-300 text-center font-mono">Passwords must be the same</div>';
            }
            else if ($_GET["error"] == "emailAlreadyExist") {
              echo '<div class="text-red-300 text-center font-mono">This email is already exist</div>';
            }
          }
        ?>
        <ul class="flex items-center w-full py-3">
          <li class="child1"></li>
          <li class="child2 font-medium">or</li>
          <li class="child3"></li>
        </ul> 

        <div class="flex flex-col items-center py-3 options">
          <span>Already have an account ?</span>
          <a href="signIn.php" class="text-xl">sign in</a>
        </div>

      </div>
    </div>
  </body>
</html>