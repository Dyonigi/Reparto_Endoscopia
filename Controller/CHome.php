<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Classe CHome eredita da Controller
 * istanzia delle View per mostrare i contenuti del sito web richiesti dagli utenti che hanno i permessi relativi
 * chiama gli altri Controller per risolvere le richieste fatte dagli utenti che hanno i permessi relativi
 */
class CHome extends Controller {

    /**
     * chiama showbackground
     * compatibilità con una versione precedente
     */
    public function start () 
    {
        $this->showbackground();
    }
    /**
     * chiama CLogin per effettuare il login e ricaricare la pagina
     */
    public function login () 
    {
        $CLogin = USingleton::getInstance('CLogin');
        $VLogin = USingleton::getInstance('VLogin');
        $CLogin->login($VLogin->getUserPass());
        $this->showbackground();
        
    }
    
    /**
     * chiama CLogin per registrare un nuovo utente
     */
    public function registrazione () 
    {
        $CLogin = USingleton::getInstance('CLogin');
        $CLogin->registrazione();
                
    }
    /**
     * chiama CLogin per effettuare il login di un paziente e ricaricare la pagina
     */
    public function loginpaziente () 
    {
        $CLogin = USingleton::getInstance('CLogin');
        $VLogin = USingleton::getInstance('VLogin');
        $CLogin->loginpaziente($VLogin->getPaziente());
        $this->showbackground();
        
    }
    /**
     * chiama CLogin per effettuare il logout e ricaricare la pagina
     */
    public function logout () 
    {
        $CLogin = USingleton::getInstance('CLogin');
        $CLogin->logout();
        $this->showbackground();
        
    }
    /**
     * Chiama VBackground per mostrare i contenuti a seconda dei privilegi dell'utente
     */
    public function showbackground () 
    {
        $VBackground= USingleton::getInstance('VBackground');
        //chiede a CLogin quali sono i privilegi dell'utente che si è connesso
        $CLogin = USingleton::getInstance('CLogin');
        switch ($CLogin->privilegi()) {
            case 1://Magazziniere
                $VBackground->showmagazziniere();

                break;
            case 2://Infermiere
                $VBackground->showinfermiere();

                break;
            case 3://Dottore
                $VBackground->showdottore();

                break;
            case 4://Admin
                $VBackground->showadmin();

                break;
            case 5://Paziente
                $VBackground->showpaziente();

                break;
            case 6://Utente non confermato da un admin
                $VBackground->shownonconfermato();

                break;
            case 0://Utente non registrato
                $VBackground->showguest();

                break;
            default:
                break;
        }
        
        
    }
    
    
    /**
     * mostra l'elenco dei pazienti
     */
    public function showpazienti() {
        
        $VMain= USingleton::getInstance('VMain');
        
        $VMain->showelencopazienti();
        
    }
    /**
     * mostra i dettagli dell'esame del paziente che si è autenticato
     */
    public function dettagliesamedelpaziente() {
        
        $VMain= USingleton::getInstance('VMain');
        $VMain->dettagliesamedelpaziente();
        
    }
    /**
     * Chiama CPaziente per aggiungere un paziente al database
     */
    public function aggiungipaziente() {
        $CPaziente= USingleton::getInstance('CPaziente');
        $CPaziente->aggiungipaziente();
    }
    /**
     * Chiama CPaziente per modificare i dati di un paziente
     */
    public function modificapaziente() {
        $CPaziente= USingleton::getInstance('CPaziente');
        $CPaziente->modificapaziente();
    }
    /**
     * Chiama CPaziente per cambiare lo stato del referto di un paziente
     */
    public function cambiareferto() {
        $CPaziente= USingleton::getInstance('CPaziente');
        $CPaziente->cambiareferto();
    }
    /**
     * Chiama CLogin per confermare che un utente è stato riconosciuto dall'Admin
     */
    public function confermautente() {
        $CLogin= USingleton::getInstance('CLogin');
        $CLogin->confermautente();
        $this->showDottori();
    }
    /**
     * Chiama CEsame per aggiungere un esame al database
     */
    public function aggiungiEsame() {
        $CEsame= USingleton::getInstance('CEsame');
        $CEsame->aggiungiEsame();
        
    }
    
    /**
     * Chiama CMagazzino per aggiungere un materiale al database
     */
    public function aggiungimateriale() {
        $CMagazzino= USingleton::getInstance('CMagazzino');
        $CMagazzino->aggiungimateriale();
        $this->showMateriale();
    }
    
