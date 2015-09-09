<?php
/**
 * 
 *@package Entity
 */
/*Clase di supporto all'attributo $_return_class di Fdb
 */
class EUtente extends Entity {
    public $username = false;
    public $password = false;
    public $nome = false;
    public $cognome = false;
    public $privilegi = 0;
    public $confermato = false;
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
     * autentica l'utente
     * 
     * @return boolean true se l'utente è stato autenticato
     */
    public function autentica() {
        
        $this->autenticato = TRUE;
        }
    
    /**
     * converte i privilegi dell'utente in una stringa
     * 
     * @return string la mansione dell'utente: Dottore, Infermiere, Magazziniere
     */
    public function masione() {
        switch ($this->privilegi) {
            case 1:

                return 'Magazziniere';
                break;
            case 2:

                return 'Infermiere';
                break;
            case 3:

                return 'Dottore';
                break;

            default:
                return FALSE;
                break;
        }
    }
}
?>
