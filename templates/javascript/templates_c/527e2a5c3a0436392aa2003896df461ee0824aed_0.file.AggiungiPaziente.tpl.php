<?php /* Smarty version 3.1.27, created on 2015-07-08 16:00:55
         compiled from "templates\javascript\template\AggiungiPaziente.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28209559d2d1758dbe6_77083878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527e2a5c3a0436392aa2003896df461ee0824aed' => 
    array (
      0 => 'templates\\javascript\\template\\AggiungiPaziente.tpl',
      1 => 1436364052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28209559d2d1758dbe6_77083878',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d2d175dd666_54331374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d2d175dd666_54331374')) {
function content_559d2d175dd666_54331374 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28209559d2d1758dbe6_77083878';
?>
<style>
    body { font-size: 62.5%; }
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
  </style>
<?php echo '<script'; ?>
>
  $(function() {
    var dialog, form,
 
      
      
      nome = $( "#nome" ),
      cognome = $( "#cognome" ),
      codicecup = $( "#codicecup" ),
      
      allFields = $( [] ).add( nome ).add( cognome ).add( codicecup ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );
 
      valid = valid && checkLength( nome, "nome", 3, 20 );
      valid = valid && checkLength( cognome, "cognome", 6, 20 );
      valid = valid && checkLength( codicecup, "codicecup", 9, 11 );
 
      valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
      valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
      valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
      if ( valid ) {
        $( "#users tbody" ).append( "<tr>" +
          "<td>" + name.val() + "</td>" +
          "<td>" + email.val() + "</td>" +
          "<td>" + password.val() + "</td>" +
        "</tr>" );
        dialog.dialog( "close" );
      }
      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "Create an account": addUser,
        Cancel: function() {
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
      addUser();
    });
 
    $( "#create-user" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });
  });
  <?php echo '</script'; ?>
><?php }
}
?>