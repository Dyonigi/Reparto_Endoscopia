<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:39
         compiled from "templates\main\template\head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2587655be088387ee73_08676879%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df353908c1e98ff551d78a26e765977a96d03a5b' => 
    array (
      0 => 'templates\\main\\template\\head.tpl',
      1 => 1437492928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2587655be088387ee73_08676879',
  'variables' => 
  array (
    'jssource' => 0,
    'jqueryTabs' => 0,
    'HeadUtente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be0883886b83_68463976',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be0883886b83_68463976')) {
function content_55be0883886b83_68463976 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2587655be088387ee73_08676879';
echo $_smarty_tpl->tpl_vars['jssource']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jqueryTabs']->value;?>

<?php echo $_smarty_tpl->tpl_vars['HeadUtente']->value;

}
}
?>