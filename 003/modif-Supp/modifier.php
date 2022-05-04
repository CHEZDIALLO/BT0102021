<?php  require('connexion.php');  ?>

<?php
$id = $_GET['id'];

$sql = 'SELECT * FROM utilisateurs WHERE id=:id';
$preparation = $connexion->prepare($sql);
$preparation->execute([':id' => $id]);
$person = $preparation->fetch(PDO::FETCH_OBJ);

?>


<?php

if (isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Adresse']) && isset($_POST['Nom_utilisateur'])) {
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];
    $Adresse = $_POST['Adresse'];
    $Nom_utilisateur = $_POST['Nom_utilisateur'];

        $sql = 'UPDATE utilisateurs SET Nom=:Nom, Prenom=:Prenom, Email=:Email, Adresse=:Adresse, Nom_utilisateur=:Nom_utilisateur  WHERE id=:id';

        $preparation = $connexion->prepare($sql);

        if ($preparation->execute([':Nom' => $Nom, ':Prenom' => $Prenom, ':Email' => $Email, ':Adresse' => $Adresse, ':Nom_utilisateur' => $Nom_utilisateur, ':id' => $id])) {
            //header("location: index.php");
        }

}
    


?>








<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Mettre à jour utilisateur</h2>

        </div>
        <div class="card-body">
            <?php  if (!empty($message)): ?>

                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="Nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="Prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="patente">Email</label>
                    <input type="text" name="Email" id="patente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="patente">Adresse</label>
                    <input type="text" name="Adresse" id="patente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Nom utilisateur</label>
                    <input type="text" name="Nom_utilisateur" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Enrégister</button>
                </div>
            </form>
            

        </div>
    </div>

</div>














<?php require('footer.php'); ?>