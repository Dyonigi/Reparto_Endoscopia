
/**
 * 
 * @var boolean chiudilogin true chiudi il dialog login false minimizza il dialog login
 */
var chiudilogin=false;
/**
 * 
 * Finestra di login di un membro del personale del Reparto
 */
function LogInWindow() {
    /**
     * inizializza e chiude il login paziente e la form registrazione
     */
    chiudilogin=true;
    if($("#dialog-registrazione").dialog( "isOpen" )===true){
        $('#dialog-registrazione').dialog('close');
    }
    if($("#dialog-login-paziente").dialog( "isOpen" )===true){
        $( "#dialog-login-paziente" ).dialog('close');
    }
    chiudilogin=false;
    var dialog,
            
      username = $( "#username" ),
      password = $( "#password" );
 
    function effettualogin() {
      $( "#dialog-login" ).find( "form" ).submit(); 
    }
 
    dialog = $( "#dialog-login" ).dialog({
      resizable: false,  
      height: 'auto',
      width: 'auto',
      modal: true,
      open: function() {
        $('.ui-widget-overlay').addClass('custom-overlay').removeClass('ui-widget-overlay');
        },
      close: function() {
            $('.ui-widget-overlay').removeClass('custom-overlay');
        },
      buttons: {
        "LogIn": effettualogin,
        "Registrazione": Registrazione,
        "Sono un Paziente": LogInWindowPaziente,
        Annulla: function() {
          $( "#dialog-login" ).dialog( "close" );
            }
        },
      beforeClose:  function(){
          minimize($(this));
          return chiudilogin;
      }
    });
    
}
/**
 * 
 * Finestra di login di un Paziente del Reparto
 */
function LogInWindowPaziente() {
    /**
     * chiude il login utente e la form registrazione
     */
    chiudilogin=true;
    if($("#dialog-login").dialog( "isOpen" )===true){
        $('#dialog-login').dialog('close');
    }
    if($("#dialog-registrazione").dialog( "isOpen" )===true){
        $( "#dialog-registrazione" ).dialog('close');
    }
    chiudilogin=false;
    var dialog, form,
            
      nome = $( "#nome" ),
      cognome = $( "#cognome" ),
      codicecup = $( "#codicecup" );
 
    function effettualoginPaziente() {
      //LogIn(username.val(),password.val());
       $( "#dialog-login-paziente" ).find( "form" ).submit(); 
    }
 
    dialog = $( "#dialog-login-paziente" ).dialog({
      resizable: false, 
      height: 'auto',
      width: 'auto',
      modal: true,
      open: function() {
        $('.ui-widget-overlay').addClass('custom-overlay').removeClass('ui-widget-overlay');
        },
      close: function() {
            $('.ui-widget-overlay').removeClass('custom-overlay');
        },
      buttons: {
        "LogIn": effettualoginPaziente,
        
        "Sono un Utente": LogInWindow,
        Annulla: function() {
          dialog.dialog( "close" ); 
            }
        },
      beforeClose: function(){
          minimize($(this));
          return chiudilogin;
      }
    });
    
}
/**
 * 
 * Apre la pagina di registrazione
 */
function Registrazione(){
    
    /**
     * chiudi i login utente e paziente
     */
    chiudilogin=true;
    if($("#dialog-login").dialog( "isOpen" )===true){
        $('#dialog-login').dialog('close');
    }
    if($("#dialog-login-paziente").dialog( "isOpen" )===true){
        $( "#dialog-login-paziente" ).dialog('close');
    }
    chiudilogin=false;
    /**
     * 
     * Trova gli imput della form registrazione
     */
    var dialog, form,
            
      nome = $( "#nomeutente" ),
      cognome = $( "#cognomeutente" ),
      codicecup = $( "#codicecup" ),
      username = $( "#nuovousername" ).change(
          function(){
              CheckUsernameExist($( "#nuovousername" ).val(), $( "#validateTips" ));
          }
      ),
      password = $( "#nuovopassword" ),
      email = $( "#email" );
 
    function registra() {
        if(Controlladati()){
            $('#dialog-registrazione').find( "form" ).submit();
        }
    }
 
    dialog = $('#dialog-registrazione').dialog({
      resizable: false, 
      height: 'auto',
      width: 'auto',
      modal: true,
      
      buttons: {
        "Registrati": registra,
        
        "Annulla": LogInWindow
        },
      beforeClose: function(){
          minimize($(this));
          return chiudilogin;
      }
    });
    
    $( "#dialog-registrazione" ).find('form').submit(Controlladati);
}
/**
 * controlla i dati inseriti e Registra l'Utente
 * 
 * @return {boolean} true i dati sono corretti
 */
function Controlladati(){
    
    var valid = true,
      username = $( "#nuovousername" ),
      password = $( "#nuovopassword" ),
      nome = $( "#nomeutente" ),
      cognome = $( "#cognomeutente" ),
      confermapassword = $( "#confermapassword" ),
      email = $( "#email" ),
      allFields = $( [] ).add( username ).add( password ).add( nome ).add( cognome ),
      tips = $( "#validateTips" );
      allFields.removeClass( "ui-state-error" );
 

    valid = valid && CheckRegex(username, 'username', tips);
    valid = valid && (checkusernameexist==='false');
      valid = valid && CheckRegex(password, 'password', tips);
      valid = valid && ControllaPassword(password,confermapassword,tips);
      valid = valid && CheckRegex(nome, 'nome', tips);
      valid = valid && CheckRegex(cognome, 'nome', tips);
      valid = valid && CheckRegex(email, 'email', tips);
    
     return valid; 
}