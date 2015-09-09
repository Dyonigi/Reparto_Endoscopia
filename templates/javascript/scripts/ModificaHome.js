/**
 * L'Amministratore puo modificare il Contenuto della Home Page
 */
function ModificaHome(){
    $('#SalvaHome').button({
                        icons: { primary: "ui-icon-disk" }
                        })
    .click(function(){
              SalvaContenutoHome($('#HomeAmministratore').val());
    });
    
}
/**
 * Salva il contenuto ella homepage modificato dall'amminisratore
 * @param {string} ContenutoHome
 * @return {template} ricarica la homepage
 */
function SalvaContenutoHome(ContenutoHome){
    var data= {
            task: "SalvaContenutoHome",
            ContenutoHome: ContenutoHome
            };
            
            
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
                            $("#Home").html(result);
                            ModificaHome();
                            }
        
    });
}
