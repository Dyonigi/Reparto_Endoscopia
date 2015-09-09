<?php /* Smarty version 3.1.27, created on 2015-08-15 11:51:27
         compiled from "templates\javascript\template\HeadRegistrazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2414255cf0b9f8a1725_26014586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138d156c38dfdbb3fc1ac2d91af6f9ac3c07f58e' => 
    array (
      0 => 'templates\\javascript\\template\\HeadRegistrazione.tpl',
      1 => 1439632283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2414255cf0b9f8a1725_26014586',
  'variables' => 
  array (
    'Registrazione' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cf0b9f8d43b6_69317962',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cf0b9f8d43b6_69317962')) {
function content_55cf0b9f8d43b6_69317962 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2414255cf0b9f8a1725_26014586';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['Registrazione']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  $(function() {
    $( "#registrazione" )
      
      .submit(function(event) {
          
  event.preventDefault();
          Registrazione();
      });
  });
<?php echo '</script'; ?>
><?php }
}
?>