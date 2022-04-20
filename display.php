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
    <script src="js/js styling/displayStyle.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dsiplay Contacts</title>
  </head>
  <body>

    <!-- IDEA : header & navbar  -->

    <?php

      include 'includes/navBar.php';

    ?>

    <!-- IDEA : main section  -->

    <section class="main-section">
      <div class="addSection">
        <h1 class="top-h1">Contacts List</h1>
        <button class="top-button" type="button" id="add-btn">add contact</button>
        <div class="absolute inset-0 hidden justify-center items-center" id="model">
          <div class="bg-gray-700 w-2/4 py-2 px-3 rounded shadow-xl text-gray-300">
              <div class="flex justify-between items-center">
                  <h4 class="text-lg px-4 pt-4 font-bold">Add new contact</h4>
                  <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
              </div>
              <form action="includes/add.php" method="post" class="mx-5">
                  <input type="hidden" name="id" id="userID" value="<?php echo $_SESSION['id'] ?>">
                  <div>
                      <label for="fname" class="block mt-8 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Full Name</label>
                      <input type="text" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                      <label for="email" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Email Adresse</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                      <label for="phone" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">Phone Number</label>
                      <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                      <label for="city" class="block mt-4 mb-3 text-sm font-medium text-gray-300 dark:text-gray-300">City</label>
                      <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <div>
                      <input type="submit" name="add" id="add" value="Add Contact" class="my-4 text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  </div>
              </form>
          </div>
        </div>
      </div>
      <?php

        include 'classes/contact.php';
        $userID = $_SESSION['id'];
        $contact = new Contact();
        $c = $contact -> showContacts($userID);
        // print_r($c);
        $x = 1;
      ?>
      <div class="my-bottom">
        <table class="w-full">
          <thead class="border-b w-full">
            <tr>
              <th scope="col" class="th-1">
                #
              </th>
              <th scope="col" class="ths">
                Full Name
              </th>
              <th scope="col" class="ths">
                Email Adresse
              </th>
              <th scope="col" class="ths">
                Phone Number
              </th>
              <th scope="col" class="ths">
                City
              </th>
              <th scope="col" class="last-th">
                Action
              </th>
            </tr>
          </thead>
          <?php foreach($c as $s) { ?>
            <tbody>
              <tr>
                <td class="td-1"><?php echo $x++ ?></td>
                <td class="tds">
                  <?php echo $s['contact_name'] ?>
                </td>
                <td class="tds">
                  <?php echo $s['contact_email'] ?>
                </td>
                <td class="tds">
                  <?php echo $s['contact_phone'] ?>
                </td>
                <td class="tds">
                  <?php echo $s['contact_city'] ?>
                </td>
                <td class="tdLinks">
                  <a href="includes/update.php?<?php echo 'id=' . $s['contactID']?>" class="ediel">Edit</a>
                  <a href="includes/delete.php?<?php echo 'id=' . $s['contactID']?>" class="ediel">Delete</a>
                </td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
    </section>
    <script>
      window.addEventListener('DOMContentLoaded', () =>{
        const model = document.querySelector('#model')
        const addBtn = document.querySelector('#add-btn')
        const closeBtn = document.querySelector('#close-modal')

        const toggleModal = () => {
            model.classList.toggle('hidden')
            model.classList.toggle('flex')
        }

        addBtn.addEventListener('click', toggleModal)

        closeBtn.addEventListener('click', toggleModal)
      })
    </script>
  </body>
</html>