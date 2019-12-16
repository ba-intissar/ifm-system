<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="desription" content="IFMsystem est un système de gestion des ressources de
     transport. aperçu présenté par celui se manifeste en qui conduit quand sur quel chariot, 
     comment les moyens de transport sont utilisées
      et quelle est la productivitè de ces derniers.  Le suivit des 
    véhicules sur la base de GPS est la fonction le plus connue de IFMS.">
    <meta name="keywords" content=" ifms, intelligent fleet management system, gestion de flotte  ">

    <title>IFMSYSTEM</title>
    <link rel="stylesheet" href="lib/sweetalert.css" type="text/css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css" />


    <!-- font icofont -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:300,400,400i,700,900" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- animte css -->
    <link rel="stylesheet" href="css/animate.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


    <!-- camera css goes here -->
    <link rel="stylesheet" href="css/camera.css">

    <!-- venobox css goes here -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css" />

    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconv.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
  
   <script>
        /*
                                            here you can add user_data to config object
                                            eg.
                                            custom_user_data = {
                                                    externalId: "your_id_for_user",
                                                    email: "email",
                                                    username: "username",
                                                    firstname: "user_first_name",
                                                    lastname: "user_last_name",
                                                    additionalFields: "nickname=userNickname; phoneNumber=121212"
                                            };
                                            */
        if ("undefined" !== typeof requirejs) window.onload = function(e) {
            requirejs(["https://paldesk.io/api/widget-client?apiKey=46f82001634c15878325df9f60a35a49"], function(e) {
                "undefined" !== typeof custom_user_data && (beebeeate_config.user_data = custom_user_data), BeeBeeate.widget.new(beebeeate_config)
            })
        };
        else {
            var s = document.createElement("script");
            s.async = !0, s.src = "https://paldesk.io/api/widget-client?apiKey=46f82001634c15878325df9f60a35a49", s.onload = function() {
                "undefined" !== typeof custom_user_data && (beebeeate_config.user_data = custom_user_data), BeeBeeate.widget.new(beebeeate_config)
            };
            if (document.body) {
                document.body.appendChild(s)
            } else if (document.head) {
                document.head.appendChild(s)
            }
        }
    </script>
    <script>
        if ("undefined" !== typeof requirejs) window.onload = function(e) {
            requirejs(["https://paldesk.io/api/fwidget-client?apiKey=3f88392ce83a82cdfb5bcbad844f4494"], function(e) {
                "undefined" !== typeof custom_user_data && (beebeeate_config_feedback.user_data = custom_user_data), BeeBeeateFeedback.widget.new(beebeeate_config_feedback)
            })
        };
        else {
            var s = document.createElement("script");
            s.async = !0, s.src = "https://paldesk.io/api/fwidget-client?apiKey=3f88392ce83a82cdfb5bcbad844f4494", s.onload = function() {
                "undefined" !== typeof custom_user_data && (beebeeate_config_feedback.user_data = custom_user_data), BeeBeeateFeedback.widget.new(beebeeate_config_feedback)
            };
            if (document.body) {
                document.body.appendChild(s)
            } else if (document.head) {
                document.head.appendChild(s)
            }
        }
    </script>

</head>

