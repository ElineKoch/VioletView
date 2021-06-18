<?php

session_start();

require_once('datamodel/db_connectie.php');

define('HTML_LOGO', maakLogo());
define('HTML_KLEIN_LOGO', maakKleinLogo());
define('HTML_NAV', maakNavigatiebalk());
define('HTML_FOOTER', maakFooter());

function maakLogo()
{
    return "<a href='index.php'><img src='images/logo.png' alt='VioletView logo'></a>";
}

function maakKleinLogo()
{
    return "<a href='index.php'><img src='images/logo.png' alt='VioletView logo' class='small_logo'></a>";
}

function maakNavigatiebalk()
{   
    $menuToggle = "<label for='menu-toggle'>Menu</label><input type='checkbox' id='menu-toggle'>";
    
    $navElementen = [
        'home' => "<a href='index.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/24px-Home-icon.svg.png' alt='Home' class='small_icon'></a>",
        'films' =>  "<a href='films.php'>Films</a>",
        'overOns' => "<a href='over_ons.php'>Over ons</a>",
    ];

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
        $navElementen = array_merge($navElementen, [
            'profiel' => "<a href='profiel.php'>{$_SESSION['gebruikersnaam']}</a>",
            'logOut' => "<a href='log_uit.php'>Log Out</a>"
        ]);
    } else {
        $navElementen = array_merge($navElementen, [
            'logIn' => "<a href='inloggen.php'>Log In</a>",
            'signUp' => "<a href='abonnement.php'>Sign Up</a>",
        ]);
    }

    $html = $menuToggle . "<ul>";
    foreach ($navElementen as $navElement) {
        $html .= "<li>$navElement</li>";
    }
    $html .= "</ul>";

    return $html;
}

function maakFooter()
{
    return '&copy VioletView 2021 | website gemaakt door Eline Koch';
}



