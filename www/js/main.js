/**
 *
 * Function that sends item to cart
 *
 * @param integer - ID of product
 * @return when OK updates cart function
 *
 */

function addToCart(itemId) {
  console.log('triggered');

  $.ajax({
    type: 'POST',
    async: true,
    url: '/cart/addtocart/' + itemId + '/',
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        $('#cartCntItems').html(data['cntItems']);

        $('#addCart_' + itemId).hide();
        $('#removeCart_' + itemId).show();
      }
    },
  });
}

function removeCart(itemId) {
  console.log('deltriggered');

  $.ajax({
    type: 'POST',
    async: true,
    url: '/cart/removefromcart/' + itemId + '/',
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        $('#cartCntItems').html(data['cntItems']);

        $('#addCart_' + itemId).show();
        $('#removeCart_' + itemId).hide();
      }
    },
  });
}

/**
 *
 * Function calculates total price of the product
 *
 * @param integer product's ID
 */

function conversionPrice(itemId) {
  var newCnt = $('#itemCnt_' + itemId).val();
  var itemPrice = $('#itemPrice_' + itemId).attr('value');
  var itemRealprice = newCnt * itemPrice;

  $('#itemRealPrice_' + itemId).html(itemRealprice);
}

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

/**
 *
 * New user registration
 *
 */

function registerNewUser() {
  var postData = getData('#registerBox');

  $.ajax({
    type: 'POST',
    async: true,
    url: '/user/register/',
    data: postData,
    dataType: 'json',

    success: function (data) {
      if (data['success']) {
        $('#registerBox').hide();
        $('#loginBox').hide();
        alert(data['message']);

        $('#registerBox').hide();

        $('#userLink').attr('href', '/user/');
        $('#userLink').html(data['userName']);
        $('#userBox').show();

        $('#loginBox').hide();
        $('#btnSaveOrder').show();
      } else {
        alert(data['message']);
      }
    },
  });
}

function login() {
  var email = $('#loginEmail').val();
  var pwd = $('#loginPwd').val();

  var postData = 'email=' + email + '&pwd=' + pwd;

  $.ajax({
    type: 'POST',
    async: true,
    url: '/user/login/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        $('#userLink').attr('href', '/user/');
        $('#userLink').html(data['displayName']);

        // filling details in the page
        $('#name').val(data['name']);
        $('#phone').val(data['phone']);
        $('#adress').val(data['adress']);

        $('#btnSaveOrder').show();
        location.reload();
      } else {
        alert(data['message']);
      }
    },
  });
}

/**
 *
 * Updating users data
 *
 */

function updateUserData() {
  var phone = $('#newPhone').val();
  var adress = $('#newAdress').val();
  var pwd1 = $('#newPwd1').val();
  var pwd2 = $('#newPwd2').val();
  var curPwd = $('#curPwd').val();
  var name = $('#newName').val();

  var postData = {
    phone: phone,
    adress: adress,
    pwd1: pwd1,
    pwd2: pwd2,
    curPwd: curPwd,
    name: name,
  };
  console.log(postData);
  $.ajax({
    type: 'POST',
    url: '/user/update/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        $('#userLink').html(data['userName']);
        alert(data['message']);
      } else {
        alert(data['message']);
      }
    },
  });
}

// function debugger() {
// 	$.ajax({
// 		url: "/user/update/",
// 		success: function (data) {
// 			console.log("Прибыли данные: " + data);
// 			alert("Прибыли данные: " + data);
// 		}
// 	});
// }

function saveOrder() {
  var postData = getData('form');
  $.ajax({
    type: 'POST',
    async: true,
    url: '/cart/saveorder/',
    data: postData,
    dataType: 'json',
    success: function (data) {
      if (data['success']) {
        alert(data['message']);
        document.location = '/';
      } else {
        alert(data['message']);
      }
    },
  });
}

function showProducts(id) {
  var objName = '#purchaseForOrderId_' + id;
  if ($(objName).css('display') != 'table-row') {
    $(objName).show();
  } else {
    $(objName).hide();
  }
}
