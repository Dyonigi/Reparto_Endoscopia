<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire il magazzino
 */
class CMagazzino extends Controller {

    /**
     * chiama EMagazzino e FMagazzino per aggiungere un materiale al magazzino
     */
    public function aggiungimateriale() 
    {
        $EMagazzino= new EMagazzino();
        /**
         * @var VMain preleva i dati inseriti dall'utente
         */
        $VMain= USingleton::getInstance('VMain');
        /**
         * @var Controller CLogin controlla che l'utente si aun magazziniere
         */
        $CLogin= USingleton::getInstance('CLogin');
        if($CLogin->privilegi()==1){
            $EMagazzino->materiale =$VMain->getRequest('materiale');
            $EMagazzino->quantita =  $VMain->getRequest('quantita');
            $FMagazzino= USingleton::getInstance('FMagazzino');
            $FMagazzino->store($EMagazzino);
            unset($EMagazzino);
        }else{
            $VMain->erroreprivilegi();
        }
        
    }
    /**
     * resttuisce l'elenco dei materiali nel magazzino
     * 
     * @return json
     */
    public function getelencomateriali() {
        $FMagazzino= USingleton::getInstance('FMagazzino');
        $return = $FMagazzino->elencoAttributo('materiale');
        echo json_encode($return);
    }
    /**
     * rimuove dei materiali dal magazzino
     */
    public function utilizzamateriale() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        /**
         * @var View VMain legge  dati inseriti dall'utente 
         * mostra il Magazzino
         */
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            
            case 2://Infermiere
                $materiale=json_decode($VMain->getRequest('materiale'));
                foreach ($materiale as $key => $value) {
                    $FMagazzino= USingleton::getInstance('FMagazzino');
                    $mat=  split('_', $key);
                    $mat= join(' ', $mat);
                    $FMagazzino->rimuovi($mat,$value);
                }
                $VMain->showMateriale();
                
                break;

            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
    }
}

?>