<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-10-24 17:49:17
$dictionary["AOS_Products"]["fields"]["pm_orderlineitem_aos_products_1"] = array (
  'name' => 'pm_orderlineitem_aos_products_1',
  'type' => 'link',
  'relationship' => 'pm_orderlineitem_aos_products_1',
  'source' => 'non-db',
  'module' => 'PM_OrderLineItem',
  'bean_name' => 'PM_OrderLineItem',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_PM_ORDERLINEITEM_TITLE',
  'id_name' => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
);
$dictionary["AOS_Products"]["fields"]["pm_orderlineitem_aos_products_1_name"] = array (
  'name' => 'pm_orderlineitem_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_PM_ORDERLINEITEM_TITLE',
  'save' => true,
  'id_name' => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
  'link' => 'pm_orderlineitem_aos_products_1',
  'table' => 'pm_orderlineitem',
  'module' => 'PM_OrderLineItem',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["pm_orderlineitem_aos_products_1pm_orderlineitem_ida"] = array (
  'name' => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
  'type' => 'link',
  'relationship' => 'pm_orderlineitem_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_PM_ORDERLINEITEM_TITLE',
);


 // created: 2024-10-23 20:22:05
$dictionary['AOS_Products']['fields']['alert_threshold_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['alert_threshold_c']['labelValue']='alert threshold';

 

 // created: 2024-10-23 20:23:41
$dictionary['AOS_Products']['fields']['inventory_quantity_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['inventory_quantity_c']['labelValue']='inventory quantity';

 

 // created: 2024-10-23 20:24:20
$dictionary['AOS_Products']['fields']['low_quantity_c']['inline_edit']='1';
$dictionary['AOS_Products']['fields']['low_quantity_c']['labelValue']='Low Quantity';

 
?>