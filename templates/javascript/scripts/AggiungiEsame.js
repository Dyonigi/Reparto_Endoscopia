/**
 * Aggiunge o modifica un esame al DataBase
 * @param {string} sottocategoria
 * @param {string} nome nuovo nome dell'esame
 * @param {string} categoria
 * @param {string} esameoriginale nome dell'esame da modificare se false aggiunge l'esame
 * 
 */
function AggiungiEsame(sottocategoria, nome, categoria, esameoriginale){
    var data= {
            task: "aggiungiEsame",
            sottocategoria: sottocategoria,
            nome: nome,
            categoria: categoria,
            esameoriginale:esameoriginale
            };
            
            
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
                            $("#Esame").html(result);
                            FormAggiungiEsame();
                            }
        
    });
}
/**
 * Aggiunge materiali alla abella Utilizza
 * @param {string} esame esame che utilizza i materiali
 * @param {json} materiali array materiale codificato in stringa json
 * @param {json} quantita array quantita codificato in stringa json
 */
function AggiungiUtilizza(esame,materiali,quantita){
    
    var data= {
            task: "aggiungiutilizza",
            esame: esame,
            materiali: materiali,
            quantita: quantita
            };
            
            
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data
    });
}
function FormAggiungiEsame() {
    
    
    
    var dialog, form;
    /**
     * Contiene il nome originale dell'esame da modificare
     * @type string
     */
    var nomeesame=false;
    /**
     * 
     * chiama AggiungiEsame
     */
    function addEsame() {
        
        AggiungiEsame($( "#sottocategoria" ).val(),$( "#nome" ).val(),$( "#categoria" ).val(),nomeesame);
        $( "#dialog-form-Esame" ).dialog( "close" );
      
    }
    /**
     * 
     * contiene il testo del bottone Aggiungi esame o Modifica esame
     */
    var operazione='Aggiungi Esame';
    /**
     * gestisce i bottoni della form per modificare un esame
     * cambia il testo del bottone Aggiungi esame o Modifica esame
     * @returns {Bottoni}
     */
    function bottoni(){
        return [
            {
                text: operazione,
                click: addEsame
            },
            {
                text: 'Annulla',
                click: function(){
                    $( "#dialog-form-Esame" ).dialog( "close" );
                }
            }
            ];
    };
 
    dialog = $( "#dialog-form-Esame" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: bottoni(),
      close: function() {
        form[ 0 ].reset();
        
      }
    });
    
 
    form = $( "#dialog-form-Esame" ).find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addEsame();
    });
    
    
 
    $( "#create-esame" ).button().on( "click", function(event ) {
        event.stopPropagation();
        nomeesame=false;
       operazione='Aggiungi Esame';
       $( "#dialog-form-Esame" ).dialog({
           title:'Aggiungi Esame',
           buttons: bottoni()});
      $( "#dialog-form-Esame" ).dialog( "open" );
      $( "#categoria" ).selectmenu({
          change: function(event, ui){
              SetSottoCategoria(ui.item.value);
          }
      });
    });
    
    
    $( "#categoria" ).css({
         width: 'auto'
        });
    
    var icon ={ primary: "ui-icon-pencil" };
    $( ".Modifica" ).button({
      text: false,
      icons: icon}).on( "click", function(event) {
      event.stopPropagation();
      $( "#create-esame" ).click();
      operazione='Modifica Esame';
      nomeesame=$(this).parent().prevAll().eq(3).html();
       $( "#dialog-form-Esame" ).dialog({
           title:'Modifica '+nomeesame,
           buttons: bottoni()});
      
      
      $( "#nome" ).val(nomeesame);
      
      $( "#categoria" ).val($(this).parent().prevAll().eq(2).html());
      $( "#categoria" ).selectmenu("refresh");
      
      //$( "#categoria" ).selectmenu('refresh', true);
      SetSottoCategoria($(this).parent().prevAll().eq(1).html());
      var element =$(this);
              $(document).ajaxStop(function(){
                  $( "#sottocategoria" ).val(element.parent().prevAll().eq(1).html());
              }
              
              );
    })
            .tooltip({
                content: function(){
                    return 'Modifica '+$(this).parent().prevAll().eq(3).html();
                }
    });  
    /**
     * form per la gestione della tabella Utilizza
     */
    var dialogutilizza=$( "#dialog-utilizza" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: {
        "Aggiungi Materiale": AggiungiMateriale,
        'Applica Modifiche': submitUtlizza,
        Annulla: function() {
          dialogutilizza.dialog( "close" );
        }
      },
      close: function() {
          $("#Utilizza tr:not(:first-child)").remove();
          
        form[ 0 ].reset();
        
      }
    });
    $( "#dialog-utilizza" ).find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      submitUtlizza();
    });
    /**
     * @var string esameutilizza
     * memorizza l'esame per cui si vuole modificare la tabella utilizza
     */
    var esameutilizza='';
    /**
     * Tooltip e Bottone
     * gestione tabella Utilizza
     */
    $('.Utilizza')
            .button({
                text: false,
                icons: { primary: "ui-icon-arrow-4-diag" }
            })
            .on( "click", function() {
                esameutilizza=$(this).parent().prevAll().eq(4).html();
                $( "#dialog-utilizza" ).dialog('option', 'title', 'Esame '+esameutilizza);
                $( "#dialog-utilizza" ).dialog( "open" );
                SetUtilizza(esameutilizza);
            })
            .tooltip({
                content: function(){
                    return 'Quali materiali vengono utilizzati per effettuare un esame '+$(this).parent().prevAll().eq(4).html();
                }
            });
    /**
     * salva i materiali sulla tabella Utilizza
     * 
     */
    function submitUtlizza(){
        var utilizzamateriale= new Array();
        var utilizzaquantita= new Array();
        var materiale;
        var quantita;
        $("#Utilizza tr:not(:first-child)").each(function() {
            materiale =$(this).find('.materialeinput').val();
            quantita=$(this).find('.quantitainput').val();
            utilizzamateriale.push(materiale);
            utilizzaquantita.push(quantita);
            
        });
        AggiungiUtilizza(esameutilizza,JSON.stringify(utilizzamateriale),JSON.stringify(utilizzaquantita));
        $( "#dialog-utilizza" ).dialog( "close" );
    }
   /**
     * Tooltip e Bottone
     * elimina un esame
     */
    $('.Elimina')
            .button({
                text: false,
                icons: { primary: "ui-icon-trash" }
            })
            .on( "click", function() {
                nomeesame=$(this).parent().prevAll().eq(5).html();
                AggiungiEsame(false, false, false, nomeesame);
            })
            .tooltip({
                content: function(){
                    return "Elimina l'esame "+$(this).parent().prevAll().eq(5).html();
                }
            });
