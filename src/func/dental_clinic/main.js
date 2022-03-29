let pages = {
  login: "page_login",
  main_page : "page_main",
  dashboard : "page_dashboard",
  incoming_appointment : "page_incoming_appointment",
  laboratory_result : "page_laboratory_result",
  appointment : "page_appointment",
};

let selected_services = [];


$(document).ready(function () {
//   if (!$("#txt_user_id").val()) {
//     change_page("login");
//   }

  load_available_appointments()
});

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

function show_msg(msg, icon) {
  if(icon == 1)
  {
    $('#icon_1').removeClass('d-none')
    $('#icon_2').addClass('d-none')
  }else{
    $('#icon_1').addClass('d-none')
    $('#icon_2').removeClass('d-none')
  }

  $("#msg_body").text(msg);
  $("#md_msg_box").modal("show");
}

$("#btn_login").on("click", function () {

  $.ajax({
    type: "POST",
    url: "src/database/burger_shop/func/login.php",
    data:{
        username: $("#txt_username").val(),
        password: $("#txt_password").val()
    },
    success: function (data) {
        if(data == 0){
            show_msg("Invalid Username / Password",2)
        }else{
            show_msg("Login Successful",1)
            change_page('main_page')
        }
    
  
    },
  });
});


$('.btn_view_dashboard').on('click', function(){
    change_page('dashboard')
})

$('.btn_view_incoming_appointments').on('click', function(){
    change_page('incoming_appointment')
})

$('.btn_view_laboratory_result').on('click', function(){
    change_page('laboratory_result')
})

$('.btn_view_appointments').on('click', function(){
    change_page('appointment')
})
$('.btn_view_registeredPatient').on('click', function(){
    change_page('registeredPatient')
})


$('.services_btn').on('click',function(){

    var title = '';
    title = $(this).attr('attr-name')
    title = title.toUpperCase()

    $.ajax({
        type: "GET",
        url:"src/database/dental_clinic/func/user/read_service.php?category=" + $(this).attr('attr-name'),
        success: function (data) {


            var temp = Math.round(JSON.parse(data).length / 2)
            var count = 0;
            var output = '<div class="col-xl-6 col-12  text-muted ">';
            $.each(JSON.parse(data), function(key,val){

                if(count == temp){
                    output += '</div>'  
                    output += '<div class="col-xl-6 col-12  text-muted ">'
                }

                if(selected_services.indexOf(val.id+'') !== -1 ){
                    output += `
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input chk_service" value="`+val.id+`" checked id="srv_`+count+`">
                        <label class="custom-control-label" for="srv_`+count+`" style="font-size:9pt;"> `+val.service+`</label>
                    </div>
                `;
                }
                else{
                    output += `
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input chk_service" value="`+val.id+`" id="srv_`+count+`">
                            <label class="custom-control-label" for="srv_`+count+`" style="font-size:9pt;"> `+val.service+`</label>
                        </div>
                    `;
                }
               
              
                
                count = count + 1;
            })

            output += '</div>'

            $('#div_md_services').empty()
            $('#div_md_services').append(output)

            $("#txt_md_service_title").text(title)
            $('#md_services').modal('show')

            $('.chk_service').unbind('click')
            $('.chk_service').on('click',function(key, val){
                if(!selected_services.includes($(this).val())){
                    selected_services.push($(this).val())
                }

              
            })  

        },
    });
})


function load_available_appointments(){
    $.ajax({
        type: "GET",
        url:"src/database/dental_clinic/func/user/read_available_appointments.php",
        success: function (data) {
            write_available_appointments(data)
        }
    })
}

function write_available_appointments(data){
    output = '';
    $.each(JSON.parse(data),function(key,val){
        output += `
            <tr>
                <td class="data-title" data-title="DATE"> <small class="h6 text-black">`+val.date+`</small></td>
                <td class="data-title" data-title="SERVICES"><small class="h6 text-black">`+val.services+`</small></td>
                <td class="data-title" data-title="TIME"><small class="h6 text-black">`+val.time+`</small></td>
                <td class="data-title" data-title="SLOT"><small class="h6 text-black">`+val.slot+`</small></td>
                <td class="data-title" data-title="ACTION">
                    <button class="text-white btn_style_1 btn_get_appointment" attr-id="`+val.id+`" >Get Appointment</button>
                </td>
            </tr>
        `
    })

    $('#tbl_available_appointments tbody').empty()
    $('#tbl_available_appointments tbody').append(output)

    $('.btn_get_appointment').on('click', function(){
        $('#md_make_appointment').modal('show')
    })
}

