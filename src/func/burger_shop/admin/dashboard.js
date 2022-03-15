function load_filter_dates(){
    $.ajax({
        type: "GET",
        url: 'src/database/burger_shop/func/admin/read_feedbacks.php',
        success: function(data){
            write_filter_dates(JSON.parse(data))
        }
    });
}
function write_filter_dates(data){
    output = '';
    $.each(data,function(key,val){
        output += '<tr>'
        output += '<td class="text-center p-1">'+val.name+'</td>'
        output += '<td class="text-center p-1">'+val.email+'</td>'
        output += '<td class="text-center p-1">'+val.phone+'</td>'
        output += '<td class="text-center p-1">'+val.feedback+'</td>'
        output += '<td class="text-center p-1"><i class="fa-solid fa-trash-can icon_btn text-danger" onClick="delete_feedback('+val.id+')"></i></td>'
        output += '</tr>'
    })
    
    $('#tbl_feedbacks tbody').empty()
    $('#tbl_feedbacks tbody').append(output)
}