/**
     * Tooltipe bottone che mostra il dialog dieta
     */
    $('.bottone-dieta').button({
        text: false,
        icons: { primary: "ui-icon-script" }
    })
    .click(function(){
        var esame=$(this).parent().prevAll().eq(2).html();
        ApriDietaForm( esame );   
    })
    .tooltip({
        content: function(){
                    return "Dieta dell'esame "+$(this).parent().prevAll().eq(2).html();
                }
    });
};
/**
 * Riempie le opzione di select sottocategoria
 * @param {string} categoria
 *
 */
function SetSottoCategoria(categoria){
    $('#sottocategoria').find('option').remove();
    var dati= {
            task: "elencosottocategorie",
            categoria: categoria
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: dati,
        success: function(result){
            
        $('#sottocategoria').append(result);
    }       
        
    });
}
    /**
     * Riempie la form con i materiali utilizzati dall'esame
     * @param {string} esame 
     */
    function SetUtilizza(esame){
        //alert('setutilizza');
        var dati= {
            task: "elencoutilizza",
            esame: esame
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: dati,
        datatype: 'json',
        success: function(json){
            
            var riga = JSON.parse(json);
            if(riga.length===0){
                AggiungiMateriale();
            }
            for (var materiale in riga){
                AggiungiMateriale(materiale,riga[materiale]);
                
            }
            
    }       
    });
    
}
/**
     * Aggiunge un materiale all'elenco dei materiali utlizzati
     * @param {string} materiale 
     * @param {string} quantita 
     * 
     */
    function AggiungiMateriale(materiale,quantita){
        $('#input-utilizza tr').clone().appendTo($('#Utilizza'));
        if(typeof materiale === 'object' || typeof materiale === 'undefined'){
            materiale='';
            quantita=1;
        }
        $('#Utilizza tr:last-child').find('.materialeinput').val(materiale);
        $('#Utilizza tr:last-child').find('.quantitainput').spinner({
                                                                min: 0
                                                            })
                                                           .val(quantita);
        
    }
/**
 * mostra in un dialog la dieta che il paziente deve seguire prima dell'esame
 * un Dottore puo modificarne il testo
 * @param {string} esame
 */
function ApriDietaForm( esame ){
    var data= {
            task: "dietaesame",
            esame: esame
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("<div id='dialog-dieta'><textarea >"+result+"</textarea ></div>").dialog({
                height: 'auto',
                width: 'auto',
                modal: true,
                buttons: {
                    'Applica Modifiche': function(){
                        var dieta=$('#dialog-dieta textarea').val();
                        debug(dieta);
                        sumitDieta(esame,dieta);
                        $('#dialog-dieta').dialog( "close" );
                        $('#dialog-dieta').remove();
                    },
                    Annulla: function() {
                      $('#dialog-dieta').dialog( "close" );
                      $('#dialog-dieta').remove();
                    }
                  }
            });
                            }
        
    });
}
/**
 * Modifica la dieta di un esame al DataBase
 * 
 * @param {string} esame nome dell'esame
 * @param {string} dieta testo della dieta
 * 
 * 
 */
function sumitDieta(esame,dieta){
    var data= {
            task: "aggiungiEsame",
            nome: esame,
            esameoriginale: esame,
            dieta: dieta
            };
            
            
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data
    });
}