<?php
// created: 2024-10-24 12:23:37
$dictionary["pm_purchaseorder_pm_orderlineitem"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'pm_purchaseorder_pm_orderlineitem' => 
    array (
      'lhs_module' => 'PM_PurchaseOrder',
      'lhs_table' => 'pm_purchaseorder',
      'lhs_key' => 'id',
      'rhs_module' => 'PM_OrderLineItem',
      'rhs_table' => 'pm_orderlineitem',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pm_purchaseorder_pm_orderlineitem_c',
      'join_key_lhs' => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
      'join_key_rhs' => 'pm_purchaseorder_pm_orderlineitempm_orderlineitem_idb',
    ),
  ),
  'table' => 'pm_purchaseorder_pm_orderlineitem_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pm_purchaseorder_pm_orderlineitempm_orderlineitem_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pm_purchaseorder_pm_orderlineitemspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pm_purchaseorder_pm_orderlineitem_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pm_purchaseorder_pm_orderlineitempm_purchaseorder_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pm_purchaseorder_pm_orderlineitem_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pm_purchaseorder_pm_orderlineitempm_orderlineitem_idb',
      ),
    ),
  ),
);