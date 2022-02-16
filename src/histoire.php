<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $lang['histoire_page_titre'] ?></title>
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
                    <li class="nav-item"><a class="nav-link" href="index.php"><?php echo $lang['nav_accueil'] ?></a></li>
                    <li class="nav-item"><a class="nav-link active" href="histoire.php"><?php echo $lang['nav_histoire'] ?></a></li>
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
    <main class="page">
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <p><br><?php echo $lang['histoire_desc'] ?><br><br></p>
                </div>
                <div class="divTitre"><img class="img-Corner" src="assets/img/title1_corner.svg"><span class="title-Bg"><?php echo $lang['histoire_1_titre'] ?></span></div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-4 offset-xl-0 box">
                    <p class="text"><?php echo $lang['histoire_1_desc'] ?><br></p>
                    </div>
                    <div class="col-md-5 col-xl-5 offset-xl-0 box"><img src="assets/img/constru.jpg"></div>
                </div>
                <div class="divTitre"><img class="img-Corner" src="assets/img/title1_corner.svg"><span class="title-Bg"><?php echo $lang['histoire_2_titre'] ?><br></span></div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-5 offset-xl-0 box"><img src="assets/img/invasion.jpg"></div>
                    <div class="col-md-5 col-xl-4 offset-xl-0 box">
                    <p class="text"><?php echo $lang['histoire_2_desc'] ?><br></p>
                    </div>
                </div>
                <div class="divTitre"><img class="img-Corner" src="assets/img/title1_corner.svg"><span class="title-Bg"><?php echo $lang['histoire_3_titre'] ?><br></span></div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-4 offset-xl-0 box">
                    <p class="text"><?php echo $lang['histoire_3_desc'] ?><br></p>
                    </div>
                    <div class="col-md-5 col-xl-5 offset-xl-0 box"><img src="assets/img/bombar.jpg"></div>
                </div>
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