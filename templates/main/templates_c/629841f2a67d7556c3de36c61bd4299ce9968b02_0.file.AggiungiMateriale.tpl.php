<?php /* Smarty version 3.1.27, created on 2015-08-13 09:17:30
         compiled from "templates\main\template\AggiungiMateriale.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1758555cc448a65e225_83170699%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '629841f2a67d7556c3de36c61bd4299ce9968b02' => 
    array (
      0 => 'templates\\main\\template\\AggiungiMateriale.tpl',
      1 => 1439395472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1758555cc448a65e225_83170699',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cc448a6bfcc2_47125627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cc448a6bfcc2_47125627')) {
function content_55cc448a6bfcc2_47125627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1758555cc448a65e225_83170699';
?>

<button id="create-Materiale">Aggiungi un Materiale</button>
<div id="dialog-Materiale" title="Aggiungi un Materiale">
  
 
  <form>
    <fieldset id="fieldsetAggiungiCategoria">
      <label for="materiale">Materiale</label>
      <input type="text" name="materiale" id="materiale" value="Materiale" class="text ui-widget-content ui-corner-all">
      <label for="quantita">Quantita</label>
      <input name="quantita" id="quantita" value="0" class="text ui-widget-content ui-corner-all">
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div><?php }
}
?>