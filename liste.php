<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque</title>
    <link href="biblio.css" rel="stylesheet">
        <div class="head">
            <a href="new.php">Ajouter</a>
            
        </div>
</head>
<body>
    
    <h1>Bibliothèque</h1>
    <div class="table">
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
        $sql='SELECT * FROM livre';

        $biblio = $dbh->prepare('SELECT * FROM livre');

        $biblio->execute();
        $livre = $biblio->fetchAll();
        foreach ($livre as $livres) {
            ?><div>
            <?php echo $livres['id']; ?><br/>
            <?php echo $livres['titre']; ?><br/>
            <?php echo $livres['sypnopsis']; ?></br>
        </div>
            <?php
            }
            ?>
    </div>



</body>
</html>