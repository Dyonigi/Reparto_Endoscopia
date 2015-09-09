<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JGuest
 * genera gli script javascript
 * da caricare quando l'utente non è registrato
 * 
 */
class JGuest extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
        $this->assign('Tabclick',$this->Tabclick(0));
        $this->assign('LogInWindow',$this->libreriejavascript.'LogInWindow.js');
        return  $this->fetch('HeadGuest.tpl');
    }
    
}
?>