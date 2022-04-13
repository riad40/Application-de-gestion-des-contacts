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
        <button class="top-button">add contact</button>
      </div>
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
          <tbody>
            <tr>
              <td class="td-1">1</td>
              <td class="tds">
                Jacob
              </td>
              <td class="tds">
                Thornton
              </td>
              <td class="tds">
                @fat
              </td>
              <td class="tds">
                DC
              </td>
              <td class="tdLinks">
                <div class="ediel">Edit</div>
                <div class="ediel">Delete</div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td class="td-1">1</td>
              <td class="tds">
                Jacob
              </td>
              <td class="tds">
                Thornton
              </td>
              <td class="tds">
                @fat
              </td>
              <td class="tds">
                DC
              </td>
              <td class="tdLinks">
                <div class="ediel">Edit</div>
                <div class="ediel">Delete</div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td class="td-1">1</td>
              <td class="tds">
                Jacob
              </td>
              <td class="tds">
                Thornton
              </td>
              <td class="tds">
                @fat
              </td>
              <td class="tds">
                DC
              </td>
              <td class="tdLinks">
                <div class="ediel">Edit</div>
                <div class="ediel">Delete</div>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td class="td-1">1</td>
              <td class="tds">
                Jacob
              </td>
              <td class="tds">
                Thornton
              </td>
              <td class="tds">
                @fat
              </td>
              <td class="tds">
                DC
              </td>
              <td class="tdLinks">
                <div class="ediel">Edit</div>
                <div class="ediel">Delete</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>