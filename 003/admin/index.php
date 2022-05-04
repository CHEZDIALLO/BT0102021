<?php
// On démarre une session
session_start();

// On inclut la connexion à la base
require_once('connect.php');

$sql = 'SELECT * FROM `utilisateurs`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
            <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
                <?php
                    if(!empty($_SESSION['message'])){
                        echo '<div class="alert alert-success" role="alert">
                                '. $_SESSION['message'].'
                            </div>';
                        $_SESSION['message'] = "";
                    }
                ?>
                <h1>Liste des utilisateurs</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Nom_utilisateur</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        // On boucle sur la variable result
                        foreach($result as $utilisateur){
                        ?>
                            <tr>
                                <td><?= $utilisateur['id'] ?></td>
                                <td><?= $utilisateur['Nom'] ?></td>
                                <td><?= $utilisateur['Prenom'] ?></td>
                                <td><?= $utilisateur['Email'] ?></td>
                                <td><?= $utilisateur['Adresse'] ?></td>
                                <td><?= $utilisateur['Nom_utilisateur'] ?></td>
                                <td><a href="details.php?id=<?= $utilisateur['id'] ?>">Voir</a> <a href="edit.php?id=<?= $utilisateur['id'] ?>">Modifier</a> <a href="delete.php?id=<?= $utilisateur['id'] ?>">Supprimer</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn btn-primary">Ajouter un utilisateur</a>
            </section>
        </div>
    </main>
</body>
</html>