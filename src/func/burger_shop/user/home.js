var payment_method = "";
var delivery_location = "";

function load_products() {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/user/read_products.php",
    success: function (data) {
      write_products(JSON.parse(data));
    },
  });
}
// id="btn_myPurchase"
function write_products(data) {
  all_output = "";
  output = "";
  output +=
    '<div class="card-carousel" data-flickity=\'{ "autoPlay": true }\' >';
  $.each(data, function (key, val) {
    output += '<div class="userOrder-card cell-card mt-3">';
    output += '<img src="' + val.picture + '">';
    output += '<div class="description">';
    output +=
      '<h5 id="text" style="letter-spacing: 3px;">' + val.name + "</h5>";
    output += "<p>&#8369;" + val.price + "</p>";
    output +=
      '<a class="btn_add_to_cart" attr-id="' +
      val.id +
      '"><button style="font-weight:bold; background:#FFD600; border-radius:25px; width:150px; height: 40px; border: none;">Buy</button></a></div></div>';

    all_output +=
      '<div class="col mt-2" ><div class="card p-3" style=" height:65vh;background: #2D1E1E; border-radius: 2%;">';
    all_output +=
      '<div><img src="' +
      val.picture +
      '"  class="card-img-top" style="border-radius: 2%; height:40vh;"></div>';
    all_output +=
      '<div class="card-body"><h6 class="card-title" style="letter-spacing: 3px;">' +
      val.name +
      "</h5>";
    all_output +=
      '<p class="card-text"><small>&#8369;' +
      val.price +
      '</small></p><a href="#">';
    all_output +=
      '<button attr-id="' +
      val.id +
      '" class="btn_add_to_cart" style="font-weight:bold; background:#FFD600; border-radius:25px; border-style: solid; width:150px; height: 35px; border: none;">';
    all_output +=
      '<i class="fa-solid fa-cart-shopping text-white"></i> Add to Cart';
    all_output += "</button></a></div></div></div>";
  });

  output += "</div>";

  $("#div_products").empty();
  $("#div_products").append(output);
  $(".card-carousel").flickity({
    // options
    cellAlign: "left",
    wrapAround: true,
    freeScroll: true,
    autoPlay: true,
  });

  $("#div_products_all").empty();
  $("#div_products_all").append(all_output);

  add_to_cart();
}


function load_filtered_products(filter) {
    $.ajax({
      type: "GET",
      url: "src/database/burger_shop/func/user/read_products.php?category="+filter,
      success: function (data) {
        write_products_filtered(JSON.parse(data));
      },
    });
  }

  function write_products_filtered(data) {
    all_output = "";
    $.each(data, function (key, val) {
  
      all_output +=
        '<div class="col mt-2" ><div class="card p-3" style=" height:65vh;background: #2D1E1E; border-radius: 2%;">';
      all_output +=
        '<div><img src="' +
        val.picture +
        '"  class="card-img-top" style="border-radius: 2%; height:40vh;"></div>';
      all_output +=
        '<div class="card-body"><h6 class="card-title" style="letter-spacing: 3px;">' +
        val.name +
        "</h5>";
      all_output +=
        '<p class="card-text"><small>&#8369;' +
        val.price +
        '</small></p><a href="#">';
      all_output +=
        '<button attr-id="' +
        val.id +
        '" class="btn_add_to_cart" style="font-weight:bold; background:#FFD600; border-radius:25px; border-style: solid; width:150px; height: 35px; border: none;">';
      all_output +=
        '<i class="fa-solid fa-cart-shopping text-white"></i> Add to Cart';
      all_output += "</button></a></div></div></div>";
    });
  
  
    $("#div_products_all").empty();
    $("#div_products_all").append(all_output);
  
    add_to_cart();
  }


function add_to_cart() {
  $(".btn_add_to_cart").on("click", function () {
    if (!$("#txt_user_id").val()) {
      $("#msg_title").text("Login Required");
      $("#msg_body").empty();
      $("#msg_body").text(
        "You must sign-up and login before you can make an order."
      );
      temp =
        '<div class="text-end mt-3"><button data-bs-toggle="modal" data-bs-target="#md_login" class="px-2 py-1" style="font-weight:bold; background:#FFD600; border-radius:20px; width:100px; margin: 6px; border: none;"> Go to login</button></div>';

      $("#msg_body").append(temp);
      $("#md_msg_box").modal("show");
    } else {
      $("#msg_title").text("Add to Cart");
      $("#msg_body").empty();
      temp =
        'Enter Qty:<div><input type="number" min="1" class="form-control" id="txt_add_to_cart_qty"></div><div class="text-center mt-3"><button id="btn_confirm_add_to_cart" class="px-2 py-1" style="font-weight:bold; background:#FFD600; border-radius:20px; width:100px; margin: 6px; border: none;"> Add</button></div>';

      $("#msg_body").append(temp);
      $("#md_msg_box").modal("show");
      $("#btn_confirm_add_to_cart").attr("attr-id", $(this).attr("attr-id"));

      confirm_add_to_cart();
    }
  });
}

