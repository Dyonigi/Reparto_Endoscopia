<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire la tabella dei contenuti gestita dall'Admin
 */
class CContenuti extends Controller {

    /**
     * restituisce il contenuto configurazionecomple
     */
    public function getconfigurazionecompletata () 
    {
        $FContenuti= USingleton::getInstance('FContenuti');
        $EContenuti=$FContenuti->load('configcomple');
        return $EContenuti->testo;
    }
    /**
     * restituisce il contenuto Home
     */
    public function Home () 
    {
        $FContenuti= USingleton::getInstance('FContenuti');
        $EContenuti=$FContenuti->load('Home');
        return $EContenuti->testo;
    }
    /**
     * Salva il contenuto ella homepage modificato dall'amminisratore
     */
    public function SalvaContenutoHome() {
        /**
         * @var Controller CLogin controlla che l'utente sia un Ammnistratore
         */
        $CLogin= USingleton::getInstance('CLogin');
        /**
         * VMain legge le modifiche dal client e ricarica la home
         */
        $VMain= USingleton::getInstance('VMain');
        if($CLogin->privilegi()==4){
            /**
             * chiama FContenuti per salvare sul database
             */
            $FContenuti= USingleton::getInstance('FContenuti');
            $EContenuti=$FContenuti->load('Home');
            $ContenutoHome = $VMain->getRequest('ContenutoHome');
            if ($ContenutoHome && $ContenutoHome!='false'){
                                $EContenuti->testo = $ContenutoHome;
            }
            $FContenuti->replace('Home',$EContenuti);
        }
        $VMain->Home($CLogin->privilegi(),TRUE);
    }
}

?>