<?php /* Smarty version Smarty-3.1.13, created on 2014-11-10 17:19:40
         compiled from "templates\main\template\background.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23725412b12e194996-04765594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f502601103b45b7790fffeb6df858d713500f151' => 
    array (
      0 => 'templates\\main\\template\\background.tpl',
      1 => 1415636363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23725412b12e194996-04765594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5412b12eabcf92_00991645',
  'variables' => 
  array (
    'mainonload' => 0,
    'maincontent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5412b12eabcf92_00991645')) {function content_5412b12eabcf92_00991645($_smarty_tpl) {?><!DOCTYPE html>
<html>
  
  <head>
    <title>background.tpl</title>
  </head>
  
  <body>
    <div id="Background">background</div>
    <div id="Title">title</div>
    <div id="Login">login</div>
    <div id="Menu">menu</div>
    <div id="Main" <?php echo $_smarty_tpl->tpl_vars['mainonload']->value;?>
><?php echo $_smarty_tpl->tpl_vars['maincontent']->value;?>
</div>
  </body>

</html><?php }} ?>