function confirm_add_to_cart() {
  $("#btn_confirm_add_to_cart").on("click", function () {
    $.ajax({
      type: "POST",
      url: "src/database/burger_shop/func/user/add_to_cart.php",
      data: {
        user_id: $("#txt_user_id").val(),
        product_id: $(this).attr("attr-id"),
        qty: $("#txt_add_to_cart_qty").val(),
      },
      success: function (data) {
        var d = JSON.parse(data);

        $("#msg_title").text("Add to Cart");
        $("#msg_body").text("Product added to cart successfully.");
        $("#md_msg_box").modal("show");

        $("#order_count").removeClass("d-none");
        $("#order_count").text(d.order_count);

        $("#txt_card_id").val(d.cart_id);
      },
    });
  });
}

$(".view_cart").on("click", function () {
  change_page("cart");
  load_cart_orders($("#txt_card_id").val());
});

function load_cart_orders(id) {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/user/read_cart_orders.php?id=" + id,
    success: function (data) {
      write_cart_orders(JSON.parse(data), id);
    },
  });
}
function write_cart_orders(data, id) {
  var output = "";
  var count = 0;
  var subtotal = 0;
  var delivery_fee = 0;
  var total = 0;
  $.each(data, function (key, val) {
    output +=
      '<tr> <td> <div class="mt-3 d-flex align-items-center ps-5 ms-5"> <i class="fa-solid fa-circle-minus h4 pe-3 icon_btn remove_from_cart" attr-id="' +
      val.id +
      '" title="Remove order" style="color: #F34336;"></i> <img src="' +
      val.picture +
      '" style="border-radius: 5px; width: 170px;"> <div> <p class="ps-3 m-0">' +
      val.name +
      '</p> <small class="pe-5 me-1">₱' +
      val.price +
      '</small> </div> </div> </td> <td> <p class="ps-2 mt-5 pt-2">' +
      val.qty +
      '</p> </td> <td style="background-color: white; border-radius: 2px;"> <p class="ps-2 m-0 mt-5 text-black">₱' +
      val.subtotal +
      "</p> </td> </tr>";
    count = val.order_count;
    subtotal = val.subtotal_all;
    delivery_fee = val.delivery_fee;
    total = val.total;
  });

  $("#txt_subtotal").empty();
  $("#txt_subtotal").append("₱" + subtotal);
  $("#txt_sub_total_payment").empty();
  $("#txt_sub_total_payment").append("₱" + subtotal);
  $("#txt_sub_total_payment").attr("attr-price", subtotal);

  $("#txt_total_payment").empty();
  $("#txt_total_payment").append("₱" + subtotal);
  $("input[name=payment]").val(subtotal);

  $("input[name=order_ref_no]").val(id);

  $("#txt_cart_order_count").val(count);

  $("#order_count").text(count);
  $("#tbl_cart_orders").empty();
  $("#tbl_cart_orders").append(output);

  $(".remove_from_cart").on("click", function () {
    $.ajax({
      type: "POST",
      url:
        "src/database/burger_shop/func/user/remove_from_cart.php?id=" +
        $(this).attr("attr-id"),
      success: function (data) {
        load_cart_orders($("#txt_card_id").val());
      },
    });
  });
}

$(".view_account").on("click", function () {
  $.ajax({
    type: "GET",
    url:
      "src/database/burger_shop/func/user/read_account_settings.php?id=" +
      $(this).attr("attr-id"),
    success: function (data) {
      write_account_details(JSON.parse(data));
    },
  });
});

function write_account_details(data) {
  $("#txt_view_username").val(data[0].username);
  $("#txt_view_name").val(data[0].name);
  $("#txt_view_email").val(data[0].email);
  $("#txt_view_password").val(data[0].password);
  $("#txt_view_phone").val(data[0].phone);
}

$("#btn_update_user_save").on("click", function () {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/user/update_account.php",
    data: {
      id: $("#txt_user_id").val(),
      username: $("#txt_view_username").val(),
      password: $("#txt_view_password").val(),
      name: $("#txt_view_name").val(),
      email: $("#txt_view_email").val(),
      phone: $("#txt_view_phone").val(),
    },
    success: function (data) {
      $("#msg_title").text("Update Account");
      $("#msg_body").text("Account updated successfully.");
      $("#md_msg_box").modal("show");
    },
  });
});

$("#btn_submit_fb").on("click", function () {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/user/add_feedback.php",
    data: {
      id: $("#txt_user_id").val(),
      feedback: $("#txt_feedback").val(),
    },
    success: function (data) {
      $("#msg_title").text("Feedback Submitted");
      $("#msg_body").text("Your feedback has been saved.");
      $("#md_msg_box").modal("show");
    },
  });
});

$("#btn_proceed_checkout").on("click", function () {
  load_locations();
  $("#txt_name_payment").css("pointer-events", "none");
});

function load_locations() {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/user/read_locations.php",
    success: function (data) {
      var output = "";
      output +=
        '<option value="" attr-price="0" selected readonly>Select Location</option>';
      $.each(JSON.parse(data), function (key, val) {
        output +=
          '<option value="' +
          val.id +
          '" attr-price="' +
          val.price +
          '">' +
          val.location +
          "</option>";
      });

      $("#txt_locations").empty();
      $("#txt_locations").append(output);
    },
  });
}

