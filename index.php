<?php
$request = $_SERVER['REQUEST_URI'];
$request_parts = explode('?', $request, 2);
$requested_page = $request_parts[0];

switch ($requested_page) {
    case '/':
        $mypage = "home";
        break;
    case '':
        $mypage = "home";
        break;
    case '/muziek':
        $mypage = "muziek";
        break;
    case '/mensen':
        $mypage = "mensen";
        break;
    case '/meedoen':
        $mypage = "meedoen";
        break;
    case '/doneer':
        $mypage = "doneer";
        break;
    case '/documenten':
        $mypage = "documenten";
        break;
    case '/aanmelden':
        $mypage = "aanmelden";
        break;
    default:
        http_response_code(404);
        $mypage = "error";
        break;

        if (strpos($request, "?") !== false) {
            $mypage = "home";
        }
}
?>

<!DOCTYPE html>
<html lang='nl'>

<head>
    <meta charset="UTF-8">
    <link rel='icon' href='img/cursor22.png' type='image/x-icon' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <!-- Primary Meta Tags -->
    <title>STEP - Stichting Ensemble Project</title>
    <meta name="title" content="STEP - Stichting Ensemble Project">
    <meta name="description" content="

Stichting Ensemble Project (STEP) biedt muzikanten de mogelijkheid orkestwerken te spelen voor kleine, unieke bezettingen van vooral moderne componisten.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.facebook.com/stepensemble">
    <meta property="og:title" content="STEP - Stichting Ensemble Project">
    <meta property="og:description" content="

Stichting Ensemble Project (STEP) biedt muzikanten de mogelijkheid orkestwerken te spelen voor kleine, unieke bezettingen van vooral moderne componisten.">
    <meta property="og:image" content="img/fblogo.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="STEP - Stichting Ensemble Project">
    <meta property="twitter:description" content="

Stichting Ensemble Project (STEP) biedt muzikanten de mogelijkheid orkestwerken te spelen voor kleine, unieke bezettingen van vooral moderne componisten.">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

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
                        <a class='waves-effect waves-light btn btnblack' href="/doneer">Doneer</a>
                    </div>
                    <div class="row hide-on-med-and-downpaddingrow">

                    </div>
                    <div class="row menurow right lowermenu">
                        <div class="nav-content ">
                            <ul class="tabs tabs-transparent">
                                <li class="tab menulink"><a target="_self" href="/muziek">Muziek</a></li>
                                <li class=" tab menulink"><a target="_self" href="/mensen">Mensen</a></li>
                                <li class="menulink tab"><a target="_self" href="/meedoen">Meedoen</a></li>

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

            case "documenten":
                @include("pages/documenten.php");
                break;

            case "aanmelden":
                @include('pages/aanmelden.php');
                break;

                /* ERROR */
            default:
                @include("pages/404.php");
                break;
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
                        professionals de mogelijkheid te geven orkestwerken te spelen voor kleine, unieke bezettingen.
                        STEP richt zich hierbij in het bijzonder op werken van moderne componisten. Momenteel is Philip
                        Venema STEP's huiscomponist en staat STEP onder muzikale leiding van Sjoerd Haver.
                    </p>
                </div>
                <div class="col l1">

                </div>
                <div class="col l3 s12 links">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="mailto:secretaris@ensembleproject.nl">secretaris@ensembleproject.nl</a></li>
                        <li><span class="grey-text text-lighten-3">+31 6 365 482 97</span></li>
                        <li><a class="grey-text text-lighten-3" target="_blank" href="https://www.facebook.com/stepensemble">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3 modal-trigger" target="_self" href="#nieuwsbrief">Nieuwsbrief</a></li>
                        <li><a class="grey-text text-lighten-3" href="/doneer">Doneer</a></li>
                        <li><a class="grey-text text-lighten-3" href="/documenten">Meer informatie</a></li>
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
        <!-- https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec -->
        <div class="row">
            <form name='submit-to-google-sheet' class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input name='email' id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <label>
                            <input type="checkbox" />
                            <span>Ik ga akkoord met de <a href="#">privacy voorwaarden</a>.</span>
                        </label>
                    </p>
                </div>
                <button type='submit'>Send</button>
            </form>


            <script>
                const scriptURL = 'https://script.google.com/macros/s/AKfycbzOpO3bJwBfW8YXBEtpVVnG9nZN5-RYRbT9zxHhi-CRWTfQ8S0U/exec'
                const form = document.forms['submit-to-google-sheet']

                form.addEventListener('submit', e => {
                    e.preventDefault()
                    fetch(scriptURL, {
                            method: 'POST',
                            body: new FormData(form)
                        })
                        .then(response => console.log('Success!', response))
                        .catch(error => console.error('Error!', error.message))
                })
            </script>


        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Sluit</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat disabled">Verstuur</a>
    </div>
</div>

</html>