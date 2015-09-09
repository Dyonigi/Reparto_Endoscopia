<?php
/**
 * 
 *@package Entity
 */
/*Clase di supporto all'attributo $_return_class di Fdb
 */
class EMagazzino extends Entity {
    public $materiale = '';
    public $quantita = '';
    
    /**
     * somma la quantità di un altro EMagazzino
     * se sono lo stesso materiale
     */
    public function sum($Materiale) {
        if($Materiale){
             if($this->materiale==$Materiale->materiale){
                $this->quantita+=$Materiale->quantita;
                return TRUE;
            }else            return FALSE;
        }
       return TRUE;
    }
    /**
     * sottrai la quantità
     * se il risultato è 0 ritorna false
     * @return boolean
     */
    public function sottrai($quantita) {
        debug('EMagazzino sottrae');
       $this->quantita-=$quantita; 
        if($this->quantita<=0){
             debug('EMagazzino non è rimasto nulla');
                return FALSE;
            }else{
                return TRUE;
        }
    }
    
}
?>
