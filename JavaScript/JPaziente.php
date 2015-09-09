<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JPaziente
 * genera gli script javascript
 * da caricare quando effettua l'accesso un Paziente
 * 
 */
class JPaziente extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',$this->Tabclick(5));
       
       return  $this->fetch('HeadPaziente.tpl');
    }
    
}
?>