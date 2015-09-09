<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:45
         compiled from "templates\main\template\configuradatabese.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:674955be08894de814_33609585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ca4edf071781bd19fbac56339fe279798a40d92' => 
    array (
      0 => 'templates\\main\\template\\configuradatabese.tpl',
      1 => 1437897868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674955be08894de814_33609585',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be08895191a1_95535495',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be08895191a1_95535495')) {
function content_55be08895191a1_95535495 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '674955be08894de814_33609585';
?>
Configura i dati di accesso al DataBase
<form  id="configuradb" action="index.php" method="POST">
    <fieldset>
      <label for="database">Nome del Data Base</label>
      <input type="text" name="database" id="database" value="endoscopia" class="text ui-widget-content ui-corner-all">
      <label for="username">Username</label>
      <input type="text" name="user" id="user" value="root" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
      <label for="host">Host</label>
      <input type="text" name="host" id="host" value="localhost" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" id="task" value="configuradb" tabindex="-1" style="display: none">
      <input type="submit" value="Submit">
    </fieldset>
</form><?php }
}
?>