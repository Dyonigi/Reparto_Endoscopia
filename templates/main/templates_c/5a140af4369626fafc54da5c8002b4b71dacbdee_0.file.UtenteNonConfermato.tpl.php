<?php /* Smarty version 3.1.27, created on 2015-08-02 14:57:26
         compiled from "templates\main\template\UtenteNonConfermato.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2709455be13b64b9f02_30049666%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a140af4369626fafc54da5c8002b4b71dacbdee' => 
    array (
      0 => 'templates\\main\\template\\UtenteNonConfermato.tpl',
      1 => 1437324796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2709455be13b64b9f02_30049666',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be13b64e8d13_30269450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be13b64e8d13_30269450')) {
function content_55be13b64e8d13_30269450 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2709455be13b64b9f02_30049666';
?>
Benvenuto <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
.
La tua registrazione non è ancora stata confermata da un Admin.
Per questo motivo non puoi accedere ai contenuti del sito<?php }
}
?>