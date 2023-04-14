<?php session_start();
include('../variable.php');    
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\style.css">
       
</head>
<header>
<?php
/*bar de navigation*/
include_once('../header.php');
?>
</header>
<html>
<body>
    <!-- menu de base. -->
  <?php
  include_once('./php/menu.php');
  ?>
   <!-- ********************************** -->
   <!-- centre du contenu de la page -->
   <?php
   include_once('./php/center.php');
   ?>
<!-- ****************************** -->
<?php
include_once('./php/ressource.php');
   ?>
   
</body>
</html>