<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:39
         compiled from "templates\main\template\loginistallazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2092555be0883896584_09054914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7882fa1e9b16438de8606442263b011b008fe3' => 
    array (
      0 => 'templates\\main\\template\\loginistallazione.tpl',
      1 => 1437468624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2092555be0883896584_09054914',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be088389a401_67300227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be088389a401_67300227')) {
function content_55be088389a401_67300227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2092555be0883896584_09054914';
?>
Questa applicazione web deve essere configurata.
Se sei l'amministratore esegui l'accesso.
<form  id="login-Admin" action="index.php" method="POST">
    <fieldset>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="Amministratore" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="Amministratore1" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" id="task" value="loginistallazione" tabindex="-1" style="display: none">
      <input type="submit" value="Submit">
    </fieldset>
</form><?php }
}
?>