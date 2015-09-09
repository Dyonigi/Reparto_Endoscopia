<?php
/**
 * la variabile globale
 */

global $config;
/**
 * configurazione Smarty
 */
$config["smarty"]["template_dir"] = "templates/main/template";
$config["smarty"]["compile_dir"] = "templates/main/templates_c";
$config["smarty"]["config_dir"] = "templates/main/configs";
$config["smarty"]["cache_dir"] = "templates/main/cache";


/**
 * configurazione Data Base
 */
$config["mysql"]["database"] = false;
$config["mysql"]["user"] = false;
$config["mysql"]["password"] = false;
$config["mysql"]["host"] = false;
/** 
 * directory javascript
 */
$config["javascript"]["librerie"] = "templates/javascript/scripts/";
$config["javascript"]["jquery"] = "lib/jquery/jquery-ui/external/jquery/jquery.js";
$config["javascript"]["jquery_ui"] = "lib/jquery/jquery-ui/jquery-ui.min.js";
$config["javascript"]["jquery_ui_css"] = "lib/jquery/jquery-ui/jquery-ui.min.css";
$config["javascript"]["template_dir"] = "templates/javascript/template";
$config["javascript"]["compile_dir"] = "templates/javascript/templates_c";
$config["javascript"]["config_dir"] = "templates/javascript/configs";
$config["javascript"]["cache_dir"] = "templates/javascript/cache";
/**
 * directory css
 */
$config["css"] = "templates/css/";
$config["immagini"] = "templates/css/images/";
/**
 * regular expression
 */
$config["regex"]["nome"] = "|^[A-Za-zèùàòé]{1}[a-zA-Z'èùàòé ]+$|";
$config["regex"]["username"] = '/^[a-z]([0-9a-z_\s]{1,20})+$/i';
$config["regex"]["password"] = '|^([a-zA-Z0-9@*#]{8,15})$|';
$config["regex"]["codicecup"] = '/^([0-9A-Z]{10})+$/';
/**
 * credenziali Admin per il primo accesso
 */
$config["Admin"]["username"] = "Amministratore";
$config["Admin"]["password"] = "Amministratore1";
/**
 * debug
 */
$config["debug"] = false;
function debug($debug) {
    global $config;
    if($config["debug"]){
        ChromePhp::log($debug);
    }
}
?>