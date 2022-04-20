<?php
  session_start();
  // print_r($_SESSION);
  if(!isset($_SESSION['id'])) {
    header("location: signIn.php");
    exit();
  }

  include '../classes/contact.php';

  $id = $_GET['id'];
  $contact = new Contact();
  $data = $contact -> findContact($id);
  // print_r($data);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/display&profile.css">
        <script src="../js/update.js" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Update Contact</title>
    </head>
    <body>

    <!-- IDEA : main section  -->
    
        <section class="flex justify-center items-center h-screen w-full">
            <form class="sm:w-2/4 w-full mx-7" method="post" id="updateForm">
                <input type="hidden" name="id" id="userID" value="<?php echo $data[0]['contactID'] ?>">
                <div>
                    <label for="fname" class="block mt-8 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Full Name</label>
                    <input type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $data[0]['contact_name'] ?>">
                    <div id="fnameErrors" class="block text-red-300 font-mono mb-4"></div>
                </div>
                <div>
                    <label for="email" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Email Adresse</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $data[0]['contact_email'] ?>">
                    <div id="emailErrors" class="block text-red-300 font-mono mb-4"></div>
                </div>
                <div>
                    <label for="phone" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $data[0]['contact_phone'] ?>">
                    <div id="phoneErrors" class="block text-red-300 font-mono mb-4"></div>
                </div>
                <div>
                    <label for="city" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">City</label>
                    <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $data[0]['contact_city'] ?>">
                    <div id="cityErrors" class="block text-red-300 font-mono mb-4"></div>
                </div>      
                <button type="submit" name="update" class="my-4 text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Contact</button>
            </form>

            <?php

                if (isset($_POST['update'])) {

                    $name = $_POST['fname'];  
                    $email = $_POST['email'];  
                    $phone = $_POST['phone'];  
                    $city = $_POST['city'];  
                    $contactID = $_POST['id'];
                        
                    $add = new Contact();
                    $add -> updateContact($name, $email, $phone, $city, $contactID);
                    
                    echo '<script>window.location.href="../display.php"</script>';

                }

            ?>

        </section>
    </body>
</html>