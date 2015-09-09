<?php /* Smarty version 3.1.27, created on 2015-08-27 13:19:14
         compiled from "templates\main\template\Esami.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1218955def23261e268_90994496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c904cdcee78a17da2109375a530d8622577fb9ff' => 
    array (
      0 => 'templates\\main\\template\\Esami.tpl',
      1 => 1440670806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218955def23261e268_90994496',
  'variables' => 
  array (
    'attributi' => 0,
    'h' => 0,
    'mylist' => 0,
    'i' => 0,
    'j' => 0,
    'bottonimodificaesame' => 0,
    'formmodificaesami' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55def23262dc68_73513798',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55def23262dc68_73513798')) {
function content_55def23262dc68_73513798 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1218955def23261e268_90994496';
?>
<div id="Esame-contain" class="ui-widget div-contain">
    <table id="Esami" class="ui-widget ui-widget-content">
        <?php
$_from = $_smarty_tpl->tpl_vars['attributi']->value;
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
            <td><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['mylist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
            <tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['i']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['j']->_loop = false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
$foreach_j_Sav = $_smarty_tpl->tpl_vars['j'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['j'] = $foreach_j_Sav;
}
?>
                <?php echo $_smarty_tpl->tpl_vars['bottonimodificaesame']->value;?>

            </tr>
        <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    </table>
</div>
<?php echo $_smarty_tpl->tpl_vars['formmodificaesami']->value;

}
}
?>