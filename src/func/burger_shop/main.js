let pages = {
  feedback: "page_feedback",
  order: "page_order",
  order_history: "page_order_history",
  inventory: "page_inventory",
  dashboard: "page_dashboard",
  feedback: "page_feedback",
  product: "page_product",
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
  $(".overlay").removeClass("opacity-1");
  page = getCookie("page");

  if( $('#txt_user_access').val() == 'admin')
  {
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
  }
  

  if ($("#txt_user_access").val() == "admin") {
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
    $("#sel_access_level").val(val.access_level);
  });
}
function delete_account(id) {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/admin/delete_account.php?id=" + id,
    success: function (data) {
      alert("Account deleted successfully.");
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
      access_level: $("#sel_access_level").val(),
    },
    url: "src/database/burger_shop/func/admin/update_account.php?id=" + id,
    success: function (data) {
      alert("Account updated successfully.");
    },
  });
}


$('#btn_login').on('click', function(){
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/login.php" ,
    data:{
      username:$('#txt_username').val(),
      password:$('#txt_password').val(),
    },
    success: function (data) {
    },
  });
})

$('#btn_logout').on('click', function(){
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/logout.php" ,
  });
})

