<?php /* Smarty version 3.1.27, created on 2015-08-31 15:36:14
         compiled from "templates\javascript\template\HeadPaziente.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1559555e4584ed51550_52332252%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69afad5f4a5ba1a8aa0ee954ec022b68dac40431' => 
    array (
      0 => 'templates\\javascript\\template\\HeadPaziente.tpl',
      1 => 1440931498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559555e4584ed51550_52332252',
  'variables' => 
  array (
    'LogOutWindow' => 0,
    'Tabclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e4584edb2ff6_26906083',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e4584edb2ff6_26906083')) {
function content_55e4584edb2ff6_26906083 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1559555e4584ed51550_52332252';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['LogOutWindow']->value;?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['Tabclick']->value;?>

<?php echo '<script'; ?>
>
  $(function() {
    
    LogOutWindow();
  });
<?php echo '</script'; ?>
><?php }
}
?>