<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire le tabelle dei Pazienti
 */
class CPaziente extends Controller {

    /**
     * chiama EPaziente e FPaziente per aggiungere un Paziente al DataBase
     */
    public function aggiungipaziente () 
    {
        $EPaziente= USingleton::getInstance('EPaziente');
        /**
         * @var VMain preleva i dati inseriti dall'infermiere
         */
        $VMain= USingleton::getInstance('VMain');
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==2){
            $codicecup = $VMain->getRequest('codicecup');
            if(URegExp::RegExp($codicecup,'codicecup')){
                $EPaziente->codicecup = $codicecup;
            }
            $nome = $VMain->getRequest('nome');
            if(URegExp::RegExp($nome,'nome')){
                $EPaziente->nome = $nome;
            }
            $cognome = $VMain->getRequest('cognome');
            if(URegExp::RegExp($cognome,'nome')){
                $EPaziente->cognome = $cognome;
            }
            $EPaziente->esame = $VMain->getRequest('esame');
            $EPaziente->dataEsame = $VMain->getRequest('dataEsame');
            $FPaziente= USingleton::getInstance('FPaziente');
            if($FPaziente->store($EPaziente)){
                $VMain->rigapaziente($EPaziente);
            } else {
                $VMain->erroreDataBase();
            }
        }else{
            $VMain->erroreprivilegi();
        }
    }
    /**
     * chiama EPaziente e FPaziente per aggiungere un Paziente al DataBase
     * 
     * @return boolean
     */
    public function modificapaziente () 
    {
        $EPaziente= USingleton::getInstance('EPaziente');
        /**
         * @var VMain preleva i dati inseriti dall'infermiere
         */
        $VMain= USingleton::getInstance('VMain');
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==2){
        
            $codicecup = $VMain->getRequest('codicecup');
            if(URegExp::RegExp($codicecup,'codicecup')){
                $EPaziente->codicecup = $codicecup;
            }
            $nome = $VMain->getRequest('nome');
            if(URegExp::RegExp($nome,'nome')){
                $EPaziente->nome = $nome;
            }
            $cognome = $VMain->getRequest('cognome');
            if(URegExp::RegExp($cognome,'nome')){
                $EPaziente->cognome = $cognome;
            }
            $EPaziente->esame = $VMain->getRequest('esame');
            $EPaziente->dataEsame = $VMain->getRequest('dataEsame');
            $FPaziente= USingleton::getInstance('FPaziente');
            if($FPaziente->replace($VMain->getRequest('cuporiginale'),$EPaziente)){
                $valori=array();
                foreach ($EPaziente as $value) {
                    $valori[]=$value;
                }
                echo json_encode($valori);


            } else {
                $VMain->erroreDataBase();
            }
        }else{
            $VMain->erroreprivilegi();
        }
    }
    /**
     * chiama EPaziente e FPaziente per modificare lo stato del referto di un Paziente
     * 
     * @return boolean
     */
    public function cambiareferto () 
    {
        /**
         * @var VMain preleva i dati inseriti dall'infermiere
         */
        $VMain= USingleton::getInstance('VMain');
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==2){
            debug('CPaziente sta eseguendo cambiareferto');
            $FPaziente= USingleton::getInstance('FPaziente');
            debug("CPaziente sta cercando il paziente ");
            $EPaziente=$FPaziente->load($VMain->getRequest('codicecup'));
            $EPaziente->Referto = $VMain->getRequest('referto');
            if($FPaziente->replace($EPaziente->codicecup,$EPaziente)){
                if($EPaziente->Referto==1){
                    $VMain->display('bottoneRefertoV.tpl');
                } else {
                    $VMain->display('bottoneRefertoX.tpl');
                }

            } else {
                $VMain->erroreDataBase();
            }
        }else{
            $VMain->erroreprivilegi();
        }
    }
    /**
     * per ogni Paziente che non si sia giò sottoposto all'esame
     * controlla che ci siano sufficienti scorte in magazzino
     * per effettuare il suo esame
     * 
     * @return array(string) l'array ha lo stesso ordine dei pazienti nel database
     * il valore è 'check' se ci sono scorte per effettuare l'esame o 'close' se le scorte non sono sufficienti
     */
    public function checkAbbastanza() {
        $FPaziente= USingleton::getInstance('FPaziente');
        $lista=$FPaziente->elencoAttributoOrdinato('codicecup','dataEsame');
        /**
         * @var array(codicecup => 'check'or'close') $pazienti elenco dei codici CUP ordinati per data dell'esame
         */
        $pazienti = array();
        foreach ($lista as $key => $value) {
            $pazienti[$value] = 'check';
        }
        unset($lista);
        $Esamivisti=array();
        $esame='';
        $materiale=array();
        foreach ($pazienti as $key => &$value) {
            if($this->checkdatapassata($key)) $value='minus';
            else{
                debug('CPazienti contyrolla i materiali di '.$key);
                $esame=$this->getesame($key);
                if(in_array($esame,$Esamivisti)) $value='close';
                else{
                    $this->aggiungimaterialiadarray($esame,$materiale);
                    $FMagazzino= USingleton::getInstance('FMagazzino');
                    foreach ($materiale as $chiave => $valore) {
                        $chechscorte=$FMagazzino->checkscorte($chiave,$valore);
                        debug('CPazienti scorte '.$chechscorte);
                        if(!$chechscorte){
                            $value='close';
                            debug('CPazienti mette licona '.$value);
                            $Esamivisti[]=$esame;
                            break;
                        }else{
                            $value='check';
                            debug('CPazienti mette licona '.$value);
                            break;
                        }
                    }
                }
            }
        }
        $return=array();
        $tabella = $FPaziente->copyTable();
        foreach ($tabella as $keytabella => $valuetabella) {
            $return[]=$pazienti[$valuetabella[0]];
        }
        return $return;
    }
    /**
     * controlla se la data in cui un paziente deve farel'esame è passata
     * 
     * @param string $paziente codice CUP del paziente
     * @return boolean true se la data è passata
     */
    public function checkdatapassata($paziente) {
        
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente= $FPaziente->load($paziente);
        if (strtotime($EPaziente->dataEsame) < time()){
            debug('CPazienti '.$EPaziente->dataEsame.' data passata');
            return TRUE;
        }
        else {
            debug('CPazienti '.$EPaziente->dataEsame.' data futura');
            return FALSE;
        }
    }
    /**
     * chiama FUtilizza per una lista di materiali che consuma un esame e aggiunge le loro quantità ad un array
     * 
     * @param string $esame l'esame da controllare
     * @param reference array(string=>int) &$materiale riferimento all'array in cui aggiungere le quantità
     * 
     */
    public function aggiungimaterialiadarray($esame,&$materiale) {
        $FUtilizza= USingleton::getInstance('FUtilizza');
        $utilizza=$FUtilizza->EsameUtilizza($esame);
        foreach ($utilizza as $key => $value) {
            debug('CPazienti '.$esame.' utilizza '.$key);
            if(isset($materiale[$key])){
                $materiale[$key] += $value;
            } else{
                $materiale[$key] = $value;
            }
        }
        
    }
    /**
     * restituisce l'esame di un paziente
     * 
     * @param string $paziente codice Cup del paziente
     * @return string esame a cui deve sottoporsi il paziente
     */
    public function getesame($paziente) {
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente = $FPaziente->load($paziente);
        return $EPaziente->esame;
    }
    /**
     * restituisce la dieta che un paziente deve seguire prima dell'esame
     * 
     * @param string $paziente codice Cup del paziente
     * @return string esame a cui deve sottoporsi il paziente
     */
    public function getdieta($paziente) {
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente = $FPaziente->load($paziente);
        $FEsame= USingleton::getInstance('FEsame');
        $EEsame=$FEsame->load($EPaziente->esame);
        return $EEsame->dieta;
    }
    /**
     * restituisce la dieta che un paziente deve seguire prima dell'esame
     * 
     * @param string $paziente codice Cup del paziente
     * @return string esame a cui deve sottoporsi il paziente
     */
    public function getdata($paziente) {
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente = $FPaziente->load($paziente);
        $return = date("d/m/Y", strtotime($EPaziente->dataEsame));
        return $return;
    }
    /**
     * restituisce la data dell'esame di un paziente
     * 
     * @param string $paziente codice Cup del paziente
     * @return string esame a cui deve sottoporsi il paziente
     */
    public function getreferto($paziente) {
        $FPaziente= USingleton::getInstance('FPaziente');
        $EPaziente = $FPaziente->load($paziente);
        /**
         * VMain mostra il risultato 
         */
        $VMain= USingleton::getInstance('VMain');
        if($EPaziente->Referto){
            
            return $VMain->fetch('refertopronto.tpl');
        }else {
            return $VMain->fetch('refertosospeso.tpl');
        }
        
    }
    /**
     * restituisce in una matrice la tabella dei pazienti
     */
    public function TabellaPazineti() {
        $FPaziente= USingleton::getInstance('FPaziente');
        $return = $FPaziente->copyTable();
        $VMain= USingleton::getInstance('VMain');
        //debug(count($return));
        
        for ($i=0 ; $i<count($return) ; ++$i) {
            debug($return[$i][5]);
            $return[$i][5]=$VMain->bottoneReferto($return[$i][5]);
            $return[$i][4]=date("d/m/Y", strtotime($return[$i][4]));
        }
        return $return;
    }
    /**
     * mostra i dettagli dell'esame del paziente che si è autenticato
     */
    public function dettagliesamedelpaziente() {
        
        $VMain= USingleton::getInstance('VMain');
        $CLogin = USingleton::getInstance('CLogin');
        $FEsame= USingleton::getInstance('FEsame');
        $Esame=$FEsame->load($CLogin->getesame());
        $VMain->assign('testo',$Esame->nome);
        $VMain->assign('referto',$this->referto());
        $VMain->display('ilmioesame.tpl');
        
    }
    /**
     * mostra il messaggio di dare al paziente connesso riguardo al suo referto
     */
    public function referto() {
        /**
         * @var Controller CLogin controlla quale paziente si è connesso
         */
        $CLogin = USingleton::getInstance('CLogin');
        /**
         * @var View VMain mostra il messaggio
         */
        $VMain= USingleton::getInstance('VMain');
        if($CLogin->getreferto()){
            $VMain->fetch('refertopronto.tpl');
        }else  {
            $VMain->fetch('refertosospeso.tpl');
        }
    }
}

?>