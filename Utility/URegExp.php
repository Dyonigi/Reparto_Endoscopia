<?php
/**
 * @access public
 * @author Denis Del Grande
 * @package Utility
 */
/**
 * class URegExp
 * gestisce le Regula Expression
 */
class URegExp {
    /**
     * controlla che una sringa corrisponda ad una regexp salvata nel file config
     */
    public function RegExp($input,$regexp) {
        global $config;
        $return=preg_match($config["regex"][$regexp],$input);
        debug($config["regex"][$regexp]);
        if($return==1 && $input!='false'){
            return true;
        }else{
            /**
             * $VMain mostra l'errore
             */
            $VMain= USingleton::getInstance('VMain');
            $VMain->erroreInput($regexp);
            return FALSE;
        }
    }
}
?>