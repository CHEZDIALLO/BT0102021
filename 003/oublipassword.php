<?php
    include('database/connect.php');
    $message = "";
    if (isset($_POST['email'])) {
       $email = $_POST['email'];

       $sql="INSERT INTO forgetpass(Email) VALUES (?)";
      if ($sdb->prepare($sql)->execute(array($_POST['email']))) 
      {
       $message="<div class='alert alert-success' role='alert'>
       <h4 class='alert-heading'>Message envoyé avec succès!</h4>
       <p>Un mesage de réinitialisation de votre mot de passe vous sera envoyé dans l'adresse $email</p>
       <hr>
     </div>";
     header('Refresh:5;url="oublipassword.php"');
       }
  }

  ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css" />

</head>
<body>

      
      <form class="box" action="" method="post">
 
    <h1 class="box-title">Réinitialisation de mot de passe</h1>
    <input type="email" class="box-input" name="email"  placeholder="Email" required />
    <input type="submit" value="Soumettre " name="submit" class="box-button" />
    </form>
    

    

    <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="" method="POST">
                        <?php 
                           if (!empty($message)) {
                              echo $message;
                           }
                        ?>
 </section>

</body>
</html>
