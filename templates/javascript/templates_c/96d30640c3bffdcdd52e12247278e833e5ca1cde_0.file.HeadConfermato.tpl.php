<?php /* Smarty version 3.1.27, created on 2015-08-02 14:57:23
         compiled from "templates\javascript\template\HeadConfermato.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2396055be13b38e7a47_50610234%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96d30640c3bffdcdd52e12247278e833e5ca1cde' => 
    array (
      0 => 'templates\\javascript\\template\\HeadConfermato.tpl',
      1 => 1437323746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2396055be13b38e7a47_50610234',
  'variables' => 
  array (
    'Tabclick' => 0,
    'LogOutWindow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be13b38eb8c7_08501188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be13b38eb8c7_08501188')) {
function content_55be13b38eb8c7_08501188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2396055be13b38e7a47_50610234';
echo $_smarty_tpl->tpl_vars['Tabclick']->value;?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogOutWindow']->value;?>
"><?php echo '</script'; ?>
>
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