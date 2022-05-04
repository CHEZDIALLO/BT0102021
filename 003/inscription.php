<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
include('connexion.php');
$message = "";
if (isset($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['email'],$_REQUEST['adresse'])){
  // récupérer le nom d'utilisateur 
  $username = $_POST['username'];
   // récupérer le mot de passe 
   $password = $_POST['password'];
    // récupérer le nom
    $nom = $_POST['nom'];
     // récupérer le prénom
   $prenom = $_POST['prenom'];
    // récupérer l'email 
    $email = $_POST['email'];
     // récupérer l'adresse
   $adresse = $_POST['adresse'];
   
   $query = "INSERT into `utilisateurs` (Nom_utilisateur, Email, Nom, Prenom, Adresse, type, Mot_de_passe)
         VALUES ('$username', '$email', '$nom', '$prenom', '$adresse','utilisateurs', '".hash('sha256', $password)."')";
   $res = mysqli_query($conn, $query);
     if($res){
        echo "<div class='sucess'>
              <h3>Vous êtes inscrit avec succès.</h3>
              <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
              </div>";
            }
        }else{
        ?>
        <form class="box" action="" method="post">
         
            <h1 class="box-title">S'inscrire</h1>
          <input type="text" class="box-input" name="username" 
          placeholder="Nom d'utilisateur" required />
          <input type="password" class="box-input" name="password" 
          placeholder="Mot de passe" required />
          <input type="text" class="box-input" name="nom" 
          placeholder="Nom" required />
          <input type="text" class="box-input" name="prenom" 
          placeholder="Prénom" required />
          <input type="text" class="box-input" name="email" 
          placeholder="Email" required />
          <input type="text" class="box-input" name="adresse" 
          placeholder="Adresse" required />
           
  
         
			
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>