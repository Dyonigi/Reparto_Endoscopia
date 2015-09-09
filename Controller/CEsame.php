<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire le tabelle degli esami che il reparto può effettuare
 */
class CEsame extends Controller {

    /**
     * chiama EEsame e FEsame per aggiungere un Esame al DataBase
     */
    public function aggiungiesame() 
    {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $VMain= USingleton::getInstance('VMain');
                $nome = $VMain->getRequest('nome');
                $categoria = $VMain->getRequest('categoria');
                $sottocategoria = $VMain->getRequest('sottocategoria');
                $esameoriginale = $VMain->getRequest('esameoriginale');
                $dieta = $VMain->getRequest('dieta');
                $EEsame= USingleton::getInstance('EEsame');
                    
                $FEsame= USingleton::getInstance('FEsame');
                
                if ($esameoriginale && $esameoriginale!='false'){
                    $EEsame=$FEsame->load($esameoriginale);
                    if ($nome && $nome!='false'){
                        $EEsame->nome = $nome;
                        if ($categoria && $categoria!='false'){
                            $EEsame->categoria = $categoria;
                        }
                        if ($sottocategoria && $sottocategoria!='false'){
                            $EEsame->sottocategoria = $sottocategoria;
                        }
                        if ($dieta && $dieta!='false'){
                            $EEsame->dieta = $dieta;
                        }
                        $FEsame->replace($esameoriginale,$EEsame);
                    }else {
                        $FEsame->delete($esameoriginale);
                    }
                    
                    
                }else{
                    $EEsame->nome = $nome;
                    $EEsame->categoria = $categoria;
                    $EEsame->sottocategoria = $sottocategoria;
                    $EEsame->dieta = $dieta;
                    $FEsame->store($EEsame);
                }
                
                $CHome= USingleton::getInstance('CHome');
                $CHome->showEsame();
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
        
    }
    /**
     * restituisce in una matrice la tabella degli Esami
     */
    public function TabellaEsami() {
        $FEsame= USingleton::getInstance('FEsame');
        $return = $FEsame->TabellaEsami();
        $VMain= USingleton::getInstance('VMain');
        for ($i=0 ; $i<count($return) ; ++$i) {
            $return[$i][3]=$VMain->bottoneDieta();
        }
        return $return;
    }
    /**
     * mostra la dieta dell'esame richesta dall'utente
     */
    public function dietaesame() {
        /**
         * @var View VMain legge l'esame richiesto dall'utente
         */
        $VMain= USingleton::getInstance('VMain');
        /**
         * @var Fdb cerca il testo nel database
         */
        $FEsame= USingleton::getInstance('FEsame');
        $EEsame=$FEsame->load($VMain->getRequest('esame'));
        if($EEsame){
            echo($EEsame->dieta);
        }else{
            $VMain->erroreDataBase();
        }
    }
    
}

?>