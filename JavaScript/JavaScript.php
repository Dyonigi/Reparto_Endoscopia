<?php
require_once 'lib/smarty/Smarty.class.php';
/* Classe JavaScript e funzioni per inserire gli script
 * tiene separati javascript da html e php grazie al template engine Smarty
 * 
 * eredita da Smarty
 * 
 * @access public
 * @package JavaScrpt
 * @author Denis
 */

/**
 * Classe JavaScript
 * genera il path relativo degli script javascript
 * il path è memorizzato nell'array globale @$config
 */
class JavaScript extends Smarty 
{
    
    /**
     * directory degli scripts
     */
    public $jquery;
    public $jquery_ui;
    public $jquery_ui_css;
    public $libreriejavascript;
    public $css_directory;
    
    /**
     * configura la directory degli scripts
     * 
     * @global type $config 
     */
    public function __construct() {
       
        global $config;
        //configura jquery, librerie javascript, css
        $this->css_directory = $config['css'];
        $this->libreriejavascript = $config['javascript']['librerie'];
        $this->jquery = $config['javascript']['jquery'];
        $this->jquery_ui = $config['javascript']['jquery_ui'];
        $this->jquery_ui_css = $config['javascript']['jquery_ui_css'];
        //configura Smarty
        parent::__construct();
        $this->template_dir = $config['javascript']['template_dir'];
        $this->compile_dir = $config['javascript']['compile_dir'];
        $this->config_dir = $config['javascript']['config_dir'];
        $this->cache_dir = $config['javascript']['cache_dir'];
        $this->caching = false;
        
    }
    
    /**
     * restituisce uno script surce tag
     * 
     * @param string $path nome del file contenuto nella cartella lib
     */
    public function javascript_surce()
    {
        $this->assign('forms',$this->css_directory.'forms.css');
        $this->assign('jqueryuicss',$this->jquery_ui_css);
        $this->assign('jquery',$this->jquery);
        $this->assign('jqueryui',$this->jquery_ui);
        $this->assign('Center',$this->libreriejavascript.'Center.js');
        $return = $this->fetch('jquery.tpl');
        
        return $return;
    }
    /**
     * estituisce lo script per rendere il $id un widjet Tab
     * 
     * @param string $id la lista da trasformare in Tab
     */        
    public function jqueryUItab($id) {
        $this->assign('DietaEsame',$this->libreriejavascript.'DietaEsame.js');
        $this->assign('id',$id);
        return  $this->fetch('jqueryTabs.tpl');
    }
    /*
     * restituisce gli script per le chiamate asincrone delle tab
     * 
     * 
     * @param string $Bottone id del bottone che mostra il contenuto della Tab
     * @param string $id id del div in cui scrivere il contenuto della Tab
     * @param string $task il metodo di CHome da chiamare
     * @param string $Funzione le funzioni da lanciare dopo aver caricato il contenuto
     */
    public function Tabclick($privilegi) {
        $VTab = USingleton::getInstance('VTab');
        $this->assign('Tabs', $VTab->Tabs($privilegi));
        return  $this->fetch('Tabclick.tpl');
    }
    
}
?>