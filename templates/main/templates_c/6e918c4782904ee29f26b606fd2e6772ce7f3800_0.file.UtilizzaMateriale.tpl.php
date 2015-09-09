<?php /* Smarty version 3.1.27, created on 2015-08-13 18:11:23
         compiled from "templates\main\template\UtilizzaMateriale.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:898955ccc1abef1450_45931292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e918c4782904ee29f26b606fd2e6772ce7f3800' => 
    array (
      0 => 'templates\\main\\template\\UtilizzaMateriale.tpl',
      1 => 1439482268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '898955ccc1abef1450_45931292',
  'variables' => 
  array (
    'pazienti' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ccc1abf3f662_77591483',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ccc1abf3f662_77591483')) {
function content_55ccc1abf3f662_77591483 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '898955ccc1abef1450_45931292';
?>
<div id="Utilizza">
  <h1 class="ui-widget-header">Materiali Utilizzati durante l'esame del Paziente</h1>
  <div class="ui-widget-content">
      <label for="codicecuputilizza">Codice CUP del Paziente</label>
      <select name="codicecuputilizza" id="codicecuputilizza" class="text ui-widget-content ui-corner-all">
      <?php
$_from = $_smarty_tpl->tpl_vars['pazienti']->value;
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
            <option value="<?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
">
                <h2><?php echo $_smarty_tpl->tpl_vars['h']->value[0];?>
</h2><br>
                <h3><?php echo $_smarty_tpl->tpl_vars['h']->value[1];
echo $_smarty_tpl->tpl_vars['h']->value[2];?>
</h3>
            </option>
      <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>
      </select>
    <ul>
      <li class="placeholder">Trascina i Materiali qui</li>
    </ul>
  </div>
      <button id='Invia'>Invia</button>
      <button id='Cancella'>Cancella</button>
</div><?php }
}
?>