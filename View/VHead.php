<?php
/**
 * Classe VHead, estende la classe view
 * gestisce la visualizzazione della finestra principale
 *
 * @package View
 */
class VHead extends View {
    /**
     * lancia JavaScript per configurare JQuery-UI
     */
    public function __construct() {
        parent::__construct();
        //inizializza jquery
       $JavaScript = USingleton::getInstance('JavaScript');
       $this->assign('jssource',$JavaScript->javascript_surce());
       
       $this->assign('jqueryTabs',$JavaScript->jqueryUItab('tabs'));
       
    }
   
    /**
     * restituisce l'head della pagina per configurare l'applicazione
     *        
     * 
     * @return html
     */
    public function HeadIstallazione()
    {
        $JIstallazione = USingleton::getInstance('JIstallazione');
        $this->assign('HeadUtente',$JIstallazione->HeadIstallazione());
        return $this->fetch('head.tpl');
    }
    /**
     * restituisce l'head della pagina
     * 
     * @param string $privilegi l'head cambia a seconda dell'utente che ha effettuato l'accesso
     */
    public function Head($privilegi) {
        $JavaScript = USingleton::getInstance("J$privilegi");
        $this->assign('HeadUtente',$JavaScript->Head());
        return $this->fetch('head.tpl');
    }
}
?>
