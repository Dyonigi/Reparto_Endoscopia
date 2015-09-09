<?php
/**
 * @access public
 * @package Foundation
 * @author Denis
 * 
 */
class Fdb {
    /**
     * @var $_connection connessione al database
     */
    private $_connection;
    /**
     * @var $_result il risultato dell'ultima query
     */
    public $_result;
    /**
     * @var $_table nome della tabella
     */
    public $_table;
    /**
     * @var $_key Chiave della tabella
     */
    protected $_key;
    /**
     * @var $_return_class Variabile contenente il tipo di classe da restituire
     */
    protected $_return_class='Entity';
    /**
     * @var $_auto_increment Variabile booleana tabella con chiave automatica o no
     */
    protected $_auto_increment=false;
    /**
     * @var $_error 
     */
    
    /**
     * Effettua la connessione al server
     *
     * @global array $config
     */
    public function __construct() {
        global $config;
        $this->connect($config['mysql']['database']);
    }
    /**
     * chiude la connessione
     *
    public function __destruct() {
        if($this->close()){
            debug('Connessione al DB chiusa');
        } else            debug ('Errone nella chiusura del DB '.$this->_connection->error);
    }
    /**
     * connessione al DB
     * 
     * @param string $host
     * @param string $password
     * @param string $user
     * @param string $database
     * @return boolean
     */
    public function connect($database) {
       
        $this->_connection= USingleton::getInstance('mysqli');
        
        
        if (!$this->_connection) {
            return FALSE;
            debug('Fdb ha riscontrato un errore nel DB '.$this->_connection->error);
        }
        /* @var $db_selected boolean */
        $db_selected = $this->_connection->select_db($database);
        if (!$db_selected) {//controlla la connessione al database
            debug('Fdb ha riscontrato un errore nel DB '.$this->_connection->error);
            return FALSE;
        } else            debug ('Connessione riuscita');
        

        
        return TRUE;

    }
    
    /**
     * Effettua una query al database
     * @param string $query
     * @return boolean
     */
    public function query($query) {
        $this->_result=$this->_connection->query($query);
        debug('Fdb ha laciato la query '.$query);

        if (!$this->_result){
            debug('Fdb ha riscontrato un errore nel DB '.$this->_connection->error);
            return false;
        }
        else{
            
            return true;
        }
    }
    
