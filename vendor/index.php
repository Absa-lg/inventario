<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header("location:../login.php");
}
echo"<script> location.href='../administrador.php' </script>";
?>