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
      $('#btn_save_update_order').attr('attr-id', id)
    },
  });
}

$('#btn_save_update_order').on('click', function(){
  $.ajax({
    type: "POST",
    url: 'src/database/burger_shop/func/admin/update_order.php',
    data:{
      id:$(this).attr('id'),
      status:$('#sel_update_order_status').val()
    },
    success: function(data){
        load_feedbacks()
    }
});
})