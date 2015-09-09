<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 10:04:13
         compiled from "templates\javascript\template\jsonload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286815555a87de0e0c6-19285454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70f61b0ab1947269c12d8e4c7c2062efd11b3aa' => 
    array (
      0 => 'templates\\javascript\\template\\jsonload.tpl',
      1 => 1429634210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286815555a87de0e0c6-19285454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ready' => 0,
    'function' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5555a87de73af2_34180224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5555a87de73af2_34180224')) {function content_5555a87de73af2_34180224($_smarty_tpl) {?><?php echo '<script'; ?>
>
    $("#<?php echo $_smarty_tpl->tpl_vars['ready']->value;?>
").ready(function(){
                            <?php echo $_smarty_tpl->tpl_vars['function']->value;?>

                            });
<?php echo '</script'; ?>
><?php }} ?>
