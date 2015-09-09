<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire le tabelle delle categorie di esami che il reparto può effettuare
 */
class CCategoria extends Controller {


    /**
     * chiama ECategoria e FCategoria per modificare una Categoria al DataBase
     */
    public function modificacategoria() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $ECategoria= USingleton::getInstance('ECategoria');
                $nome=$VMain->getRequest('nome');
                $ECategoria->nome = $nome;
                $FCategoria= USingleton::getInstance('FCategoria');
                $categoriaoriginale=$VMain->getRequest('categoriaoriginale');
                if ($categoriaoriginale && $categoriaoriginale!='false'){
                    $FCategoria->replace($categoriaoriginale,$ECategoria);
                    $FEsame= USingleton::getInstance('FEsame');
                    $FEsame->update('categoria',$categoriaoriginale,$nome);
                    $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
                    $FSottoCategoria->update('categoria',$categoriaoriginale,$nome);
                }else{
                    $FCategoria->store($ECategoria);
                }
                
                
                $this->showCategoria();
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
        
    }
     /**
     * chiama ECategoria e FCategoria per eliminare una Categoria dal DataBase
     */
    public function eliminacategoria() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $nome=$VMain->getRequest('nome');
                $FCategoria= USingleton::getInstance('FCategoria');
                $FCategoria->delete($nome);
                $FEsame= USingleton::getInstance('FEsame');
                $FEsame->cancella('categoria',$nome);
                $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
                $FSottoCategoria->cancella('categoria',$nome);
                $this->showCategoria();
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
        
    }
    /**
     * mostra l'elenco delle categorie di esame che il reparto puo effettuare
     */
    public function showCategoria() {
        
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        /**
         * @var View VMain mostra i contenuti
         */
        $VMain= USingleton::getInstance('VMain');
        if($CLogin->privilegi()==3){
            
            $FCategoria= USingleton::getInstance('FCategoria');
            $mylist=$FCategoria->copyTable();
            $categorie=array();
            $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
            foreach ($mylist as $key => $value) {
                $categorie[$value[0]]=$FSottoCategoria->search('categoria',$value[0],'nome');
            };
            $VMain->assign('categorie',$categorie);
            $VMain->display('elencocategorie.tpl');
        }else{
            $VMain->erroreprivilegi();
        }
        
    }
}

?>