function ConfermaUtente(username){
    var data= {
            task: "confermautente",
            
            username: username
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
                            $("#Dottori").html(result);
                            ElencoDottori();
                            }
        
    });
}
function ElencoDottori() {

    var icon ={ primary: "ui-icon-pencil" };
    $( ".Modifica" ).button({
      text: false,
      icons: icon}).on( "click", function() {
      ConfermaUtente($( this ).parent().prevAll().eq(3).html());
    }).tooltip({
        content: function(){
            return "Conferma che "+$( this ).parent().prevAll().eq(3).html()+" fa parte del personale del reparto";}
    });
  }                
                