<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire la tabella Utilizza
 */
class CUtilizza extends Controller {

    /**
     * chiama EUtilizza e FUtilizza per aggiungere materiali alla tabella utilizza
     * 
     * @param string $esame attributo esame della tabella utilizza
     * @param string $materiale attributo materiale della tabella utilizza
     * @param string $quantita attributo quantita della tabella utilizza
     */
    private function aggiungiutilizza ($esame,$materiale,$quantita) 
    {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==3){
        if($quantita!=0){
            $EUtilizza= USingleton::getInstance('EUtilizza');
            $EUtilizza->esame = $esame;
            $EUtilizza->materiale = $materiale;
            $EUtilizza->quantita = $quantita;
            $FUtilizza= USingleton::getInstance('FUtilizza');
            $FUtilizza->store($EUtilizza);
        }
        }else{
            $VMain= USingleton::getInstance('VMain');
            $VMain->erroreprivilegi();
        }
    }
    /**
     * Restituisce i materiali utilizzati da un esame dalla tabella Utilizza
     * @return json srray associativo materiale=>quantità
     */
    public function elencoutilizza() {
        debug('CUtilizza elencoutilizza');
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        /**
         * @var View VMain mostra il risultato
         */
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $esame = $VMain->getRequest('esame');
                /**
                 * @var Fdb FUtilizza esegue la ricerca sul database
                 */
                $FUtilizza= USingleton::getInstance('FUtilizza');
                $colonna=array('esame');
                $cerca =array($esame);     
                $utilizza=$FUtilizza->ricerca($colonna,$cerca);
                $result=array();
                if ($utilizza){
                    
                    foreach ($utilizza as $key => $value) {
                        $result[$value->materiale]=$value->quantita;
                        debug('CUtilizza risponde '.$value->materiale);
                    }
                    
                }else {
                    $result['']=0;
                }
                echo json_encode($result);
                
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
    }
    /**
     * aggiunge materiali alla tabella Utilizza
     */
    public function aggiungimateriali() {
        
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        /**
         * @var View VMain mostra il risultato
         */
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                
                /**
                 * @var Fdb FUtilizza esegue la query sul database
                 */
                $FUtilizza= USingleton::getInstance('FUtilizza');
                $esame = $VMain->getRequest('esame');
                $materiali = $VMain->getRequest('materiali');
                $quantita = $VMain->getRequest('quantita');
                debug($materiali);
                $utilizzamateriali=json_decode($materiali);
                $utilizzaquantita=json_decode($quantita);
                debug($utilizzaquantita);
                $FUtilizza->cancella('esame',$esame);
                foreach ($utilizzamateriali as $key => $value) {
                    debug($key);
                    $this->aggiungiutilizza($esame, $value, $utilizzaquantita[$key]);
                }
                
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
    }
}

?>