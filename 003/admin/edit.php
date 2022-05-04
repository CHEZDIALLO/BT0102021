<?php
// On démarre une session
session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['Nom']) && !empty($_POST['Nom'])
    && isset($_POST['Prenom']) && !empty($_POST['Prenom'])
    && isset($_POST['Email']) && !empty($_POST['Email'])
    && isset($_POST['Adresse'])  && !empty($_POST['Adresse'])
    && isset($_POST['Email'])  && !empty($_POST['Email'])
    && isset($_POST['Nom_utilisateur'])  && !empty($_POST['Nom_utilisateur'])){
        // On inclut la connexion à la base
        require_once('connect.php');

        // On nettoie les données envoyées
        $id = strip_tags($_POST['id']);
        $Nom = strip_tags($_POST['Nom']);
        $Prenom = strip_tags($_POST['Prenom']);
        $Email = strip_tags($_POST['Email']);
        $Adresse = strip_tags($_POST['Adresse']);
        $Nom_utilisateur = strip_tags($_POST['Nom_utilisateur']);

        $sql = 'UPDATE `utilisateurs` SET `Nom`=:Nom, `Prenom`=:Prenom, `Email`=:Email, `Adresse`=:Adresse, `Nom_utilisateur`=:Nom_utilisateur WHERE `id`=:id;';

        $query = $db->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':Nom', $Nom, PDO::PARAM_STR);
        $query->bindValue(':Prenom', $Prenom, PDO::PARAM_STR);
        $query->bindValue(':Email', $Email, PDO::PARAM_STR);
        $query->bindValue(':Adresse', $Adresse, PDO::PARAM_STR);
        $query->bindValue(':Nom_utilisateur', $Nom_utilisateur, PDO::PARAM_STR);

        $query->execute();

        $_SESSION['message'] = "Utilisateur modifié avec succès";
        require_once('close.php');

        header('Location: pagination1.php');
    }else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

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
        $_SESSION['erreur'] = "Cet id n'existe pas";
        header('Location: pagination1.php');
    }
}else{
    $_SESSION['erreur'] = "URL invalide";
    header('Location: pagination1.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un utilisateur</title>

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
                <h1>Modifier un utilisateur</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" id="Nom" name="Nom" class="form-control" value="<?= $utilisateur['Nom']?>">
                    </div>
                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" id="Prenom" name="Prenom" class="form-control" value="<?= $utilisateur['Prenom']?>">

                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" name="Email" class="form-control" value="<?= $utilisateur['Email']?>">
                    </div>
                    <div class="form-group">
                        <label for="Adresse">Adresse</label>
                        <input type="text" id="Adresse" name="Adresse" class="form-control" value="<?= $utilisateur['Adresse']?>">
                    </div>
                    <div class="form-group">
                        <label for="Nom_utilisateur">Nom_utilisateur</label>
                        <input type="text" id="Nom_utilisateur" name="Nom_utilisateur" class="form-control" value="<?= $utilisateur['Nom_utilisateur']?>">
                    </div>
                    <input type="hidden" value="<?= $utilisateur['id']?>" name="id">
                    <button class="btn btn-primary">Enregistrer</button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>