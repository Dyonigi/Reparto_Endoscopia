/**
 * aggiunge un paziente al Data Base
 * 
 * 
 * @param {string} codicecup
 * @param {string} nome
 * @param {string} cognome
 * @param {string} esame
 * @param {string} dataEsame
 * 
 * 
 */
function AggiungiPaziente(codicecup, nome, cognome,esame,dataEsame){
    var data= {
            task: "aggiungipaziente",
            codicecup: codicecup,
            nome: nome,
            cognome: cognome,
            dataEsame: dataEsame,
            esame: esame
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $( "#pazienti tbody" ).append(result);
            FormAggiungiPaziente();
        }
        
    });
}
/**
 * Modifica i dati di un paziente
 * chiama CHome->modificapaziente
 * 
 * @param {element} rigadamodificare la riga della tabella in cui scrivere il risultato
 * @param {type} cuporiginale codice CUP del paziente di cui modificare i dati
 * nuovi dati
 * @param {type} codicecup
 * @param {type} nome
 * @param {type} cognome
 * @param {type} esame
 * @param {type} dataEsame
 * @returns {undefined}
 */
function MofificaPaziente(rigadamodificare,cuporiginale,codicecup, nome, cognome,esame,dataEsame){
    var data= {
            task: "modificapaziente",
            cuporiginale:cuporiginale,
            codicecup: codicecup,
            nome: nome,
            cognome: cognome,
            dataEsame: dataEsame,
            esame: esame
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        datatype: 'json',
        success: function(json){
            var riga = JSON.parse(json);
            rigadamodificare.children().eq(0).html(riga[0]);
            rigadamodificare.children().eq(1).html(riga[1]);
            rigadamodificare.children().eq(2).html(riga[2]);
            rigadamodificare.children().eq(3).html(riga[3]);
            rigadamodificare.children().eq(4).html(riga[4]);
            rigadamodificare.children().eq(5).html(riga[5]);
        }
        
    });
}
/**
 * cambia lo stato del refert di un paziente
 * 
 * @param {string} codicecup codice CUP del paziente
 * @param {boolean} referto true refert pronto false referto in attesa
 * @param {element} element l'elemento del DOM in cui salvare il risultato
 * @returns {template}
 */
function cambiaReferto(codicecup,referto,element){
    
    var data= {
            task: "cambiareferto",
            codicecup: codicecup,
            referto: referto
            };
    var options = { percent: 0 };
    element.children().hide('scale' , options , 400 , function(){
        $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            element.html(result);
            element.children().show('scale' , options , 400 , FormAggiungiPaziente());
        }
    }); 
    });
   
}

/**
 * 
 * Prepara la form aggiungi paziente
 * e le notifiche delle scorte in magazzino
 */
