<?php /* Smarty version 3.1.27, created on 2015-08-13 09:09:18
         compiled from "templates\main\template\magazzino.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2456955cc429e5e0946_26364343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e07c5fe97cfe22c1d5dc92c3b73a69110bb150' => 
    array (
      0 => 'templates\\main\\template\\magazzino.tpl',
      1 => 1439398796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2456955cc429e5e0946_26364343',
  'variables' => 
  array (
    'attributi' => 0,
    'h' => 0,
    'mylist' => 0,
    'i' => 0,
    'j' => 0,
    'Form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cc429e617447_70390033',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cc429e617447_70390033')) {
function content_55cc429e617447_70390033 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2456955cc429e5e0946_26364343';
?>
<div id="magazzino-contain" class="ui-widget div-contain">
    <table id="tab-magazzino" class="ui-widget ui-widget-content">
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
            <tr id="materiale-draggable">
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
                
            </tr>
            <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    </table>
</div>
    <?php echo $_smarty_tpl->tpl_vars['Form']->value;

}
}
?>