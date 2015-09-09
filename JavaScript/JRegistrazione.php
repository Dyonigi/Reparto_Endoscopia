<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JRegistrazione
 * genera gli script javascript
 * da caricare quando un utente vuole registrarsi
 * 
 */
class JRegistrazione extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('Registrazione',$this->libreriejavascript.'Registrazione.js');
       return  $this->fetch('HeadRegistrazione.tpl');
    }
    
}
?>