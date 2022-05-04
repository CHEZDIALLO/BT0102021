<?php 
    require('db.php');

    $sql = 'SELECT * FROM client';
    
    $preparation = $connexion->prepare($sql);

    $preparation->execute();

    $customer = $preparation->fetchAll(PDO::FETCH_OBJ);


    require('header.php');
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
                        <th>Action</th>
                    </tr>
                    <?php foreach($customer as $person): ?>
                    <tr>
                        <td><?=$person->id;  ?></td>
                        <td><?=$person->nom;  ?></td>
                        <td><?=$person->prenom;  ?></td>
                        <td><?=$person->patente;  ?></td>
                        <td><?=$person->telephone;  ?></td>
                        <td>
                            <a href="modifier.php?id=<?= $person->id;?>" class=""><i class="fa fa-edit" style="font-size:48px;color:blue"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimer.php?id=<?= $person->id;?>" class=""><i class="fa fa-trash-o" style="font-size:48px;color:red"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="details.php?id=<?= $person->id;?>" class=""><i class="fa fa-eye" style="font-size:48px;color:blue"></i></a>

                        </td>
                    </tr>

                    <?php endforeach; ?>


                </table>

            </div>

        </div>
    </div>

















<?php require('footer.php'); ?>