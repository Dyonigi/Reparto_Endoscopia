<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FCategoria extends Fdb{

    //Le classi figlie di Fdb non hanno attributi,

    //--------------------|
    //Metodi della classe |
    //--------------------|

    public function __construct()
    {
        parent::__construct();

        $this->_table = 'categoria';
        $this->_key = 'nome';
        $this->_auto_increment=FALSE;
        $this->_return_class='ECategoria';
       
    }

     
}
?>
