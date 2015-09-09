<?php
/**
 * 
 *@package Entity
 */
/*Clase di supporto all'attributo $_return_class di Fdb
 */
class EPaziente extends Entity {
    public $codicecup = '';
    public $nome = '';
    public $cognome = '';
    public $esame = '';
    public $dataEsame = '';
    public $Referto = 0;
    private $autenticato = false;
    
    /**
     * restituisce l'attributo $autenticato
     * 
     * @return boolean true se l'utente è stato autenticato
     */
    public function autenticato() {
        return $this->autenticato;
        }
    /**
     * autentica il paziente
     * 
     * @return boolean true se l'utente è stato autenticato
     */
    public function autentica() {
        
        $this->autenticato = TRUE;
        }
    
}
?>
