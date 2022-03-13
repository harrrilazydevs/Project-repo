function load_feedbacks(){
    $.ajax({
        type: "GET",
        url: 'src/database/burger_machine/func/read_feedbacks.php',
        success: function(data){
            console.log(JSON.parse(data))
            write_tbl_feedback(JSON.parse(data))
        }
    });
}
function write_tbl_feedback(data){
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

function delete_feedback(id){
    $.ajax({
        type: "POST",
        url: 'src/database/burger_machine/func/delete_feedback.php?id='+id,
        success: function(data){
            load_feedbacks()
        }
    });

}