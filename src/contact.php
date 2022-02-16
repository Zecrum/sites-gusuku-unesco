<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $lang['contact_page_titre'] ?></title>
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
                    <li class="nav-item"><a class="nav-link" href="visiter.php"><?php echo $lang['nav_visiter'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="galerie.php"><?php echo $lang['nav_galeriePhoto'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="informations.php"><?php echo $lang['nav_informations'] ?><br></a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php"><?php echo $lang['nav_contact'] ?></a></li>
                </ul>             
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/fr.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=fr'>"?>>Button</a>
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/en.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=en'>"?>>Button</a>
            </div>
        </div>
    </nav>
    <main class="page contact-us-page">
        <section class="clean-block about-us dark">
            <div class="container">
                <div class="divTitre"><span class="title-Bg"><?php echo $lang['contact_equipe_titre'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>
            </div>
            <div class="container">
                <div class="block-heading">
                    <p><?php echo $lang['contact_equipe_desc'] ?></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block imgContact" src="assets/img/alexandre.png">
                            <div class="card-body info">
                                <h3 class="card-title"><?php echo $lang['contact_alex_nom'] ?></h3>
                                <p class="card-text"><?php echo $lang['contact_alex_desc'] ?></p>
                                <div class="icons"><a href="https://www.linkedin.com/in/alexandre-laplaige/" target="target=&quot;_blank"><img class="icone-linkdin" src="assets/img/linkdin.png"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block imgContact" src="assets/img/axelle.png">
                            <div class="card-body info">
                                <h3 class="card-title"><?php echo $lang['contact_axelle_nom'] ?></h3>
                                <p class="card-text"><?php echo $lang['contact_axelle_desc'] ?></p>
                                <div class="icons"><a href="https://www.linkedin.com/" target="target=_blank"><img class="icone-linkdin" src="assets/img/linkdin.png"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-info">
            <div class="container">
                <div class="divTitre"><span class="title-Bg"><?php echo $lang['contact_contacter_tire'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>
                <div class="row align-items-center">
                    <div class="col-xl-6 offset-xl-3">
                        <form action="https://formspree.io/f/xnqwdpgv" method="post" target="_self">
                            <div class="form-group"><input class="form-control" type="text" placeholder="<?php echo $lang['contact_contacter_fNom'] ?>" required="" name="name"></div>
                            <div class="form-group"><input class="form-control" type="email" placeholder="<?php echo $lang['contact_contacter_fEmail'] ?>" required="" name="email"></div>
                            <div class="form-group"><textarea class="form-control" placeholder="<?php echo $lang['contact_contacter_fMessage'] ?>" rows="10" required="" name="message"></textarea></div>
                            <div class="form-group text-center"><button class="btn btn-primary messageButton" type="reset" style="margin: 20px;"><?php echo $lang['contact_contacter_bEffacer'] ?></button><button class="btn btn-primary messageButton" type="submit"><?php echo $lang['contact_contacter_bEnvoyer'] ?></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features dark">
            <div class="container">
                <div class="block-heading">
                    <div class="divTitre"><span class="title-Bg"><?php echo $lang['contact_sources_titre'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>
                </div>
                <p class="paraSource"><strong><span style="text-decoration: underline;"><?php echo $lang['contact_sources_img'] ?></span></strong><br><?php echo $lang['contact_sources_para'] ?></p>
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