<?php /* Smarty version 3.1.27, created on 2015-08-04 11:44:50
         compiled from "templates\main\template\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:249755c089923b6484_38431605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61187f6c5933347cb373dc8842e0992344865be8' => 
    array (
      0 => 'templates\\main\\template\\welcome.tpl',
      1 => 1438529954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249755c089923b6484_38431605',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c089924eae42_73183903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c089924eae42_73183903')) {
function content_55c089924eae42_73183903 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '249755c089923b6484_38431605';
?>
<div id="dialog-login" title="Benvenuto">
<form  action="index.php" method="POST">
    <fieldset>
      <input type="text" name="task" value="logout" tabindex="-1" style="display: none">
      <input type="submit" value="Submit" tabindex="-1" style="display: none">
    </fieldset>
</form>
Benvenuto <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

</div><?php }
}
?>