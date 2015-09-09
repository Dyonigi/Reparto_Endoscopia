<?php /* Smarty version 3.1.27, created on 2015-08-02 14:09:39
         compiled from "templates\main\template\background.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:504255be08838adc88_59445857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f502601103b45b7790fffeb6df858d713500f151' => 
    array (
      0 => 'templates\\main\\template\\background.tpl',
      1 => 1437502304,
      2 => 'file',
    ),
    'b4c6f719820469ebe49c3117adc71e357404b6ea' => 
    array (
      0 => 'templates\\main\\template\\layout.tpl',
      1 => 1436628172,
      2 => 'file',
    ),
    'd20ac34b9214e6de02f6be32749d6d8956d6a117' => 
    array (
      0 => 'd20ac34b9214e6de02f6be32749d6d8956d6a117',
      1 => 0,
      2 => 'string',
    ),
    '1656c7cb19d492198aa036b1193f412d18f1c091' => 
    array (
      0 => '1656c7cb19d492198aa036b1193f412d18f1c091',
      1 => 0,
      2 => 'string',
    ),
    '9d2f71cdfbc78d5eb0f34c36ab7564350a2164c8' => 
    array (
      0 => '9d2f71cdfbc78d5eb0f34c36ab7564350a2164c8',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '504255be08838adc88_59445857',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55be08838e8610_67723399',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55be08838e8610_67723399')) {
function content_55be08838e8610_67723399 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '504255be08838adc88_59445857';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php
$_smarty_tpl->properties['nocache_hash'] = '504255be08838adc88_59445857';
?>

    <?php echo $_smarty_tpl->tpl_vars['Head']->value;?>


    
  </head>
  <body>
    <?php
$_smarty_tpl->properties['nocache_hash'] = '504255be08838adc88_59445857';
?>

    <div id="background" class="ui-corner-all">
        <img class="ui-corner-all" id="banner" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
" >
        <div id="resizer" class="ui-corner-all">
            <?php echo $_smarty_tpl->tpl_vars['Main']->value;?>

        </div>
    </div>

    <?php
$_smarty_tpl->properties['nocache_hash'] = '504255be08838adc88_59445857';
?>

    <?php echo $_smarty_tpl->tpl_vars['loginform']->value;?>



  </body>
</html><?php }
}
?>