<body class="home1">

    <!-- preloader -->
    <div class="preloader-bg">
        <div class="preloader-container">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>




    <!--================================
        START SLIDER AREA
    =================================-->
    <section class="slider_area">

        <!-- slider starts  -->
        <div class="sliders">

            <!-- hero slides -->
            <div class="hero_sliders">

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="images/slider--2.jpg">
                    <div class="captions_wrapper right">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                    <div class="single_slider_wrapper">
                                       <br><br><br>
                                        <h1 class="big_title fadeInRightShort animated">
                                            logiciel de gestion de flotte automobile entièrement intégré, conçu pour faciliter votre travail.</h1>
                                        <div class="hero_btn">
                                            <a href="contact.html" class="trust_btn">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single hero_slide -->

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="images/vision_icmg.png">
                    <div class="captions_wrapper left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInLeftShort animated">IFMSYSTEM</span><br>
                                        <h1 class="big_title fadeInLeftShort animated">LA GESTION DE FLOTTE OPTIMISE LE PROCESSUS LOGISTIQUE ET LES FRAIS DE TRANSPORT</h1>
                                        <div class="hero_btn">
                                            <a href="contact.html" class="trust_btn">Contatctez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single hero_slide -->

                <!-- single hero_slide -->
                <div class="hero_slide" data-src="images/slidslid.jpg">
                    <div class="captions_wrapper left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="single_slider_wrapper">
                                        <span class="small_title fadeInLeftShort animated">IFMSystem</span><br>
                                        <h1 class="big_title fadeInLeftShort animated">Services de gestion de flotte immédiatement opérationnels.</h1>
                                        <div class="hero_btn">
                                            <a href="contact.html" class="trust_btn">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single hero_slide -->
            </div>
            <!-- ./hero slides  -->
        </div>
        <!-- /.sliders ends -->

        <!-- menu starts -->
        <div class="menu_area">

            <!-- container starts -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">

                    <div class="col-md-12" style="padding-left:0 !important ;padding-right:0 !important;">
                        <div class="mainmenu nav_shadow">
                            <nav class="navbar navbar-default">

                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav magic_menu">
                                        <a href="index.html">
                                            <img src="images/logo.png" alt="logo-ifmsystem" style="width: 12%;margin-right: 12%;"></a>

                                        <li class="active">
                                            <a href="index.html">Acceuil</a>

                                        </li>
                                        <li class="has_dropdown ">
                                            <a href="#">Services et solutions<span class="fa fa-angle-down"></span></a>
                                            <div class="dropdwon">
                                                <ul>
                                                    <li><a href="roulant.html">Gestion de Parc roulant</a></li>
                                                    <li><a href="lifting.html">Gestion de parc lifting</a></li>
                                                    <li><a href="exploitation.html">Gestion d'exploitation</a></li>
                                                    <li><a href="gmao.html">GMAO</a></li>
                                                    <li><a href="energie.html">Gestion énergitique</a></li>
                                                    <li><a href="stock.html">Gestion de stock</a></li>
                                                    <li><a href="achat.html">Gestion d'achat</a></li>
                                                    <li><a href="kpi.html">KPI</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="has_dropdown ">
                                            <a href="#">Service Clients<span class="fa fa-angle-down"></span></a>
                                            <div class="dropdwon">
                                                <ul>
                                                    <li><a href="service.html">Support et service</a></li>
                                                    <li><a href="formation.html">Formation</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Catalogue</a></li>

                                        <li><a href="contact.html">contact</a></li>
                                    </ul>

                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <!-- main menu ends -->
                    </div>
                </div>
                <!-- /.row end -->

            </div>
            <!-- /.container ends -->
        </div>
        <!-- menu ends -->
    </section>
    <!--================================
        END SLIDER AREA
    =================================-->
    <section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7  col-md-6 col-12  xs_fullwidth v_middle">
                    <div class="about_us_img">
                        <br><br>
                        <img src="images/bloc-1.png" alt="qu'est-ce-que-ifmsystem" style="width:60% !important">
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-12 xs_fullwidth v_middle">
                    <div class="about_us_content_wrapper">
                        <div>
                            <!-- Tab panes -->
                            <div class="tab-content" style="margin-top:0 !important;">
                                <div role="tabpanel" class="tab-pane fadeInUpShort animated active" id="mission">
                                   
                                    <div class="section_title title_left">
                        <div class="sub_title ">
                            <p>IFMSYSTEM</p>
                        </div>
                        <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                            <h2>Qu'est-ce que IFMS?
                            </h2>
                        </div>
                    </div>
                                    </div>
                                    <p>IFMsystem est un système de gestion des ressources de transport. aperçu présenté par celui se manifeste en qui conduit quand sur quel chariot, comment les moyens de transport sont utilisées et quelle est la productivitè de ces derniers.  Le suivit des véhicules sur la base de GPS est la fonction le plus connue de IFMS.      </p>
                                    <p>En utilisant IFMSystem, offre un meilleur aperçu des coûts encourus pour la logistique et le transport. En outre, il compare les pilotes les uns avec les autres, ainsi que différents départements et processus, même s'ils se trouvent dans des endroits différents. Cela vous permet d'optimiser vos processus afin de minimiser les coûts de transport et de logistique.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container starts -->
    </section>
