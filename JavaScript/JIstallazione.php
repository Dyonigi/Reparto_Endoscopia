<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JIstallazione
 * genera gli script javascript
 * da caricare quando l'amministratore deve istallare l'applicazione
 * 
 */
class JIstallazione extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function HeadIstallazione() {
       $this->assign('ConfiguraDB',$this->libreriejavascript.'ConfiguraDB.js');
       return  $this->fetch('HeadIstallazione.tpl');
    }
    
}
?>