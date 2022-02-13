
<?php
session_start();

if (isset($_POST['signin'])){
include_once ('base_donne_conx.php') ;
 $email=$_POST['email'];
 $pwd=$_POST['pw'] ;
  $requete ="SELECT * FROM signin WHERE EMAIL='$email' AND MOTDEPASS='$pwd'";
  $result= mysqli_query($conn ,$requete) ;
  $login = mysqli_fetch_array($result,MYSQLI_NUM);
  if (!$login){
   echo"vous etes n'est pas encore inscrit " ;
  }
  else {
   $_SESSION['email']=$email;
   $_SESSION['pwd']=$pwd;
    header("location:dashboard.php");
 }  
} 
?>
