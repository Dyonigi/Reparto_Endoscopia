<?php /* Smarty version 3.1.27, created on 2015-08-08 12:21:00
         compiled from "templates\main\template\UtentiNonConfermati.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1596355c5d80cdad7d3_96151153%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bdc33be6322c358e61f76b78610fec2825a1572' => 
    array (
      0 => 'templates\\main\\template\\UtentiNonConfermati.tpl',
      1 => 1439023130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1596355c5d80cdad7d3_96151153',
  'variables' => 
  array (
    'attributi' => 0,
    'h' => 0,
    'mylist' => 0,
    'i' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c5d80cebb095_59350409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c5d80cebb095_59350409')) {
function content_55c5d80cebb095_59350409 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1596355c5d80cdad7d3_96151153';
?>
<div id="users-contain" class="ui-widget div-contain">
    <table id="users" class="ui-widget ui-widget-content">
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
                <td><button class="Modifica">Modifica</button></td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    </table>
</div><?php }
}
?>