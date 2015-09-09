<?php /* Smarty version 3.1.27, created on 2015-09-04 10:58:59
         compiled from "templates\javascript\template\jqueryTabs.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1770155e95d53bb43a7_40021438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85040c8c10f9209cc90bec36cd0e0c27ab1eac75' => 
    array (
      0 => 'templates\\javascript\\template\\jqueryTabs.tpl',
      1 => 1440672894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770155e95d53bb43a7_40021438',
  'variables' => 
  array (
    'DietaEsame' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e95d53bba311_50911990',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e95d53bba311_50911990')) {
function content_55e95d53bba311_50911990 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1770155e95d53bb43a7_40021438';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['DietaEsame']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
     $(function() {
        $( "#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" ).tabs();
      });   
<?php echo '</script'; ?>
><?php }
}
?>