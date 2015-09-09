<?php
/**
 * Classe VTab, estende la classe view
 * gestisce gli array Tabs per VMain e JavaJcript
 *
 * @package View
 */
class VTab extends View {
    /**
     * array con gli id e i testi dei pulsanti menu
     */
    public $Magazzino= array(
                                            'idbottone' => 'BottoneMateriale',
                                            'iddiv' => 'Materiale',
                                            'testobottone' => 'Magazzino',
                                            'task' => 'showMateriale',
                                            'funzione' => 'FormAggiungiMateriale()'
                        );
    public $Pazienti = array(
                                            'idbottone' => 'BottonePazienti',
                                            'iddiv' => 'Pazienti',
                                            'testobottone' => 'Pazienti',
                                            'task' => 'showpazienti',
                                            'funzione' => 'FormAggiungiPaziente()'
                        );
    public $Categoria = array(
                                            'idbottone' => 'BottoneCategoria',
                                            'iddiv' => 'Categoria',
                                            'testobottone' => 'Categorie di Esami',
                                            'task' => 'showCategoria',
                                            'funzione' => 'FormAggiungiCategoria();FormAggiungiSottoCategoria()'
                                                );
    public $Esame = array('idbottone' => 'BottoneEsame',
                                            'iddiv' => 'Esame',
                                            'testobottone' => 'Esami del Reparto',
                                            'task' => 'showEsame',
                                            'funzione' => 'DietaEsame()'
                                            );
    public $Infermieri =array('idbottone' => 'BottoneInfermieri',
                                            'iddiv' => 'Infermieri',
                                            'testobottone' => 'Infermieri e Magazzinieri da registrare',
                                            'task' => 'showInfermieri',
                                            'funzione' => 'ElencoDottori()'
                                            );
    public $Dottori = array(
                                            'idbottone' => 'BottoneDottori',
                                            'iddiv' => 'Dottori',
                                            'testobottone' => 'Utenti da registrare',
                                            'task' => 'showDottori',
                                            'funzione' => 'ElencoDottori()'
                                                );
    public $ilmioEsame    = array('idbottone' => 'BottoneilmioEsame',
                                            'iddiv' => 'ilmioEsame',
                                            'testobottone' => 'il mio Esame',
                                            'task' => 'dettagliesamedelpaziente',
                                            'funzione' => ''
                                            );
    public $Confermato    = array('idbottone' => 'BottoneConfermato',
                                            'iddiv' => 'Confermato',
                                            'testobottone' => 'Non posso visualizzare i contenuti',
                                            'task' => 'showConfermato',
                                            'funzione' => ''
                                            );



                                            /**
     * restituisce un array associativo con gli id e i testi dei pulsanti menu
     * 
     * @param int $privilegi privilegi dell'utente
     */
    public function Tabs($privilegi) {
        //inizializza l'array da restituire
        $Tabs = array();
        // a sceconda dei privilegi aggiunge testidiversi
        switch ($privilegi) {
            case 1://Magazziniere
                $Tabs = array(
                    $this->Magazzino,
                    $this->Esame);

                break;
            case 2://Infermiere
                $Tabs = array(
                    $this->Pazienti,
                    $this->Magazzino,
                    $this->Esame);

                break;
            case 3://Dottore
                $esame=$this->Esame;
                $esame['funzione']='FormAggiungiEsame()';
                $Tabs = array(
                    $this->Pazienti,
                    $this->Categoria,
                    $esame,
                    $this->Infermieri
                );

                break;
            case 4://Admin
                $Tabs = array(
                    $this->Dottori,
                    $this->Esame
                );

                break;
            case 5://Paziente
                $Tabs = array(
                    $this->ilmioEsame,
                    $this->Esame
                );

                break;
            case 6://Utente non confermato da un Admin
                $Tabs = array(
                    $this->Confermato,
                    $this->Esame
                );

                break;
            case 0://Utente non registrato
                $Tabs = array(
                    $this->Esame
                );

                break;
            default:
                $Tabs=null;
                break;
        }
        return $Tabs;
    }
}
?>