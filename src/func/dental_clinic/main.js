let pages = {
  login: "page_login",
  main_page: "page_main",
  dashboard: "page_dashboard",
  incoming_appointment: "page_incoming_appointment",
  laboratory_result: "page_laboratory_result",
  appointment: "page_appointment",
  update_account: "page_createAcc"
};

const weekday = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];

let selected_services = [];

// $(document).ready(function () {
//   if (!$("#txt_user_id").val()) {
//     change_page("login");
//   }else{
//     change_page("dashboard");
//   }
//   load_available_appointments();
// });


$(".services_btn").on("click", function () {
  var title = "";
  title = $(this).attr("attr-name");
  title = title.toUpperCase();

  $.ajax({
    type: "GET",
    url:
      "src/database/dental_clinic/func/user/read_service.php?category=" +
      $(this).attr("attr-name"),
    success: function (data) {
      var temp = Math.round(JSON.parse(data).length / 2);
      var count = 0;
      var output = '<div class="col-xl-6 col-12  text-muted ">';
      $.each(JSON.parse(data), function (key, val) {
        if (count == temp) {
          output += "</div>";
          output += '<div class="col-xl-6 col-12  text-muted ">';
        }

        if (selected_services.indexOf(val.id + "") !== -1) {
          output +=
            `
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input chk_service" value="` +
            val.id +
            `" checked id="srv_` +
            count +
            `">
                          <label class="custom-control-label" for="srv_` +
            count +
            `" style="font-size:9pt;"> ` +
            val.service +
            `</label>
                      </div>
                  `;
        } else {
          output +=
            `
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input chk_service" value="` +
            val.id +
            `" id="srv_` +
            count +
            `">
                              <label class="custom-control-label" for="srv_` +
            count +
            `" style="font-size:9pt;"> ` +
            val.service +
            `</label>
                          </div>
                      `;
        }

        count = count + 1;
      });

      output += "</div>";

      $("#div_md_services").empty();
      $("#div_md_services").append(output);

      $("#md_services").modal("show");

      $("#txt_md_service_title").text(title);

      $(".chk_service").unbind("click");
      $(".chk_service").on("click", function (key, val) {
        var val = $(this).val();
        if ($(this).prop("checked")) {
          if (!selected_services.includes($(this).val())) {
            selected_services.push($(this).val());
          }
        } else {
          selected_services = $.grep(selected_services, function (value) {
            return value != val;
          });
        }
      });
    },
  });
});

$("#md_make_appointment_book").on("click", function () {
  data = {
    availability_id: $(this).attr("attr-id"),
    user_id: $("#txt_user_id").val(),
    selected_services: selected_services,
  };
  $.post("src/database/dental_clinic/func/user/add_appointment.php", data).done(
    function (cb) {
      show_msg("Appointment Successfully Booked!", 1);
      load_available_appointments();
    }
  );
});

$('.btn_logout').on('click', function () {
  $.post("src/database/dental_clinic/func/logout.php").done(function () {
    location.reload();
  });
})

$('.btn_view_update_account').on('click', function(){
  load_user_account_details()
  change_page("update_account")
  
})

$("#btn_login").on("click", function () {
  $.ajax({
    type: "POST",
    url: "src/database/dental_clinic/func/login.php",
    data: {
      username: $("#txt_username").val(),
      password: $("#txt_password").val(),
    },
    success: function (data) {
      if (data == 0) {
        show_msg("Invalid Username / Password", 2);
      } else {
        change_page("dashboard");
        show_msg("Login Successful", 1);
        location.reload();

      }
    },
  });
});

$('#update_acc_bdate').on('change', function () {
  var age = calculate_age($(this).val());
  if (age > 5 && age < 65) {
    $('#update_acc_age').val(age)
  }
  else {
    show_msg("Invalid Birthdate", 2)
  }
}) 


