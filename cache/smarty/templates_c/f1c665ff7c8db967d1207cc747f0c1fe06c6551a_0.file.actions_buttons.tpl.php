<?php
/* Smarty version 4.3.1, created on 2024-10-26 18:33:55
  from '/bitnami/suitecrm/themes/SuiteP/include/DetailView/actions_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671d361374afb8_46897352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c665ff7c8db967d1207cc747f0c1fe06c6551a' => 
    array (
      0 => '/bitnami/suitecrm/themes/SuiteP/include/DetailView/actions_buttons.tpl',
      1 => 1729713797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671d361374afb8_46897352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/bitnami/suitecrm/include/Smarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),1=>array('file'=>'/bitnami/suitecrm/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<div class="buttons">
    <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value['buttons']))) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"EDIT",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DUPLICATE",'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DELETE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php } else { ?>
    <?php echo smarty_function_counter(array('assign'=>"num_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
    <?php if (!is_array($_smarty_tpl->tpl_vars['button']->value) && in_array($_smarty_tpl->tpl_vars['button']->value,$_smarty_tpl->tpl_vars['built_in_buttons']->value)) {?>
    <?php echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_buttons']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {?>
    <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>

    <?php }?>
    <?php }?>
</div>
<?php }
}
