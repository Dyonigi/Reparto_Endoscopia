<?php
/**
 *
 * @package Foundation
 * @author Denis
 */

class FContenuti extends Fdb{

   
    public function __construct()
    {
        parent::__construct();

        $this->_table = 'contenuti';
        $this->_key = 'tag';
        $this->_auto_increment=FALSE;
        $this->_return_class='EContenuti';
       
    }

     
}
?>
