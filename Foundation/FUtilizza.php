<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FUtilizza extends Fdb{

    
    public function __construct()
    {
        parent::__construct();

        $this->_table = 'utilizza';
        $this->_key = 'idutilizza';
        $this->_auto_increment=TRUE;
        $this->_return_class='EUtilizza';
        
    }
    /**
     * restituisce materiali e quantita consumati da un esame
     * 
     * @param string $esame l'esame da controllare
     * @return array(string=>int) array associativo materiale=>quantità
     */
    public function EsameUtilizza($esame) {
        $query='SELECT `materiale`, `quantita` FROM `utilizza` WHERE `esame`="'.$esame.'"';
        $this->query($query);
        $return=array();
        while ($row = $this->_result->fetch_assoc()) {
           
            $return[$row["materiale"]] = $row["quantita"];
            }
        return $return;
    }
    

     
}
?>
