$(document).ready(function() {
    // FILTER
    $(".woman").addClass("highlighted");

    $("#filters").on("click", "#all-filter", function() {
        $(".pvz").addClass("highlighted");
    });

    $("#filters").on("click", "#woman-filter", function() {
        $(".highlighted").removeClass("highlighted");
        $(".pvz").filter(".woman").addClass("highlighted");

    })

    $("#filters").on("click", "#men-filter", function() {
        $(".highlighted").removeClass("highlighted");
        $(".pvz").filter(".men").addClass("highlighted");
    });

    // GALLERY
    jQuery('.image-gallery').magnificPopup({
        delegate: '.item a',
        type: 'image'
    });
    new WOW().init();

});