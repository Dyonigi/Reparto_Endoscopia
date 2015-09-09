<?php /* Smarty version 3.1.27, created on 2015-08-31 16:09:53
         compiled from "templates\main\template\ilmioesame.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:880055e4603169c5c4_88915376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06530374b84e1d629cf6bb062456d6cf8e1db871' => 
    array (
      0 => 'templates\\main\\template\\ilmioesame.tpl',
      1 => 1441030189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '880055e4603169c5c4_88915376',
  'variables' => 
  array (
    'esame' => 0,
    'data' => 0,
    'referto' => 0,
    'dieta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e460316d30d5_61088428',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e460316d30d5_61088428')) {
function content_55e460316d30d5_61088428 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '880055e4603169c5c4_88915376';
?>
<p class='upperblue'><?php echo $_smarty_tpl->tpl_vars['esame']->value;?>
</p>
<p class="downblue">Il paziente deve presentarsi il giorno <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</p>
<p class='upperblue'><?php echo $_smarty_tpl->tpl_vars['referto']->value;?>
</p>
<p class='upperblue'>Dieta da seguire nei giorni precedenti:</p>
<p class="downblue"><?php echo $_smarty_tpl->tpl_vars['dieta']->value;?>
</p><?php }
}
?>