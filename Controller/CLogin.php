<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * gestisce la registrazione e il login degli utenti
 */
class CLogin extends Controller {
    /**
     *
     * @var string $avvisoLogin avviso da mostrare nella form di login
     */
    public $avvisoLogin=null;

    /**
     * effettua il login
     * 
     * @param array(username,password) $credenziali username e password
     */
    public function login ($credenziali) 
    {
                
        $FUtente= USingleton::getInstance('FUtente');
        $EUtente = $FUtente->autentica($credenziali);
        if($EUtente){
            if($EUtente->autenticato()){
                $Sessione= USingleton::getInstance('USession');
                foreach($EUtente as $key => $value) {
                    $Sessione->imposta_valore($key,$value);
                }
                $Sessione->imposta_valore('autenticato',TRUE);
                
                
            } else $this->avvisoLogin='Username o Password errati';
        } else $this->avvisoLogin='Username o Password errati';
        
    }
    
    /**
     * registra un nuovo utente
     * 
     * 
     */
    public function registrazione () 
    {
        $VLogin = USingleton::getInstance('VLogin');
        $credenziali=$VLogin->getUserPass();
        $EUtente= USingleton::getInstance('EUtente');
        $valid=true;
        if(URegExp::RegExp($credenziali['username'],'username')){
            $EUtente->username = $credenziali['username'];
        }else{
            $valid=false;
        }
        if(URegExp::RegExp($credenziali['password'],'password')){
            $EUtente->password = $credenziali['password'];
        }else{
            $valid=false;
        }
        $EUtente->privilegi = $VLogin->getRequest('mansione');
        $nome = $VLogin->getRequest('nome');
        if(URegExp::RegExp($nome,'nome')){
            $EUtente->nome = $nome;
        }else{
            $valid=false;
        }
        $cognome = $VLogin->getRequest('cognome');
        if(URegExp::RegExp($cognome,'nome')){
            $EUtente->cognome = $cognome;
        }else{
            $valid=false;
        }
        $EUtente->generaCodiceAttivazione();
        $FUtente= USingleton::getInstance('FUtente');
        $VBackground= USingleton::getInstance('VBackground');
        if($valid){
            if($FUtente->store($EUtente)){
                
                    $this->avvisoLogin='Registrazione completata con successo. Controllare la propria email per attivare quest account';
                
                }
            else {
                $this->avvisoLogin='Si è verificato un errore, riporovare la Registrazione';
            }
    } else {
            $this->avvisoLogin='I dati inseriti non sono corretti, riporovare la Registrazione';
        }
        $VBackground->showguest();
        
        
    }
    /**
     * conferma che un utente è stato riconosciuto da un Admin
     * 
     * 
     */
    public function confermautente () 
    {
        $FUtente= USingleton::getInstance('FUtente');
        $VLogin = USingleton::getInstance('VLogin');
        $FUtente->confermautente($VLogin->getRequest('username'));
    }
    /**
     * effettua il login
     * 
     * @param array(nome,cognome,codice CUP) $credenziali dati del paziente
     */
    public function loginpaziente ($credenziali) 
    {
        
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente = $FPaziente->autentica($credenziali);
        if($EPaziente->autenticato()){
            $Sessione= USingleton::getInstance('USession');
            $Sessione->imposta_valore('codicecup',$EPaziente->codicecup);
            $Sessione->imposta_valore('nome',$EPaziente->nome);
            $Sessione->imposta_valore('cognome',$EPaziente->cognome);
            $Sessione->imposta_valore('autenticato',TRUE);
            $Sessione->imposta_valore('confermato',TRUE);
            $Sessione->imposta_valore('privilegi',5);
        };
    }
    /**
     * effettua il logout
     * 
     * 
     */
    public function logout () 
    {
        $Sessione= USingleton::getInstance('USession');
        $Sessione->logout();
    }
    /**
     * restituisce il codice CUP del paziente che ha effettuato l'accesso
     * 
     * @return string
     */
    public function getcodicecup () 
    {
        $Sessione= USingleton::getInstance('USession');
        return $Sessione->leggi_valore('codicecup');
    }
    
    /**
     * restituisce l'username dell'utente che ha effettuato l'accesso
     * 
     * @return string
     */
    public function getusername () 
    {
        $Sessione= USingleton::getInstance('USession');
        $return= $Sessione->leggi_valore('username');
        if(!$return){
            $return=$Sessione->leggi_valore('nome').' '.$Sessione->leggi_valore('cognome');
        }
        return $return;
    }
    /**
     * restituisce i privilegi dell'utente 
     * 
     * @return int 1 = Magazziniere ; 2 = Infermiere ; 3 = Dottore ; 4 = Admin ; 5 = Paziente ; 
     * 6 = Utente non confermato da un Admin ; 0 = Utente non registrato
     */
    public function privilegi() {
        $Sessione= USingleton::getInstance('USession');
        
        if($Sessione->leggi_valore('autenticato')){
            if($Sessione->leggi_valore('confermato')){
            return $Sessione->leggi_valore('privilegi');
            } else return 6;
        } else return 0;
    }
    /**
     * Contrlla se l'username esista già.
     * @return boolean
     */
    public function checkusernameexist() {
        $FUtente= USingleton::getInstance('FUtente');
        $VLogin = USingleton::getInstance('VLogin');
        if($FUtente->load($VLogin->getRequest('username'))){
            debug('CLogin username esiste gia');
            echo 'true';
        } else{
            debug('CLogin username è nuovo');
            echo 'false';
        }
    }
    
}

?>