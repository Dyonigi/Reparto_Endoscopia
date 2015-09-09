<?php /* Smarty version 3.1.27, created on 2015-08-29 16:05:23
         compiled from "templates\main\template\erroreInput.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2502255e1bc23248a21_58854352%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76f7a20f4295f4d75e89521386b02b4a8c0fdf30' => 
    array (
      0 => 'templates\\main\\template\\erroreInput.tpl',
      1 => 1440857054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2502255e1bc23248a21_58854352',
  'variables' => 
  array (
    'regexp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1bc232833b7_40085550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1bc232833b7_40085550')) {
function content_55e1bc232833b7_40085550 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2502255e1bc23248a21_58854352';
?>
I dati inseriti per <?php echo $_smarty_tpl->tpl_vars['regexp']->value;?>
 non sono corretti<?php }
}
?>