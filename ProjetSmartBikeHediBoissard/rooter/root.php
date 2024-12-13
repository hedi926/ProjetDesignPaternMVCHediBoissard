<?php

$requestUri = $_SERVER['REQUEST_URI'];

$requestUri = trim($requestUri, '/');

switch ($requestUri) {
    case '':
        require_once 'index.php';
        break;

    case 'contact':
        require_once 'contact.php';
        break;

    case 'commande':
        require_once 'commande.php';
        break;

    case 'velos':
        require_once 'velos.php';
        break;

    default:
        echo "Page non trouvée!";
        break;
}
