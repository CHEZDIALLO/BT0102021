<?php

    $user="root";
     $password="";
     
       try{
          $sdb=new PDO('mysql:host=localhost;dbname=chez_diallo',$user,$password);  
       }
       catch(PDOException $e){
          echo $e->getMessage();
       }
?>