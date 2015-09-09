<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JDottore
 * genera gli script javascript
 * da caricare quando effettua l'accesso un Dottore
 * 
 */
class JDottore extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',$this->Tabclick(3));
       $this->assign('AggiungiCategoria',$this->libreriejavascript.'AggiungiCategoria.js');
       $this->assign('JSEsame',$this->libreriejavascript.'AggiungiEsame.js');
       $this->assign('AggiungiPaziente',$this->libreriejavascript.'AggiungiPaziente.js');
       $this->assign('ElencoInfermieri',$this->libreriejavascript.'ElencoDottori.js');
       return  $this->fetch('HeadDottore.tpl');
    }
    
}
?>