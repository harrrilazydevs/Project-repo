function load_products() {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/admin/read_products.php",
    success: function (data) {
      write_tbl_products(JSON.parse(data));
    },
  });
}
function write_tbl_products(data) {
  output = "";
  var count = 1;
  $.each(data, function (key, val) {
    output += "<tr>";
    output += '<td class="text-center p-1">' + count + "</td>";
    output += '<td class="text-center p-1">' + val.name + "</td>";
    output += '<td class="text-center p-1"><img src="' + val.picture + '" style="height:250px; width:230px;"</td>';
    output += '<td class="text-center p-1">' + val.category + "</td>";
    output += '<td class="text-center p-1">' + val.price + "</td>";
    output +=
      '<td class="text-center p-1"><i class="fa-solid text-danger fa-trash-can icon_btn text-primary pe-1" onClick="delete_product(' +
      val.id +
      ')"></i>';
    output += "</td>";
    output += "</tr>";
    count = count+1
  });

  $("#tbl_products tbody").empty();
  $("#tbl_products tbody").append(output);
}

function delete_product(id) {
  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/admin/delete_product.php",
    data: {
      id:id
    },
    success: function (data) {
        $('#msg_title').empty()
        $('#msg_title').append("Product Deleted")
        $('#msg_body').empty()
        $('#msg_body').append("Product has been deleted to database successfully.")

        $('#md_msg_box').modal('show')
      load_products()
    },
  });
}

// function view_products(id) {
//   $.ajax({
//     type: "GET",
//     url: "src/database/burger_shop/func/admin/read_products_data.php?id=" + id,
//     success: function (data) {
//       output = "";
//       $.each(JSON.parse(data).data, function (key, val) {
//         output += "<tr>";
//         output += '<td class="text-center p-1">' + val.name + "</td>";
//         output += '<td class="text-center p-1">' + val.qty + "</td>";
//         output += '<td class="text-center p-1">&#8369;' + val.price + "</td>";
//         output += "</tr>";

//         $('#btn_save_update_products').attr('attr-id', val.ref_no)

//       });
//       $.each(JSON.parse(data).total, function (key, val) {
//         $("#txt_total").empty();
//         $("#txt_total").append("&#8369;" + val.total);
//       });
      

//       $.each(JSON.parse(data).payment, function (key, val) {
//         $("#txt_payment_method").val(val.payment_method);
//         $("#txt_payment_amount").val("₱" + numberWithCommas(val.payment));
//         $("#txt_payment_number").val( val.payment_details);
//       });
      
//       $("#tbl_view_products tbody").empty();
//       $("#tbl_view_products tbody").append(output);
//       $("#tbl_view_products_print tbody").empty();
//       $("#tbl_view_products_print tbody").append(output);
//       $("#md_view_products").modal("show");
//       $('#btn_update_products').removeClass('d-none')

//     },
//   });
// }

// function view_products_paid(id) {
//   $.ajax({
//     type: "GET",
//     url: "src/database/burger_shop/func/admin/read_products_data.php?id=" + id,
//     success: function (data) {
//       output = "";
//       $.each(JSON.parse(data).data, function (key, val) {
//         output += "<tr>";
//         output += '<td class="text-center p-1">' + val.name + "</td>";
//         output += '<td class="text-center p-1">' + val.qty + "</td>";
//         output += '<td class="text-center p-1">&#8369;' + val.price + "</td>";
//         output += "</tr>";

//         $('#btn_save_update_products').attr('attr-id', val.ref_no)

//       });
//       $.each(JSON.parse(data).total, function (key, val) {
//         $("#txt_total").empty();
//         $("#txt_total").append("&#8369;" + val.total);
//       });
//       $("#tbl_view_products tbody").empty();
//       $("#tbl_view_products tbody").append(output);
//       $("#tbl_view_products_print tbody").empty();
//       $("#tbl_view_products_print tbody").append(output);
//       $("#md_view_products").modal("show");
//       $('#btn_update_products').addClass('d-none')
//     },
//   });
// }

// $('#btn_save_update_products').on('click', function(){
//   $.ajax({
//     type: "POST",
//     url: 'src/database/burger_shop/func/admin/update_products.php',
//     data:{
//       id:$(this).attr('attr-id'),
//       status:$('#sel_update_products_status').val()
//     },
//     success: function(data){
//         load_products()

//         $('#msg_title').empty()
//         $('#msg_title').append("products Completed")
//         $('#msg_body').empty()
//         $('#msg_body').append("Transaction Completed Successfully.")

//         $('#md_msg_box').modal('show')
        
//     }
// });
// })