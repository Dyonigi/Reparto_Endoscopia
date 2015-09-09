<?php
/**
 * Classe VMain, estende la classe view
 * gestisce la visualizzazione della finestra principale
 *
 * @package View
 */
class VMain extends View {
    
    /**
     * chiama VTab per
     * restituire il contenuto delle Tab
     * a seconda dei privilegi dell'utente
     * 
     * @param int $privilegi privilegi dell'utente
     */
    public function Tabs($privilegi) {
        $VTab = USingleton::getInstance('VTab');
        $this->assign('Tabs', $VTab->Tabs($privilegi));
        $this->assign('Home', $this->Home($privilegi));
        return $this->fetch('Tabs.tpl');
    }
    /**
     * 
     * restituire la home page
     * l'amministratore puomodificare il contenuto della homepage
     * 
     * @param int $privilegi privilegi dell'utente
     */
    public function Home($privilegi,$display=FALSE) {
        $operazione=($display ? 'display' : 'fetch');
        $CContenuti = USingleton::getInstance('CContenuti');
        $this->assign('ContenutoHome', $CContenuti->Home());
        if($privilegi==4){
            return $this->$operazione('HomeAmministratore.tpl');
        }
        return $this->$operazione('Home.tpl');
    }
    /**
     * mostra la pagina per avvisare l'utente che la sua registrazione non è ancora stata
     * confermata da un Admin
     */
    public function showConfermato() {
        $CLogin = USingleton::getInstance('CLogin');
        $this->assign('username', $CLogin->getusername());
        $this->display('UtenteNonConfermato.tpl');
    }
    /**
     * mostra una riga con i dati di un Paziente
     * 
     * @param Entity $EPaziente il Paziente
     */
    public function rigapaziente($EPaziente) {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==2 || $CLogin->privilegi()==3){
        $valori=array();
            foreach ($EPaziente as $value) {
                $valori[]=$value;
                }
        $valori[5]=$this->bottoneReferto($valori[5]);
        $this->assign('Paziente', $valori);
        $this->display('rigapaziente.tpl');
        }else{
            $VMain= USingleton::getInstance('VMain');
            $VMain->erroreprivilegi();
        }
    }
    /**
     * mostra una riga con i dati di una Categoria di esami
     * 
     * @param Entity $ECategoria Categoria di esami
     * 
     */
    public function rigacategoria($ECategoria) {
        $this->assign('Categoria', $ECategoria->nome);
        $this->display('rigacategoria.tpl');
    }
    /**
     * mostra la forma di accesso dell'Admin per istallare l'applicazione
     */
    public function MainLoginAdmin() {
        return $this->fetch('loginistallazione.tpl');
    }
    /**
     * mostra la forma per configurare il DataBase
     */
    public function configuradb() {
        return $this->fetch('configuradatabese.tpl');
    }
    /**
     * mostra il template errore DataBsae
     */
    public function erroreDataBase() {
        $this->display('erroredb.tpl');
    }
    /**
     * mostra il template errore I dati inseriti non sono corretti
     * @param string $regexp per cosa sono stati inseriti i dati errati
     */
    public function erroreInput($regexp) {
        $this->assign('regexp',$regexp);
        $this->display('erroreInput.tpl');
    }
    /**
     * mostra il template errore privilegi
     */
    public function erroreprivilegi() {
        $this->display('erroreprivlegi.tpl');
    }
    /**
     * mostra l'elenco dei pazienti
     */
    public function showelencopazienti() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==2 || $CLogin->privilegi()==3){
        $CPaziente= USingleton::getInstance('CPaziente');
        $mylist=$CPaziente->TabellaPazineti();
        $check=$CPaziente->checkAbbastanza();
        $attributi=array(
            'Codice CUP',
            'Nome',
            'Cognome',
            'Esame',
            'Data Esame',
            'Referto Pronto'
        );
        $this->assign('attributi',$attributi);
        $this->assign('mylist',$mylist);
        $this->assign('check',$check);
        $FEsame= USingleton::getInstance('FEsame');
        $categorie=$FEsame->elencoAttributo('nome');
        $this->assign('categorie',$categorie);
        $this->display('elencopazienti.tpl');
        }else{
            $this->erroreprivilegi();
        }
        
    }
    /**
     * sostituisce il valore dell'attributo Referto
     * con un bottone
     * 
     * @param int $referto 0 restituisce un bottone X , 1 restituisce un bottone V
     * 
     * @return template bottone
     */
    public function bottoneReferto($referto) {
        switch ($referto) {
            case 0:

                return $this->fetch('bottoneRefertoX.tpl');
                break;
            
            case 1:

                return $this->fetch('bottoneRefertoV.tpl');
                break;

            default:
                return $this->erroreDataBase();
                break;
        }
    }
    /**
     * un bottone che mostra la dieta dell'esame in un dialog
     * 
     */
    public function bottoneDieta() {
        return $this->fetch('bottonedieta.tpl');
    }
    /**
     * mostra la tabella Magazzino
     */
    public function showMateriale() {
        $FMagazzino= USingleton::getInstance('FMagazzino');
        $mylist=$FMagazzino->copyTable();
        $attributi=array(
            'Materiale',
            'Quantità'
        );
        $this->assign('attributi',$attributi);
        $this->assign('mylist',$mylist);
        $CLogin = USingleton::getInstance('CLogin');
        switch ($CLogin->privilegi()) {
            case 1://Magazziniere

                $this->assign('Form',  $this->fetch('AggiungiMateriale.tpl'));
                break;
            case 2://Infermiere
                
                $this->assign('Form',  $this->UtilizzaMateriale());
                
                break;

            default:
                $this->erroreprivilegi();
                return FALSE;
                break;
        }
        $this->display('magazzino.tpl');
    }
    /**
     * restituisce il template UtilizzaMateriale
     * contiene il carrello per i materiali utilizzati durante un esame
     * 
     * @return template 
     */
    public function UtilizzaMateriale() {
        $FPaziente= USingleton::getInstance('FPaziente');
        $this->assign('pazienti',  $FPaziente->copyTable());
        return $this->fetch('UtilizzaMateriale.tpl');
    }
    /**
     * mostra gli esami che puo effettuare il reparto
     * se l'utente è un dottore puo modificarli
     */
    public function showEsame() {
        
        /**
         * @var Controller CEsame restituisce i dai del database
         */
        $CEsame= USingleton::getInstance('CEsame');
        $mylist=$CEsame->TabellaEsami();
        $attributi=array(
            'Esame',
            'Categoria',
            'Sottocategoria',
            'Dieta da seguire'
        );
        $this->assign('attributi',$attributi);
        $this->assign('mylist',$mylist);
        $this->assign('bottonimodificaesame',$this->bottonimodificaesame());
        $this->assign('formmodificaesami',$this->formmodificaesami());
        $this->display('Esami.tpl');
    }
    /**
     * bottoni per modificae gli esami
     * restituisce null se l'utente non è un dottore
     */
    public function bottonimodificaesame() {
        /**
         * @var Controller CLogin controlla i privilegi dell'utente
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==3){
            return $this->fetch('bottonimodificaesame.tpl');
        }else {
            return NULL;
        }
    }
    /**
     * form per modificae gli esami
     * restituisce null se l'utente non è un dottore
     */
    public function formmodificaesami() {
        /**
         * @var Controller CLogin controlla i privilegi dell'utente
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==3){
            $FCategoria= USingleton::getInstance('FCategoria');
            $categorie=$FCategoria->elencoAttributo('nome');
            $this->assign('categorie',$categorie);
            return $this->fetch('formmodificaesami.tpl');
        }else {
            return NULL;
        }
    }
    /**
     * mostra i dettagli dell'esame del paziente che si è autenticato
     */
    public function dettagliesamedelpaziente() {
        
        /**
         * $CLogin controlla chel'utente sia un paziente
         */
        $CLogin = USingleton::getInstance('CLogin');
        /**
         * $CPaziente cerca nel database i dati del Paziente
         */
        $CPaziente = USingleton::getInstance('CPaziente');
        if($CLogin->privilegi()==5){
            $codicecup=$CLogin->getcodicecup();
            $this->assign('esame',$CPaziente->getesame($codicecup));
            $this->assign('dieta',$CPaziente->getdieta($codicecup));
            $this->assign('referto',$CPaziente->getreferto($codicecup));
            $this->assign('data',$CPaziente->getdata($codicecup));
            $this->display('ilmioesame.tpl');
        }else{
            $this->erroreprivilegi();
        }
        
    }
}
?>