<!--------------------------------pourquoi-IFMS----------->
<section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container starts -->
        <div class="container-fluid">
            <div class="row" style="margin-left:15vh;">
            <div class="col-lg-5  col-md-6 col-12 xs_fullwidth ">
                    <div class="about_us_content_wrapper">
                        <div>
                            <!-- Tab panes -->
                            <div class="tab-content" style="margin-top:0 !important;">
                                <div role="tabpanel" class="tab-pane fadeInUpShort animated active" id="mission">
                                   
                                    <div class="section_title title_left">
                                    <div class="sub_title ">
                                        <p>IFMSYSTEM</p>
                                    </div>
                                    <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                                        <h2>Pourquoi choisir IFMS?

                                        </h2>
                                    </div>
                                   
                                    </div>
                                    <p>
                                     La partie la plus importante des opérations commerciales est l'optimisation des coûts de transport et de logistique. Cette fois ci permet de profiter d'avantages. Par conséquent, un système de flotte non seulement garantie la gestion optimale de votre flotte de chariot mais aussi assure le bon choix au bon moment, comme la maintenance et le nouveaux investissements dans votre flotte. Au dé-las, c'est bien de savoir qu'un système de gestion de flotte est un moyen pour surveiller les employés, les personnes et les opération de votre entreprise à fin de garder un bon fonctionnement le plus agréable.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-7  col-md-6 col-12 xs_fullwidth ">
                    <div class="about_us_img">
                        <img src="images/4.png"  alt="ifm-system" style="    width:90% !important; margin-top: 28vh;">
                    </div>
                </div>
               

            </div>
        </div>
        <!-- /.container starts -->
