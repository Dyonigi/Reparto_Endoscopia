<?php /* Smarty version 3.1.27, created on 2015-08-30 20:17:19
         compiled from "templates\javascript\template\HeadInfermiere.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1661355e348af02e839_04261336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491d40bcdd2d502d5fb735c916d5f8cc2abeaafd' => 
    array (
      0 => 'templates\\javascript\\template\\HeadInfermiere.tpl',
      1 => 1440931538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661355e348af02e839_04261336',
  'variables' => 
  array (
    'LogOutWindow' => 0,
    'Tabclick' => 0,
    'AggiungiPaziente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e348af065347_73617209',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e348af065347_73617209')) {
function content_55e348af065347_73617209 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1661355e348af02e839_04261336';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogOutWindow']->value;?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Tabclick']->value;?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AggiungiPaziente']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function() {
    LogOutWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>