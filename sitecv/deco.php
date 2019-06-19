<?php session_start();

session_destroy();
echo "<p> Vous avez été déconnecté";
header("Location:index.php?mail");
?>