let pages = {
    'feedback':'page_feedback',
    'order': 'page_order',
    'inventory': 'page_inventory',
}


$(document).ready(function(){
    // ADMIN
    load_feedbacks()

    // USER



})


function change_page(pagename){
    $('.page').addClass('d-none')
    $('#'+pages[pagename]).removeClass('d-none')
}