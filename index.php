<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Chez Diallo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<?php
include_once('header.php');
?>

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



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/A.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Smarphone</b> Iphone 13</h1>
                                <h3 class="h2"></h3>
                                <p>
                                En termes de conception, la gamme d’iPhone 13 pro max semble presque identique à l’iPhone 12 pro max existant, bien que légèrement plus épais et plus lourd pour accueillir des batteries plus grosses . Apple a également réduit la taille de l’encoche de 20% en termes de largeur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/B.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Télévisuers</h1>
                                <h3 class="h2"></h3>
                                <p>
                                Écran LED ultra lumineux sans cadre. Certifié Android TV Google Assistant + Chromecast intégré · Moteur d'image Chroma Boost.

Applications prises en charge : Netflix|Prime Video|Disney+Hotstar|Youtube
Système d'exploitation : Android (Google Assistant et Chromecast intégrés)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/C.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">ventilateurs</h1>
                                <h3 class="h2"> </h3>
                                <p>
                                Conception du produit du ventilateur, ventilateur sur pied, Appareil électroménager, ventilateur sur pied png
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right" style='color:red'></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Catégories du mois</h1>
                <p>
                    Une selection de produits de qualités à un prix abordable pour vous servir.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="boutique.php"><img src="./assets/img/x.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Electroniques</h5>
                <p class="text-center"><a class="btn btn-primary">Acheter</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="boutique.php"><img src="./assets/img/y.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Electroménagers</h2>
                <p class="text-center"><a class="btn btn-primary">Acheter</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="boutique.php"><img src="./assets/img/z.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Smartphones</h2>
                <p class="text-center"><a class="btn btn-primary">Acheter</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produit en vedette</h1>
                    <p>
                        Nos produits les plus vendu du mois de fevrier !
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.php">
                            <img src="./assets/img/l.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                               
                                <li class="text-muted text-right">25 000 FCFA</li>
                            </ul>
                            <a href="shop-single.php" class="h2 text-decoration-none text-dark">Caméra espion</a>
                            <p class="card-text">
                              Lampe caméra espion panoramique à une rotation de 360°. Idéal pour les boutiques et les espaces de travails réduits.
                            </p>
                            <p class="text-muted">vu (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.php">
                            <img src="./assets/img/k.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <li class="text-muted text-right">20 000 FCFA</li>
                            </ul>
                            <a href="shop-single.php" class="h2 text-decoration-none text-dark">Mini Kit Solaire</a>
                            <p class="card-text">
                            Mini kit solaire avec trois lampes idéal pour le camping et la campagne.
                            </p>
                            <p class="text-muted">Vu (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/r.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                
                                <li class="text-muted text-right">18 000 FCFA</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Coralstar CS12</a>
                            <p class="card-text">
                                Woofer coralstar cs12 avec bluetooth, usb et radio fm.
                            </p>
                            <p class="text-muted">Vu (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <?php
    include_once('footer.php');
    ?>
</body>

</html>