function FormAggiungiPaziente() {
   
    /**notifiche scorte sufficienti
    **/
    $( ".abbastanza" ).tooltip({
        tooltipClass: function(){
            var element = $( this );
            if (element.attr( "title" )==="close") {
                return "ui-state-error";
            }},
        content: function(){
            var cognome =$(this).parent().children().eq(2).html();
            var nome =$(this).parent().children().eq(1).html();
            debug(nome);
            if($( this ).attr( "title" )==="check"){
                return "Le Scorte in Magazzino sono sufficienti per Effettuare l'esame di "+nome+' '+cognome;
            } else if ($( this ).attr( "title" )==="close") {
                $( this ).tooltip({ tooltipClass: "ui-state-error" });
                return "Le Scorte in Magazzino non sono sufficienti per Effettuare l'esame di "+nome+' '+cognome;
            } else if ($( this ).attr( "title" )==="minus") {
                return "La Data dell\'esame &egrave passata";
            }
             else if ($( this ).attr( "title" )==="refresh") {
                return "Ricaricare la pagina per calcolare se le scorte in magazzino sono sufficienti";
            }
        }
    });
    
    /**
     * @var dialog contiene la form per aggiungere o modificare un paziente
     * @var form form per aggiungere o modificare un paziente
     * @var nome cognome codicecup esame dataesame gli imput della form
     * @var tips notifiche scorte sufficienti
     */
    var dialog, form,
 
      
      
      nome = $( "#nome" ),
      cognome = $( "#cognome" ),
      codicecup = $( "#codicecup" ),
      esame = $( "#esame" ),
      dataEsame = $( "#dataEsame" ).datepicker({
                                            dateFormat: 'yy-mm-dd',
                                            minDate: 0,
                                            changeMonth: true,
                                            changeYear: true
                                          }),
      
      allFields = $( [] ).add( nome ).add( cognome ).add( codicecup ).add( esame ).add( dataEsame ),
      
      /**
       * 
       * @var bottoniaggiungi bottoni della form per aggiungere un paziente
       */
      bottoniaggiungi={
            "Aggiungi Paziente": addPaziente,
            Annulla: function() {
                 $( "#dialog-form-create-pazienti" ).dialog( "close" );
            }},
       /**
        * 
        * @var codicecuporiginale memorizza il codice CUP del paziente quando si preme il tasto modifica
        * @var rigadamodificare elemento riga della tabella cn i dati del paziente che si
        * vogliono modificare
        */
       codicecuporiginale='',
       rigadamodificare,
       /**
       * 
       * @var bottoniModifica bottoni della form per modificare un paziente
       */
      bottoniModifica={
            "Modifica Paziente": editPaziente,
            Annulla: function() {
                 $( "#dialog-form-create-pazienti" ).dialog( "close" );
            }};
    /**
     * 
     * Controlla che i dati iseriti per il paziente siano corretti
     * @returns {Boolean}
     */
    function ControllaDatiPaziente(){
        var valid = true;
      allFields.removeClass( "ui-state-error" );
      var tips = $( "#validateTips" );
      valid = valid && CheckRegex( nome, 'nome', tips );
      valid = valid && CheckRegex( cognome, 'nome', tips );
      valid = valid && CheckRegex( codicecup, 'codicecup', tips );
      return valid;
    }
    
 /**
  * chiama AggiungiPaziente con i dati compilati della form
  * @returns {Boolean}
  */
    function addPaziente() {
      var valid = ControllaDatiPaziente();
 
      if ( valid ) {
        AggiungiPaziente(codicecup.val(),nome.val(),cognome.val(),esame.val(),dataEsame.val());
        dialog.dialog( "close" );
      }
      return valid;
    }
    /**
     * chiama MofificaPaziente con i dati compilati della form
     * 
     * 
     * @returns {Boolean}
     */
    function editPaziente() {
      var valid = ControllaDatiPaziente();
 
      if ( valid ) {
        MofificaPaziente(rigadamodificare,codicecuporiginale,codicecup.val(),nome.val(),cognome.val(),esame.val(),dataEsame.val());//poi lo mando al DB. così non devo caricare di nuovo l'elenco dei Paziente
        dialog.dialog( "close" );
      }
      return valid;
    }
 
    dialog = $( "#dialog-form-create-pazienti" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: bottoniaggiungi,
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = $( "#dialog-form-create-pazienti" ).find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addPaziente();
    });
 
    $( "#create-pazienti" ).button().on( "click", function() {
      $( "#dialog-form-create-pazienti" ).dialog({
           buttons: bottoniaggiungi
      });  
      $( "#dialog-form-create-pazienti" ).dialog( "open" );
    });
    
    

    var icon ={ primary: "ui-icon-pencil" };
    $( ".Modifica" ).button({
      text: false,
      icons: icon
        })
        .on( "click", function() {
                            $( "#codicecup" ).val($(this).parent().prevAll().eq(5).html());
                            codicecuporiginale = $( "#codicecup" ).val();
                            $( "#nome" ).val($(this).parent().prevAll().eq(4).html());
                            $( "#cognome" ).val($(this).parent().prevAll().eq(3).html());
                            $( "#esame" ).val($(this).parent().prevAll().eq(2).html());
                            $( "#dataEsame" ).val($(this).parent().prevAll().eq(1).html());
                            rigadamodificare= $(this).parent().parent();
                            $( "#dialog-form-create-pazienti" ).dialog({
                                         buttons: bottoniModifica
                                    });
                            $( "#dialog-form-create-pazienti" ).dialog( "open" );
                            })
        .tooltip({
            content:function(){
                return 'Modifica i dati di '+$(this).parent().prevAll().eq(4).html()+' '+$(this).parent().prevAll().eq(3).html();
            }
        });
    /**
     * bottone Refreto pronto
     * clicca per cambiare lo stato del referto
     */
    $( ".RefertoV" )
            .button({
                text: false,
                icons: { primary: "ui-icon-check" }
                })
            .off('click')
            .on( "click", function() {
                        var codicecup = $(this).parent().prevAll().eq(4).html();
                        cambiaReferto(codicecup,0,$(this).parent());
                        })
            .tooltip({
                tooltipClass:'ui-state-highlight',
                content: function(){
                        return '<p>Il Referto &egrave pronto per essere consegnato a '+
                                $(this).parent().prevAll().eq(3).html()+
                                " "+
                                $(this).parent().prevAll().eq(2).html()+
                                '</p><p>Clicca se i Referto non &egrave ancora pronto</p>';
                        }
            });
    /**
     * bottone Refreto in attesa
     * clicca per cambiare lo stato del referto
     */
    $( ".RefertoX" ).button({
      text: false,
      icons: { primary: "ui-icon-close" }
      })
              .off('click')
              .on( "click", function() {
                        var codicecup = $(this).parent().prevAll().eq(4).html();
                        cambiaReferto(codicecup,1,$(this).parent());
                        })
              .tooltip({
                  tooltipClass:'ui-state-error',
                content: function(){
                        return '<p>Il Referto non \è ancora pronto per essere consegnato a '+
                                $(this).parent().prevAll().eq(3).html()+
                                " "+
                                $(this).parent().prevAll().eq(2).html()+
                                '</p><p>Clicca se i Referto \è pronto</p>';
                        }
            });
    
   
  }
