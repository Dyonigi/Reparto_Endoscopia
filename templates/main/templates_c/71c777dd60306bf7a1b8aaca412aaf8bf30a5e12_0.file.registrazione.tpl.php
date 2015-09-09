<?php /* Smarty version 3.1.27, created on 2015-08-14 16:43:17
         compiled from "templates\main\template\registrazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:39055cdfe85674e27_16414232%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71c777dd60306bf7a1b8aaca412aaf8bf30a5e12' => 
    array (
      0 => 'templates\\main\\template\\registrazione.tpl',
      1 => 1439563344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39055cdfe85674e27_16414232',
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cdfe856b3633_24568396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cdfe856b3633_24568396')) {
function content_55cdfe856b3633_24568396 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '39055cdfe85674e27_16414232';
?>
<p id="validateTips">Compila tutti i campi per registrarti</p>
<form  id="registrazione" action="index.php" method="POST">
    <fieldset>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="text ui-widget-content ui-corner-all">
      <label for="password">Conferma Password</label>
      <input type="password" name="confermapassword" id="confermapassword" value="" class="text ui-widget-content ui-corner-all">
      
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label>Mansione</label>
        <select id="mansione" name="mansione" class="ui-widget-content ui-corner-all">
          <option value=3>Dottore</option>
          <option value=2>Infermiere</option>
          <option value=1>Magazziniere</option>
        </select>
      <input type="text" name="task" id="task" value="registrazione" tabindex="-1" style="display: none">
      
      <input id='submit' type="submit" value="Registrati">
    </fieldset>
</form><?php }
}
?>