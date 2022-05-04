<?php

    require ('db.php');
    require ('header.php');


    $id = $_GET['id'];

    $sql = 'SELECT * FROM client WHERE id=:id';

    $preparation = $connexion->prepare($sql);

    ?>

<?php if ($preparation->execute([':id' => $id])): 

$customer = $preparation->fetchAll(PDO::FETCH_OBJ);


?> 


<div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Tous les clients</h2>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Patente</th>
                        <th>Téléphone</th>
                    </tr>
                    <?php foreach($customer as $person): ?>
                    <tr>
                        <td><?=$person->id;  ?></td> 
                        <td><?=$person->nom;  ?></td>
                        <td><?=$person->prenom;  ?></td>
                        <td><?=$person->patente;  ?></td>
                        <td><?=$person->telephone;  ?></td>
                    </tr>

                    <?php endforeach; ?>


                </table>

            </div>

        </div>
    </div>

    <?php endif; ?>

















<?php require('footer.php'); ?>