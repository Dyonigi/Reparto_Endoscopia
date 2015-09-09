<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:24:01
         compiled from "templates\main\template\elencopazienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105354609439cc0377-10573654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56d968d72beab350b5be393dd6332dc614c39d7' => 
    array (
      0 => 'templates\\main\\template\\elencopazienti.tpl',
      1 => 1415636639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105354609439cc0377-10573654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54609439eed9a5_29387379',
  'variables' => 
  array (
    'mylist' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54609439eed9a5_29387379')) {function content_54609439eed9a5_29387379($_smarty_tpl) {?>ciao sono l'elenco dei pazienti
<table>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td></tr>
<?php } ?>
</table><?php }} ?>