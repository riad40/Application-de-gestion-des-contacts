<!doctype html>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Managemant</title>
  </head>
  <body>

    <!-- IDEA : header & navbar  -->

    <header class="w-full bg-gray-800">
        <nav class="flex flex-col sm:flex-row sm:justify-between items-center w-3/4 mx-auto py-5">
          <a href="index.php" class="brand-logo">Contact Management</a>
          <a href="signIn.php" class="login my-3 sm:my-0">Log In</a>
        </nav>
    </header>

    <!-- IDEA : main section  -->

    <section class="flex justify-center items-center h-4/5 w-full">
      <div class="w-full mx-8 sm:w-1/2">
        <h1 class="text-white py-5 text-5xl text-center dark:text-white">
          Contact Managemant System
        </h1>
        <p class="text-center text-stone-200 text-xl py-5">
          Welcome ! The contact management system you need to easily create and organize your contacts. you can get every contact details and do some changes on it or delete it. 
          <span class="font-semibold text-white">Get Started now</span>
        </p>
        <div class="flex justify-center">
          <a href="signUp.php" class="login">Get Started</a>
        </div>
      </div>
    </section>

  </body>
</php>