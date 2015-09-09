<?php
/**
 * Classe VLogin, estende la classe view
 * gestisce la visualizzazione della finestra di login e benvenuto
 *
 * @package View
 */
class VLogin extends View {
    /**
     * visualizza la finestra di Log in
     */
    public function showlogin() {
        $CLogin=USingleton::getInstance('CLogin');
        $this->assign('avviso',$CLogin->avvisoLogin);
        debug('CLogin ha lasciato un avviso '.$CLogin->avvisoLogin);
        return $this->fetch('loginform.tpl');
    }
    
    /**
     * visualizza la finestra di benvenuto
     * 
     * @return template
     */
    public function showWelcome() {
        $CLogin=USingleton::getInstance('CLogin');
        $this->assign('username',$CLogin->getusername());
        return $this->fetch('welcome.tpl');
    }
    
    /**
     * mostra il dialog in cui verrà riportato il risultato della configurazione del DataBase
     */
    public function risultatoconfigurazione() {
        return $this->fetch('risultatoconfigurazione.tpl');
    }
    /**
     * mostrare il messaggio di avvenuta configurazione del database 
     */
    public function istallazionecompletata() {
        $this->display('istallazionecompletata.tpl');
    }
    /**
     * mostrare il messaggio di configurazione del database errata
     */
    public function riprovaconnessione() {
        $this->display('riprovaconnessione.tpl');
    }
}
?>
