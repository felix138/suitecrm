<?php

$dictionary['PM_PurchaseOrder_LineItems'] = array(
    'table' => 'pm_purchaseorder_lineitems',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'type' => 'id',
            'required' => true,
        ),
        'group_id' => array(
            'name' => 'group_id',
            'type' => 'id',
            'vname' => 'LBL_GROUP_ID',
        ),
        'product_id' => array(
            'name' => 'product_id',
            'type' => 'id',
            'vname' => 'LBL_PRODUCT',
        ),
        'carton' => array(
            'name' => 'carton',
            'type' => 'int',
            'vname' => 'LBL_CARTON',
        ),
        'unit_carton' => array(
            'name' => 'unit_carton',
            'type' => 'int',
            'vname' => 'LBL_UNIT_CARTON',
        ),
        'price_unit' => array(
            'name' => 'price_unit',
            'type' => 'decimal',
            'vname' => 'LBL_PRICE_UNIT',
        ),
        'total_price' => array(
            'name' => 'total_price',
            'type' => 'decimal',
            'vname' => 'LBL_TOTAL_PRICE',
        ),
        'note' => array(
            'name' => 'note',
            'type' => 'text',
            'vname' => 'LBL_NOTE',
        ),
    ),
);
?>
