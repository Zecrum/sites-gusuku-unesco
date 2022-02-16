<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $lang['visiter_page_titre'] ?></title>
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
                    <li class="nav-item"><a class="nav-link" href="histoire.php"><?php echo $lang['nav_histoire'] ?></a></li>
                    <li class="nav-item"><a class="nav-link active" href="visiter.php"><?php echo $lang['nav_visiter'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="galerie.php"><?php echo $lang['nav_galeriePhoto'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="informations.php"><?php echo $lang['nav_informations'] ?><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['nav_contact'] ?></a></li>
                </ul>             
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/fr.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=fr'>"?>>Button</a>
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/en.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=en'>"?>>Button</a>
            </div>
        </div>
    </nav>
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
        <div class="container">
                <div class="divTitre"><span class="title-Bg"><?php echo $lang['visiter_titre'] ?><br></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCqnguujWdBQBhVhMjgNLneALhgRKAKIzw&amp;q=Ch%C3%A2teau+de+Shuri&amp;zoom=11" width="100%" height="400"></iframe>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Tamaudun_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Tamaudun_desc'] ?><br></p><img src="assets/img/tamaudun.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Sonohyan_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Sonohyan_desc'] ?><br></p><img src="assets/img/sonohyan.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Nakijin_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Nakijin_desc'] ?><br></p><img src="assets/img/nakijin.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Zakimi_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Zakimi_desc'] ?><br></p><img src="assets/img/zakimi.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Katsuren_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Katsuren_desc'] ?><br></p><img src="assets/img/katsuren.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Nakagusuku_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Nakagusuku_desc'] ?><br></p><img src="assets/img/nakagusuku.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Shuri_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Shuri_desc'] ?><br></p><img src="assets/img/shuri.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Shikina_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Shikina_desc'] ?><br></p><img src="assets/img/shikina.jpg">
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="divTitreJaune"><span class="title-BgJaune"><?php echo $lang['visiter_Utaki_titre'] ?><br></span><img class="img-Corner" src="assets/img/title2_corner.svg"></div>
                        <p class="textVisiter"><?php echo $lang['visiter_Utaki_desc'] ?><br></p><img src="assets/img/seifa.jpg">
                    </div>
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