<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FPaziente extends Fdb{

    //Le classi figlie di Fdb non hanno attributi,

    //--------------------|
    //Metodi della classe |
    //--------------------|

    public function __construct()
    {
        parent::__construct();
        debug('FPaziente');
        $this->_table = 'paziente';
        $this->_key = 'codicecup';
        $this->_auto_increment=true;
        $this->_return_class='EPaziente';
      
    }
/**
     * autentica un Paziente
     * lo cerca nel DB e confronta il codice CUP
     * in fine aggiorna i suoi attributi
     * 
     * @param array([nome],[cognome],[codice CUP]) $credenziali nome, cognome e codice CUP del pziente da autenticare
     * @return object EPaziente $EPaziente
     */
    public function autentica($credenziali) {
        $EPaziente = $this->load($credenziali['codicecup']);
        if ($EPaziente->nome == $credenziali['nome'] && $EPaziente->cognome == $credenziali['cognome']){
            $EPaziente->autentica();
            
        } 
        return $EPaziente;
    }
     
}
?>
