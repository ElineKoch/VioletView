<?php
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
        'films' =>  "<a href='filmoverzicht.php'>Films</a>",
        'overOns' => "<a href='over_ons.php'>Over ons</a>",
        'logIn' => "<a href=''>Log In</a>",
        'signUp' => "<a href='abonnement.php'>Sign Up</a>",
        'profiel' => "<a href='profiel.php'>Profiel</a>"
    ];

    $html = $menuToggle . "<ul>";
    foreach ($navElementen as $navElement) {
        $html .= "<li>$navElement</li>";
    }
    $html .= "</ul>";

    return $html;
}

function maakFooter()
{
    return 'Dit is een footer.';
}
