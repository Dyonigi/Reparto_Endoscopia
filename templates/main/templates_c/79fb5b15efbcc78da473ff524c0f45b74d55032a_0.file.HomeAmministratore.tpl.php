<?php /* Smarty version 3.1.27, created on 2015-08-29 10:31:03
         compiled from "templates\main\template\HomeAmministratore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2744055e16dc74c2706_11280102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79fb5b15efbcc78da473ff524c0f45b74d55032a' => 
    array (
      0 => 'templates\\main\\template\\HomeAmministratore.tpl',
      1 => 1440835582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2744055e16dc74c2706_11280102',
  'variables' => 
  array (
    'ContenutoHome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e16dc74c2707_84549781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e16dc74c2707_84549781')) {
function content_55e16dc74c2707_84549781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2744055e16dc74c2706_11280102';
?>
<textarea id="HomeAmministratore"><?php echo $_smarty_tpl->tpl_vars['ContenutoHome']->value;?>
</textarea>
<button id="SalvaHome">Applica Modifiche</button><?php }
}
?>