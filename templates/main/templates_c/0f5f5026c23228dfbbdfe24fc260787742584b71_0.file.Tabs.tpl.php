<?php /* Smarty version 3.1.27, created on 2015-09-04 10:59:02
         compiled from "templates\main\template\Tabs.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:374555e95d5643a2c1_91867187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5f5026c23228dfbbdfe24fc260787742584b71' => 
    array (
      0 => 'templates\\main\\template\\Tabs.tpl',
      1 => 1440577980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374555e95d5643a2c1_91867187',
  'variables' => 
  array (
    'Tabs' => 0,
    'h' => 0,
    'Home' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e95d56454278_49613718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e95d56454278_49613718')) {
function content_55e95d56454278_49613718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '374555e95d5643a2c1_91867187';
?>

    <div id="tabs">
        <ul>
          <li><a href="#Home">Home</a></li>
          <?php
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
            <li  id= '<?php echo $_smarty_tpl->tpl_vars['h']->value['idbottone'];?>
'><a href="#<?php echo $_smarty_tpl->tpl_vars['h']->value['iddiv'];?>
"><?php echo $_smarty_tpl->tpl_vars['h']->value['testobottone'];?>
</a></li>
        <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>
          
        </ul>
        <div id="Home">
            <?php echo $_smarty_tpl->tpl_vars['Home']->value;?>

            
        </div>
          <?php
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
            <div id="<?php echo $_smarty_tpl->tpl_vars['h']->value['iddiv'];?>
">
            <p>
                Reparto di Endoscopia dell'Ospedale di Sulmona
            </p>
        </div>
        <?php
$_smarty_tpl->tpl_vars['h'] = $foreach_h_Sav;
}
?>
        
    </div><?php }
}
?>