<?php /* Smarty version 3.1.27, created on 2015-07-17 12:54:39
         compiled from "templates\main\template\loginpaziente.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2763355a8deeff17d31_93718959%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdbd25d2eae8845a553998dcadc749383ebd9a59' => 
    array (
      0 => 'templates\\main\\template\\loginpaziente.tpl',
      1 => 1437130470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2763355a8deeff17d31_93718959',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55a8deeff1be47_25416442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a8deeff1be47_25416442')) {
function content_55a8deeff1be47_25416442 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2763355a8deeff17d31_93718959';
?>
<form  id="login-paziente"  action="index.php" method="POST">
    <fieldset>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label for="codicecup">Codice CUP</label>
      <input type="text" name="codicecup" id="codicecup" value="XXXXXXXXXX" maxlength="10" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" value="loginpaziente" tabindex="-1" style="display: none">
      <input type="submit" value="Submit" tabindex="-1" style="display: none">
    </fieldset>
</form><?php }
}
?>