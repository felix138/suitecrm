<?php
/* Smarty version 4.3.1, created on 2024-10-26 18:32:26
  from '/bitnami/suitecrm/include/SugarFields/Fields/Base/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671d35ba9e4b10_72840947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3bf8c0757affd5dabfd2f211bb19932351bf56' => 
    array (
      0 => '/bitnami/suitecrm/include/SugarFields/Fields/Base/ListView.tpl',
      1 => 1729713769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671d35ba9e4b10_72840947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/bitnami/suitecrm/include/Smarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
