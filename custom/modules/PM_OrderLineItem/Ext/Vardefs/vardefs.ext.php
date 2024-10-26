<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-10-24 17:49:17
$dictionary["PM_OrderLineItem"]["fields"]["pm_orderlineitem_aos_products_1"] = array (
  'name' => 'pm_orderlineitem_aos_products_1',
  'type' => 'link',
  'relationship' => 'pm_orderlineitem_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'pm_orderlineitem_aos_products_1aos_products_idb',
);
$dictionary["PM_OrderLineItem"]["fields"]["pm_orderlineitem_aos_products_1_name"] = array (
  'name' => 'pm_orderlineitem_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'pm_orderlineitem_aos_products_1aos_products_idb',
  'link' => 'pm_orderlineitem_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["PM_OrderLineItem"]["fields"]["pm_orderlineitem_aos_products_1aos_products_idb"] = array (
  'name' => 'pm_orderlineitem_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'pm_orderlineitem_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PM_ORDERLINEITEM_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);


// created: 2024-10-24 12:23:38
$dictionary["PM_OrderLineItem"]["fields"]["pm_purchaseorder_pm_orderlineitem"] = array (
  'name' => 'pm_purchaseorder_pm_orderlineitem',
  'type' => 'link',
  'relationship' => 'pm_purchaseorder_pm_orderlineitem',
  'source' => 'non-db',
  'module' => 'PM_PurchaseOrder',
  'bean_name' => 'PM_PurchaseOrder',
  'vname' => 'LBL_PM_PURCHASEORDER_PM_ORDERLINEITEM_FROM_PM_PURCHASEORDER_TITLE',
  'id_name' => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
);
$dictionary["PM_OrderLineItem"]["fields"]["pm_purchaseorder_pm_orderlineitem_name"] = array (
  'name' => 'pm_purchaseorder_pm_orderlineitem_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PM_PURCHASEORDER_PM_ORDERLINEITEM_FROM_PM_PURCHASEORDER_TITLE',
  'save' => true,
  'id_name' => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
  'link' => 'pm_purchaseorder_pm_orderlineitem',
  'table' => 'pm_purchaseorder',
  'module' => 'PM_PurchaseOrder',
  'rname' => 'name',
);
$dictionary["PM_OrderLineItem"]["fields"]["pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida"] = array (
  'name' => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
  'type' => 'link',
  'relationship' => 'pm_purchaseorder_pm_orderlineitem',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PM_PURCHASEORDER_PM_ORDERLINEITEM_FROM_PM_ORDERLINEITEM_TITLE',
);

?>