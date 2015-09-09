/**
 * Aggiunge un Materiale al Magazzino
 * @param {string} materiale
 * @param {int} quantita
 * @returns {template} mostra di nuovo il magazzino
 */
function AggiungiMateriale(materiale, quantita){
    var data= {
            task: "aggiungimateriale",
            materiale: materiale,
            quantita: quantita
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
function FormAggiungiMateriale() {
    var dialog, form,
 
      
      
      materiale = $( "#materiale" ).autocomplete({
          source: function(response){
              var data= {
                task: "getelencomateriali"
                };
              $.ajax({
                  url: "index.php",
                  type: "POST",
                  dataType: "json",
                  data: data,
                  success: function( data ) {
                        response( data );
                      }
              });
          }
      }),
      quantita = $( "#quantita" ).spinner({
                                        min: 1
                                    }),
      
      allFields = $( [] ).add( materiale ).add( quantita );
      
    function addMateriale() {
        AggiungiMateriale(materiale.val(),quantita.val());
        dialog.dialog( "close" );
    }
 
    dialog = $( "#dialog-Materiale" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: {
        "Aggiungi Materiale": addMateriale,
        Annulla: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addPaziente();
    });
 
    $( "#create-Materiale" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
    
  }                
                