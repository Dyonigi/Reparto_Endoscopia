
/**
 * Modifica o aggiunge una categoria di esami
 * @param {strng} categoriaoriginale nome della categoria originale che si vuole modificare
 * false se si vuole aggiungere una categoria
 * @param {string} nome nuovo nome della categoria
 * 
 * 
 */
function ModificaCategoria(categoriaoriginale,nome){
    categoriaoriginale = typeof categoriaoriginale !== 'undefined' ? categoriaoriginale : false;
    var data= {
            task: "modificacategoria",
            categoriaoriginale: categoriaoriginale,
            nome: nome
            };
    
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("#Categoria").html(result);
            FormAggiungiCategoria();
            FormAggiungiSottoCategoria();
        }
        
    });
}
/**
 * Elimina una categoria di esami
 * 
 * @param {string} nome nome della categoria
 * 
 * 
 */
function EliminaCategoria(nome){
    var data= {
            task: "eliminacategoria",
            nome: nome
            };
    
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("#Categoria").html(result);
            FormAggiungiCategoria();
            FormAggiungiSottoCategoria();
        }
        
    });
}
/**
 * Elimina una sotto categoria di esami
 * 
 * @param {string} nome nome della sotto categoria
 * 
 * 
 */
function EliminaSottoCategoria(nome){
    var data= {
            task: "eliminasottocategoria",
            nome: nome
            };
    
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("#Categoria").html(result);
            FormAggiungiCategoria();
            FormAggiungiSottoCategoria();
        }
        
    });
}
/**
 * Modifica o aggiunge una sottocategoria di esami
 * @param {strng} sottocategoriaoriginale nome della sottocategoria originale che si vuole modificare
 * false se si vuole aggiungere una categoria
 * @param {string} nome nuovo nome della sottocategoria
 * @param {string} categoria la categoria a cui appartiene la sottocategoria da aggiungere
 * 
 */
function ModificaSottoCategoria(sottocategoriaoriginale,nome,categoria){
    sottocategoriaoriginale = typeof sottocategoriaoriginale !== 'undefined' ? sottocategoriaoriginale : false;
    alert('aggiongi'+categoria);
    var data= {
            task: "modificasottocategoria",
            sottocategoriaoriginale: sottocategoriaoriginale,
            nome: nome,
            categoria: categoria
            };
    
    
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("#Categoria").html(result);
            FormAggiungiCategoria();
            FormAggiungiSottoCategoria();
        }
        
        
    });
}
/**
 * 
 * Gestisce la form per
 * aggiungere una categoria di esami e le sue sottocategorie al database
 */
function FormAggiungiCategoria() {
    
    var dialog, form,
            
      
      nome = $( "#nome" );
      $( "#categorie-contain" ).accordion({
                                            heightStyle: "content"
                                          });
    
    
    /**
       * 
       *  bottoni bottoni della form per aggiungere una categoria
       * @var string Aggiungi Categoria oppure Modifica Categoria
       */
      var operazione='Aggiungi Categoria';
      function bottoni(){
          return [
            {
                text: operazione,
                click: function(){
                    ModificaCategoria(categoriaoriginale,$( "#nome" ).val());
                    categoriaoriginale=false;
                    $( "#dialog-Categoria" ).dialog( "close" );
                }
            },
            {
                text: 'Annulla',
                click: function(){
                    categoriaoriginale=false;
                    $( "#dialog-Categoria" ).dialog( "close" );
                    
                }
            }
            ];};
       /**
        * 
        * @var categoriaoriginale memorizza il nome della categoria quando si preme il tasto modifica
        * 
        */
       var categoriaoriginale=false,
       
       
 /**
 * 
 * Prepara la form per
 * aggiungere una categoria di esami e le sue sottocategorie al database
 */
    dialog = $( "#dialog-Categoria" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: bottoni(),
      close: function() {
        form[ 0 ].reset();
        
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      ModificaCategoria(categoriaoriginale,nome.val());
      categoriaoriginale=false;
      $( "#dialog-Categoria" ).dialog( "close" );
    });
 /**
  * Bottone
  * apre la form per aggiungere una categoria
  */
    $( "#create-Categoria" ).button().on( "click", function() {
        categoriaoriginale=false;
        operazione='Aggiungi Categoria';
      $( "#dialog-Categoria" ).dialog('option', 'title', 'Aggiungi la Categoria di Esami');
      $( "#dialog-Categoria" ).dialog({
          buttons: bottoni()
      });
      $( "#dialog-Categoria" ).dialog( "open" );
    });
    
/**
 * Bottone
 * apre la form con i valori della Categoria che l'utente vuole modificare
 * @type button
 * 
 */
    var icon ={ primary: "ui-icon-pencil" };
    $( ".ModificaCategoria" ).button({
        
      text: false,
      icons: icon}).on( "click", function() {
      categoriaoriginale = $(this).parent().children("p").html();
      $( "#nome" ).val(categoriaoriginale);
      operazione='Modifica';
      $( "#dialog-Categoria" ).dialog({
          buttons: bottoni()
      });
      $( "#dialog-Categoria" ).dialog('option', 'title', 'Modifica '+categoriaoriginale);
      $( "#dialog-Categoria" ).dialog( "open" );
      operazione='Aggiungi Categoria';
    })
            .tooltip();
/**
 * elimina una Categoria
 * @type button
 * 
 */
    var icondelete ={ primary: "ui-icon-trash" };
    $( ".EliminaCategoria" ).button({
      text: false,
      icons: icondelete}).on( "click", function() {
      EliminaCategoria($(this).parent().children("p").html());
    }).tooltip();
    

  }
