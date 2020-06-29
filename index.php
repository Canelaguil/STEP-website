<?php
// session_start();

$request = $_SERVER['REQUEST_URI'];
$mypage = "home";

switch ($request) {
    case '/' :
        $mypage = "home";
        break;
    case '' :
        $mypage = "home";
        break;
    case '/muziek' :
        $mypage = "muziek";
        break;
    case '/mensen' :
        $mypage = "mensen";
        break;
    case '/meedoen' :
        $mypage = "meedoen";
        break;
    case '/doneer' :
        $mypage = "doneer";
        break;
    // default:
    //     http_response_code(404);
    //     require __DIR__ . '/views/404.php';
    //     break;
}
?>

<!DOCTYPE html>
<html lang='nl'>

<head>
    <title>STEP - Home</title>
    <link rel='icon' href='img/cursor22.png' type='image/x-icon' />
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
                    <a target="_self" href="/"><img src="./img/steplogo.png" alt="Logo STEP" class="brand-logo steplogo center"></a>
                </div>
                <div class="col s12 m12 l8 colmenuright">
                    <div class="row uppermenu hide-on-med-and-down">
                        <a target="_self" class='btn btntransparent modal-trigger' href="#nieuwsbrief">Nieuwsbrief</a>
                        <a class='waves-effect waves-light btn btnblack' href="/doneer"">Doneer</a>
                    </div>
                    <div class="row hide-on-med-and-downpaddingrow">

                    </div>
                    <div class="row menurow right lowermenu">
                        <div class="nav-content ">
                            <ul class="tabs tabs-transparent">
                                <li class="tab menulink"><a target="_self" href="/muziek"">Muziek</a></li>
                                <li class=" tab menulink"><a target="_self" href="/mensen">Mensen</a></li>
                                <li class="menulink tab"><a target="_self" href="/meedoen"">Meedoen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

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

            case "doneer":
                @include("pages/doneer.php");
                break;

                /* DEFAULT */

                // default:
                //     @include("pages/home.php");
                // break;
        }

        ?>
    
    <div class="blackbar"></div>

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
                        Venema STEP's huiscomponist en staat STEP onder muzikale leiding van Sjoerd Haver.
                    </p>
                </div>
                <div class="col l1">

                </div>
                <div class="col l3 s12 links">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="mailto:secretaris@ensembleproject.nl">secretaris@ensembleproject.nl</a></li>
                        <li><span class="grey-text text-lighten-3">+31 6 365 482 97</span></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/stepensemble">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3 modal-trigger" target="_self" href="#nieuwsbrief">Nieuwsbrief</a></li>
                        <li><a class="grey-text text-lighten-3" href="/doneer">Doneer</a></li>
                        <!-- <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li> -->
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


<div id="nieuwsbrief" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Aanmelden nieuwsbrief</h4>
                <p>
                    Op dit moment is het nog niet mogelijk je via de website in te schrijven voor onze nieuwsbrief. Stuur een email naar <a href="mailto:promotie@ensembleproject.nl">promotie@ensembleproject.nl</a> om je op te geven!.
                </p>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <!-- <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div> -->
                        </div>
                        <div class="row">
                            <p>
                            <!-- <label>
                                <input type="checkbox" />
                                <span>Ik ga akkoord met de <a href="#">privacy voorwaarden</a>.</span>
                            </label> -->
                            </p>
                        </div>
                    </form> 
                 </div> 
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Sluit</a>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat disabled">Verstuur</a>
            </div>
        </div>

</html>
