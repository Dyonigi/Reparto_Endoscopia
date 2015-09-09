<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 14:33:06
         compiled from "templates\javascript\template\jquery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21617559a4ddc491562-08060521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0ba4a5f27dc9ef3539ed1a10a00c888f436ab3' => 
    array (
      0 => 'templates\\javascript\\template\\jquery.tpl',
      1 => 1436185982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21617559a4ddc491562-08060521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559a4ddc74dab3_17635936',
  'variables' => 
  array (
    'jqueryuicss' => 0,
    'jquery' => 0,
    'jqueryui' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559a4ddc74dab3_17635936')) {function content_559a4ddc74dab3_17635936($_smarty_tpl) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['jqueryuicss']->value;?>
">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jquery']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jqueryui']->value;?>
"><?php echo '</script'; ?>
>
<?php }} ?>
