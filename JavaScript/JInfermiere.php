<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JInfermiere
 * genera gli script javascript
 * da caricare quando effettua l'accesso un Infermiere
 * 
 */
class JInfermiere extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',  $this->Tabclick(2));
       $this->assign('AggiungiPaziente',$this->libreriejavascript.'AggiungiPaziente.js');
       return  $this->fetch('HeadInfermiere.tpl');
    }
    
}
?>