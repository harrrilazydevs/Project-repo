// <-------------VIEWMENU -------------->

// <-------------VIEWMENU -------------->

// <-------------NAVBAR -------------->
$("#btn_navbar_home").on("click", function () {
  change_page("btn_navbar_home");
});

$("#btn_navbar_contactUs").on("click", function () {
  if ($("#txt_user_id").val()) {
    change_page("btn_navbar_contactUs");
  }
  else{
    $('#msg_title').text('Login Required')
    $('#msg_body').text('Login required!')
    $('#md_msg_box').modal('show')
  }
});

$("#btn_myPurchase").on("click", function () {
  // TEST FUNC PANGLIPAT
  change_page("btn_myPurchase");
});
$("#btn_transaction").on("click", function () {
  // TEST FUNC PANGLIPAT
  change_page("btn_transaction");
});
// <-------------NAVBAR -------------->
