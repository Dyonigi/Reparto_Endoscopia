<?php
/**
 * @access public
 * @package Controller
 * @author Denis
 */
/**
 * Chiama Foundation per gestire le tabelle delle sotto categorie di esami che il reparto può effettuare
 */
class CSottoCategoria extends Controller {

    
    /**
     * mostra l'elenco di tutte le sottocategorie della $categoria
     * 
     * 
     * @return template <select> oppure json 
     */
    public function elencosottocategorie() {
        $VMain= USingleton::getInstance('VMain');
        $categoria = $VMain->getRequest('categoria');
        $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
        $categorie=$FSottoCategoria->search('categoria',$categoria,'nome');
        if ($VMain->getRequest('formmodifica')){
            echo(json_encode($categorie));
            return TRUE;
        }
        $VMain->assign('categorie',$categorie);
        
        $VMain->display('SelectSottocategorie.tpl');
        
    }
    /**
     * chiama ESottoCategoria e FSottoCategoria per modificare o aggiungere una SottoCategoria al DataBase
     */
    public function modificasottocategoria() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $nome=$VMain->getRequest('nome');
                $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
                $FCategoria= USingleton::getInstance('FCategoria');
                $sottocategoriaoriginale=$VMain->getRequest('sottocategoriaoriginale');
                if($sottocategoriaoriginale && $sottocategoriaoriginale!='false'){
                    $FSottoCategoria->update('nome',$sottocategoriaoriginale,$nome);
                    $FEsame= USingleton::getInstance('FEsame');
                    $FEsame->update('sottocategoria',$sottocategoriaoriginale,$nome);
                }else{
                    $categoria = $VMain->getRequest('categoria');
                    $ESottoCategoria= USingleton::getInstance('ESottoCategoria');
                    $ESottoCategoria->nome = $nome;
                    $ESottoCategoria->categoria = $categoria;
                    $FSottoCategoria->store($ESottoCategoria);
                }
                $CCategoria= USingleton::getInstance('CCategoria');
                $CCategoria->showCategoria();
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
        
    }
/**
     * chiama ESottoCategoria e FSottoCategoria per eliminare una SottoCategoria dal DataBase
     */
    public function eliminasottocategoria() {
        /**
         * @var Controller CLogin controlla che l'utente abbia i privlegi per invocare questo metodo
         */
        $CLogin= USingleton::getInstance('CLogin');
        $VMain= USingleton::getInstance('VMain');
        switch ($CLogin->privilegi()) {
            case 3://Dottore
                $nome=$VMain->getRequest('nome');
                $FSottoCategoria= USingleton::getInstance('FSottoCategoria');
                $FSottoCategoria->delete($nome);
                $FEsame= USingleton::getInstance('FEsame');
                $FEsame->cancella('sottocategoria',$sottocategoriaoriginale);
                $CCategoria= USingleton::getInstance('CCategoria');
                $CCategoria->showCategoria();
                break;
            default:
                
                $VMain->erroreprivilegi();
                return FALSE;
                break;
        }
        
    }
}

?>