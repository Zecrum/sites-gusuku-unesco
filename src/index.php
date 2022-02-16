<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $lang['index_page_titre'] ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/css/Cicle.css">
    <link rel="stylesheet" href="assets/css/Cicle%20Gordita.css">
    <link rel="stylesheet" href="assets/css/Cicle%20Semi.css">
    <link rel="stylesheet" href="assets/css/Cicle%20Shadow.css">
    <link rel="stylesheet" href="assets/css/Dyno.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="icon" type="image/png" href="assets/img/logo_site.png" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php"><?php echo $lang['nav_titre'] ?></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><?php echo $lang['nav_accueil'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="histoire.php"><?php echo $lang['nav_histoire'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="visiter.php"><?php echo $lang['nav_visiter'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="galerie.php"><?php echo $lang['nav_galeriePhoto'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="informations.php"><?php echo $lang['nav_informations'] ?><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['nav_contact'] ?></a></li>
                </ul> 
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/fr.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=fr'>"?>>Button</a>
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/en.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=en'>"?>>Button</a>
            </div>
        </div>
    </nav>
    <div class="alert alert-danger text-center alert-dismissible alertIndex" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="alert-heading"><strong><?php echo $lang['index_alerte_titre'] ?></strong></h4><span><?php echo $lang['index_alerte_texte'] ?></span>
    </div>
    <main class="page landing-page">
        <section class="clean-block clean-hero"></section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo $lang['index_1_titre'] ?><br></h2>
                    <h1 class="text-patrimoine"><?php echo $lang['index_1_desc'] ?></h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/invasion.jpg"></div>
                    <div class="col-md-6">
                        <h3 class="text-info"><?php echo $lang['index_1_droite_titre'] ?></h3>
                        <div class="getting-started-info">
                            <p class="text"><?php echo $lang['index_1_droite_desc'] ?><br></p>
                        </div><a href="histoire.php"><button class="btn btn-outline-primary btn-lg" type="button"><?php echo $lang['index_1_droite_bouton'] ?></button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo $lang['index_2_titre'] ?></h2><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCqnguujWdBQBhVhMjgNLneALhgRKAKIzw&amp;q=Ch%C3%A2teau+de+Shuri&amp;zoom=5" width="100%" height="500"></iframe>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><?php echo $lang['index_3_titre'] ?></h2>
                    <p class="text"><?php echo $lang['index_3_desc'] ?></p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/image1.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/image2.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/image3.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="divPlusImage"><a href="galerie.php"><button class="btn btn-outline-primary btn-lg" type="button"><?php echo $lang['index_3_bouton'] ?></button></a></div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"><a href=""><img class="footer-img" src="assets/img/mcn2.png"></a></div>
                <div class="col-sm-3"><a href="https://www.univ-gustave-eiffel.fr/" target="target=&quot;_blank"><img class="footer-img" src="assets/img/univ.png"></a></div>
                <div class="col-sm-3"><a href="https://fr.unesco.org/" target="target=&quot;_blank"><img class="footer-img" src="assets/img/unesco.png"></a></div>
            </div>
        </div>
        <div class="footer-copyright">
            <p><?php echo $lang['footer_texte'] ?></p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>