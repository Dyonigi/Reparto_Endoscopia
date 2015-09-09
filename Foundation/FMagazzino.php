<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FMagazzino extends Fdb{

    
    public function __construct()
    {
        parent::__construct();

        $this->_table = 'magazzino';
        $this->_key = 'materiale';
        $this->_auto_increment=true;
        $this->_return_class='EMagazzino';
        
    }
    /**
     * controlla che nel magazzino ci siano scorte sufficienti di un materiale
     * 
     * @param string $materiale il materiale da controllare
     * @param int $quantita la quantita necessaria
     * @return boolean true se le scorte sono sufficienti
     */
    public function checkscorte($materiale,$quantita) {
        $scorte=$this->search('materiale', $materiale, 'quantita');
        if ($quantita >  array_sum($scorte)){
            debug('FMagazzino le scorte di '.$materiale.' Mancan0!');
            return FALSE;
        }
        else{
            debug('FMagazzino le scorte di '.$materiale.'  ci sonio');
            return TRUE;
        }
    }
    /**
     * inserisce un materiale nel magazzino
     * se è già presente aumenta la quantità
     * 
     * @param Entity $Materiale
     */
    public function store($Materiale) {
        $Originale = $this->load($Materiale->materiale);
        if ($Originale){
            if($Originale->sum($Materiale)){
                parent::replace($Originale->materiale,$Originale);
            }
        } else{
            parent::store($Materiale);
        }
        
    }
    /**
     * rimuove materiali dal magazzino
     * @param string $materiale
     * @param int $quantita
     */
    public function rimuovi($materiale,$quantita){
        $Originale = $this->load($materiale);
        
            if($Originale->sottrai($quantita)){
                parent::replace($Originale->materiale,$Originale);
            }
        else{
            parent::delete($materiale);
        }
    }
            

     
}
?>