$('#btn_update_account').on('click', function () {
  
  if ($('#update_acc_fname').val() && $('#txt_user_id').val() && $('#update_acc_province').val() && $('#update_acc_city').val() && $('#update_acc_age').val() && $('#update_acc_brgy').val() && $('#update_acc_street').val() && $('#update_acc_house').val()  && $('#update_acc_bdate').val() && $('#update_acc_lname').val() && $('#update_acc_bdate').val()) {
    var data = {
      f_name: $('#update_acc_fname').val(),
      m_name: $('#update_acc_mname').val(),
      l_name: $('#update_acc_lname').val(),
      bdate: $('#update_acc_bdate').val(),
      gender: $('input[name="update_acc_gender[]"]:checked').val(),
      house_no: $('#update_acc_house').val(),
      street: $('#update_acc_street').val(),
      brgy: $('#update_acc_brgy').val(),
      age: $('#update_acc_age').val(),
      city: $('#update_acc_city').val(),
      province: $('#update_acc_province').val(),
      user_id: $('#txt_user_id').val(),
      age: $('#update_acc_age').val(),
      bdate: $('#update_acc_bdate').val(),
      contact_no: $('#update_acc_contact').val(),
      uid: $('#update_acc_username').val(),
      pass: $('#update_acc_password').val(),
      email: $('#update_acc_email').val(),
    }

    $.post("src/database/dental_clinic/func/user/update_user_account.php", data, function () {
      show_msg("Account Updated Successfully.", 1)
    })

  }
  else{
    show_msg("Please fill-in required fields.", 2)
  }

})

$('#btn_submit').on('click', function(e) {
  e.preventDefault();

  if($('#txt_sign_up_uid').val() && $('#txt_sign_up_pass').val() && $('#txt_sign_up_email').val())
  {
    var data = {
      uid:$('#txt_sign_up_uid').val(),
      pass:$('#txt_sign_up_pass').val(),
      email:$('#txt_sign_up_email').val()
    }
    $.post("src/database/dental_clinic/func/user/add_user_account.php",data,function(){
      show_msg("Sign-up Successful!", 1)
    })
  }else{
    show_msg("Please fill-in required fields!", 2)
  }


})

$(".btn_view_dashboard").on("click", function () {
  change_page("dashboard");
});

$(".btn_view_incoming_appointments").on("click", function () {
  load_incoming_appointments();
  change_page("incoming_appointment");
});

$(".btn_view_laboratory_result").on("click", function () {
  load_lab_results()
  change_page("laboratory_result");
});

$("#btn_page11_back").on("click", function () {
  selected_services = [];
});

$(".btn_view_appointments").on("click", function () {
  load_appointments();
  change_page("appointment");
});

$(".btn_view_registeredPatient").on("click", function () {
  change_page("registeredPatient");
});

function load_incoming_appointments() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_incoming_appointments.php?user_id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_incoming_appointments(data);
    }
  );
}

function write_incoming_appointments(data) {
  var tbl_output = "";
  $.each(data, function (key, val) {
    tbl_output +=
      `
                          <tr style="font-size:12pt;">
                              <td class="data-title" data-title="APPOINTMENT ID"> <small class="text-black">` +
      val.id +
      `</small></td>
                              <td class="data-title" data-title="DATE"><small class="text-black">` +
      val.date_booked +
      `</small></td>
                              <td class="data-title" data-title="TIME"><small class="text-black">` +
      val.time +
      `</small></td>
                              <td class="data-title" data-title="DETAILS">
                                  <button class="text-white px-3 btn_view_appointment"
          attr-id="` +
      val.id +
      `"
          attr-physician="` +
      val.physician +
      `"
        attr-date="` +
      val.date_booked +
      `"
        attr-day="` +
      get_day(val.date_booked) +
      `"
        attr-time="` +
      val.time +
      `"
          style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">View</button>
              </td>
          </tr>`;
  });

  $("#tbl_incoming_appointments tbody").empty();
  $("#tbl_incoming_appointments tbody").append(tbl_output);

  $(".btn_view_appointment").on("click", function () {
    $('#badge_view_appointment_cancelled').addClass('d-none')
    $('#badge_view_appointment_completed').addClass('d-none')
    price = 0;
    output = "";

    $("#btn_cancel_appointment").attr("attr-id", $(this).attr("attr-id"));

    $("#md_view_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_view_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_view_appointment_txt_time").text($(this).attr("attr-time"));
    $("#md_view_appointment_txt_day").text($(this).attr("attr-day"));

    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_appointment_id.php?id=" +
      $(this).attr("attr-id"),
      function (data) {
        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                        </div>
  
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                            <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                        </div>
                    </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_view_appointment_services").empty();
        $("#div_view_appointment_services").append(output);

        output =
          `<div class="row border-top py-2">
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                          </div>
  
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                          </div>
                      </div>`;

        $("#div_view_appointment_services_total").empty();
        $("#div_view_appointment_services_total").append(output);
      }
    );

    $("#md_view_appointment").modal("show");

    $("#btn_cancel_appointment").removeClass("d-none");
    $("#div_view_appointment_buttons").addClass("text-center");
    $("#div_view_appointment_buttons").removeClass("text-end");

    $("#btn_cancel_appointment").on("click", function () {
      $.post(
        "src/database/dental_clinic/func/user/update_cancel_appointment.php",
        { id: $(this).attr("attr-id") },
        function () {
          load_incoming_appointments();
        }
      );
    });
  });
}

