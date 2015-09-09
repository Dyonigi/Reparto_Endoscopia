<?php /* Smarty version 3.1.27, created on 2015-09-02 11:51:53
         compiled from "templates\main\template\email_registrazione.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:68855e6c6b9d4e493_49555456%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28d08d4fb88cc52818c64db9469c5ec7a6640d56' => 
    array (
      0 => 'templates\\main\\template\\email_registrazione.tpl',
      1 => 1441096385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68855e6c6b9d4e493_49555456',
  'variables' => 
  array (
    'nome' => 0,
    'cognome' => 0,
    'url' => 0,
    'codice_attivazione' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e6c6b9dcf338_77677871',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6c6b9dcf338_77677871')) {
function content_55e6c6b9dcf338_77677871 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '68855e6c6b9d4e493_49555456';
?>
Salve <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
,

Grazie per esserti registrato come memro del Reparto di Endoscopia di Sulmona.

Prima di attivare il tuo account e' necessario compiere un ultimo passaggio per completare la registrazione!

Nota bene:  Devi completare questo passaggio per diventare un utente registrato.
Dovrai poi attendere che un Amministratore confermi la tua registrazione prima di poter accedere ai contenuti del sito.

Per completare la registrazione, clicca sul collegamento qui sotto:
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php?task=attivazioneutente&codice_attivazione=<?php echo $_smarty_tpl->tpl_vars['codice_attivazione']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

<?php }
}
?>