</section>
   
    <!--------------------------------------slide------------------------------------------->
    <section class="iq-features" style="margin-top:150px">
        <div class=" container ">

            <div class="row " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="col-md-12 ">
                    <div class="section_title title_center">
                        <div class="sub_title ">
                            <p>IFMSYSTEM</p>
                        </div>
                        <div class="title " data-aos="fade-up" data-aos-duration="3000">
                            <h2>Services et solutions
                            </h2>
                        </div>
                    </div>
                    <p class="text-center">Intelligent fleet management system ou système intelligent de gestion de flotte est une application de logiciel pour le transport, destinée à la gestion du parc de véhicules des entreprises de transport. Ce système automatise cette
                        gestion et permet aux entreprises d’améliorer la productivité du processus logistique à moindre coût grace à nos services <b>GMAO, gestion d'exploitation,energitique , gestion de parc roulants, gestion de parc lifting, stock, gestion
                        d'achat, KPI).

                    </p>

                    <div class="row" style="margin-top: 5rem;">
                        <div class="col-md-4 ">
                            <div class="single_slider">
                                <div class="person_about">
                                    <div class="image">
                                        <img src="images/icons/gerer.png" alt="gérer-img">
                                    </div>
                                    <div class="desig">
                                        <p class="name">GÉRER </p>

                                    </div>
                                </div>
                                <div class="testimonial"style="    padding: 31px 30px 30px;">
                                    <ul>
                                        <li>
                                            <p><img src="images/icons/cheked.svg" alt="checked-ifmsystem" style=" width: 2%;margin-right: 2%;">Les démarches administratives.</p>
                                        </li>
                                        <li>
                                            <p> <img src="images/icons/cheked.svg"  alt=" chacked-ifmsystem" style=" width: 2%;margin-right: 2%;">Les dépenses inhérentes à un véhicule ou un engin.</p>
                                        </li>
                                        <li>
                                            <p> <img src="images/icons/cheked.svg" alt=" checked-ifmsystem" style=" width: 2%;margin-right: 2%;">Les contrats avec les prestataires externes.<span class="quote fa fa-quote-right"></span></p>
                                        </li>


                                    </ul><br>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="single_slider">
                                <div class="person_about">
                                    <div class="image">
                                        <img src="images/icons/MAÎTRISER.jpg" alt="maitriser-ifms">
                                    </div>
                                    <div class="desig">
                                        <p class="name">MAÎTRISER </p>

                                    </div>
                                </div>
                                <div class="testimonial">
                                    <ul>
                                        <li>
                                            <p> <img src="images/icons/cheked.svg" alt="checked-ifms" style=" width: 2%;margin-right: 2%;">Les réglementations.</p>
                                        </li>
                                        <li>
                                            <p> <img src="images/icons/cheked.svg"  alt="checked-ifms" style=" width: 2%;margin-right: 2%;">La fiscalité automobile</p>
                                        </li>
                                        <li>
                                            <p> <img src="images/icons/cheked.svg" alt="checked-ifms" style=" width: 2%;margin-right: 2%;">Les aspects techniques liés aux véhicules et engins. <span class="quote fa fa-quote-right"></span></p>
                                        </li><br>

                                    </ul><br><br>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="single_slider">
                                <div class="person_about">
                                    <div class="image">
                                        <img src="images/icons/analyse.jpg" alt="analyser-ifms">
                                    </div>
                                    <div class="desig">
                                        <p class="name">ANALYSER </p>

                                    </div>
                                </div>
                                <div class="testimonial">
                                    <ul>
                                        <li>
                                            <p><img src="images/icons/cheked.svg" alt="checked-ifms" style=" width: 2%;margin-right: 2%;"> Les coûts de gestion de la flotte.</p>
                                        </li>
                                        <li>
                                            <p><img src="images/icons/cheked.svg" alt="checked-ifms" style=" width: 2%;margin-right: 2%;"> Les données pour contrôler et optimiser les coûts de la flotte automobile. <span class="quote fa fa-quote-right"></span></p>
                                        </li><br>

                                    </ul><br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="margin-top: 50px;">
        <div class="container-fluid ">
            <div class="row align-items-center ">
                <div class="col-lg-5 col-md-5 " >
                    <img src="images/hero3.png"  alt="ifmsystem" width="100% ">
                </div>
                <div class="col-lg-7 col-md-7 col-5 ">
                    <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                            <span class="itemDot active itemDot1" data-tab="1">
                                       <img src="images/icon/engin.png" alt=" ifm-system" width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot2" data-tab="2">
                                                <img src="images/icon/vehicles.png"  alt="véhicule-ifmsystem" width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot3" data-tab="3">
                                                <img src="images/icon/ccc.png" alt="ifmsystem" width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot4" data-tab="4">
                                                <img src="images/icon/entre.png" alt="ifmsystem"  width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot5" data-tab="5">
                                                <img src="images/icon/qqq.png" alt="ifmsystem" width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot6" data-tab="6">
                                                <img src="images/icon/gestion-stock.png " alt="ifmsystem"  width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot7" data-tab="7">
                                                <img src="images/icon/ss.png" alt="ifmsystem" width="100%">
                                       <span class="forActive"></span>
                            </span>
                            <span class="itemDot itemDot8" data-tab="8">
                                    <img src="images/icon/kpii.png" alt="ifmsystem" width="100%">
                           <span class="forActive"></span>
                            </span>
                        </div>
                        <div class="contentCircle">
                            <div class="CirItem title-box active CirItem1">
                                <h2 class="title"><span>Gestion de parc roulant</span></h2>
                                <p>Gestion Parc Roulant permet une gestion efficace de votre flotte de véhicules</p>

                            </div>
                            <div class="CirItem title-box CirItem2">
                                <h2 class="title"><span>Gestion de parc lifting </span></h2>
                                <p>Quelle que soit la taille de votre parc engins, IFMS vous apporte les solutions adéquates à l’optimisation de votre gestion.</p>

                            </div>
                            <div class="CirItem title-box CirItem3">
                                <h2 class="title"><span>Gestion d'exploitation</span></h2>
                                <p>Gère les ordres d'exploitation permet de localiser le mouvement des véhicules dans la mission, ainsi que leurs dates et heures de sortie et de retour.</p>
                            </div>
                            <div class="CirItem title-box CirItem4">
                                <h2 class="title"><span>GMAO</span></h2>
                                <p>Un Logiciel de Gestion de Maintenance assistée par Ordinateur est destiné aux différents secteurs de l’industrie, du tertiaire, des institutions publiques.</p>
                            </div>
                            <div class="CirItem title-box CirItem5">
                                <h2 class="title"><span>Gestion énergitique</span></h2>
                                <p>Consultation la consommation de gasoil à travers le suivi des demandes de ravitaillements et des bons de carburant</p>

                            </div>
                            <div class="CirItem title-box CirItem6">
                                <h2 class="title"><span>Gestion Stock</span></h2>
                                <p>La gestion des stocks consiste à planifier la manière d'accroître la rentabilité et d'obtenir le bon montant au bon moment au moindre coût.</p>
                            </div>
                            <div class="CirItem title-box CirItem7">
                                <h2 class="title"><span>Gestion de d'achat</span></h2>
                                <p>La gestion des achats est un ensemble de processus utilisés par les entreprises pour acquérir, stocker et distribuer les pièces nécessaires.</p>

                            </div>
                            <div class="CirItem title-box CirItem8">
                                <h2 class="title"><span>KPI</span></h2>
                                <p>Ces KPI métiers, vous permettront d’analyser votre performance et d'être alerté si un indicateur atteint un niveau anormal (trop fort, ou trop faible).</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container starts -->
        <div class="container-fluid">
            <div class="row" style="margin-left:15vh;">
            <div class="col-lg-6 col-md-6 col-12 xs_fullwidth ">
                    <div class="about_us_content_wrapper">
                        <div>
                            <!-- Tab panes -->
                            <div class="tab-content" style="margin-top:0 !important;">
                                <div role="tabpanel" class="tab-pane fadeInUpShort animated active" id="mission">
                                   
                                    <div class="section_title title_left">
                                    <div class="sub_title ">
                                        <p>IFMSYSTEM</p>
                                    </div>
                                    <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                                        <h2>Les avantages de IFMS pour l'entreprise


                                        </h2>
                                    </div>
                                   
                                    </div>
                                    <p>En utilisant IFMS, la planification de travail devient plus efficace, en minimisant les temps de logistique. Cela profite, à la vitesse de préparation de commandes et au délai de livraison des marchandises.
                                                                En outre, vous pouvez également utiliser le système pour rendre la flotte de camions plus économe en énergie. Vous pouvez voir à travers le système qui, par exemple, a conduit le plus économique et sûr. Vous économisez également sur les coûts de carburant.  De plus, vous assurez de la réduction des coûts de maintenance. Une amélioration de la planification gagné par le système aussi avec le moindre de dégâts.
                                                                En bref, l'utilisation d'un système de gestion de flotte vous garantit que vous obtenez plus de profit de votre entreprise.</p>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6  col-md-6 col-12  xs_fullwidth ">
                    <div class="about_us_img">
                        <img src="images/gr.png" alt="ifmsystem"  style="    width: 90% ;margin-top: 17vh;">
                    </div>
                </div>
               

            </div>
        </div>
        <!-- /.container starts -->
