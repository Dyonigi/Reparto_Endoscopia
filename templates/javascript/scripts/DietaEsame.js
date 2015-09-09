/**
 * 
 * Bottone mostra la dieta che il paziente deve seguire prima dell'esame
 */
function DietaEsame() {

    /**
     * Tooltipe bottone che mostra il dialog dieta
     */
    $('.bottone-dieta').button({
        text: false,
        icons: { primary: "ui-icon-script" }
    })
    .click(function(){
        var esame=$(this).parent().prevAll().eq(2).html();
        ApriDieta( esame );   
    })
    .tooltip({
        content: function(){
                    return "Dieta dell'esame "+$(this).parent().prevAll().eq(2).html();
                }
    });
};
/**
 * mostra in un dialog la dieta che il paziente deve seguire prima dell'esame
 * @param {string} esame
 */
function ApriDieta( esame ){
    var data= {
            task: "dietaesame",
            esame: esame
            };
    $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            $("<div>"+result+"</div>").dialog({
                height: 'auto',
                width: 'auto'
            });
                            }
        
    });
}