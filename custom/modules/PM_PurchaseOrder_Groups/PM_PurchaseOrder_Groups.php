<?php

require_once 'data/SugarBean.php';

class PM_PurchaseOrder_Groups extends SugarBean {
    var $table_name = 'pm_purchaseorder_groups';
    var $object_name = 'PM_PurchaseOrder_Groups';
    var $module_dir = 'PM_PurchaseOrder_Groups';
    var $new_schema = true;

    var $id;
    var $purchaseorder_id;
    var $name;
    var $description;
    var $total;
    var $discount;
    var $tax;
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
