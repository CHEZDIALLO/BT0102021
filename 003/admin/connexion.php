<?php


$user='root';
$pass='';

try {
    $db=new PDO ('mysql:host=localhost;dbname=evaluation',$user,$pass);
   // echo "Utilisateur ajouté avec succès";

} catch (PDOException $th) {
    echo "erreur:".$th->getMessage()."<br>";

}
?>