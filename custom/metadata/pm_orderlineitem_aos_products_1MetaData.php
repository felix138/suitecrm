<?php
// created: 2024-10-24 17:49:17
$dictionary["pm_orderlineitem_aos_products_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'pm_orderlineitem_aos_products_1' => 
    array (
      'lhs_module' => 'PM_OrderLineItem',
      'lhs_table' => 'pm_orderlineitem',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pm_orderlineitem_aos_products_1_c',
      'join_key_lhs' => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
      'join_key_rhs' => 'pm_orderlineitem_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'pm_orderlineitem_aos_products_1_c',
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
      'name' => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pm_orderlineitem_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pm_orderlineitem_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pm_orderlineitem_aos_products_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pm_orderlineitem_aos_products_1pm_orderlineitem_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pm_orderlineitem_aos_products_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pm_orderlineitem_aos_products_1aos_products_idb',
      ),
    ),
  ),
);