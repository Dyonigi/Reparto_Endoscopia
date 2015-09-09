<?php
/**
 * @access public
 * @package Controller
 */
/**
 * Classe CIstallazione eredita da Controller
 * mostra le pagine per configurare l'applicazione web
 */
class CIstallazione extends Controller {
    
   
    
    
    /**
     * mostra la prima pagina
     * avvisa che l'applicazione non è stata configurata e chiede le credenziali dell'Admin
     *       
     * 
     * @return html
     */
    public function start()
    {
        $VBackground=USingleton::getInstance('VBackground');
        $VHead=USingleton::getInstance('VHead');
        $VMain=USingleton::getInstance('VMain');
        $VBackground->assign('Head',$VHead->HeadIstallazione());
        $VBackground->assign('Main',$VMain->MainLoginAdmin());
        $VBackground->assign('loginform',NULL);
        $VBackground->display('background.tpl');
    }
    /**
     * effettua il login dell'amministratore
     *       
     * 
     * @return html
     */
    public function loginistallazione()
    {
        global $config;
        $View=USingleton::getInstance('View');
        $credenziali=$View->getUserPass();
        debug('CIstallazione sta effettuando laccesso di'.$credenziali['password']);
        if($credenziali['username']=$config['Admin']['username'] && $credenziali['password']=$config['Admin']['password']){
            $this->configuradb();
        }
        else {
            $this->start();
        }
        
    }
    /**
     * mostra la form per configurare il DataBase
     *       
     * 
     * @return html
     */
    public function configuradb()
    {
        $VBackground=USingleton::getInstance('VBackground');
        $VHead=USingleton::getInstance('VHead');
        $VMain=USingleton::getInstance('VMain');
        $VLogin=USingleton::getInstance('VLogin');
        $VBackground->assign('Head',$VHead->HeadIstallazione());
        $VBackground->assign('Main',$VMain->configuradb());
        $VBackground->assign('loginform',$VLogin->risultatoconfigurazione());
        $VBackground->display('background.tpl');
    }
    /**
     * prova la connessione al data base
     *       
     * 
     * @return html
     */
    public function provaconfigurazionedb()
    {
        $View=USingleton::getInstance('View');
        $database = $View->getRequest('database');
        $user = $View->getRequest('user');
        $password = $View->getRequest('password');
        $host = $View->getRequest('host');
        
        $VLogin=USingleton::getInstance('VLogin');
        $this->scrividbsuconfig($host,$password,$user,$database);
        debug('CIstallazione ha provato a configurare il DB '.$database);
        $Fdb=USingleton::getInstance('Fdb');
        if ($Fdb->popola()){
            $VLogin->istallazionecompletata();
        }
        else {
            $this->cancelladabconfig();
            $VLogin->riprovaconnessione();
        }
        
    }
    /**
     * scrive sul file config la configurazione del Data Base
     */
    public function scrividbsuconfig($host,$password,$user,$database) {
        debug('CIstallazione sta scrivendo su config '.$host.$password.$user.$database);
        $file = file('includes/config.inc.php'); // legge il file config
        $file[22] = '$config["mysql"]["database"] = "'.$database.'";'."\n";
        $file[23] = '$config["mysql"]["user"] = "'.$user.'";'."\n";
        $file[24] = '$config["mysql"]["password"] = "'.$password.'";'."\n";
        $file[25] = '$config["mysql"]["host"] = "'.$host.'";'."\n";
        file_put_contents('includes/config.inc.php', implode('', $file));
        global $config;
        $config["mysql"]["database"] = $database;
        $config["mysql"]["user"] = $user;
        $config["mysql"]["password"] = $password;
        $config["mysql"]["host"] = $host;
    }
    /**
     * ancella dal file config la configurazione del Data Base
     */
    public function cancelladabconfig() {
        $file = file('includes/config.inc.php'); // legge il file config
        $file[22] = '$config["mysql"]["database"] = FALSE;'."\n";
        $file[23] = '$config["mysql"]["user"] = FALSE;'."\n";
        $file[24] = '$config["mysql"]["password"] = FALSE;'."\n";
        $file[25] = '$config["mysql"]["host"] = FALSE;'."\n";
        file_put_contents('includes/config.inc.php', implode('', $file));
    }
    /**
     * redirect a configuradb
     */
    public function logout() {
        $this->configuradb();
    }
    

}
?>