</section>
    <!-----avantages----->
    <section class="mission_vision section_padding reveal animated" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7  col-md-6 col-12  xs_fullwidth v_middle">
                    <div class="about_us_img">
                        <img src="images/2.png"  alt="ifmsystem" style="width:60% !important">
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-12 xs_fullwidth v_middle">
                    <div class="about_us_content_wrapper">
                        <div>
                            <!-- Tab panes -->
                            <div class="tab-content" style="margin-top:0 !important;">
                                <div role="tabpanel" class="tab-pane fadeInUpShort animated active" id="mission">
                                   
                                    <div class="section_title title_left">
                        <div class="sub_title ">
                            <p>IFMSYSTEM</p>
                        </div>
                        <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                            <h2>Les avantages de IFMS pour les employés

                            </h2>
                        </div>
                    </div>
                                    </div>
                                 
                    <p>
                        L'intégration de IFMS offre aux employés des voyages plus sécuritaires, moins de stress et moins d'heures supplémentaires. Il garantit que le bon employé, avec les bons certificats, est sur le bon moyen de transport.
                        En outre, vous pouvez utiliser le système pour déterminer quel employé a conduit de la manière la plus sûre et la plus économique. Une compétition d'entreprise amusante et socialement responsable!<p>
                  </p>
                
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        
        <!-- /.container starts -->
    </section>
    <!--================================
        START BLOG AREA
    =================================-->
   
    <section class="blog_area dark_bg section_padding reveal animated part mt-lg-5" data-delay="0.2s" data-anim="fadeInUpShort">
        <!-- container start -->
        <div class="container">

            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-md-6">
                    <div class="section_title">
                        <div class="sub_title">
                            <p>IFMsystem</p>
                        </div>
                        <div class="title">
                            <h2 style="color:#D44D15 !important;">Nos partenaires</h2>
                        </div>
                    </div>
                    <p >Nos clients sont passionnés par ce qu’ils font. Découvrez comment M3Soft responsabilise les organisations du monde entier, des entreprises d’aménagement paysager aux parcs de véhicules publics, etc.</p>

                            <div class="hero_btn text-right">
                                            <a href="contact.html" class="trust_btn">Contactez-nous</a>
                                        </div>
                </div>
                <div class="col-md-6">
                    <div class="service_wrapper">

                        <!-- service slider start -->
                        <div class="service_slider">

                            <div class="single_service_wrapper">
                                <div class="service_img">
                                    <img src="images/gstp.jpg" alt="partanaire-ifmsystem" style="width:107% !important" >
                                </div>
                                <div class="service_content">
                                    <div class="service_title">
                                        <a href="#">
                                            <h3>GTSP(General transport and petrol services)</h3>
                                        </a>
                                    </div>
                                    <div class="service_text">
                                        <p>G.T.S.P est une société spécialisée dans le domaine du transport et de la manutention des huiles...</p>
                                    </div>

                                </div>
                            </div>

                            <div class="single_service_wrapper">
                                <div class="service_img">
                                    <img src="images/service-csg.png" alt="csg-ifmsystem" style="width:107% !important">
                                </div>
                                <div class="service_content">
                                    <div class="service_title">
                                        <a href="single_service.html">
                                            <h3>CSG(Cristal Services Généraux)</h3>
                                        </a>
                                    </div>
                                    <div class="service_text">
                                        <p>CSG est une société de Maintenance Multitechnique, Multiservice, ou Facility Management, propose des solutions sur mesure.</p>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- service slider start -->

                        <!-- slider control start -->
                        <div class="slider_controller">
                            <div class="prev"><span class="fa fa-angle-left"></span></div>
                            <div class="next"><span class="fa fa-angle-right"></span></div>
                        </div>
                        <!-- slider control end -->

                    </div>
                    <!-- start service wrapper -->
                </div>
                <!-- /.col ends -->
            </div>
            <!-- /.row end -->
        </div>
        <!-- /.container start -->
    </section>
    <!--================================
        END BLOG AREA
    =================================-->


    <!--================================
        START FOOTER
    =================================-->
    <footer>
        <div class="big_footer_wrapper section_padding">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_about_wrapper reveal animated" data-anim="fadeInLeftShort">
                            <div class="footer_logo">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="footer_logo-ifms" style="width: 70%;">
                                </a>
                            </div>
                            <div class="footer_about_us">
                                <p>
                                    Analyser et Améliorer les opérations de votre entreprise.
                                </p>
                            </div>
                            <div class="footer_social">
                                <h4>Soyez connectés</h4>
                                <ul>
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>

                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets sevices reveal animated" data-anim="fadeInRightShort" data-delay="0.2s">
                            <div class="widget_title">
                                <h4> Services et solutions</h4>
                            </div>
                            <div class="footer_links">
                                <ul>
                                    <li><a href="roulant.html">Gestion de parc roulant</a></li>
                                    <li><a href="lifting.html">Gestion de parc lifting</a></li>
                                    <li><a href="exploitation.html">Gestion d'exploitation</a></li>

                                    <li><a href="energie.html">Gestion energitique</a></li>
                                    <li><a href="stock.html">Gestion de stock</a></li>
                                    <li><a href="achat.html">Gestion d'achat</a></li>
                                    <li><a href="gmao.html">GMAO</a></li>
                                    <li><a href="kpi.html">KPI</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 xxs_fullwidth col-xs-6">
                        <div class="footer_widgets contact reveal animated" data-anim="fadeInRightShort" data-delay="0.4s">
                            <div class="widget_title">
                                <h4>Contactez-nous</h4>
                            </div>
                            <div class="footer_address">
                                <ul>
                                    <li><span class="fa fa-paper-plane-o"></span>
                                        <div class="address_right"> Avenue République 3100 Kairouan</div>
                                    </li>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        <div class="number address_right">
                                            <a href="#"> (+216) 99 929 927 <br> (+216) 54 635 309</a>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="fa fa-envelope-o"></span>
                                        <div class="address_right">
                                            <a href="#">contact@ifm-system.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="images/ffoter-ca.png" alt="ifmsystem" width="100%">
                    </div>

                </div>
            </div>
        </div>

        <div class="tiny_footer">
            <div class="container">
                <div class="col-md-12 xs_fullwidth ">
                    <div class="footer_text_wrapper text-center">
                        <p class="footer_text">Copyright © 2019 <a href="#">M3SOFT</a></p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!--================================
                END FOOTER
            =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <!-- jquery latest version -->
    <script src="js/jquery-1.12.3.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery easing 1.3 -->
    <script src="js/jquery.easing1.3.js"></script>

    <!-- Owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>

    <!-- Isotope js-->
    <script src="js/isotope.js"></script>

    <!-- Pakcery layout js-->
    <script src="js/packery.js"></script>

    <!-- waypoint js -->
    <script src="js/waypoints.min.js"></script>

    <!-- google map js -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- smoothscroll js -->
    <script src="js/jqury.smooth-scroll.min.js"></script>

    <!-- jquery camera slider js -->
    <script src="js/jquery.camera.min.js"></script>
    <!-- Counter up -->
    <script src="js/jquery.counterup.js"></script>

    <!-- Waypoint -->
    <script src="js/waypoints.min.js"></script>

    <!-- Main js -->
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
     <script src="lib/sweetalert.min.js"></script>
