<?php
/* Smarty version 4.3.1, created on 2024-10-26 18:32:25
  from '/bitnami/suitecrm/modules/SavedSearch/SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_671d35b9456098_10415596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f295eeffae6881378ae388b5619dfec03f9d74' => 
    array (
      0 => '/bitnami/suitecrm/modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1729713790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_671d35b9456098_10415596 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
