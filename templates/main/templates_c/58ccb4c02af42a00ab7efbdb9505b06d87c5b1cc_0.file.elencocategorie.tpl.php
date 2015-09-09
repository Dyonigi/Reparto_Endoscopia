<?php /* Smarty version 3.1.27, created on 2015-09-02 17:16:49
         compiled from "templates\main\template\elencocategorie.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2516455e712e1716098_14082249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ccb4c02af42a00ab7efbdb9505b06d87c5b1cc' => 
    array (
      0 => 'templates\\main\\template\\elencocategorie.tpl',
      1 => 1441030023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2516455e712e1716098_14082249',
  'variables' => 
  array (
    'categorie' => 0,
    'k' => 0,
    'i' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e712e1777b37_36759625',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e712e1777b37_36759625')) {
function content_55e712e1777b37_36759625 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2516455e712e1716098_14082249';
?>
<div id="categorie-contain" class="ui-widget div-contain">
    <?php
$_from = $_smarty_tpl->tpl_vars['categorie']->value;
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
        <h3>
            <p><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</p>
            <button title='Modifica <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' class="ModificaCategoria">Modifica</button>
            <button title='Elimina <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
' class="EliminaCategoria">Elimina</button>
        </h3>
        <div
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['i']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                    <li class="elemento-lista-sottocategorie ui-corner-all"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
                    <button class="ModificaSottoCategoria">Modifica</button>
                    <button class="EliminaSottoCategoria">Elimina</button>
                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
            </ul>
            <button class="create-SottoCategoria">Aggiungi una Sotto Categoria</button>
        </div>
    <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
    
</div>
<button id="create-Categoria">Aggiungi una Categoria di Esami</button>
<div id="dialog-Categoria" title="Aggiungi una Categoria di Esami">
  
 
  <form>
    <fieldset id="fieldsetAggiungiCategoria">
      <label for="nome">Categoria Esame</label>
      <input type="text" name="nome" id="nome" value="Endoscopico" class="text ui-widget-content ui-corner-all">
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
<div id="dialog-sottocategoria" title="Aggiungi una Sotto Categoria">
    <form>
        <fieldset id="fieldsetAggiungiSottoCategoria">
            <label id="sottocategorialabel" for="sottocategoria" class="sottocategoria">Sotto Categoria</label>
            <input type="text" name="sottocategoria" id="sottocategoriainput" value="Sottocategoria" class="sottocategoria text ui-widget-content ui-corner-all">
            <input type="submit" tabindex="-1" style="display: none">
        </fieldset>
    </form>
</div><?php }
}
?>