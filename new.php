<?php
 $servername = 'localhost:3306';
 $username = 'nils';
 $password = 'nils';
 try{ 

 $dsn = 'mysql:dbname=bibliotheque;host='.$servername;
 $user = $username;
 $password = $password;
 $dbh = new PDO($dsn, $user, $password);    
     }
 catch(PDOException $e){
 echo "Erreurxx : " . $e->getMessage();
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="head2">
     <h1>Formulaire</h1>
    </div>
</head>
<body>
<form action="" method="post" class="formulaire">
  <div class="Titre">
    <label for="name">Entrer le titre : </label>
    <input type="text" name="titre" id="titre" required>
  </div>
  <div class="a">
    <label for="synopsis">Entrer un sypnopsis : </label>
    <input type="text" name="sypnopsis" id="sypnopsis" required>
  </div>
  <div class="e">
    <input type="submit" value="envoyer" name="envoyer">
  </div>
</form>

  
<?php

if( isset($_POST['envoyer'])){

    $req = $dbh->prepare("INSERT INTO livre (titre, sypnopsis) VALUES (:titre, :sypnopsis)");
    $req->execute(array(
           "titre" => $_POST['titre'],
           "sypnopsis" => $_POST['sypnopsis'],
           
            ));

}
$

?>
$req = $PDO->prepare("INSERT INTO users (login, password, email, infos, roles_id) VALUES (:login, :password, :email, :infos, '2')");
    $req->execute(array(
            "login" => $login, 
            "password" => $password,
            "email" => $email,
            "infos" => $infos
            ));
</body>
</html>