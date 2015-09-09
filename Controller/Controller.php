<?php
/**
 * @access public
 * @package Controller
 */
class Controller {
    
   
    
    
    /**
     * Richiama la funzione relativa alla richiesta del client
     * la richiesta del client deve coincidere con il nome della funzione da richiamare
     *       
     * @parama string $Task nome della classe da richiamare senza l'iniziale V o C
     * @return html
     */
    public function smista()
    {

        $view=USingleton::getInstance('VBackground');
        
        
        if ($view->getTask())
        {
            $task = $view->getTask();
            debug("VBackground ha letto $task");
        }
        else
        {
            $task = 'start';
        }
      debug('Controller sta eseguendo '.$task);
        return $this->$task();
    }
    

}
?>