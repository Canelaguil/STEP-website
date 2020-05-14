<?php
session_start();
?>

<!DOCTYPE html>
<html lang='nl'>

<head>
    <title>STEP - Home</title>
    <link rel='icon' href='img/cursor22.png' type='image/x-icon'/ >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div class="main container z-depth-3">
        <div class="nav-wrapper z-depth-2">
            <div class="blackbar">
            </div>
            <div class="row navcols">
                <div class="col s12 m12 l4 left">
                    <img src="./img/steplogo.png" alt="Logo STEP" href="index.php?mypage=home" class="brand-logo steplogo center">
                </div>
                <div class="col s12 m12 l8 colmenuright">
                    <div class="row uppermenu hide-on-med-and-down">
                        <a class='btn btntransparent'>Nieuwsbrief</a>
                        <a class='waves-effect waves-light btn btnblack'>Doneer</a>
                    </div>
                    <div class="row hide-on-med-and-downpaddingrow">

                    </div>
                    <div class="row menurow right lowermenu">
                        <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->
                        <div class="nav-content ">
                            <ul class="tabs tabs-transparent">
                                <li class="tab menulink"><a href="/?mypage=mensen">Muziek</a></li>
                                <li class="tab menulink"><a href="./index.php?mypage=mensen">Mensen</a></li>
                                <li class="menulink tab" href="http://localhost:8000/?mypage=mensen"><a href="http://localhost:8000/?mypage=mensen">Meedoen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if(isset($_GET['mypage']) && $_GET['mypage'] != '' ){    
            $mypage = $_GET['mypage']; // page being requested
        }else{
            $mypage = 'home'; // default page
        }
        
        switch ($mypage) {

            /* MAIN MENUS */
            case "home":
                @include("pages/home.php");
            break;
            
            case "mensen":
                @include("pages/mensen.php");
            break;

            case "meedoen":
                @include("pages/meedoen.php");
            break;

            case "muziek":
                @include("pages/muziek.php");
            break;

            /* SECONDARY PAGES */

            // case "meedoen":
            //     @include("pages/meedoen.php");
            // break;

            // case "muziek":
            //     @include("pages/muziek.php");
            // break;

            /* DEFAULT */

            // default:
            //     @include("pages/home.php");
            // break;
        }

        ?>


    </div>

    <footer class="page-footer fbar1 ">
        <div class="container">
            <div class="row fbtext">
                <div class="col l8 s12">
                    <h5 class="white-text">Over STEP</h5>
                    <p class="grey-text text-lighten-4">
                        Stichting Ensemble Project (STEP) is in 2019 opgericht met het doel studenten en jonge
                        proffesionals de mogelijkheid te geven orkestwerk te spelen voor kleine, unieke bezettingen.
                        STEP richt zich hierbij bijzonder op werken van moderne componisten. Momenteel is Philip
                        Venema STEP's huiscomponist en staat STEP onder leiding van Sjoerd Haver.
                    </p>
                </div>
                <div class="col l1">

                </div>
                <div class="col l3 s12 links">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Doneer</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Nieuwsbrief</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Huiscomponist</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright fbar2">
            <div class="container">
                © 2020 Stichting Ensemble Project
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>

</html>