    /**
     * Effettua la disconnessione dal database
     */
    public function close() {
        $close = $this->_connection->close();
        
        return $close;
    }
    /**
     * popola il database
     * 
     * http://stackoverflow.com/questions/19751354/how-to-import-sql-file-in-mysql-database-using-php
     */
    public function popola() {
        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file('includes/GeneraDataBase.txt');
        // Loop through each line
        foreach ($lines as $line)
            {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;

            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';')
                {
                    // Perform the query
                    if($this->query($templine)){
                        
                    }
                    else{
                        return FALSE;
                    }
                    // Reset temp variable to empty
                    $templine = '';
                }
            }
         return TRUE;
    }

    
    /**versione NON OO
     * Veloce
     * Restituisce una matrice con tutti i valori di una tabella
     */
    function copyTable()
    {
        $query = "SELECT * FROM ".$this->_table;
        $this->query($query);
               
        return $this->getresultmatrix();
        
    }
    /**versione NON OO
     * Veloce
     * Restituisce un array con tutti i valori di una colonna $attributo
     * 
     * @param string $$attributo colonna
     * @return array(string)
     */
    function elencoAttributo($attributo)
    {
        $query = "SELECT $attributo FROM ".$this->_table;
        $this->query($query);
        return $this->getresultnum(0);
        
    }
    /**versione NON OO
     * Restituisce un array con tutti i valori di una colonna $attributo
     * in ordine ascendente rispetto alla colonna $ordinato
     * 
     * @param string $$attributo colonna
     * @param string $ordinato attributo rispetto a cui ordinare 
     * @return array(string)
     */
    function elencoAttributoOrdinato($attributo,$ordinato)
    {
        $query = "SELECT $attributo FROM $this->_table ORDER BY $ordinato ASC";
        $this->query($query);
        return $this->getresultnum(0);
        
    }
    /**versione NON Object Oriented
     * esegue una ricerca sul DB
     * 
     * @param string $colonna la colonna in cui cercare $cerca
     * @param string $cerca il valore da cercare
     * @param string $attributo l'attributo dei risultati da restituire
     * 
     * @return array() array con tutti gli attributi dei risultati
     */
    function search($colonna,$cerca,$attributo)
    {
        $query = "SELECT $attributo FROM `".$this->_table.'` WHERE `'.$colonna.'`="'.$cerca.'"';
        $this->query($query);
        return $this->getresultnum(0);
        
    }
    /**versione Object Oriented
     * esegue una ricerca sul DB 
     * 
     * @param array(string) $colonna le colonne in cui cercare $cerca
     * @param array(string) $cerca il valore da cercare
     * 
     * 
     * 
     * @return array(Entity)
     */
    function ricerca($colonna,$cerca)
    {
        $query = "SELECT $this->_key FROM `".$this->_table.'` WHERE ';
        foreach ($colonna as $key => $value) {
            $query.='`'.$value.'`="'.$cerca[$key].'"';
            if (isset($colonna[$key+1])){
                if ($colonna[$key]==$colonna[$key+1]){
                    $query.=' OR ';
                }
                else{
                    $query.=' AND ';
                }
            }
        }
        if($this->query($query)){
            return $this->getresultOO();
        }else {
            return FALSE;
        }
        
        
    }
    /**
     * restituisce in un array di ogetti l'ultimo risultato della query
     * ATTENZIONE l'ultima query deve avere SELECT $this->_key
     */
    public function getresultOO() {
        $lista=  $this->getresultnum(0);
        $return=array();
        
        foreach ($lista as $value) {
            $return[]=  $this->load($value);
        }
        return $return;
    }
    /**
     * restituisce in un array numerico i risultati dell'ultima query
     * di indice n
     * 
     * @param int $n indice di interesse
     * 
     * @return array risultato dell'ultima query
     */
    public function getresultnum($n) {
        $mylist = array();
        while ($righe = $this->_result->fetch_row()) {
            
            
            //uno per ogni attributo della tabella
            $mylist[] = $righe[$n];
        }
        
        return $mylist;
    }
    /**
     * 
     * restituisce in una matrice numerica i risultati dell'ultima query
     * 
     * @return array[array] risultato dell'ultima query
     */
    public function getresultmatrix() {
        $mylist=NULL;
        while ($righe = $this->_result->fetch_row()) {
            
            
            //uno per ogni attributo della tabella
            $mylist[] = $righe;
        }
        
        return $mylist;
    }
    /**
     * restituisce in un array associativo i risultati dell'ultima query
     * 
     * @return array[string] risultato dell'ultima query
     */
    public function getresultassoc() {
        $mylist = 0;
        if ($this->_result->num_rows >1){
            while ($righe = $this->_result->fetch_assoc()) {
                $mylist[] = $righe;
                
            }
        }
        if ($this->_result->num_rows == 1){
            while ($righe = $this->_result->fetch_assoc()) {
                $mylist = $righe;
                
            }
        }
        return $mylist;
    }
    /**
     * 
     * restituisce un array con tutti gli attributi di una tabella
     * 
     * @return array attributi della tabella
     */
    public function ListColumns() {
        $this->query('SHOW COLUMNS FROM '.$this->_table);
        $return=$this->getresultnum(0);
        
        return $return;
    }
    /**
     * inserisce un Entity nella tabella
     * 
     * 
     * @param Entity $Entity l'ogetto Entity da inserire nel database
     */
    public function store($Entity) {
        $attributi=  $this->ListColumns();
        $query= 'INSERT INTO '.$this->_table.' (';
        foreach ($attributi as $key => $value) {
            $query=$query.$value.', ';
        }
        $query=substr($query, 0, -2);
        $query=$query.')  VALUES("';
        foreach ($attributi as $key => $value) {
            $query=$query.$Entity->$value.'", "';
        }
        $query=substr($query, 0, -3);
        $query=$query.')';
        return $this->query($query);
    }
    /**
     * sostituisce una riga con i dati di un Entity
     * 
     * @param string $chiaveoriginale l'id della riga da sostituire
     * @param Entity $Entity l'ogetto Entity da inserire nel database
     */
    public function replace($chiaveoriginale,$Entity) {
        $attributi=  $this->ListColumns();
        $query= 'UPDATE '.$this->_table.' SET ';
        foreach ($attributi as $value) {
            $query.='`'.$value.'`="'.$Entity->$value.'", ';
        }
        $query=substr($query, 0, -2);
        $query.='  WHERE `'.$this->_key.'`="'.$chiaveoriginale.'"';
        
        return $this->query($query);
    }
    /**
     * carica un Entity dalla tabella
     * 
     * @param string $key il valore della primary key da cercare 
     */
    public function load($key) {
        $query= 'SELECT * FROM `'.$this->_table.'` WHERE `'.$this->_key.'`="'.$key.'"';
        if($this->query($query) && $this->_result->num_rows > 0){
            $Entity= new $this->_return_class;
            $attributi = $this->getresultassoc();
            foreach ($attributi as $k => $v){
                $Entity->$k = $v;
            }
            return $Entity;
        } else {
            return FALSE;
        }
    }
    /**
     * cancella un Entity dalla tabella
     * 
     * @param string $key il valore della primary key da cercare 
     */
    public function delete($key) {
        $query= 'DELETE FROM `'.$this->_table.'` WHERE `'.$this->_key.'`="'.$key.'"';
        if($this->query($query)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
     * Aggiorna il valore di un attributo
     * 
     * @param type $attributo clonna i cui cercare $originale
     * @param type $originale il valore da cercare
     * @param type $aggiorna il valore con cui rimpiazzare $originale
     */
    public function update($attributo,$originale,$aggiorna) {
        $query= "UPDATE `$this->_table` SET `$attributo`='$aggiorna' WHERE `$attributo`='$originale'";
        if($this->query($query)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
     * cancella gli elementi di una ricerca
     * 
     * @param type $attributo clonna in cui cercare $originale
     * @param type $originale il valore da cercare
     * 
     */
    public function cancella($attributo,$originale) {
        $query= "DELETE FROM `$this->_table` WHERE `$attributo`='$originale'";
        if($this->query($query)){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>
