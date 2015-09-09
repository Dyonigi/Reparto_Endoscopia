<?php
/**
 * @access public
 * @package Utility
 */
class USingleton
{
   /**
   * La variabile statica privata che conterrà l'istanza univoca
   * della nostra classe.
   */
   private static $instance = array();

   /**
   * Il costruttore in cui ci occuperemo di inizializzare la nostra
   * classe. E' opportuno specificarlo come privato in modo che venga
   * visualizzato automaticamente un errore dall'interprete se si cerca
   * di istanziare la classe direttamente.
   */
   private function __construct()
   {
      // vuoto
   }

    /**
     * Crea un'istanza della classe '$var'. Si usa quando non si vogliono duplicati di
     * questa istanza
     * @param string $var
     * @return mixed Ritorna un'istanza della classe con nome uguale alla stringa inserita
     */
   public static function getInstance($var)
   {
        if(! isset(self::$instance[$var]))
            {
                if($var=='mysqli'){
                    global $config;
                    debug('Usingletone sta connettendo al db '.$config['mysql']['host'].$config['mysql']['user'].$config['mysql']['password']);
                    self::$instance[$var] = new mysqli($config['mysql']['host'],$config['mysql']['user'],$config['mysql']['password']);
                }
                else {
                    self::$instance[$var] = new $var;
                }
            }
        return self::$instance[$var];
    }
}
?>