$(".payment_method").on("click", function () {
  $(".payment_method").prop("checked", false);
  $(this).prop("checked", true);

  if ($(this).attr("id") == "cashCheckbox") {
    $(".pay_via_gcash").addClass("d-none");
    payment_method = "cash";
  } else {
    $(".pay_via_gcash").removeClass("d-none");
    $("#txt_phone_no_payment").text("Gcash Sender Number");
    payment_method = "gcash";
  }
});

$("#txt_locations").on("change", function () {
  var total =
    parseInt($("option:selected", this).attr("attr-price")) +
    parseInt($("#txt_sub_total_payment").attr("attr-price"));
  $("input[name=delivery_fee]").val(
    $("option:selected", this).attr("attr-price")
  );
  $("#txt_delivery_fee_payment").empty();
  $("#txt_delivery_fee_payment").append(
    "₱" + $("option:selected", this).attr("attr-price")
  );
  $("#txt_total_payment").empty();
  $("#txt_total_payment").append("₱" + total);

  delivery_location = $(this).val();
});

$(".payment_requirement").on("click", function () {
  if (delivery_location && payment_method === "cash") {
  }
});

$("#btn_place_order").on("click", function () {
  if (!delivery_location) {
    $("#msg_title").text("Delivery Location Required");
    $("#msg_body").empty();

    $("#msg_body").text("Select delivery location!");

    $("#md_msg_box").modal("show");
  }

  if (!payment_method) {
    $("#msg_title").text("Payment Method Required");
    $("#msg_body").empty();

    $("#msg_body").text("Select payment method!");

    $("#md_msg_box").modal("show");
  }
});

$("form#form_check_out").submit(function (e) {
  e.preventDefault();
  var formData = new FormData(this);

  $.ajax({
    url: "src/database/burger_shop/func/user/add_check_out.php",
    type: "POST",
    data: formData,
    success: function (data) {
      if (data == 1) {
        $("#msg_title").text("Payment Success");
        $("#msg_body").empty();

        $("#msg_body").text(
          "Payment successful, you can track your order in My Order."
        );

        $("#md_msg_box").modal("show");
        $("#cartModal").modal("hide");
        $("#msg_box_close").unbind();
        $("#msg_box_close").on("click", function () {
          location.reload();
        });
      }
    },
    cache: false,
    contentType: false,
    processData: false,
  });
});

function load_my_orders() {
  $.ajax({
    type: "GET",
    url:
      "src/database/burger_shop/func/user/read_my_orders.php?id=" +
      $("#txt_user_id").val(),
    success: function (data) {
      write_my_orders(JSON.parse(data));
    },
  });
}
function write_my_orders(data) {
  var total = "";
  var ref_no = "";
  var payment_method = "";
  var delivery_fee = "";
  var output = "";
  var status = "";
  var temp_ref_no = "";
  var td = "";
  var orders = "";

  var rows = {};

  
  $.each(data, function (key, val) {

    !temp_ref_no ? (temp_ref_no = val.ref_no) : "";
    
   

    if (temp_ref_no == val.ref_no) {
        orders +=val.qty + "x" + " " + val.name + " <br>";

    } else {

       
       
      
        temp_ref_no = val.ref_no;
        orders = val.qty + "x" + " " + val.name + " <br>"
    }

    rows[temp_ref_no] = [orders,val.payment_method,val.status];

  });

  $.each(rows, function (key, val) {
    td += "<tr>";
    td += "<td>" + key + "</td>";
    td += "<td>" + val[0] +"</td>"
    td += "<td>" + val[1] + "</td>";
    td += "<td>" + val[2] + "</td>";
    td += "</tr>";
  })
  
  $("#tbl_my_orders tbody").empty();
  $("#tbl_my_orders tbody").append(td);
}

$(".view_my_orders").on("click", function () {
  change_page("my_orders");
  load_my_orders();
});

$("#txt_signup_password2").on("keyup", function () {
  if ($("#txt_signup_password").val() == $("#txt_signup_password2").val()) {
    $("#txt_signup_password").removeClass("border-danger");
    $("#txt_signup_password2").removeClass("border-danger");
    $('#div_password_validation').addClass('d-none')

    $('#btn_signup_submit').prop('disabled',false)

  }
  else{
    $("#txt_signup_password").addClass("border-danger");
    $("#txt_signup_password2").addClass("border-danger");
    $('#div_password_validation').removeClass('d-none')
    
    $('#btn_signup_submit').prop('disabled',true)

  }
  
});


$('.menuDropdown').on('click', function(){
    load_filtered_products($(this).attr('attr-name'))

    if($(this).attr('attr-name') == 'all'){
        $('#btn_filter_product').text('All Products')
    }
    
    if($(this).attr('attr-name') == 'sides'){
        $('#btn_filter_product').text('Side Dishes')
    }

    if($(this).attr('attr-name') == 'burger'){
        $('#btn_filter_product').text('Burgers')
    }

    if($(this).attr('attr-name') == 'drink'){
        $('#btn_filter_product').text('Drinks')
    }
    
})