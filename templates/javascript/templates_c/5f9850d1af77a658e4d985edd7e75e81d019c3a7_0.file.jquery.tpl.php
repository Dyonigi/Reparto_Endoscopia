<?php /* Smarty version 3.1.27, created on 2015-09-04 10:58:57
         compiled from "templates\javascript\template\jquery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2588455e95d51ecaa48_65462424%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f9850d1af77a658e4d985edd7e75e81d019c3a7' => 
    array (
      0 => 'templates\\javascript\\template\\jquery.tpl',
      1 => 1440941186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2588455e95d51ecaa48_65462424',
  'variables' => 
  array (
    'jqueryuicss' => 0,
    'jquery' => 0,
    'jqueryui' => 0,
    'forms' => 0,
    'Center' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e95d5344c7b3_41801319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e95d5344c7b3_41801319')) {
function content_55e95d5344c7b3_41801319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2588455e95d51ecaa48_65462424';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['jqueryuicss']->value;?>
">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jquery']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jqueryui']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['forms']->value;?>
">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['Center']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function() {
    $( "#dialog-login" ).dialog();
    $( "#dialog-login-paziente" ).dialog();
    $('#dialog-registrazione').dialog();
  });
    $(window).load(function(){
        
        $('#background').css({
                        'height':($(window).height()-20)+'px'
                    });
        $('#banner').position({
           my: 'center top',
           at: 'center top',
           of: $('#background')
           });
        $('#resizer').css({
                        'width':($('#banner').width())+'px'
                    });
        $('#resizer').position({
           my: 'center top',
           at: 'center bottom',
           of: $('#banner')
           });
        $( "#dialog-login" ).dialog({
            position: {
                my: 'right top-45',
                at: 'right bottom',
                of: $('#banner')
              }
        });
        $( "#dialog-login-paziente" ).dialog({
            position: {
                my: 'right top-45',
                at: 'right bottom',
                of: $('#banner')
              }
        });
        $( "#dialog-login-paziente" ).dialog('close');
        $('#dialog-registrazione').dialog('close');
        $( "#dialog-login" ).dialog("widget")
                .next(".ui-widget-overlay")
                .css({background: "transparent", opacity: 0});
        $( "#dialog-login-paziente" ).dialog("widget")
                .next(".ui-widget-overlay")
                .css({background: "transparent", opacity: 0});
    });
    
<?php echo '</script'; ?>
>
<?php }
}
?>