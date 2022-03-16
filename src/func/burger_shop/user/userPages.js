let page = {
    'viewMenu':'page_viewMenu',
    'btn_navbar_home':'page_home',
    'btn_navbar_contactUs':'page_contactUs', 
    'btn_transaction':'page_transaction',
    'btn_myPurchase':'page_myPurchase'
    
}

$(document).ready(function(){

})
function change_page(pagename){
    $('.page').addClass('d-none')
    $('#'+page[pagename]).removeClass('d-none')
}


// TEXT TYPING (Home page)
    var i = 0,
    text;
    text = " Otaku Burger House!"
    function typing() {
        if (i < text.length) {
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, 100);
        }
    }
    typing();

// TEXT TYPING (Home page)

// Carousel (Home page)
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        autoPlay: true
    });

    $('.bestSeller-carousel ').flickity({
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        autoPlay: true
    });

// Carousel (Home page)
