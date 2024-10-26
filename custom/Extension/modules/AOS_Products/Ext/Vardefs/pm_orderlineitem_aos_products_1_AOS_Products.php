<?php
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
