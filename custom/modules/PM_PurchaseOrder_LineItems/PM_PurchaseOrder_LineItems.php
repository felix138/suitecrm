<?php

require_once 'data/SugarBean.php';

class PM_PurchaseOrder_LineItems extends SugarBean {
    var $table_name = 'pm_purchaseorder_lineitems';
    var $object_name = 'PM_PurchaseOrder_LineItems';
    var $module_dir = 'PM_PurchaseOrder_LineItems';
    var $new_schema = true;

    var $id;
    var $group_id;
    var $product_id;  // 关联到 aos_products
    var $carton;
    var $unit_carton;
    var $price_unit;
    var $total_price;
    var $note;
    var $date_entered;
    var $date_modified;
    var $created_by;
    var $modified_user_id;
    var $deleted;

    public function __construct() {
        parent::__construct();
    }
}
?>
