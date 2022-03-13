let pages = {
    'feedback':'page_feedback',
    'order': 'page_order',
    'inventory': 'page_inventory',
    'dashboard': 'page_dashboard',
}


$(document).ready(function(){

    if($('#txt_user_access').val() == 'admin')
    {
        // ADMIN
        load_feedbacks()

        $('#btn_account_settings').on('click', function(){
            load_account_settings($('#txt_user_id').val())
        })

        $('#btn_delete_account').on('click', function(){
            delete_account($('#txt_user_id').val())
        })

        $('#btn_update_account').on('click', function(){
            update_account($('#txt_user_id').val())
        })
    }
    else{


        // USER
        load_products()

    }
   











   



})


function change_page(pagename){
    $('.page').addClass('d-none')
    $('#'+pages[pagename]).removeClass('d-none')
}

function load_account_settings(id){
    $.ajax({
        type: "GET",
        url: 'src/database/burger_shop/func/admin/read_account_settings.php?id='+id,
        success: function(data){
            write_account_settings(JSON.parse(data))
        }
    });
}
function write_account_settings(data){
    $.each(data, function(key,val){
        $('#txt_username').val(val.username)
        $('#txt_email').val(val.email)
        $('#txt_password').val(val.password)
        $('#sel_access_level').val(val.access_level)
    })
}
function delete_account(id){
    $.ajax({
        type: "POST",
        url: 'src/database/burger_shop/func/admin/delete_account.php?id='+id,
        success: function(data){
            alert('Account deleted successfully.')
        }
    });
}
function update_account(id){
    $.ajax({
        type: "POST",
        data:{
            username:$('#txt_username').val(),
            email:$('#txt_email').val(),
            password:$('#txt_password').val(),
            access_level:$('#sel_access_level').val(),
        },
        url: 'src/database/burger_shop/func/admin/update_account.php?id='+id,
        success: function(data){
            alert('Account updated successfully.')
        }
    });
}