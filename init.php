<?php
// Routes
   $tpl  = 'includes/templates/';  // templates Directory
   $css  = 'css/';          // Css Directory
   $js   = 'js/';           // Js Directory
   ?>

<?php
  //  include  $lang . 'detect_language_class.php';
    include $tpl  . 'header.php';
?>

   <?php
      // includes navbar on all pages expect the one with $noNavbar vairable
   // comprend la barre de navigation sur toutes les pages sauf celle avec la variable $ noNavbar = FR
      if (!isset($noNavbar)){ include $tpl . 'navbar.php'; }
   ?>