/**
 * Rimuove Materiali dal Magazzino
 * @param {json} materiale matrice con i materiali e le quantità da rimuovere dal magazzino
 * 
 * @returns {template} mostra di nuovo il magazzino
 */
function UtilizzaMateriale(materiale){
    var data= {
            task: "utilizzamateriale",
            materiale: materiale
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
                            $("#Materiale").html(result);
                            FormAggiungiMateriale();
                            }
        
    });
}
  /**
   * prepara la pagina del magazzino
   * e dei materiali utilizzati in un esame
   */
  function FormAggiungiMateriale(){
      
 

      /**
       * @var materiali object
       * contiene tutti i materiali utilizzati dall'esame 
       * e le quantità
       */
      var materiali = {
          /**
           * aggiunge un materiale al carrello
           * @param {string} materiale
           * @return {boolean} true il materiale non era presente nel carrello
           * false il materiale non èra presente nel carrello, è stato appena aggiunto
           */
          add: function(materiale){
              
              if(this[materiale] >= 1){
                this[materiale]+=1;
                
                return false
            } else {
                this[materiale]=1;
                
                return true;
            }
          },
          /**
           * setta la quantità di un materiale nel carrello
           * @param {string} materiale
           * @param {int} quantita
           *
           */
          set: function(materiale,quantita){
              if (quantita==0){
                  delete this[materiale];
              } else{
              this[materiale]=parseInt(quantita);
              }
          }
      };
  /**
   * rimuovi i materiali nel carrello dal database
   */
  function RimuoviMateriali(){
      UtilizzaMateriale(JSON.stringify(materiali));
      CancellaCarrello();
  }
 /**
  * resetta il carrello
  */
 function CancellaCarrello(){
     $( "#Utilizza ul" ).find( "li" ).remove();
     $( "#Utilizza ul" ).find( "input" ).remove();
     $( "#Utilizza ul" ).append('<li class="placeholder">Trascina i Materiali qui</li>');
 }
    /**
     * carrello 
     * dei materiali utilizzati durante un esame
     */  
    $('#Utilizza').draggable({
        containment: "#resizer, :not(#magazzino-contain)",
        scroll: false,
        handle: "h1"
    });
    $('#Utilizza').position({
        my: 'right-40 top',
        at: 'right bottom+40',
        of: $('.ui-tabs-nav')
    });
    /**
     * l'Utente trascina i materiali
     */
    $( "#materiale-draggable td:first-child" ).draggable({
      appendTo: "body",
      helper: "clone"
    });
    /**
     * nel carrello
     */
    $( "#Utilizza ul" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      accept: ":not(.ui-sortable-helper)",
      drop: function( event, ui ) {
        $( this ).find( ".placeholder" ).remove();
        var max=$('#materiale-draggable td:contains('+ui.draggable.text()+')').html();
        var mat = ui.draggable.text().split(' ').join('_');
        if(materiali.add(mat)){
            $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
            $('<input class="text ui-widget-content ui-corner-all">')
                    .spinner({
                        max : max
                    })
                    .attr('id','quantita'+mat)
                    .change(function(){
                        var v=$(this).val();
                        materiali.set(mat,v);
                    })
                    .val(1)
                    .appendTo( this );
            }else{
                $("#quantita"+mat).val(materiali[mat]);
            }}
        
      
    }).sortable({
      items: "li:not(.placeholder)",
      sort: function() {
        // gets added unintentionally by droppable interacting with sortable
        // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
        $( this ).removeClass( "ui-state-default" );
      }
    });
    $('#Invia')
            .button()
            .click(RimuoviMateriali);
    $('#Cancella')
            .button()
            .click(CancellaCarrello);
  }
  