/**
 * 
 * Gestisce la form per
 * aggiungere o modificare una sotto categoria di esami
 */
function FormAggiungiSottoCategoria() {
    
    var dialog, form,
            
      
      nome = $( "#sottocategoriainput" );
      
    /**
       * 
       *  bottoni bottoni della form per aggiungere una categoria
       * @var string Aggiungi Categoria oppure Modifica Categoria
       */
      var operazione='Aggiungi Sotto Categoria';
      function bottoni(){
          return [
            {
                text: operazione,
                click: function(){
                    
                    ModificaSottoCategoria(sottocategoriaoriginale,$( "#sottocategoriainput" ).val(),categoria);
                    sottocategoriaoriginale=false;
                    categoria=false;
                    $( "#dialog-sottocategoria" ).dialog( "close" );
                }
            },
            {
                text: 'Annulla',
                click: function(){
                    sottocategoriaoriginale=false;
                    categoria=false;
                    $( "#dialog-sottocategoria" ).dialog( "close" );
                    
                }
            }
            ];};
       /**
        * 
        * @var string sottocategoriaoriginale memorizza il nome della sotto categoria quando si preme il tasto modifica
        * @var string categoria memorizza il nome della categoria quando si preme il tasto Aggingi sottocategoria
        */
       var sottocategoriaoriginale=false,
       categoria=false,
       
 /**
 * 
 * Prepara la form per
 * aggiungere una categoria di esami e le sue sottocategorie al database
 */
    dialog = $( "#dialog-sottocategoria" ).dialog({
      autoOpen: false,
      height: 'auto',
      width: 'auto',
      modal: true,
      buttons: bottoni(),
      close: function() {
        form[ 0 ].reset();
        
      }
    });
 
    form = $( "#dialog-sottocategoria" ).find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      ModificaSottoCategoria(sottocategoriaoriginale,nome.val(),categoria);
      sottocategoriaoriginale=false;
      categoria=false;
      $( "#dialog-sottocategoria" ).dialog( "close" );
    });
 /**
  * Bottone
  * apre la form per aggiungere una categoria
  */
    $( ".create-SottoCategoria" ).button().on( "click", function() {
        sottocategoriaoriginale=false;
        categoria=$(this).parent().prev().prop('title');
        
      $( "#dialog-sottocategoria" ).dialog('option', 'title', 'Aggiungi a '+categoria);
      $( "#dialog-sottocategoria" ).dialog({
            buttons: bottoni()
        });
      $( "#dialog-sottocategoria" ).dialog( "open" );
      
    });
    
/**
 * apre la form con i valori della Categoria che l'utente vuole modificare
 * @type button
 * 
 */
    var icon ={ primary: "ui-icon-pencil" };
    $( ".ModificaSottoCategoria" ).button({
      text: false,
      icons: icon}).on( "click", function() {
        sottocategoriaoriginale = $(this).prev().html();
        $( "#sottocategoriainput" ).val(sottocategoriaoriginale);
        operazione='Modifica';
        $( "#dialog-sottocategoria" ).dialog({
            buttons: bottoni()
        });
        $( "#dialog-sottocategoria" ).dialog('option', 'title', 'Modifica '+sottocategoriaoriginale);
        $( "#dialog-sottocategoria" ).dialog( "open" );
        operazione='Aggiungi Sotto Categoria';
    })
            .tooltip({
                content: function(){
                    return 'Modifica '+$(this).prev().html();
                }
            });
 /**
 * elimina una Sotto Categoria
 * @type button
 * 
 */
    var icondelete ={ primary: "ui-icon-trash" };
    $( ".EliminaSottoCategoria" ).button({
      text: false,
      icons: icondelete}).on( "click", function() {
      EliminaSottoCategoria($(this).prev().html());
    }).tooltip({
                content:function(){
                    return 'Elimina '+$(this).prevAll().eq(1).html();
                }
            });  

  }