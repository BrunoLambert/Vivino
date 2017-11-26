
$('.price_range').jRange({
    from: 0,
    to: 1500,
    step: 10,
    format: 'R$ %s',
    showLabels: true,
    isRange : true,
    theme: 'theme-wine'
});
function filterProducts() {
    var price_range = $('.price_range').val();
    $.ajax({
        type: 'POST',
        url: 'views/index/getProducts.php',
        data:'price_range='+price_range,
        beforeSend: function () {
            $('.container').css("opacity", ".5");
        },
        success: function (html) {
            $('#productContainer').html(html);
            $('.container').css("opacity", "");
        }
    });
}