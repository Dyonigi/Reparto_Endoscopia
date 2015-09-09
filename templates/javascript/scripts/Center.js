/**
 * 
 * Debug
 */
var _debug=false;
function debug(text){
    if(_debug){
        alert(text);
    }
}


/**
 * minimizza e massimizza i dialog di login e logout
 * 
 * @param element l'elemento da minimizzare
 */
/*
 * @var altezzaoriginale l'altezza originale del dialogo login
 * @var largezzaoriginale la larghezza originale del dialog login
 */
var altezzaoriginale;
var largezzaoriginale;
function minimize(element){
    var altezza;
    var larghezza;
    if (element.parents('.ui-dialog').height()<=50){
        altezza = altezzaoriginale;
        larghezza = largezzaoriginale;
    } else{
        largezzaoriginale=element.parents('.ui-dialog').width();
        altezzaoriginale=element.parents('.ui-dialog').height();
        altezza = '40px';
    }
          
            element.parents('.ui-dialog').animate({
                height: altezza,
                width: larghezza
            }, 200);   
            return false;
}
/**
 * Regular Expressions
 */
var RegExpression={
    username: /^[a-z]([0-9a-z_\s]{1,20})+$/i,
    password: /^([a-zA-Z0-9@*#]{8,15})$/,
    nome: /^[A-Za-zèùàòé]{1}[a-zA-Z'èùàòé ]+$/,
    codicecup: /^([0-9A-Z]{10})+$/,
    email: /^[A-Z0-9._-]+@[A-Z0-9.-]+\.[A-Z0-9.-]+$/i
};
/**
 * Controlla @param input con la regular expression
 * 
 * @param {element} input della form da controllare
 * @param {string} regexp la regular expression salvata nell'array RegExp 
 * @param {element} tips l'elemento del DOM in cui mostrare l'avviso
 * @return {boolean}
 */
function CheckRegex(input,regexp,tips){
    var risultato = RegExpression[regexp].test(input.val());
    if(!risultato){
        input.addClass( "ui-state-error" );
        updateTips(regexp,tips);
    }
    return risultato;
}

/**
 * Avvisi degli input errati dell'utente
 * @var array Avvisi
 */
var Avvisi={
    username: 'Username può contenere lettere, numeri, " __ " , spazi e deve iniziare con una lettera.',
    password: "Password puo contenere qualunque lettera dell'alfabeto e  simboli."+
               "deve avere almeno 8 caratteri e non più di 15 caratteri. ",
    controllapassword: 'Le password non coincidono.',
    nome: 'Il nome può contenere lettere, apostofri e spazi e deve iniziare con una lettera Maiuscola.',
    usernameexist: 'Username inserito esiste già.',
    codicecup: 'Il codice CUP deve avere 10 cifre o lettere maiuscole',
    email: 'Email errata. Esempio: prova@esempio.it',
    restore: 'Compila tutti i campi per registrarti'
};
/**
 * Mostra l'avviso nell'elemento
 * @param {string} t l'avviso da mostrare
 * @param {element} tips l'elemento del DOM in cui mostrare l'avviso
 */
function updateTips( t , tips) {
      tips
        .text( Avvisi[t] )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
/**
 * Controlla che 2 imput siano uguali
 * @param {element} password <input>
 * @param {element} controllapassword <input>
 * @param {element} tips l'elemento del DOM in cui mostrare l'avviso
 */
function ControllaPassword(password,controllapassword,tips){
    if (password.val()===controllapassword.val()){
        return true;
    } else{
        updateTips('controllapassword',tips);
        return false;
    }
}
/**
 * Contrlla che l'username usato per registrarsi non esista già.
 * Salva il risultato in un oggetto
 * @param {element} username input della form da controllare
 * @param {type} tips l'elemento del DOM in cui mostrare l'avviso
 * @returns {boolean}
 */
var checkusernameexist='false';
function CheckUsernameExist(username, tips){
    
    var data= {
            task: "checkusernameexist",
            username: username
            };
            var risultato;
    return $.ajax({
        url: "index.php",
        type: "POST",
        data: data,
        success: function(result){
            
            checkusernameexist=result;
            if (checkusernameexist==='true'){
                updateTips( 'usernameexist' , tips);
            }else{
                updateTips( 'restore' , tips);
            }
        }
        
    });
}
/**
 * Widget Textarea
 * textarea elastica
 * aumenta cols e rows mentre viene modificato il contenuto
 * ha un bottone submit per mandare i dati al server
 */
$.widget( "custom.areatesto", {
    options:{
        rows:5,
        cols:50,
        elastico: null
    },
    /**
     * 
     * Costruttore aggiunge il bottone submit
     */
    _create: function() {
        this.element.attr('rows',this.options.rows);
        this.element.attr('cols',this.options.cols);
        this._on( this.element, {
          keyup: "elastico"
        });
        
        var icon ={ primary: "ui-icon-arrowstop-1-s" };
        this.submitter = $( "<button>")
        .appendTo( this.element.parent() )
        .button({
                  text: false,
                  icons: icon
                })
        .click(function(element){
            alert(element.val());
        })
        .tooltip({
                content: 'Salva il contenuto sul database'
            });
        this._trigger( "elastico" );
    },
    /**
     * 
     * Distruttore rimuove il bottone submit
     */
    _destroy: function(){
        this.submitter.remove();
    },
    /**
     * adatta la grandezza della textarea al testo inserito
     * http://stackoverflow.com/questions/995168/textarea-to-resize-based-on-content-length
     */
    elastico: function(){
        this.element.height( this.element[0].scrollHeight)+'px';
        this.element.width( this.element[0].scrollWidth)+'px';
        
    }
});