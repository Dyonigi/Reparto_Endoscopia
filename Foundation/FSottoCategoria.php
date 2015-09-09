<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FSottoCategoria extends Fdb{

    
    public function __construct()
    {
        parent::__construct();

        $this->_table = 'sottocategoria';
        $this->_key = 'nome';
        $this->_auto_increment=FALSE;
        $this->_return_class='ESottoCategoria';
        
    }

     
}
?>
