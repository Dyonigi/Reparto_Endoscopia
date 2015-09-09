<?php
/**
 * @access public
 * @author Denis Del Grande
 * @package Utility
 */
/**
 * class USession chiamata da CLogin
 * gestisce le sessione
 * rinnova la loro scadenza
 * chiama CLogin prima di cancellare le sessioni vecchie
 */
class USession {
    
    private $mintime = 3600;
    
    /**
     * fa partire una nuova sessione se non ne esiste già una
     * 
     * 
     */
    public function __construct() 
    {
        session_start();
        
    }
    public function imposta_valore($chiave,$valore) 
    {
        $this->update_last_activity();
        $_SESSION[$chiave]=$valore;
    }
    public function cancella_valore($chiave)
    {
        unset($_SESSION[$chiave]);
    }
    public function leggi_valore($chiave) 
    {
        $this->update_last_activity();
        if (isset($_SESSION[$chiave]))
            return $_SESSION[$chiave];
        else
            return false;
    }
    /**
     * chiude la sessione
     */
    public function logout() {
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    }
    /**
     * aggiorna la validità della sessione
     * 
     * 
     * 
     */
    public function update_last_activity() 
    {
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $this->mintime))
        {
            // last request was more than $mintime ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }
        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
        if (!isset($_SESSION['CREATED']))
            {
            $_SESSION['CREATED'] = time();
            }
        else if (time() - $_SESSION['CREATED'] > $this->mintime)
            {
            // session started more than $mintime ago
            session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
            $_SESSION['CREATED'] = time();  // update creation time
            }
    }
}
?>