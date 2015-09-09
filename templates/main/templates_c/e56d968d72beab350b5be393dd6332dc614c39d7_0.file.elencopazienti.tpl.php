<?php /* Smarty version 3.1.27, created on 2015-08-29 15:42:52
         compiled from "templates\main\template\elencopazienti.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2961055e1b6dc341954_41800312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e56d968d72beab350b5be393dd6332dc614c39d7' => 
    array (
      0 => 'templates\\main\\template\\elencopazienti.tpl',
      1 => 1440855767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2961055e1b6dc341954_41800312',
  'variables' => 
  array (
    'attributi' => 0,
    'h' => 0,
    'mylist' => 0,
    'i' => 0,
    'j' => 0,
    'k' => 0,
    'check' => 0,
    'categorie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e1b6dc3939e7_19707020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e1b6dc3939e7_19707020')) {
function content_55e1b6dc3939e7_19707020 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2961055e1b6dc341954_41800312';
?>
<div id="pazienti-contain" class="ui-widget div-contain">
    <table id="pazienti" class="ui-widget ui-widget-content">
        <?php
$_from = $_smarty_tpl->tpl_vars['attributi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['h']->_loop = false;
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
$foreach_h_Sav = $_smarty_tpl->tpl_vars['h'];
?>
            <td><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['mylist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
            <tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['i']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['j']->_loop = false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
$foreach_j_Sav = $_smarty_tpl->tpl_vars['j'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['j'] = $foreach_j_Sav;
}
?>
                <td><button class="Modifica">Modifica</button></td>
                <td class="abbastanza" title="<?php echo $_smarty_tpl->tpl_vars['check']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"><span class= "ui-icon ui-icon-circle-<?php echo $_smarty_tpl->tpl_vars['check']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"></span></td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    </table>
</div>
<button id="create-pazienti">Aggiungi un Paziente</button>
<div id="dialog-form-create-pazienti" title="Aggiungi un Paziente">
 <p id="validateTips"></p> 
 
  <form>
    <fieldset>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label for="codicecup">Codice CUP</label>
      <input type="text" name="codicecup" id="codicecup" value="XXXXXXXXXX" maxlength="10" class="text ui-widget-content ui-corner-all">
      <label>Esame</label>
        <select id="esame" class="ui-widget-content ui-corner-all">
          <?php
$_from = $_smarty_tpl->tpl_vars['categorie']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['h']->_loop = false;
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
$foreach_h_Sav = $_smarty_tpl->tpl_vars['h'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['h']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['h']->value;?>
</option>
          <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>  
        </select>
      <label for="dataEsame">Data dell'Esame</label>
      <input type="text" name="dataEsame" id="dataEsame" class="text ui-widget-content ui-corner-all">

      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
<?php }
}
?>