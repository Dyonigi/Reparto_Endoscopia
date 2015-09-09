<?php /* Smarty version 3.1.27, created on 2015-08-21 14:51:22
         compiled from "templates\main\template\SelectSottocategorie.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2611755d71ecacbd708_81441283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea32c330c5074fd2dd205312819f0ac35acc42e' => 
    array (
      0 => 'templates\\main\\template\\SelectSottocategorie.tpl',
      1 => 1436970972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2611755d71ecacbd708_81441283',
  'variables' => 
  array (
    'categorie' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d71ecadcafc9_53235215',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d71ecadcafc9_53235215')) {
function content_55d71ecadcafc9_53235215 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2611755d71ecacbd708_81441283';
$_from = $_smarty_tpl->tpl_vars['categorie']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['h']->_loop = false;
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
$foreach_h_Sav = $_smarty_tpl->tpl_vars['h'];
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
}
}
?>