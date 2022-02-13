
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style_sign_up.css">
    
</head>
<body>

<div> 
        <img src="signin1.jpg" >
    </div>   
 <div class="form1">
 <h1><span>Ajouter un élève</span> </h1>
   <p> Veuillez remplir le formulaire ci-dessous </p>
   
   <form action = "enregistrement.php"   method ="post">
    <input name = "prenom" type = "text" placeholder = "prenom" >
    <input name = "nom" type = "text" placeholder = "nom" >
    <input name = "cne" type = "number" placeholder = "cne" >
    <input name = "email" type = "email" placeholder = "email" >
    <input name = "ville" type = "text" placeholder = "ville" >
    <input name = "newmdp" type = "password" placeholder = "password" >
    <input type="file"  accept="image" name="image" value="picture" >
    <input name = "save" type = "submit" class="submit1" value="ajouter" >
    

</form>

 </div>
</body>
</html>
