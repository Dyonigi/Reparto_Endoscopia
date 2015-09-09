<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FEsame extends Fdb{

  
    public function __construct()
    {
        parent::__construct();

        $this->_table = 'esame';
        $this->_key = 'nome';
        $this->_auto_increment=FALSE;
        $this->_return_class='EEsame';
        
    }
    function TabellaEsami()
    {
        $query = "SELECT `nome`,`categoria`,`sottocategoria` FROM ".$this->_table;
        $this->query($query);
               
        return $this->getresultmatrix();
        
    }

     
}
?>
