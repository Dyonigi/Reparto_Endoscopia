<?php /* Smarty version 3.1.27, created on 2015-08-29 17:45:27
         compiled from "templates\main\template\rigapaziente.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212555e1d397eb61a4_47716649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa1ad2ee841f413e321e2e28575115df1e101652' => 
    array (
      0 => 'templates\\main\\template\\rigapaziente.tpl',
      1 => 1440861265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212555e1d397eb61a4_47716649',
  'variables' => 
  array (
    'Paziente' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1d397f00535_54614009',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1d397f00535_54614009')) {
function content_55e1d397f00535_54614009 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212555e1d397eb61a4_47716649';
?>

    <tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['Paziente']->value;
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
        <td class="abbastanza" title="refresh"><span class="ui-icon ui-icon-refresh"></span></td>
    </tr>
<?php }
}
?>