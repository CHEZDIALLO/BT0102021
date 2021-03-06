<?php
// On démarre une session
session_start();

// Est-ce que l'id existe et n'est pas vide dans l'URL
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

    // On nettoie l'id envoyé
    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM `utilisateurs` WHERE `id` = :id;';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On "accroche" les paramètre (id)
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On récupère l'utilisateur
    $utilisateur = $query->fetch();

    // On vérifie si l'utilisateur existe
    if(!$utilisateur){
        $_SESSION['erreur'] = "Cet utilisateur n'existe pas";
        header('Location: index.php');
    }
}else{
    $_SESSION['erreur'] = "URL invalide";
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'utilisateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1>Détails de l'utilisateur <?= $utilisateur['Nom_utilisateur'] ?></h1>
                <p>ID : <?= $utilisateur['id'] ?></p>
                <p>Nom : <?= $utilisateur['Nom'] ?></p>
                <p>Prenom: <?= $utilisateur['Prenom'] ?></p>
                <p>Email : <?= $utilisateur['Email'] ?></p>
                <p>Adresse: <?= $utilisateur['Adresse'] ?></p>
                <p>Nom_utilisateur : <?= $utilisateur['Nom_utilisateur'] ?></p>
                <p><a href="pagination1.php">Retour</a> <a href="edit.php?id=<?= $utilisateur['id'] ?>"></a></p>
            </section>
        </div>
    </main>
</body>
</html>