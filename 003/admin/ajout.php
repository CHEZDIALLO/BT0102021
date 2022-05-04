<?php
require_once('connexion.php');

if(isset($_POST)){
    if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['email'])){
            $username = strip_tags($_POST['username']);
            $email= strip_tags($_POST['email']);
            $password= strip_tags($_POST['pass1']);
            $type= strip_tags($_POST['type']);
        
            $sql = "INSERT INTO `utilisateurs` (`nom_utilisateur`,`email`, `type`, `mot_de_passe`) VALUES (:nom_utilisateur,:email, :type, :Pass1);";

            $query = $db->prepare($sql);

            $query->bindValue(':nom_utilisateur', $username, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':Pass1', $password, PDO::PARAM_INT);
            $query->bindValue(':type', $type, PDO::PARAM_INT);

           // $query->execute();
            $_SESSION['message'] = "Utilisateur ajouté avec succès !";
            header('Location: index.php');
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="Nom">Nom utilisateur</label>
    <input type="text" name="username" id="nom">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="Password">Mot de passe</label>
    <input type="password" name="pass1" id="password">
    <label for="Type">Type</label>
    <input type="password" name="type" id="password">
    <button>Enregistrer</button>
</form>
</body>
</html>