    /**
     * Chiama CCategoria per aggiornare una csottocategoria di esami
     */
    public function modificasottocategoria() {
        $CSottoCategoria= USingleton::getInstance('CSottoCategoria');
        $CSottoCategoria->modificasottocategoria();
        
    }
    /**
     * Chiama CCategoria per eliminare una csottocategoria di esami
     */
    public function eliminasottocategoria() {
        $CSottoCategoria= USingleton::getInstance('CSottoCategoria');
        $CSottoCategoria->eliminasottocategoria();
        
    }
    /**
     * Chiama CCategoria per aggiornare una categoria di esami e le sue sottocategorie
     */
    public function modificacategoria() {
        $CCategoria= USingleton::getInstance('CCategoria');
        $CCategoria->modificacategoria();
        
    }
    /**
     * Chiama CCategoria per eliminare una categoria di esami e le sue sottocategorie
     */
    public function eliminacategoria() {
        $CCategoria= USingleton::getInstance('CCategoria');
        $CCategoria->eliminacategoria();
        
    }
    /**
     * mostra l'elenco delle categorie di un esame che il reparto puo effettuare
     */
    public function showCategoria() {
        
        $CCategoria= USingleton::getInstance('CCategoria');
        $CCategoria->showCategoria();
        
    }
    /**
     * mostra l'elenco degli utenti la cui registrazione deve essere confermata da un admin
     */
    public function showDottori() {
        
        $CUtenti= USingleton::getInstance('CUtenti');
        $CUtenti->showUtentiNonConfermati();
        
    }
    /**
     * Equivalente a showDottori
     * per mantenere compatibilità con una versione precedente
     */
    public function showInfermieri() {
        
        $this->showDottori();
        
    }
    /**
     * mostra la pagina per avvisare l'utente che la sua registrazione non è ancora stata
     * confermata da un Admin
     */
    public function showConfermato() {
        
        $VMain= USingleton::getInstance('VMain');
        $VMain->showConfermato();
        
    }
    /**
     * mostra il Magazzino
     */
    public function showMateriale() {
        
        $VMain= USingleton::getInstance('VMain');
        $VMain->showMateriale('magazzino.tpl');
        
    }
    /**
     * mostra l'elenco degli esam che il reparto puo effettuare
     */
    public function showEsame() {
        
        $VMain= USingleton::getInstance('VMain');
        $VMain->showEsame();
        
    }
    /**
     * mostra l'elenco di tutte le sottocategorie della $categoria
     * 
     */
    public function elencosottocategorie() {
        $CSottoCategoria= USingleton::getInstance('CSottoCategoria');
        $CSottoCategoria->elencosottocategorie();
        
    }
    /**
     * chiama CMagazzino per restituire l'elenco dei materiali in magazzino
     */
    public function getelencomateriali() {
        $CMagazzino= USingleton::getInstance('CMagazzino');
        $CMagazzino->getelencomateriali();
    }
    /**
     * chiama CMagazzino per rimuovere materiali dal magazzino
     */
    public function utilizzamateriale() {
        $CMagazzino= USingleton::getInstance('CMagazzino');
        $CMagazzino->utilizzamateriale();
    }
    /**
     * Contrlla se l'username usato per registrarsi esista già.
     */
    public function checkusernameexist() {
        $CLogin= USingleton::getInstance('CLogin');
        $CLogin->checkusernameexist();
    }
    /**
     * Restituisce i materiali utilizzati da un esame dalla tabella Utilizza
     * @return json srray associativo materiale=>quantità
     */
    public function elencoutilizza() {
        /**
         * chiama CUtilizza
         */
        $CUtilizza= USingleton::getInstance('CUtilizza');
        $CUtilizza->elencoutilizza();
    }
    /**
     * aggiunge materiali alla tabella Utilizza
     */
    public function aggiungiutilizza() {
        /**
         * chiama CUtilizza
         */
        $CUtilizza= USingleton::getInstance('CUtilizza');
        $CUtilizza->aggiungimateriali();
    }
    /**
     * mostra la dieta dell'esame richesta dall'utente
     */
    public function dietaesame() {
        /**
         * chiama CEsame
         */
        $CEsame= USingleton::getInstance('CEsame');
        $CEsame->dietaesame();
    }
    /**
     * Salva il contenuto della homepage modificato dall'amminisratore
     */
    public function SalvaContenutoHome() {
        /**
         * chiama CContenuti
         */
        $CContenuti= USingleton::getInstance('CContenuti');
        $CContenuti->SalvaContenutoHome();
    }
}

?>
