function load_orders() {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/admin/read_orders.php",
    success: function (data) {
      write_tbl_order(JSON.parse(data));
    },
  });
}
function write_tbl_order(data) {
  output = "";
  $.each(data, function (key, val) {
    output += "<tr>";
    output += '<td class="text-center p-1">' + val.ref_no + "</td>";
    output += '<td class="text-center p-1">' + val.name + "</td>";
    output += '<td class="text-center p-1">' + val.phone + "</td>";
    output += '<td class="text-center p-1">' + val.status + "</td>";
    output +=
      '<td class="text-center p-1"><i class="fa-solid fa-eye icon_btn text-primary pe-1" onClick="view_order(' +
      val.ref_no +
      ')"></i>';
    output += "</td>";
    output += "</tr>";
  });

  $("#tbl_orders tbody").empty();
  $("#tbl_orders tbody").append(output);
}

function print_order() {
  var element = document.getElementById("div_to_print");
  var clonedElement = element.cloneNode(true);
  $(clonedElement).css("display", "block");

  html2pdf(clonedElement);
  clonedElement.remove();
}

function view_order(id) {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/admin/read_order_data.php?id=" + id,
    success: function (data) {
      output = "";
      $.each(JSON.parse(data).data, function (key, val) {
        output += "<tr>";
        output += '<td class="text-center p-1">' + val.name + "</td>";
        output += '<td class="text-center p-1">' + val.qty + "</td>";
        output += '<td class="text-center p-1">&#8369;' + val.price + "</td>";
        output += "</tr>";

        $('#btn_save_update_order').attr('attr-id', val.ref_no)

      });
      $.each(JSON.parse(data).total, function (key, val) {
        $("#txt_total").empty();
        $("#txt_total").append("&#8369;" + val.total);
      });
      

      $.each(JSON.parse(data).payment, function (key, val) {
        $("#txt_payment_method").val(val.payment_method);
        $("#txt_payment_amount").val("₱" + numberWithCommas(val.payment));
        $("#txt_payment_number").val( val.payment_details);
      });
      
      $("#tbl_view_order tbody").empty();
      $("#tbl_view_order tbody").append(output);
      $("#tbl_view_order_print tbody").empty();
      $("#tbl_view_order_print tbody").append(output);
      $("#md_view_order").modal("show");
      $('#btn_update_order').removeClass('d-none')

    },
  });
}

function view_order_paid(id) {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/admin/read_order_data.php?id=" + id,
    success: function (data) {
      output = "";
      $.each(JSON.parse(data).data, function (key, val) {
        output += "<tr>";
        output += '<td class="text-center p-1">' + val.name + "</td>";
        output += '<td class="text-center p-1">' + val.qty + "</td>";
        output += '<td class="text-center p-1">&#8369;' + val.price + "</td>";
        output += "</tr>";

        $('#btn_save_update_order').attr('attr-id', val.ref_no)

      });
      $.each(JSON.parse(data).total, function (key, val) {
        $("#txt_total").empty();
        $("#txt_total").append("&#8369;" + val.total);
      });
      $("#tbl_view_order tbody").empty();
      $("#tbl_view_order tbody").append(output);
      $("#tbl_view_order_print tbody").empty();
      $("#tbl_view_order_print tbody").append(output);
      $("#md_view_order").modal("show");
      $('#btn_update_order').addClass('d-none')
    },
  });
}

$('#btn_save_update_order').on('click', function(){
  $.ajax({
    type: "POST",
    url: 'src/database/burger_shop/func/admin/update_order.php',
    data:{
      id:$(this).attr('attr-id'),
      status:$('#sel_update_order_status').val()
    },
    success: function(data){
        load_orders()

        $('#msg_title').empty()
        $('#msg_title').append("Order Completed")
        $('#msg_body').empty()
        $('#msg_body').append("Transaction Completed Successfully.")

        $('#md_msg_box').modal('show')
        
    }
});
})