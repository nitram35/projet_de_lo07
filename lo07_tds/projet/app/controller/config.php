<!--   debut config -->
<?php

// Utile pour le débugage car c'est un interrupteur pour les echos et print_r.
if (!defined('DEBUG')) {
    define('DEBUG', FALSE);
}
$dsn = 'mysql:dbname=gandonma;host=localhost;charset=utf8';
$username = 'gandonma';
$password = 'xRObCwcy';

// chemin absolu vers le répertoire du projet SUR DEV-ISI 
$root = dirname(dirname(__DIR__)) . "/";


if (DEBUG) {
    echo("<ul>");
    echo(" <li>dsn = $dsn</li>");
    echo(" <li>username = $username</li>");
    echo(" <li>password = $password</li>");
    echo("<li>---</li>");
    echo(" <li>root = $root</li>");

    echo("</ul>");
}
?>

<!--   fin config -->



