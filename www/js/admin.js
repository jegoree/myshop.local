/**
 *
 * Recieving data from fields
 *
 *
 */

function getData(obj_form) {
  var hData = {};
  $('input, textarea, select', obj_form).each(function () {
    if (this.name && this.name != '') {
      hData[this.name] = this.value;
      console.log('hData[' + this.name + '] = ' + hData[this.name]);
    }
  });

  return hData;
}

function newCategory() {
  var postData = getData('#blockNewCategory');

  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/addnewcat/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        alert(data['message']);
        $('#newCategoryName').val('');
      } else {
        alert(data['message']);
      }
    },
  });
}

/**
 *
 * Updating category details
 *
 */
function updateCat(itemId) {
  var parentId = $('#parentId_' + itemId).val();
  var newName = $('#itemName_' + itemId).val();
  var postData = { itemId: itemId, parentId: parentId, newName: newName };

  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/updatecategory/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      alert(data['message']);
    },
  });
}

/** Adding new product */
function addProduct() {
  var itemName = $('#newItemName').val();
  var itemPrice = $('#newItemPrice').val();
  var itemDesc = $('#newItemDesc').val();
  var itemCat = $('#newItemCatId').val();
  var postData = {
    itemName: itemName,
    itemPrice: itemPrice,
    itemDesc: itemDesc,
    itemCat: itemCat,
  };

  console.log(postData);
  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/addproduct/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        $('#newItemName').val('');
        $('#newItemPrice').val('');
        $('#newItemDesc').val('');
        $('#newItemCatId').val('');
      }
    },
  });
}

/**
 *
 * Updating products
 *
 */

function updateProduct(itemId) {
  var itemName = $('#itemName_' + itemId).val();
  var itemPrice = $('#itemPrice_' + itemId).val();
  var itemCatId = $('#itemCatId_' + itemId).val();
  var itemDesc = $('#itemDesc_' + itemId).val();
  var itemStatus = $('#itemStatus_' + itemId).val();
  console.log(itemStatus);
  if (!itemStatus) {
    itemstatus = 1;
  } else {
    itemStatus = 0;
  }

  var postData = {
    itemId: itemId,
    itemName: itemName,
    itemPrice: itemPrice,
    itemCatId: itemCatId,
    itemDesc: itemDesc,
    itemStatus: itemStatus,
  };

  console.log(postData);
  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/updateproduct/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      alert(data['message']);
    },
  });
}

/**
 *
 * Show/hide products in admin order page
 *
 */

function showProducts(id) {
  var objName = '#purchasesForOrderId_' + id;
  if ($(objName).css('display') != 'table-row') {
    $(objName).show();
  } else {
    $(objName).hide();
  }
}

/**
 *
 * Changin order status
 *
 */

function updateOrderStatus(itemId) {
  var status = $('#itemStatus_' + itemId).prop('checked');

  if (!status) {
    status = 0;
  } else {
    status = 1;
  }

  var postData = { itemId: itemId, status: status };
  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/setorderstatus/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (!data['success']) {
        alert(data['message']);
      }
    },
  });
}

/**
 *
 * Updating payment date
 *
 */

function updateDatePayment(itemId) {
  var datePayment = $('#datePayment_' + itemId).val();
  var postData = { itemId: itemId, datePayment: datePayment };

  $.ajax({
    type: 'POST',
    async: true,
    url: '/admin/setorderpayment/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (!data['success']) {
        alert(data['message']);
      }
    },
  });
}
