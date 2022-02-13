<?php
 $conn = mysqli_connect('localhost','root','','university');
 if (!$conn) {
     die("Échec de la connexion : " . mysqli_connect_error());
 }
?>