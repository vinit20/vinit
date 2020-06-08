<h1 align="center">
<?php

session_start();

if(isset($_SESSION["Uname"]))
   echo " Welcome ". $_SESSION["Uname"];

   else
   echo "You are not login";
 ?>
</h1>
