let pages = {
  feedback: "page_feedback",
  order: "page_order",
  order_history: "page_order_history",
  inventory: "page_inventory",
  dashboard: "page_dashboard",
  feedback: "page_feedback",
  product: "page_product",
  viewMenu:'page_viewMenu',
  btn_navbar_home:'page_home',
  btn_navbar_contactUs:'page_contactUs', 
  my_orders:'page_transaction',
  cart:'page_myPurchase'
};

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function setCookie(cookie) {
  document.cookie = cookie;
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(document).ready(function () {


  
  page = getCookie("page");
  cart_id = $('#txt_card_id').val()

  $("#txt_order_ref_no_payment2").val('test');


  if(cart_id){
    load_cart_orders(cart_id)
  }
  

  if ($("#txt_user_access").val() == "admin") {

    // setInterval(() => {
    //   load_notifications()
    // }, 15000);
  


    if (page == "products") {
      $("#btn_sidebar_products").trigger("click");
      $(".overlay").removeClass("opacity-0");
    }

    if (page == "dashboard") {
      $("#btn_sidebar_dashboard").trigger("click");
      $(".overlay").removeClass("opacity-0");

     
    }

    if (page == "feedback") {
      $("#btn_sidebar_feedback").trigger("click");
      $(".overlay").removeClass("opacity-0");
    }

    if (page == "inventory") {
      $("#btn_sidebar_inventory").trigger("click");
      $(".overlay").removeClass("opacity-0");
    }

    if (page == "order_history") {
      $("#btn_sidebar_order_history").trigger("click");
      $(".overlay").removeClass("opacity-0");
    }

    if (page == "order") {
      $("#btn_sidebar_order").trigger("click");
      $(".overlay").removeClass("opacity-0");
    }

    // ADMIN
    load_feedbacks();

    //orders.js
    load_orders();

    //order_history.js
    load_order_history();

    //dashboard.js
    load_filter_dates();

    $("#btn_account_settings").on("click", function () {
      load_account_settings($("#txt_user_id").val());
    });

    $("#btn_delete_account").on("click", function () {
      delete_account($("#txt_user_id").val());
    });

    $("#btn_update_account").on("click", function () {
      update_account($("#txt_user_id").val());
    });
  } else {

    // USER
    load_products();
    $('#viewMenu').on('click', function(){
      change_page('viewMenu')
    })


  }
});

function change_page(pagename) {
  $(".page").addClass("d-none");
  $("#" + pages[pagename]).removeClass("d-none");
}

function load_account_settings(id) {
  $.ajax({
    type: "GET",
    url:
      "src/database/burger_shop/func/admin/read_account_settings.php?id=" + id,
    success: function (data) {
      write_account_settings(JSON.parse(data));
    },
  });
}
function write_account_settings(data) {
  $.each(data, function (key, val) {
    $("#txt_username").val(val.username);
    $("#txt_email").val(val.email);
    $("#txt_password").val(val.password);
    $("#txt_phone").val(val.phone);
    $("#sel_access_level").val(val.access_level);
  });
}
function delete_account(id) {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/admin/delete_account.php?id=" + id,
    success: function (data) {
      $("#msg_title").text("Delete Account");
      $("#msg_body").text("Account deleted successfully.");
      $("#md_msg_box").modal("show");
    },
  });
}
function update_account(id) {
  $.ajax({
    type: "POST",
    data: {
      username: $("#txt_username").val(),
      email: $("#txt_email").val(),
      password: $("#txt_password").val(),
      phone: $("#txt_phone").val(),
      access_level: $("#sel_access_level").val(),
    },
    url: "src/database/burger_shop/func/admin/update_account.php?id=" + id,
    success: function (data) {
      $("#msg_title").text("Update Account");
      $("#msg_body").text("Account updated successfully.");
      $("#md_msg_box").modal("show");
    },
  });
}

$("#btn_login").on("click", function () {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/login.php",
    data: {
      username: $("#txt_username").val(),
      password: $("#txt_password").val(),
    }
  });
});


$('#btn_signup_submit').on('click', function(e){
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/user/add_account.php",
    data: {
      username: $("#txt_signup_username").val(),
      password: $("#txt_signup_password").val(),
      fullname: $("#txt_signup_fullname").val(),
      phone: $("#txt_signup_phone").val(),
      email: $("#txt_signup_email").val(),
      address: $("#txt_signup_address").val()
      
    },
    success:function(){
      $('#signUpModal').modal('hide')
      $("#msg_title").text("Sign up Account");
      $("#msg_body").text("Registration Successful");
      $("#md_msg_box").modal("show");
    }
  });
  
})



$('#btn_nav_admin_view_account').on('click', function(){
  $('#btn_account_settings').trigger('click')
})
