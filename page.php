<?php

$query = $_GET['slug'];
$name = str_replace("-"," ",$query);
 
$domain = $_SERVER['HTTP_HOST'];


$title = "$name";
$description = "$name";
include 'header.php';
?>
<div class="container shadow p-5 my-4">
<h1 class="mt-4 px-2 text-center h2"><?=ucwords($name)?></h1>
<hr>
 

<?php


switch ($query) {
  case "terms-and-conditions":
    include'pages/tos.php';
    break;
  case "privacy":
   include'pages/pp.php';
    break;
  case "dmca":
    include'pages/dmca.php';
    break;

     case "contact-us":
    include'pages/contact.php';
    break;


  default:
    echo "Error!";
}
?>

 
</div>

<?php
include 'footer.php';
?>