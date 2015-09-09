<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JMagazziniere
 * genera gli script javascript
 * da caricare quando effettua l'accesso un Magazziniere
 * 
 */
class JMagazziniere extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',$this->Tabclick(1));
       $this->assign('AggiungiMateriale',$this->libreriejavascript.'AggiungiMateriale.js');
       
       return  $this->fetch('HeadMagazziniere.tpl');
    }
    
}
?>