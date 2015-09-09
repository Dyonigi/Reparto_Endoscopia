<?php /* Smarty version 3.1.27, created on 2015-09-04 10:59:00
         compiled from "templates\javascript\template\HeadGuest.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1348355e95d540772c0_07859575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c20481fab76f57f3c72d47fe72e757feb9409d5' => 
    array (
      0 => 'templates\\javascript\\template\\HeadGuest.tpl',
      1 => 1440931564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348355e95d540772c0_07859575',
  'variables' => 
  array (
    'LogInWindow' => 0,
    'Tabclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e95d5407cd63_44248267',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e95d5407cd63_44248267')) {
function content_55e95d5407cd63_44248267 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1348355e95d540772c0_07859575';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogInWindow']->value;?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Tabclick']->value;?>

<?php echo '<script'; ?>
>
  $(function() {
    LogInWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>