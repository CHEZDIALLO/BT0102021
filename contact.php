<?php
    include('database/connect.php');
    $message = "";
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])) {
       $Nom = $_POST['nom'];
       $Email = $_POST['email'];
       $Sujet = $_POST['sujet'];
       $Message = $_POST['message'];
      
        $sql="INSERT INTO contact(Nom, Email, Sujet, Message) VALUES (?,?,?,?)";
        if ($sdb->prepare($sql)->execute(array($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']))) 
        {
         $message="<div class='alert alert-success' role='alert'>
         <h4 class='alert-heading'>Succés!</h4>
         <p>Votre message a bien été envoyé</p>
         <hr>
       </div>";
       header('Refresh:5;url="contact.php"');
         }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
<?php
include_once('header.php');
?>

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->

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
</head>

<body>
    
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contacter nous</h1>
            <p>
                Pour plus d'information veuillez nous contacter via cette formulaire
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>ChezDiallo</b> Boutique en ligne<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>









    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nom</label>
                        <input type="text" class="form-control mt-1" id="nom" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Sujet</label>
                    <input type="text" class="form-control mt-1" id="suijet" name="sujet" placeholder="Sujet" required>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8" required></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-primary btn-lg px-3" name="button" >Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
    <!-- End Contact -->


    <?php
    include_once('footer.php');
    ?>

</body>

</html>