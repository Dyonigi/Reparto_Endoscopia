<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:45
         compiled from "templates\main\template\risultatoconfigurazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1633855be0889528ba0_60222800%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84526fc26e2f07a3feb2e4a1c6715e932e4fefd' => 
    array (
      0 => 'templates\\main\\template\\risultatoconfigurazione.tpl',
      1 => 1437468952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633855be0889528ba0_60222800',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be0889528ba5_95969834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be0889528ba5_95969834')) {
function content_55be0889528ba5_95969834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1633855be0889528ba0_60222800';
?>
<div id="dialog-risultatoconfigurazione" title="Log-in">
    <div id="risultatoconfigurazione"></div>
<form  action="index.php" method="POST">
    <fieldset>
      <input type="text" name="task" value="logout" tabindex="-1" style="display: none">
      <input type="submit" value="OK">
    </fieldset>
</form>
</div><?php }
}
?>