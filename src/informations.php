<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $lang['informations_page_titre'] ?></title>
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
                    <li class="nav-item"><a class="nav-link active" href="informations.php"><?php echo $lang['nav_informations'] ?><br></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"><?php echo $lang['nav_contact'] ?></a></li>
                </ul>             
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/fr.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=fr'>"?>>Button</a>
                <a class="btn btn-primary btn-sm nav-button" role="button" style="background: url(&quot;assets/img/en.jpg&quot;) round;background-size: cover;color: rgba(68,53,53,0);" <?php $str = basename($_SERVER['PHP_SELF']); echo "href='$str?lang=en'>"?>>Button</a>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block about-us dark">
            <div class="container">
                <div class="divTitre"><span class="title-Bg"><?php echo $lang['informations_meteo_titre'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>

                    <?php
                    if ($_SESSION['lang'] == "en"){
                        echo '<a class="weatherwidget-io" href="https://forecast7.com/en/26d21127d68/naha/" data-label_1="NAHA Okinawa" data-label_2="Japan" data-theme="original" >NAHA Okinawa Japan</a>';
                        echo '<script>';
                            echo '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js")';
                        echo '</script>';
                    }
                    elseif ($_SESSION['lang'] = "fr"){
                        echo '<a class="weatherwidget-io" href="https://forecast7.com/fr/26d21127d68/naha/" data-label_1="NAHA Okinawa" data-label_2="Japon" data-theme="original" >NAHA Okinawa Japon</a>';
                        echo '<script>';
                            echo '!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js")';
                        echo '</script>';
                    }

                    ?>
                </div>
            </div>



        </section>
        <section class="clean-block clean-info">
            <div class="container">
                <div class="divTitre"><span class="title-Bg"><?php echo $lang['informations_heure_titre'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>
                <div class="row align-items-center">
                <div class="col">
                        <h1 class="TitreHeure"><?php echo $lang['informations_france'] ?></h1>
                        <div class="heure"><div>
                            <?php
                                date_default_timezone_set('Europe/Paris');
                                echo date('H:i:s');
                            ?>
                        </div></div>
                    </div>
                    <div class="col">
                        <h1 class="TitreHeure"><?php echo $lang['informations_angleterre'] ?></h1>
                        <div class="heure"><div>
                        <?php
                            date_default_timezone_set('Europe/London');
                            echo date('H:i:s');
                        ?>
                        </div></div>
                    </div>
                    <div class="col">
                        <h1 class="TitreHeure"><?php echo $lang['informations_japon'] ?></h1>
                        <div class="heure"><div>
                        <?php
                            date_default_timezone_set('Asia/Tokyo');
                            echo date('H:i:s');
                        ?>
                        </div></div>
                    </div>
                    <div class="col">
                        <h1 class="TitreHeure"><?php echo $lang['informations_newYork'] ?></h1>
                        <div class="heure"><div>
                        <?php
                            date_default_timezone_set('America/New_York');
                            echo date('H:i:s');
                        ?>
                        </div></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features dark">
            <div class="container">
                <div class="block-heading">
                    <div class="divTitre"><span class="title-Bg"><?php echo $lang['informations_monnaie_titre'] ?></span><img class="img-Corner" src="assets/img/title1_corner.svg"></div>
                    <div class="alert alert-danger alert-dismissible monnaie" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><img class="imgAlerteMonnaie" src="assets/img/alerte.png"><span><?php echo $lang['informations_monnaie_alerte'] ?></span></div>
                </div>
            </div>
            <form class="form" method="post">
                <div class="container">
                    <div class="form-row">
                        <div class="col-md-4 col-xl-2 offset-xl-3">
                            <h1><?php echo $lang['informations_monnaie_form_montant'] ?></h1>
                        </div>
                        <div class="col-md-4 col-xl-2">
                            <div class="form-group"><input class="form-control" type="number" required="" name="somme" min="1" step="0.01"></div>
                        </div>
                        <div class="col-xl-2">
                            <div class="form-group"><select class="custom-select" required="" name="nommonnaie">
                                    <optgroup label="<?php echo $lang['informations_monnaie_texte_choix'] ?>">
                                        <option value="euro" selected=""><?php echo $lang['informations_monnaie_form_euro'] ?></option>
                                        <option value="dollar"><?php echo $lang['informations_monnaie_form_dollar'] ?></option>
                                        <option value="yen"><?php echo $lang['informations_monnaie_form_yen'] ?></option>
                                    </optgroup>
                                </select></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 col-xl-2 offset-xl-4">
                            <h3><?php echo $lang['informations_monnaie_form_vers'] ?></h3>
                        </div>
                        <div class="col-xl-2 offset-xl-0">
                            <div class="form-group"><select class="custom-select" required="" name="nommonnaiechange">
                                    <optgroup label="<?php echo $lang['informations_monnaie_texte_choix'] ?>">
                                        <option value="euro" selected=""><?php echo $lang['informations_monnaie_form_euro'] ?></option>
                                        <option value="dollar"><?php echo $lang['informations_monnaie_form_dollar'] ?></option>
                                        <option value="yen"><?php echo $lang['informations_monnaie_form_yen'] ?></option>
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="col-xl-2 offset-xl-4">
                        <div class="form-group"><button class="btn btn-primary" type="reset"><?php echo $lang['informations_monnaie_form_reinitatiliser'] ?></button></div>
                        </div>
                        <div class="col-xl-2 offset-xl-0"><button class="btn btn-primary" type="submit"><?php echo $lang['informations_monnaie_form_convertir'] ?></button></div>
                        <div class="col-xl-6 offset-xl-3">
                        <div class="test"><div>
                                <?php
                                    if (isset($_POST['somme'])){ //valided
                                        $somme = $_POST['somme'];
                                        $nomM = $_POST['nommonnaie'];
                                        $nomMChange = $_POST['nommonnaiechange'];

                                        $result = 0;

                                        if ($nomM == "euro"){
                                            if ($nomMChange == "dollar"){
                                                $result = $somme * 1.21;
                                            }
                                            elseif ($nomMChange == "yen"){
                                                $result = $somme * 131.69;	
                                            }
                                            else{
                                                $result = $somme;
                                            }
                                        } elseif ($nomM == "dollar"){
                                            if ($nomMChange == "euro"){
                                                $result = $somme * 0.83;
                                            }
                                            elseif ($nomMChange == "yen"){
                                                $result = $somme * 108.87;	
                                            }
                                            else{
                                                $result = $somme;
                                            }
                                        } elseif ($nomM == "yen"){
                                            if ($nomMChange == "euro"){
                                                $result = $somme * 0.0076;
                                            }
                                            elseif ($nomMChange == "dollar"){
                                                $result = $somme * 0.0092;	
                                            }
                                            else{
                                                $result = $somme;
                                            }
                                        }

                                        if ($_SESSION['lang'] == "en"){
                                            echo "Conversion of $somme $nomM to $nomMChange : $result $nomMChange";
                                        }
                                        elseif ($_SESSION['lang'] = "fr"){
                                            echo "Conversion de $somme $nomM en $nomMChange : $result $nomMChange";
                                        }


                                    }
                                ?>
    
</div></div>
                        </div>
                    </div>
                </div>
            </form>
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