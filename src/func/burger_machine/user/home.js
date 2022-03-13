function load_products(){
    $.ajax({
        type: "GET",
        url: 'src/database/burger_machine/func/user/read_products.php',
        success: function(data){
            write_products(JSON.parse(data))
        }
    });
}
function write_products(data){

    output = '';
    output += '<div class="card-carousel" data-flickity=\'{ "autoPlay": true }\' >';
    $.each(data, function(key, val){
        output += '<div class="userOrder-card cell-card mt-3">'
        output += '<img src="'+val.picture+'">';
        output += '<div class="description">'
        output += '<h5 id="text" style="letter-spacing: 3px;">'+val.name+'</h5>';
        output += '<p>'+val.price+'</p>';
        output += '<a href="#"><button style="font-weight:bold; background:#FFD600; border-radius:25px; width:150px; height: 40px; border: none;">Buy</button></a></div></div>';
    })

    output += '</div>';

    $('#div_products').empty()
    $('#div_products').append(output)
    $('.card-carousel').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        autoPlay: true
    });

}