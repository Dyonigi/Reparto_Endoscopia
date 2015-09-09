<?php
require_once 'lib/smarty/Smarty.class.php';

/**
 * Classe View estende Smarty
 * configura le directory per Smarty
 * 
 * @access public
 * @package View
 */


class View extends Smarty {
    
    /**
     * @var string css directory 
     */
    protected $_css_dir='';
    
    /**
     * configura le directory per Smarty
     * 
     * @global array $config 
     */
    public function __construct() 
    {
        //configura Smarty
        parent::__construct();
        global $config;
        $this->template_dir = $config['smarty']['template_dir'];
        $this->compile_dir = $config['smarty']['compile_dir'];
        $this->config_dir = $config['smarty']['config_dir'];
        $this->cache_dir = $config['smarty']['cache_dir'];
        $this->_css_dir = $config['css'];
        $this->caching = false;
        
        
        
    }
	
	
    /**
     * Restituisce il task passato tramite richiesta GET o POST
     *
     * @return mixed
     */
    public function getTask()
    {
        if (filter_has_var(INPUT_GET, 'task')) {
            return filter_input(INPUT_GET, 'task');
        } elseif (filter_has_var(INPUT_POST, 'task')) {
            return filter_input(INPUT_POST, 'task');
        } else {
            return FALSE;
        }
    }

     /**
     * Restituisce $request passato tramite richiesta GET o POST
      * 
      * @param string $request il parametro richiesto
     *
     * @return mixed
     */
    public function getRequest($request)
    {debug('View sta cercando '.$request);
        if (filter_has_var(INPUT_GET, $request)) {
            
            return filter_input(INPUT_GET, $request);
        } elseif (filter_has_var(INPUT_POST, $request)) {
            
            return filter_input(INPUT_POST, $request);
        } else {
            return FALSE;
        }
    }
    /**
     * Restituisce in un array associativo username e password
      * 
      * 
     *
     * @return array([username],[password])
     */
    public function getUserPass()
    {debug('View sta cercando le credenziali');
        $return = array(
                    'username' => '',
                    'password' => ''
                    );
        if (filter_has_var(INPUT_POST, 'username')) {
            $return['username'] = filter_input(INPUT_POST, 'username');
            
            if (filter_has_var(INPUT_POST, 'password')) {
                
                $return['password'] = filter_input(INPUT_POST, 'password');
                
            } else {
                return FALSE;
              }
        }else {
            return FALSE;
        }
        return $return;
    }
    /**
     * Restituisce in un array associativo username e password
      * 
      * 
     *
     * @return array([username],[password])
     */
    public function getPaziente()
    {
        $return = array(
                    'nome' => '',
                    'cognome' => '',
                    'codicecup' => ''
                    );
        if (filter_has_var(INPUT_POST, 'nome')) {
            $return['nome'] = filter_input(INPUT_POST, 'nome');
            if (filter_has_var(INPUT_POST, 'cognome')) {
                $return['cognome'] = filter_input(INPUT_POST, 'cognome');
                if (filter_has_var(INPUT_POST, 'codicecup')) {
                $return['codicecup'] = filter_input(INPUT_POST, 'codicecup');
                } else {
                    return FALSE;
                  }
            } else {
                return FALSE;
              }
        }else {
            return FALSE;
        }
        return $return;
    }
	
	
          
    

}
?>