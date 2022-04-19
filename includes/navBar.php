<?php
    $name;
    $link;
    if (basename($_SERVER['REQUEST_URI']) == 'profile.php') {
        $name = 'Contacts List';
        $link = 'display.php';
    }
    if (basename($_SERVER['REQUEST_URI']) == 'display.php') {
        $name = 'My Profile';
        $link = 'profile.php';
    } 
    // echo $link;
?>

<header class="w-full bg-gray-800">
      <nav class="flex flex-col md:flex-row justify-between items-center w-full xl:w-3/4 mx-auto py-5 md:py-0 px-6 xl:px-0">
          <a href="index.php" class="brand-logo">Contact Management</a>
          <div class="flex items-center my-4 md:my-4"> 
            <a href="<?php echo $link; ?>" class="mx-3 nav-links"><?php echo $name; ?></a>
            <a href="includes/logout.php" class="mx-3 nav-links">Log out</a>
          </div>
      </nav>
</header> 