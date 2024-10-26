<?php

$viewdefs['PM_PurchaseOrder']['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',  // 每行两列
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'includes' => array(  // 添加 JavaScript 文件
            array(
                'file' => 'custom/modules/PM_PurchaseOrder/js/line_items.js',  // 引入自定义 JavaScript 文件
            ),
        ),
        'useTabs' => false,  // 不使用标签页布局
        'tabDefs' => array(
            'DEFAULT' => array(
                'newTab' => false,
                'panelDefault' => 'expanded',
            ),
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                'name',  // 字段：名称
                'assigned_user_name',  // 字段：分配给的用户
            ),
            array(
                'description',  // 字段：描述
            ),
            // 添加产品行表格
            array(
                'custom_code' => '<div style="margin-top: 20px;">
                        <table id="line_items" class="list view inlineEdit" cellpadding="0" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Part Number</th>
                                    <th scope="col">Quantity CTN</th>
                                    <th scope="col">CTN</th>
                                    <th scope="col">Price_Unit</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- JavaScript 动态插入行 -->
                            </tbody>
                        </table>
                        <button type="button" class="button" onclick="insertProductLine()">Add Product Line</button>
                      </div>',
            ),
        ),
    ),
);