function load_appointments() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_appointments.php?user_id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_appointments(data);
    }
  );
}

function write_appointments(data) {

  output = "";
  $.each(data, function (key, val) {
    output +=
      `
                    <tr  style="font-size:12pt;">
                        <td class="data-title" data-title="APPOINTMENT ID"> <small class=" text-black">` +
      val.id +
      `</small></td>
                        <td class="data-title" data-title="DATE"><small class=" text-black">` +
      val.date_booked +
      `</small></td>
                        <td class="data-title" data-title="TIME"><small class=" text-black">` +
      val.time +
      `</small></td>
                        <td class="data-title" data-title="">
                            <button class=" px-3 text-white btn_appointments_view" attr-id="` +
      val.id +
      `" attr-physician="` +
      val.physician +
      `"
        attr-day ="` +
      get_day(val.date_booked) +
      `"
      attr-status ="` +
      val.status +
      `"
      attr-date="` +
      val.date_booked +
      `" attr-time="` +
      val.time +
      `"   style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">View</button>
                        </td>
                    </tr>
                `;
  });

  $("#tbl_appointments tbody").empty();
  $("#tbl_appointments tbody").append(output);
  $("#txt_search_appointments").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#tbl_appointments tbody tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  $(".btn_appointments_view").unbind('click')

  $(".btn_appointments_view").on("click", function () {
    $("#md_view_appointment").modal("show");
    $("#btn_cancel_appointment").addClass("d-none");
    $("#div_view_appointment_buttons").removeClass("text-center");
    $("#div_view_appointment_buttons").addClass("text-end");

    $("#md_view_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_view_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_view_appointment_txt_time").text($(this).attr("attr-time"));
    $("#md_view_appointment_txt_day").text($(this).attr("attr-day"));

    $(this).attr("attr-status") == "cancelled"
      ? $("#badge_view_appointment_cancelled").removeClass("d-none")
      : $("#badge_view_appointment_cancelled").addClass("d-none");

    $(this).attr("attr-status") == "completed"
      ? $("#badge_view_appointment_completed").removeClass("d-none")
      : $("#badge_view_appointment_completed").addClass("d-none");

    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_appointment_id.php?id=" +
      $(this).attr("attr-id"),
      function (data) {
        output = "";
        price = 0;

        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                              <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                          </div>

                          <div class="col-6 mb-0 pb-0">
                              <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                              <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                          </div>
                      </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_view_appointment_services").empty();
        $("#div_view_appointment_services").append(output);

        output =
          `<div class="row border-top py-2">
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                            </div>

                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                            </div>
                        </div>`;

        $("#div_view_appointment_services_total").empty();
        $("#div_view_appointment_services_total").append(output);
      }
    );
  });
}

function load_lab_results() {
  $.getJSON(
    "src/database/dental_clinic/func/user/read_lab_results.php?id=" +
    $("#txt_user_id").val(),
    function (data) {
      write_lab_results(data);
    }
  );
}

function write_lab_results(data) {
  var output = ''
  $.each(data, function (key, val) {
    output = `
              <div class="text-center icon_btn">
                  <a href="download_result.php?file=`+ val.dir + `" >
                  <img class="" src="src/resources/img/labResult.png" style="width: 70px;" data-bs-toggle="modal" data-bs-target="#labResult">
                  <br><span style="font-size:9pt;">`+ val.dir.toUpperCase() + ` Result</span>
                  </a>
              </div>
    `;
  })

  $('#div_lab_results').empty()
  $('#div_lab_results').append(output)
}


