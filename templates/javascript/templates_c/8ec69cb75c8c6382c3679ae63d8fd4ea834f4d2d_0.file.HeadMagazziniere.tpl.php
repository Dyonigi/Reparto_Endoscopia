<?php /* Smarty version 3.1.27, created on 2015-08-12 12:13:50
         compiled from "templates\javascript\template\HeadMagazziniere.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1402855cb1c5e1049f9_73228033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec69cb75c8c6382c3679ae63d8fd4ea834f4d2d' => 
    array (
      0 => 'templates\\javascript\\template\\HeadMagazziniere.tpl',
      1 => 1439117516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402855cb1c5e1049f9_73228033',
  'variables' => 
  array (
    'AggiungiMateriale' => 0,
    'LogOutWindow' => 0,
    'Tabclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cb1c5e32b6f6_94131933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cb1c5e32b6f6_94131933')) {
function content_55cb1c5e32b6f6_94131933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1402855cb1c5e1049f9_73228033';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AggiungiMateriale']->value;?>
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
    $( "#dialog-login" ).dialog();
    LogOutWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>