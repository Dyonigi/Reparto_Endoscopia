<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FUtente extends Fdb{

    

    public function __construct()
    {
        parent::__construct();

        $this->_table = 'utenti';
        $this->_key = 'username';
        $this->_auto_increment=FALSE;
        $this->_return_class='EUtente';
        
    }
    /**
     * autentica un EUtente
     * lo cerca nel DB e confronta le password
     * in fine aggiorna i suoi attributi
     * 
     * @param array([username],[password]) $credenziali username e password dell'utente da autenticare
     * @return object EUtente $EUtente
     */
    public function autentica($credenziali) {
        $EUtente = $this->load($credenziali['username']);
        if($EUtente){
            if ($EUtente->password == $credenziali['password']){
                $EUtente->autentica();

            }
        }
        return $EUtente;
    }
    /**
     * cambia l'attributo confermato di un utente con username $credenziali
     * 
     * @param string $credenziali username dell'utente da confermare
     * 
     */
    public function confermautente($credenziali) {
        $query='UPDATE `'.$this->_table.'` SET `confermato`=1 WHERE `'.$this->_key.'`="'.$credenziali.'"';
        $this->query($query);
    }
    /**
     * restituisce una lista di tutti gli infermieri e i magazzinieri non confermati
     * 
     * @return array(string)
     * 
     */
    public function InfermieriNonConfermati() {
        $query='SELECT '.$this->_key.' FROM `utenti` WHERE `confermato`="0" AND (`privilegi`="2" OR `privilegi`="1")';
        $this->query($query);
        return $this->getresultOO();
    }
    /**
     * restituisce una lista di tutti gli utenti non confermati
     */
    public function listaUtentiNonConfermati() {
        $colonna=array('confermato');
        $cerca=array(0);
        return $this->ricerca($colonna, $cerca);
    }

     
}
?>
