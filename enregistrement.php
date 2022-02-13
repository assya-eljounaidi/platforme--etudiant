<?php 

if  (isset($_POST['save']))
{
    include_once ('base_donne_conx.php');
     $FIRST = $_POST['prenom'] ;
     $LAST = $_POST['nom'] ;
     $CNE = $_POST['cne'] ;
     $EMAIL = $_POST['email'] ;
     $CITY = $_POST['ville'] ;
     $MDP = $_POST['newmdp'] ;
     $STAT = false ;
     $PHOTO = 'image/'.$_FILES['image']['name'] ;
    
     $sql1= "INSERT INTO signup (CNE,FIRSTNAME,LASTNAME,EMAIL,CITY,photo_path) VALUES ('$CNE','$FIRST','$LAST','$EMAIL','$CITY','$PHOTO')";
     $sql2= "INSERT INTO signin (EMAIL,MOTDEPASS,CNE,STAT) VALUES ('$EMAIL','$MDP','$CNE','$STAT')";
    (mysqli_query($conn, $sql1)) ;

    (mysqli_query($conn, $sql2)) ;
    header("location:index.html");

}


?>