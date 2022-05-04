<?php 
    require('db.php');

        $message = "";

        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['patente']) && isset($_POST['phone'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $patente = $_POST['patente'];
            $phone = $_POST['phone'];

                    $sql = 'INSERT INTO client (nom, prenom, patente, telephone) VALUES (:nom, :prenom, :patente, :telephone)';

                    $preparation = $connexion->prepare($sql);

                        if ($preparation->execute([':nom' => $nom, ':prenom' => $prenom, ':patente' => $patente, ':telephone' => $phone])) {
                            $message = "un élément a été inserré avec succès!!! <br>";
                        }
        }


    require('header.php');
?>



<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Inserer un client</h2>

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
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="patente">Patente</label>
                    <input type="text" name="patente" id="patente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Enrégister</button>
                </div>
            </form>
            

        </div>
    </div>

</div>














<?php require('footer.php'); ?>