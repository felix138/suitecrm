var prodln = 0;  // 行项目的索引

/**
 * 插入产品行
 */function insertProductLine() {
    var table = document.getElementById('line_items');
    var tbody = document.createElement("tbody");
    tbody.id = "product_body" + prodln;
    table.appendChild(tbody);

    var row = tbody.insertRow(-1);
    row.id = "product_line" + prodln;

    // 插入字段：数量（Carton）, 产品名称, 部件编号, 每单位价格， 总价
   /* var cell1 = row.insertCell(0);
    cell1.innerHTML = "<input type='number' name='carton[" + prodln + "]' id='carton" + prodln + "' onblur='calculateLine(" + prodln + ")' style='width: 100%;' />";

    var cell2 = row.insertCell(1);
    cell2.innerHTML = "<div style='display: flex; width: 100%; align-items: center;'>" +
                      "<input type='text' name='product_name[" + prodln + "]' id='product_name" + prodln + "' style='flex: 1; width: 100%;' />" +
                      "<input type='hidden' name='product_id[" + prodln + "]' id='product_id" + prodln + "' />" +
                      "<button type='button' class='button' onclick='openProductPopup(" + prodln + ")' style='margin-left: 5px; flex-shrink: 0;'>" +
                      "<span class='suitepicon suitepicon-action-select'></span></button>" +
                  "</div>";

    

    var cell3 = row.insertCell(2);
    cell3.innerHTML = "<input type='text' name='part_number[" + prodln + "]' id='part_number" + prodln + "' style='width: 100%;' />";

    var cell4 = row.insertCell(3);
    cell4.innerHTML = "<input type='number' name='price_unit[" + prodln + "]' id='price_unit" + prodln + "' onblur='calculateLine(" + prodln + ")' style='width: 100%;' />";

    var cell5 = row.insertCell(4);
    cell5.innerHTML = "<input type='text' name='total_price[" + prodln + "]' id='total_price" + prodln + "' readonly style='width: 100%;' />";

    var cell6 = row.insertCell(5);
    //cell6.innerHTML = "<button type='button' class='button' onclick='deleteLine(" + prodln + ")'>删除</button>";
    cell6.innerHTML = "<button type='button' class='button' onclick='deleteLine(" + prodln + ")'>" +
                  "<span class='suitepicon suitepicon-action-delete'></span></button>";

    prodln++;*/
    // Product
    var cell1 = row.insertCell(0);
    cell1.innerHTML = "<div style='display: flex; width: 100%; align-items: center;'>" +
                  "<input type='text' name='product_name[" + prodln + "]' id='product_name" + prodln + "' style='flex: 1; width: 100%;' />" +
                  "<input type='hidden' name='product_id[" + prodln + "]' id='product_id" + prodln + "' />" +
                  "<button type='button' class='button' onclick='openProductPopup(" + prodln + ")' style='margin-left: 5px; flex-shrink: 0;'>" +
                  "<span class='suitepicon suitepicon-action-select'></span></button>" +
              "</div>";
    //Part_Number              
    var cell2 = row.insertCell(1);
    cell2.innerHTML = "<input type='text' name='part_number[" + prodln + "]' id='part_number" + prodln + "' style='width: 100%;' />";

    //Unit/CTN
    var cell3 = row.insertCell(2);
    cell3.innerHTML= "<input type='number' name='unit_ctn[" + prodln + "]' id='unit_ctn" + prodln + "' onblur='calculateLine(" + prodln + ")' style='width: 100%;' />";

    //CTN
    var cell4 = row.insertCell(3);
    cell4.innerHTML = "<input type='number' name='carton[" + prodln + "]' id='carton" + prodln + "' onblur='calculateLine(" + prodln + ")' style='width: 100%;' />";

    //unitprice
    var cell5 = row.insertCell(4);
    cell5.innerHTML = "<input type='number' name='price_unit[" + prodln + "]' id='price_unit" + prodln + "' onblur='calculateLine(" + prodln + ")' style='width: 100%;' />";

    //total price
    var cell6= row.insertCell(5);
    cell6.innerHTML = "<input type='text' name='total_price[" + prodln + "]' id='total_price" + prodln + "' readonly style='width: 100%;' />";
    //delete button
    var cell7 = row.insertCell(6);
    cell7.innerHTML = "<button type='button' class='button' onclick='deleteLine(" + prodln + ")'>" +
                  "<span class='suitepicon suitepicon-action-delete'></span></button>";
    
    prodln++;

}


