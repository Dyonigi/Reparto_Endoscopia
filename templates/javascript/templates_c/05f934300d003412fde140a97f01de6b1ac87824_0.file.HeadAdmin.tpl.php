<?php /* Smarty version 3.1.27, created on 2015-08-29 10:31:03
         compiled from "templates\javascript\template\HeadAdmin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11555e16dc73d4256_53321630%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f934300d003412fde140a97f01de6b1ac87824' => 
    array (
      0 => 'templates\\javascript\\template\\HeadAdmin.tpl',
      1 => 1440831985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11555e16dc73d4256_53321630',
  'variables' => 
  array (
    'ElencoDottori' => 0,
    'ModificaHome' => 0,
    'LogOutWindow' => 0,
    'Tabclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e16dc748bc06_90621595',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e16dc748bc06_90621595')) {
function content_55e16dc748bc06_90621595 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11555e16dc73d4256_53321630';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ElencoDottori']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ModificaHome']->value;?>
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
    ModificaHome();
    $( "#dialog-login" ).dialog();
    LogOutWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>