</body>

<!-- Mirrored from trusttransport.themeebit.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2019 08:17:11 GMT -->
<!---slide---------->
<script>
    let i = 2;


    $(document).ready(function() {
        var radius = 200;
        var fields = $('.itemDot');
        var container = $('.dotCircle');
        var width = container.width();
        radius = width / 2.5;

        var height = container.height();
        var angle = 0,
            step = (2 * Math.PI) / fields.length;
        fields.each(function() {
            var x = Math.round(width / 2 + radius * Math.cos(angle) - $(this).width() / 2);
            var y = Math.round(height / 2 + radius * Math.sin(angle) - $(this).height() / 2);
            if (window.console) {
                console.log($(this).text(), x, y);
            }

            $(this).css({
                left: x + 'px',
                top: y + 'px'
            });
            angle += step;
        });


        $('.itemDot').click(function() {

            var dataTab = $(this).data("tab");
            $('.itemDot').removeClass('active');
            $(this).addClass('active');
            $('.CirItem').removeClass('active');
            $('.CirItem' + dataTab).addClass('active');
            i = dataTab;

            $('.dotCircle').css({
                "transform": "rotate(" + (360 - (i - 1) * 36) + "deg)",
                "transition": "2s"
            });
            $('.itemDot').css({
                "transform": "rotate(" + ((i - 1) * 36) + "deg)",
                "transition": "1s"
            });


        });

        setInterval(function() {
            var dataTab = $('.itemDot.active').data("tab");
            if (dataTab > 6 || i > 6) {
                dataTab = 1;
                i = 1;
            }
            $('.itemDot').removeClass('active');
            $('[data-tab="' + i + '"]').addClass('active');
            $('.CirItem').removeClass('active');
            $('.CirItem' + i).addClass('active');
            i++;


            $('.dotCircle').css({
                "transform": "rotate(" + (360 - (i - 2) * 36) + "deg)",
                "transition": "2s"
            });
            $('.itemDot').css({
                "transform": "rotate(" + ((i - 2) * 36) + "deg)",
                "transition": "1s"
            });

        }, 5000);
       

    });


    /*****/
</script>
<script>
      $(document).ready(function(){
          $('#ajax_form').submit(function(e){
              e.preventDefault();
        $.ajax({
                url:'contact_mail.php',
                type: 'POST',
                showLoaderOnConfirm: true,
                data: $(this).serialize(), // it will serialize the form data
            })
            .done(function(data) {
                if (data !='sent') {
                    //alert("envoyée");
                    swal('Votre message a été envoyé avec succés', 'success');
                } else {
                    swal(' Message non envoyé !', 'error');
                }
            })
            .fail(function() {
                swal('Votre message ne peut pas être envoyé !', 'error');
            });
        });

    });
    </script>

</html>