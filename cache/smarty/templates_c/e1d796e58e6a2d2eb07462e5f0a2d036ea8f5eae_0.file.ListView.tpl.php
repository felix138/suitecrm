<?php
/* Smarty version 4.3.1, created on 2024-10-26 18:32:26
  from '/bitnami/suitecrm/include/SugarFields/Fields/Currency/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671d35baa55986_84967247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d796e58e6a2d2eb07462e5f0a2d036ea8f5eae' => 
    array (
      0 => '/bitnami/suitecrm/include/SugarFields/Fields/Currency/ListView.tpl',
      1 => 1729713769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671d35baa55986_84967247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/bitnami/suitecrm/include/Smarty/plugins/function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),));
?>

<?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['amount']->value,'currency_id'=>$_smarty_tpl->tpl_vars['currency_id']->value,'currency_symbol'=>$_smarty_tpl->tpl_vars['currency_symbol']->value),$_smarty_tpl);
}
}
