<?php
function maakLogo()
{
    return "<a href='index.php'><img src='images/logo.png' alt='VioletView logo'></a>";
}
define('HTML_LOGO', maakLogo());

function maakKleinLogo()
{
    return "<a href='index.php'><img src='images/logo.png' alt='VioletView logo' class='small_logo'></a>";
}
define('HTML_KLEIN_LOGO', maakKleinLogo());


//Dit maken met array en foreach loop!
function maakNavigatiebalk()
{
    return "<label for='menu-toggle'>Menu</label>
    <input type='checkbox' id='menu-toggle'>
    <ul>
        <li>
            <a href='index.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Home-icon.svg/24px-Home-icon.svg.png' alt='Home' class='small_icon'></a>
        </li>
        <li>
            <a href='filmoverzicht.php'>Films</a>
        </li>
        <li>
            <a href='over_ons.php'>Over ons</a>
        </li>
        <li>
            <a href=''>Log In</a>
        </li>
        <li>
            <a href='abonnement.php'>Sign Up</a>
        </li>
        <li>
            <a href='profiel.php'>Profiel</a>
        </li>
    </ul>";
}
define('HTML_NAV', maakNavigatiebalk());

function maakFooter(){
    return 'Dit is een footer, leuk hè?';
}
define('HTML_FOOTER', maakFooter());