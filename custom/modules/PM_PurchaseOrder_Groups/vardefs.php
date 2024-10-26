<?php

$dictionary['PM_PurchaseOrder_Groups'] = array(
    'table' => 'pm_purchaseorder_groups',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'type' => 'id',
            'required' => true,
        ),
        'purchaseorder_id' => array(
            'name' => 'purchaseorder_id',
            'type' => 'id',
            'vname' => 'LBL_PURCHASE_ORDER_ID',
        ),
        'name' => array(
            'name' => 'name',
            'type' => 'varchar',
            'vname' => 'LBL_NAME',
        ),
        'description' => array(
            'name' => 'description',
            'type' => 'text',
            'vname' => 'LBL_DESCRIPTION',
        ),
        'total' => array(
            'name' => 'total',
            'type' => 'decimal',
            'vname' => 'LBL_TOTAL',
        ),
        'discount' => array(
            'name' => 'discount',
            'type' => 'decimal',
            'vname' => 'LBL_DISCOUNT',
        ),
        'tax' => array(
            'name' => 'tax',
            'type' => 'decimal',
            'vname' => 'LBL_TAX',
        ),
    ),
    'indices' => array(
        array(
            'name' => 'pm_purchaseorder_groups_pk',
            'type' => 'primary',
            'fields' => array('id'),
        ),
    ),
    'relationships' => array(
        'purchaseorder_groups' => array(
            'lhs_module' => 'PM_PurchaseOrder',
            'lhs_table' => 'pm_purchaseorder',
            'lhs_key' => 'id',
            'rhs_module' => 'PM_PurchaseOrder_Groups',
            'rhs_table' => 'pm_purchaseorder_groups',
            'rhs_key' => 'purchaseorder_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
);
?>
