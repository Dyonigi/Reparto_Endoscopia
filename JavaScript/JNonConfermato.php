<?php
require_once 'lib/smarty/Smarty.class.php';


/**
 * Classe JNonConfermato
 * genera gli script javascript
 * da caricare quando effettua l'accesso un utente che non è ancora stato confermato da un Admin
 * 
 */
class JNonConfermato extends JavaScript 
{
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     */
    public function Head() {
       $this->assign('LogOutWindow',$this->libreriejavascript.'LogOutWindow.js');
       $this->assign('Tabclick',  $this->Tabclick(6));
       return  $this->fetch('HeadConfermato.tpl');
    }
    
}
?>