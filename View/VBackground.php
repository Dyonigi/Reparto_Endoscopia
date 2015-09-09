<?php
/**
 * Classe VBackground, estende la classe view e gestisce la visualizzazione e formattazione delbackground, 
 * @package View
 */
class VBackground extends View {
    /**
     * carica l'immagine del banner
     */
    public function __construct() {
        parent::__construct();
        global $config;
       $this->assign('banner',$config["immagini"].'stage-medical.jpg');
    }
    
   
   /**
    * assegna i contenuti che può visualizzare un infermiere
    */
   public function showinfermiere() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Infermiere'));
       $this->assign('Main',$VMain->Tabs(2));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');
    }
    /**
    * assegna i contenuti che può visualizzare un infermiere
    */
   public function showguest() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Guest'));
       $this->assign('Main',$VMain->Tabs(0));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showlogin());
       $this->display('background.tpl');

    }
    /**
    * assegna i contenuti da visualizzare quando tenta di accedere un utente
     *  che non è ancora stato confermato da un Admin
    */
   public function shownonconfermato() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('NonConfermato'));
       $this->assign('Main',$VMain->Tabs(6));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');

    }
    /**
    * assegna i contenuti che può visualizzare un dottore
    */
   public function showdottore() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Dottore'));
       $this->assign('Main',$VMain->Tabs(3));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');
    }
    /**
    * assegna i contenuti che può visualizzare un Admin
    */
   public function showadmin() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Admin'));
       $this->assign('Main',$VMain->Tabs(4));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');
    }
    /**
    * assegna i contenuti che può visualizzare un magazziniere
    */
   public function showmagazziniere() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Magazziniere'));
       $this->assign('Main',$VMain->Tabs(1));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');
    }
    /**
    * assegna i contenuti che può visualizzare un paziente
    */
   public function showpaziente() {
       $VHead=USingleton::getInstance('VHead');
       $VMain = USingleton::getInstance('VMain');
       $this->assign('Head',$VHead->Head('Paziente'));
       $this->assign('Main',$VMain->Tabs(5));
       $VLogin = USingleton::getInstance('VLogin');
       $this->assign('loginform',$VLogin->showWelcome());
       $this->display('background.tpl');
    }
    
}

?>