function show_msg(msg, icon) {
  if (icon == 1) {
    $("#icon_1").removeClass("d-none");
    $("#icon_2").addClass("d-none");
  } else {
    $("#icon_1").addClass("d-none");
    $("#icon_2").removeClass("d-none");
  }
  $("#msg_body").text(msg);
  $("#md_msg_box").modal("show");
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

function change_page(pagename) {
  $(".page").addClass("d-none");
  $("#" + pages[pagename]).removeClass("d-none");
}

function load_available_appointments() {
  $.ajax({
    type: "GET",
    url: "src/database/dental_clinic/func/user/read_available_appointments.php",
    success: function (data) {
      write_available_appointments(data);
    },
  });
}

function write_available_appointments(data) {
  output = "";
  $.each(JSON.parse(data), function (key, val) {
    output +=
      `
              <tr>
                  <td class="data-title" data-title="DATE"> <small class="h6 text-black">` +
      val.date +
      `</small></td>
                  <td class="data-title" data-title="SERVICES"><small class="h6 text-black">` +
      val.services +
      `</small></td>
                  <td class="data-title" data-title="TIME"><small class="h6 text-black">` +
      val.time +
      `</small></td>
                  <td class="data-title" data-title="SLOT"><small class="h6 text-black">` +
      val.slot +
      `</small></td>
                  <td class="data-title" data-title="ACTION">
                      <button class="text-white btn_style_1 btn_get_appointment" 
                      attr-id="` +
      val.id +
      `" 
                      attr-date="` +
      val.date +
      `"
                      attr-day="` +
      get_day(val.date) +
      `"
                      attr-time="` +
      val.time +
      `" >Get Appointment</button>
                  </td>
              </tr>`;
  });

  $("#tbl_available_appointments tbody").empty();
  $("#tbl_available_appointments tbody").append(output);

  $(".btn_get_appointment").on("click", function () {
    compile_selected_services();
    $("#md_make_appointment").modal("show");
    $("#md_make_appointment_book").attr("attr-id", $(this).attr("attr-id"));
    $("#md_make_appointment_txt_physician").text(
      $(this).attr("attr-physician")
    );
    $("#md_make_appointment_txt_date").text($(this).attr("attr-date"));
    $("#md_make_appointment_txt_day").text($(this).attr("attr-day"));
    $("#md_make_appointment_txt_time").text($(this).attr("attr-time"));
  });
}

function get_day(date) {
  const d = new Date(date);
  let day = d.getDay();
  return weekday[day];
}

function compile_selected_services() {
  var output = "";
  var price = 0;

  if (selected_services.length > 0) {
    $.getJSON(
      "src/database/dental_clinic/func/user/read_selected_services_by_id.php?id=" +
      JSON.stringify(selected_services),
      function (data) {
        $.each(data, function (key, val) {
          output +=
            `<div class="row border-top py-2">
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Service : </label><br>
                            <label class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </label>
                        </div>
        
                        <div class="col-6 mb-0 pb-0">
                            <label class="text-black text-muted" style="font-size: 12px;">` +
            val.service +
            `</label><br>
                            <label class="text-black text-muted" style="font-size: 12px;">₱` +
            val.price +
            `</label>
                        </div>
                    </div>`;

          price = parseInt(price) + parseInt(val.price);
        });

        $("#div_selected_services").empty();
        $("#div_selected_services").append(output);

        output =
          `<div class="row border-top py-2">
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black" style="font-weight: bold; font-size: 12px;">Total Amount : </label>
                            </div>
        
                            <div class="col-6 mb-0 pb-0">
                                <label class="text-black text-muted" style="font-size: 12px;">₱` +
          price +
          `</label>
                            </div>
                        </div>`;

        $("#div_selected_services_total").empty();
        $("#div_selected_services_total").append(output);
      }
    );
  } else {
    output = `<small class="text-muted m-3 my-5">Please select a service.</small>`;
    $("#div_selected_services_total").empty();
    $("#div_selected_services").empty();
    $("#div_selected_services").append(output);
  }
}

function calculate_age(dob) {
  dob = new Date(dob);
  var today = new Date();
  var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
  return age;
}

function load_user_account_details(){
  $.getJSON("src/database/dental_clinic/func/user/read_user_profile.php?id="+$('#txt_user_id').val(), function(data){
    $.each(data, function(key, val){
      $('#update_acc_fname').val(val.f_name)
      $('#update_acc_mname').val(val.m_name)
      $('#update_acc_lname').val(val.l_name)
      $('#update_acc_bdate').val(val.bdate)
      $('#update_acc_age').val(val.age)
      $('#update_acc_house').val(val.house_no)
      $('#update_acc_street').val(val.street)
      $('#update_acc_brgy').val(val.brgy)
      $('#update_acc_city').val(val.city)
      $('#update_acc_province').val(val.province)
      $('#update_acc_contact').val(val.contact_no)
      $('#update_acc_username').val(val.uid)
      $('#update_acc_password').val(val.pass)
      $('#update_acc_email').val(val.email)

      if(val.gender == "male"){
        $("#update_acc_gender_male").prop("checked", true)
      }else{
        $("#update_acc_gender_female").prop("checked", true)
      }
    })
  })
}