/**
 * 打开产品选择弹窗
 */
function openProductPopup(ln) {
    console.log("openProductPopup called for line:", ln); // 记录行号
    var popupRequestData = {
        "call_back_function": "setProductReturn",
        "form_name": "EditView",
        "field_to_name_array": {
            "id": "product_id" + ln,
            "name": "product_name" + ln,
            "part_number": "part_number" + ln  // 添加 part_number 的映射
        },
        "passthru_data": { "line_no": ln }  // 将行号传递到 passthru_data 中
    };
    console.log("popupRequestData:", popupRequestData); // 记录请求数据
    open_popup('AOS_Products', 800, 850, '', true, true, popupRequestData);
}


/**
 * 产品选择返回后设置值
 */
function setProductReturn(popupReplyData) {
    console.log("setProductReturn called with popupReplyData:", JSON.stringify(popupReplyData, null, 2)); // 输出完整的 popupReplyData 结构

    // 从 passthru_data 中获取行号
    var ln = popupReplyData.passthru_data.line_no;
    console.log("Line number extracted from passthru_data:", ln); // 记录行号

    // 检查 name_to_value_array 中的内容
    var fieldArray = popupReplyData.name_to_value_array;
    console.log("fieldArray:", fieldArray); // 记录字段数组内容

    // 记录将要填充的字段值
    if (fieldArray && fieldArray["product_id" + ln] && fieldArray["product_name" + ln]) {
        console.log("Setting product_id and product_name for line", ln); // 记录行号
        document.getElementById("product_id" + ln).value = fieldArray["product_id" + ln];
        document.getElementById("product_name" + ln).value = fieldArray["product_name" + ln];
    } else if (fieldArray && fieldArray.id && fieldArray.name) {
        console.log("Fallback to using general id and name fields for line", ln);
        document.getElementById("product_id" + ln).value = fieldArray.id;
        document.getElementById("product_name" + ln).value = fieldArray.name;
    } else {
        console.error("Failed to find matching keys for product_id and product_name. fieldArray contents:", fieldArray);
    }

     // 填充 part_number
     if (fieldArray && fieldArray["part_number" + ln]) {
        console.log("Setting part_number for line", ln);
        document.getElementById("part_number" + ln).value = fieldArray["part_number" + ln];
    } else if (fieldArray && fieldArray.part_number) {
        // 如果 `part_number` 没有后缀行号
        console.log("Fallback to using general part_number field for line", ln);
        document.getElementById("part_number" + ln).value = fieldArray.part_number;
    } else {
        console.warn("Part number not found in response for line", ln);
    }
}

/*
function setProductReturn(popupReplyData) {
    console.log("Full popupReplyData:", JSON.stringify(popupReplyData, null, 2)); // 输出完整的 popupReplyData 结构
}
*/
/**
 * 计算总价
 */
function calculateLine(ln) {
    var carton = parseFloat(document.getElementById("carton" + ln).value) || 0;
    var unit_carton = parseFloat(document.getElementById("unit_ctn" + ln).value) || 0;
    var price_unit = parseFloat(document.getElementById("price_unit" + ln).value) || 0;
    var total_price = carton * unit_carton * price_unit;
    document.getElementById("total_price" + ln).value = total_price.toFixed(2);
}

/**
 * 删除行
 */
function deleteLine(ln) {
    var row = document.getElementById("product_body" + ln);
    if (row) {
        row.parentNode.removeChild(row);  // 直接从 DOM 中移除
    }
}
