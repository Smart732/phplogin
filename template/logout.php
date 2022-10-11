<?php
session_start();
if(isset($_GET["id"])) {
   session_unset();
   session_destroy();
}
if(!isset($_SESSION["email"])) return header("Location:index.php");


?>