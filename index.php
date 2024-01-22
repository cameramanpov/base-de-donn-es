<?php
            $servername ="slorp";
            $username ="sql11678789";
            $password ="KxVyAnVWTv";
            $dbname ="sql11678789"

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
                $conn->setAttribute(PDO::ATTR_ERMODE, PDO::ERMODE_EXCEPTION);
                //echo "la connectiona été bien établie";
            }
            catch(PDOException $e){
                echo "la connection a échoué:" . $e->getmessage();
            }

            if(isset($_POST['envoyer']))
            {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $mot_de_passe = $_POST['mot_de_passe'];

                $sql = "INSERT INTO `user` (`nom`, `prenom`, `mot_de_passe`) VALUES (:nom, :prenom, :mot)";
                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':mot_de_passe', $mot_de_passe);
                    $stmt->execute():
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Slorpy - Éditeur de Texte</title>
</head>
<body>
    <form action="" methode="post">
        
    <label for="">nom :</label>
    <input type="text" name="nom">
    <label for="">prenom :</label>
    <input type="text" name="prenom">
    <label for="">mot_de_passe :</label>
    <input type="text" name="mot_de_passe">
    <input type="submit" value="envoyer" name="envoyer">

    </from>
</body>