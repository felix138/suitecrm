<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2024-10-24 12:23:37
$layout_defs["PM_PurchaseOrder"]["subpanel_setup"]['pm_purchaseorder_pm_orderlineitem'] = array (
  'order' => 100,
  'module' => 'PM_OrderLineItem',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PM_PURCHASEORDER_PM_ORDERLINEITEM_FROM_PM_ORDERLINEITEM_TITLE',
  'get_subpanel_data' => 'pm_purchaseorder_pm_orderlineitem',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>