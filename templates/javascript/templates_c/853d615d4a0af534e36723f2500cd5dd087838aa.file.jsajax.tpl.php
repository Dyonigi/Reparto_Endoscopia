<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 10:04:13
         compiled from "templates\javascript\template\jsajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74405555a87d619932-39662231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853d615d4a0af534e36723f2500cd5dd087838aa' => 
    array (
      0 => 'templates\\javascript\\template\\jsajax.tpl',
      1 => 1429713931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74405555a87d619932-39662231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5555a87dc524c5_09353270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5555a87dc524c5_09353270')) {function content_5555a87dc524c5_09353270($_smarty_tpl) {?>$.ajax({
                url: "index.php",
                success: function(result){
                            $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").html(result);
                            }, 
                method: "POST", 
                data: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

                })<?php }} ?>
