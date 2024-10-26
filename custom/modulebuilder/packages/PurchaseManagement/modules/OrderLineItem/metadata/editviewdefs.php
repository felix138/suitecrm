<?php
$module_name = 'PM_OrderLineItem';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'unit_ctn',
            'label' => 'LBL_UNIT_CTN',
          ),
          1 => 
          array (
            'name' => 'carton',
            'label' => 'LBL_CARTON',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'unitprice',
            'label' => 'LBL_UNITPRICE',
          ),
          1 => 
          array (
            'name' => 'total_price',
            'label' => 'LBL_TOTAL_PRICE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'pm_purchaseorder_pm_orderlineitem_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
