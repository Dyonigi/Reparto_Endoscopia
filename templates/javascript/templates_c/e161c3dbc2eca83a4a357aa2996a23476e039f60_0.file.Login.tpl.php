<?php /* Smarty version 3.1.27, created on 2015-07-11 18:15:32
         compiled from "templates\javascript\template\Login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:930255a1412410e1b1_60563025%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e161c3dbc2eca83a4a357aa2996a23476e039f60' => 
    array (
      0 => 'templates\\javascript\\template\\Login.tpl',
      1 => 1436631329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930255a1412410e1b1_60563025',
  'variables' => 
  array (
    'LogInWindow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55a14124164438_92615008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a14124164438_92615008')) {
function content_55a14124164438_92615008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '930255a1412410e1b1_60563025';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogInWindow']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function() {
    $( "#dialog-login" ).dialog();
    LogInWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>