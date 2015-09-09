<?php
/*
 * Effettuo il redirect a main/index.php
 */
require_once 'includes/autoload.inc.php';
require_once 'includes/config.inc.php';
//Chrome debugger
require_once 'lib/ChromePhp.php';

global $config;
/**
 * controlla se il database è già stato configurato
 */
if($config['mysql']['database']){

    //chiama CHome
    $CHome=USingleton::getInstance('CHome');
    //CHome effettua il login e mostra la pagina iniziale
    $CHome->smista();
    }
else {
    //chiama CIstallazione
    $CIstallazione=USingleton::getInstance('CIstallazione');
    //CIstallazione mostra l'avviso che l'applicazione web non è stata configurata
    //e chiede le credenziali dell'Admin
    $CIstallazione->smista();
}

?>
