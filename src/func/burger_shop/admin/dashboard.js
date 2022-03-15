function load_filter_dates() {
  $.ajax({
    type: "GET",
    url: "src/database/burger_shop/func/admin/read_dashboard_date_filter.php",
    success: function (data) {
      write_filter_dates(JSON.parse(data));
    },
  });
}
function write_filter_dates(data) {
  output = "";
  $.each(data, function (key, val) {
    output += '<option value="' + val + '">' + val + "</option>";
  });

  $("#sel_date_filter").empty();
  $("#sel_date_filter").append(output);
}

function load_dashboard_information(date) {
  $.ajax({
    type: "GET",
    url:
      "src/database/burger_shop/func/admin/read_dashboard_information.php?date=" +
      date,
    success: function (data) {
      var tbl_output = "";
      var count = 1;

      $("#txt_total_annual_sales").text("₱ 0");


      $.each(JSON.parse(data), function (key, val) {
          console.log(val)
        $("#txt_total_registered_users").text(val.total_user);
        $("#txt_total_completed").text(val.total_completed);
        $("#txt_total_orders").text(val.total_order);

        if(val.annual_sale > 0)
        {
            $("#txt_total_annual_sales").text("₱ " + val.annual_sale);
            monthly_sale = parseInt(val.annual_sale) / 12;
            monthly_sale = Math.round(monthly_sale);
            $("#txt_total_monthly_sales").text("₱ " + monthly_sale);
        }


        if (val.top_sellers) {
          $.each(val.top_sellers, function (key, valx) {
            tbl_output += "<tr>";
            tbl_output += '<td class="text-center">' + count + "</td>";
            tbl_output +=
              '<td class="text-center">' + valx.top_seller + "</td>";
            tbl_output +=
              '<td class="text-center">' + valx.top_seller_count + "</td>";
            tbl_output += "</tr>";
            count = count + 1;
          });
        }
      });

      $("#tbl_dashboard_top_selling_products tbody").empty();
      $("#tbl_dashboard_top_selling_products tbody").append(tbl_output);
    },
  });
}

$("#sel_date_filter").on("change", function () {
  load_dashboard_information($(this).val());
});
