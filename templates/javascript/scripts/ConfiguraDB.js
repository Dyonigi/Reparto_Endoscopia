function configura(password, database, user, host){
    var data= {
            task: "provaconfigurazionedb",
            password: password,
            database: database,
            user: user,
            host: host
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("#risultatoconfigurazione").html(result);
            $('#dialog-risultatoconfigurazione').dialog( "open" );
            }
        
    });
}
function ConfiguraDB() {
    
    
    var dialog, form,
 
      
      
      database = $( "#database" ),
      user = $( "#user" ),
      password = $( "#password" ),
      host = $( "#host" ),
      
    
   
    form = $( '#configuradb' ).on( "submit", function( event ) {
      event.preventDefault();
      configura(password.val(), database.val(), user.val(), host.val());
    });
    
    dialog = $('#dialog-risultatoconfigurazione').dialog({
        autoOpen: false
    });

}