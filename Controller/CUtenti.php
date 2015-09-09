<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire la tabella degli Utenti
 */
class CUtenti extends Controller {

   /**
    * mostra l'elenco degli Utenti che devono essere confermati come parte del personale del reparto
    * se l'utente che richiede l'elenco è un Admin mostra Dottori, Infermieri e Magazznieri
    * se l'utente che richiede l'elenco è un Dottore mostra Infermieri e Magazznieri 
    */
   public function showUtentiNonConfermati() {
       $CLogin= USingleton::getInstance('CLogin');
       $FUtente= USingleton::getInstance('FUtente');
       $VMain= USingleton::getInstance('VMain');
       $lista=array();
       switch ($CLogin->privilegi()) {
           case 4://Amministratore
               $lista=$FUtente->listaUtentiNonConfermati();
               
               break;
           case 3://Dottore
               $lista=$FUtente->InfermieriNonConfermati();
               
               break;

           default:
               $VMain->erroreprivilegi();
               die();
               break;
       }
       $attributi=array(
           'Username','Nome','Cognome','Mansione'
       );
       $mylist=array();
       
       foreach ($lista as $value) {
           //debug(print_r($value));
           $mylist[]=array(
               $value->username,
               $value->nome,
               $value->cognome,
               $value->masione()
           );
           
       }
       $VMain->assign('attributi',$attributi);
       $VMain->assign('mylist',$mylist);
       $VMain->display('UtentiNonConfermati.tpl');
       
       
   }
}

?>