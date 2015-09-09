<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:39
         compiled from "templates\javascript\template\HeadIstallazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2544755be08838732f8_90768723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf9b4509a2833daf47089d005a7b637a2a020fa1' => 
    array (
      0 => 'templates\\javascript\\template\\HeadIstallazione.tpl',
      1 => 1437414894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2544755be08838732f8_90768723',
  'variables' => 
  array (
    'ConfiguraDB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be08838732f2_18132192',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be08838732f2_18132192')) {
function content_55be08838732f2_18132192 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2544755be08838732f8_90768723';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ConfiguraDB']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function() {
    ConfiguraDB();
  });
<?php echo '</script'; ?>
><?php }
}
?>