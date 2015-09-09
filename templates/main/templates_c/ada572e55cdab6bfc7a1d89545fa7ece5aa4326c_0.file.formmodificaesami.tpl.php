<?php /* Smarty version 3.1.27, created on 2015-08-27 13:19:14
         compiled from "templates\main\template\formmodificaesami.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:370055def23257d354_62328450%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada572e55cdab6bfc7a1d89545fa7ece5aa4326c' => 
    array (
      0 => 'templates\\main\\template\\formmodificaesami.tpl',
      1 => 1440670806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370055def23257d354_62328450',
  'variables' => 
  array (
    'categorie' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55def2326126e6_31945253',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55def2326126e6_31945253')) {
function content_55def2326126e6_31945253 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '370055def23257d354_62328450';
?>
<button id="create-esame">Aggiungi un Esame</button>
<div id="dialog-form-Esame" title="Aggiungi un Esame">
  
 
  <form>
    <fieldset id="fieldsetAggiungiUtilizza">
      <label for="nome">Esame</label>
      <input type="text" name="nome" id="nome" value="Endoscopico" class="text ui-widget-content ui-corner-all">
      <div class="ui-widget">
        <label>Categoria</label>
        <select id="categoria" class="ui-widget-content ui-corner-all">
            <option>Scegli una Categoria</option>
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
      </div>
      <div class="ui-widget">
        <label>Sottocategoria</label>
        <select id="sottocategoria" class="text ui-widget-content ui-corner-all">
            
        </select>
      </div>
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
<div id="dialog-utilizza">
    <form>
    <fieldset id="fieldsetAggiungiUtilizza">
    <table id="Utilizza" class="ui-widget ui-widget-content">
        <tr>
            <td>Materiale</td>
            <td>Quantita</td>
        </tr>
    </table>
    <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
    </form>
</div>
    <table style="display: none"  id='input-utilizza'>
        <tr>
            <td><input type="text" name="materiale" value="" class="materialeinput text ui-widget-content ui-corner-all"></td>
            <td><input name="quantita" value="" class="quantitainput ui-widget-content ui-corner-all"></td>
        </tr>
    </table><?php }
}
?>