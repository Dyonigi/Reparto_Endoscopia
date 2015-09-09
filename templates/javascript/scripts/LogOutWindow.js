function LogOutWindow() {
    var dialog;

    function LogOut() {
        dialog.find( "form" ).submit(); 
     var data= {
            task: "logout"
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data
        
    });
    }
 
    dialog = $( "#dialog-login" ).dialog({
      resizable: false,
      
      buttons: {
        "Log Out": LogOut
      },
      beforeClose: function(){
          minimize($(this));
          return false;
      }
      
    });
    dialog.dialog("widget").psition({
        of: $( "#banner" ),
        my: 'right bottom',
        at: 'right bottom',
        collision: 'fit'
    });
 
  }                
                