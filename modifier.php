
  <?php
  //affichage des anciens donnees
    session_start();
    $conn = mysqli_connect('localhost','root','','university');
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
    $email=$_SESSION["email"];
$requete="SELECT CNE,FIRSTNAME,LASTNAME,EMAIL,CITY FROM signup WHERE  EMAIL='$email'";
$requete2="SELECT * FROM signin WHERE  EMAIL='$email'";
$sql3=mysqli_query($conn,$requete); 
$sql4=mysqli_query($conn,$requete2); 

$row = mysqli_fetch_array($sql3);
$row1=mysqli_fetch_array($sql4);
//mise à jour des donnees
if  (isset($_POST['update']))
{

     $FIRST = $_POST['prenom'] ;
     $LAST = $_POST['nom'] ;
     $CNE = $row["CNE"] ;//cne est un cle primaire 
     $EMAIL = $_POST['email'] ;
     $CITY = $_POST['ville'] ;
     $MDP = $_POST['newmdp'] ;
     $STAT = false ;
     $PHOTO = 'image/'.$_FILES['image']['name'];
    
     $sql1= " UPDATE signup SET FIRSTNAME='$FIRST',LASTNAME='$LAST',EMAIL='$EMAIL',CITY='$CITY',PHOTO='$PHOTO'WHERE CNE='$CNE' ";
     $sql2= "UPDATE signin SET EMAIL='$EMAIL',MOTDEPASS=$MDP,STAT=' $STAT'WHERE CNE='$CNE'";
    (mysqli_query($conn, $sql1)) ;

    (mysqli_query($conn, $sql2)) ;
    header("location:dashboard.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet"  href="modifier.css">
</head>
<body>
<form   class="form" action = "modifier.php"   method ="post">
<h2> <span>Modification</span></h2>
    <p type="Prénom:"><input name = "prenom" type = "text" value = <?php echo $row['FIRSTNAME']; ?> ></p>
    <p type="Nom:"><input name = "nom" type = "text" value =<?php echo $row["LASTNAME"]; ?> ></p>
    <p type="Email:"><input name = "email" type = "email" value =<?php echo $row["EMAIL"]; ?> ></p>
    <p type="Ville:"><input name = "ville" type = "text" value = <?php echo $row["CITY"]; ?> ></p>
    <p type="New mot de pass:"><input name = "newmdp" type = "password" value = <?php echo  $row1["MOTDEPASS"] ; ?> ></p>
    <p type="Photo:"><input type="file"  accept="image" name="image" > </p>
    <p ><input name = "update" type = "submit" class="submit1" value=" UPDATE" ></p>
    

</form>
</body>
</html>
