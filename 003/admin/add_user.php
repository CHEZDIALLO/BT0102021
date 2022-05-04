<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<?php
require('../connexion.php');
if (isset($_REQUEST['username'], $_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['adresse'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur 
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
// récupérer le nom 
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 
  // récupérer le prenom
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer l'adresse
  $adresse = stripslashes($_REQUEST['adresse']);
  $adresse = mysqli_real_escape_string($conn, $adresse); 
  // récupérer l'email 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe 
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['type']);
  $type = mysqli_real_escape_string($conn, $type);
  
    $query = "INSERT into `utilisateurs` (nom_utilisateur, nom, prenom, adresse, email, type, mot_de_passe)
          VALUES ('$username', '$nom', '$prenom', '$adresse','$email', '$type', '".hash('sha256', $password)."')";
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='add_user.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">

    <h1 class="box-title">Ajout utilisateur</h1>
  <input type="text" class="box-input" name="username" 
  placeholder="Nom d'utilisateur" required />

  <input type="text" class="box-input" name="email" 
  placeholder="Email" required />

  <input type="text" class="box-input" name="nom" 
  placeholder="Nom" required />

  <input type="text" class="box-input" name="prenom" 
  placeholder="Prenom" required />

  
    <input type="text" class="box-input" name="adresse" 
  placeholder="Adresse" required />
  
  <div>
      <select class="box-input" name="type" id="type" >
        <option value="" disabled selected>Type</option>
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateurs</option>
      </select>
  </div>
  
    <input type="password" class="box-input" name="password" 
  placeholder="Mot de passe" required />
  <input type="submit" name="submit" value="+ Ajouter" class="box-button" />
</form>
<?php } ?>
</body>
</html>