<?php /* Smarty version 3.1.27, created on 2015-08-30 13:25:47
         compiled from "templates\javascript\template\HeadDottore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:308655e2e83b92b224_12384376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684ff0fafa20976939e85f837e19214f0658ea69' => 
    array (
      0 => 'templates\\javascript\\template\\HeadDottore.tpl',
      1 => 1440931538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308655e2e83b92b224_12384376',
  'variables' => 
  array (
    'AggiungiCategoria' => 0,
    'JSEsame' => 0,
    'ElencoInfermieri' => 0,
    'AggiungiPaziente' => 0,
    'LogOutWindow' => 0,
    'Tabclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e2e83b961d36_30731819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e2e83b961d36_30731819')) {
function content_55e2e83b961d36_30731819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '308655e2e83b92b224_12384376';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AggiungiCategoria']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['JSEsame']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ElencoInfermieri']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AggiungiPaziente']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogOutWindow']->value;?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Tabclick']->value;?>

<?php echo '<script'; ?>
>
  $(function() {
    LogOutWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>