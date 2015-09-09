<?php /* Smarty version 3.1.27, created on 2015-09-04 10:58:59
         compiled from "templates\javascript\template\Tabclick.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2636255e95d53c0b455_54750635%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a4485ffd06d291b72319409ee95a2fd9601a48' => 
    array (
      0 => 'templates\\javascript\\template\\Tabclick.tpl',
      1 => 1439117462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2636255e95d53c0b455_54750635',
  'variables' => 
  array (
    'Tabs' => 0,
    'h' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e95d5401d8d5_34446301',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e95d5401d8d5_34446301')) {
function content_55e95d5401d8d5_34446301 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2636255e95d53c0b455_54750635';
$_from = $_smarty_tpl->tpl_vars['Tabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['h'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['h']->_loop = false;
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->_loop = true;
$foreach_h_Sav = $_smarty_tpl->tpl_vars['h'];
?>
<?php echo '<script'; ?>
>
    $(function () {
    
        $( "#<?php echo $_smarty_tpl->tpl_vars['h']->value['idbottone'];?>
" ).click(function(){
            $.ajax({
                url: "index.php",
                success: function(result){
                            $("#<?php echo $_smarty_tpl->tpl_vars['h']->value['iddiv'];?>
").html(result);
                            <?php echo $_smarty_tpl->tpl_vars['h']->value['funzione'];?>
;
                            }, 
                type: "POST", 
                data: {
                    task: "<?php echo $_smarty_tpl->tpl_vars['h']->value['task'];?>
"
            }
                });
        }
                
                );
      });
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
}
}
?>