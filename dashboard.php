
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="dashboard.css" rel="stylesheet">
   <title>dashboard</title>
</head>
<body>
   
</body>
</html>
<?php
session_start();

include_once('base_donne_conx.php');

 $requete2 ="SELECT CNE, FIRSTNAME, LASTNAME, EMAIL, CITY , photo_path FROM signup";
 $result2= mysqli_query($conn ,$requete2) ;
     
     echo"<ul > ";
     echo"<li><a href='deconnexion.php' >déconexion</a></li>";  
     echo"<li><a href='add.php' >ajouter un eleve</a></li>";  
     echo"<li><a href='modifier.php' >modifier</a></li>"; 
     echo"</ul> ";
    echo"<h1 style='text-align:center'>la liste des étudiants </h1>"; 

  
     
echo"<table>";
echo"<th>CNE</th>";
echo"<th>Prénom</th>";
echo"<th>Nom</th>";
echo"<th>Email</th>";
echo"<th>ville</th>";
echo"<th>PHOTO</th>";
foreach($result2 as $key ){
 echo"<tr><td>";
 echo $key['CNE'];
 echo"</td><td>";
 echo $key['FIRSTNAME'];
 echo"</td><td>";
 echo $key['LASTNAME'];
 echo"</td><td>";
 echo $key['EMAIL'];
 echo"</td><td>";
 echo $key['CITY'];
 echo"</td><td>";
 echo "<img src = ".$key["photo_path"]." >" ;
 echo"</td></tr>";

 //CNE,FIRSTNAME,LASTNAME,EMAIL,CITY
}
echo"</table>";

?>