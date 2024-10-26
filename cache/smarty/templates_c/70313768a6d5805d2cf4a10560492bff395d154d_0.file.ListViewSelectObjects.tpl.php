<?php
/* Smarty version 4.3.1, created on 2024-10-26 18:32:25
  from '/bitnami/suitecrm/themes/SuiteP/include/ListView/ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671d35b91990e1_28707930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70313768a6d5805d2cf4a10560492bff395d154d' => 
    array (
      0 => '/bitnami/suitecrm/themes/SuiteP/include/ListView/ListViewSelectObjects.tpl',
      1 => 1729713797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671d35b91990e1_28707930 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
