<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JAdmin
 * genera gli script javascript
 * da caricare quando effettua l'accesso un Admin
 * 
 */
class JAdmin extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',$this->Tabclick(4));
       $this->assign('ElencoDottori',$this->libreriejavascript.'ElencoDottori.js');
       $this->assign('ModificaHome',$this->libreriejavascript.'ModificaHome.js');
       return  $this->fetch('HeadAdmin.tpl');
    }
    
}
?>