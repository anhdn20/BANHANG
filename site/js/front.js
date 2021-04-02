$(function () {

    $('.shop-detail-carousel').owlCarousel({
        items: 1,
        thumbs: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        thumbsPrerendered: true
    });


    $('#main-slider').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        dotsSpeed: 400
    });


    $('#get-inspired').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        dotsSpeed: 400
    });


    $('.product-slider').owlCarousel({
        items: 1,
        dots: true,
        nav: false,margin: 40,
        responsive: {
            480: {
                items: 1
            },
            765: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });





    // productDetailGallery(4000);
    utils();

    // ------------------------------------------------------ //
    // For demo purposes, can be deleted
    // ------------------------------------------------------ //

    var stylesheet = $('link#theme-stylesheet');
    $("<link id='new-stylesheet' rel='stylesheet'>").insertAfter(stylesheet);
    var alternateColour = $('link#new-stylesheet');

    if ($.cookie("theme_csspath")) {
        alternateColour.attr("href", $.cookie("theme_csspath"));
    }

    $("#colour").change(function () {

        if ($(this).val() !== '') {

            var theme_csspath = 'css/style.' + $(this).val() + '.css';

            alternateColour.attr("href", theme_csspath);

            $.cookie("theme_csspath", theme_csspath, {
                expires: 365,
                path: document.URL.substr(0, document.URL.lastIndexOf('/'))
            });

        }

        return false;
    });

});



$(window).on('load', function () {
    $(this).alignElementsSameHeight();
});

$(window).resize(function () {
    setTimeout(function () {
        $(this).alignElementsSameHeight();
    }, 150);
});


/* product detail gallery */

// function productDetailGallery(confDetailSwitch) {
//     $('.thumb:first').addClass('active');
//     timer = setInterval(autoSwitch, confDetailSwitch);
//     $(".thumb").click(function(e) {
//
// 	switchImage($(this));
// 	clearInterval(timer);
// 	timer = setInterval(autoSwitch, confDetailSwitch);
// 	e.preventDefault();
//     }
//     );
//     $('#mainImage').hover(function() {
// 	clearInterval(timer);
//     }, function() {
// 	timer = setInterval(autoSwitch, confDetailSwitch);
//     });
//
//     function autoSwitch() {
// 	var nextThumb = $('.thumb.active').closest('div').next('div').find('.thumb');
// 	if (nextThumb.length == 0) {
// 	    nextThumb = $('.thumb:first');
// 	}
// 	switchImage(nextThumb);
//     }
//
//     function switchImage(thumb) {
//
// 	$('.thumb').removeClass('active');
// 	var bigUrl = thumb.attr('href');
// 	thumb.addClass('active');
// 	$('#mainImage img').attr('src', bigUrl);
//     }
// }

function utils() {


    /* click on the box activates the radio */

    $('#checkout').on('click', '.box.shipping-method, .box.payment-method', function (e) {
        var radio = $(this).find(':radio');
        radio.prop('checked', true);
    });
    /* click on the box activates the link in it */

    $('.box.clickable').on('click', function (e) {

        window.location = $(this).find('a').attr('href');
    });
    /* external links in new window*/

    $('.external').on('click', function (e) {

        e.preventDefault();
        window.open($(this).attr("href"));
    });
    /* animated scrolling */

    $('.scroll-to, .scroll-to-top').click(function (event) {

        var full_url = this.href;
        var parts = full_url.split("#");
        if (parts.length > 1) {

            scrollTo(full_url);
            event.preventDefault();
        }
    });

    function scrollTo(full_url) {
        var parts = full_url.split("#");
        var trgt = parts[1];
        var target_offset = $("#" + trgt).offset();
        var target_top = target_offset.top - 100;
        if (target_top < 0) {
            target_top = 0;
        }

        $('html, body').animate({
            scrollTop: target_top
        }, 1000);
    }
}


$.fn.alignElementsSameHeight = function () {
    $('.same-height-row').each(function () {

        var maxHeight = 0;

        var children = $(this).find('.same-height');

        children.height('auto');

        if ($(document).width() > 768) {
            children.each(function () {
                if ($(this).innerHeight() > maxHeight) {
                    maxHeight = $(this).innerHeight();
                }
            });

            children.innerHeight(maxHeight);
        }

        maxHeight = 0;
        children = $(this).find('.same-height-always');

        children.height('auto');

        children.each(function () {
            if ($(this).innerHeight() > maxHeight) {
                maxHeight = $(this).innerHeight();
            }
        });

        children.innerHeight(maxHeight);

    });



}

$(document).ready(function() {

    // $("#alert_add_success").hide();
    // $("#add_cart").click(function(){
        if($("#alert_add_success").css("opacity") == "1"){
            setTimeout(function (){
                $("#alert_add_success").css("opacity","0");
            }, 2000);
        }
        // $("#alert_add_success").show();
    // });


});
//ajax filter
$(document).ready(function(){
    var page = $('#offset').val();
    filter_data(page);

    function filter_data(page)
    {
        var action = 'fetch_data';
        var sort_by = $('#sort_by').val();
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');

            $.ajax({
                url:"views/fetch_data.php",
                method:"POST",
                data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, offset:page, key: sort_by},
                success:function(data){
                    $('.filter_data').html(data);
                }
            });

    }
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data(page);
    });
    $('#hidden_maximum_price').change(function(){
        let oke = $('#hidden_maximum_price').val();
        $('#SHOW_PRICE_FILTER').text(oke + "đ");
            filter_data();
    });
    $('#sort_by').change(function(){
        let oke = $('#sort_by').val();

        // $('#SHOW_PRICE_FILTER').text(oke + "đ");
        filter_data();
    });


});
//ajax dang nhap
// $(document).ready(function () {
//     $("#dangnhap_ajax").click(function () {
//         var username = $('#user-name').val();
//         var pass = $('#pass').val();
//         $.ajax({
//             url: "views/dangnhap.php",
//             data: {username: username, pass:pass},
//             method: "post",
//             success: function (data) {
//
//
//                 if($("#check_form_dangnhap")  ){
//                     $("#check_form_dangnhap").html(data);
//                 }else{
//                     setTimeout(function(){
//                         window.location.href = "?ctrl=home";
//                         }, 1000);
//                 }
//             }
//         });
//
//     });
//
// });
$(document).ready(function(e) {

    var inc = document.getElementsByClassName("inc");
    var dec = document.getElementsByClassName("dec");
    var quantity = document.getElementsByClassName("quantity");
    //tăng số lượng
    for(let i = 0; i < inc.length; i++){
        inc[i].addEventListener('click',()=>{
                var qua =  $(".quantity");
                qua = parseInt(qua[i].value);
                qua += 1;
                quantity[i].value = qua;


        })
    }
    //giảm số lượng
    for(let i = 0; i < dec.length; i++){
        dec[i].addEventListener('click',()=>{
            var qua =  $(".quantity");
            qua = parseInt(qua[i].value);

            if (qua == 1) {
                qua == 1;
            } else {
                qua = qua - 1;

                quantity[i].value = qua;
            }


        })
    }




});
$(document).ready(function(){
    //    check_match_doi_mk
    $('#verify_MK_moi').on("keyup", function(){
        var xacnhanmk = $('#verify_MK_moi').val()
        var mkmoi = $('#MK_moi').val()


        if(mkmoi == xacnhanmk) {
            $('#check_match_doi_mk').text("")
        }else{

            $('#check_match_doi_mk').text("Mật khẩu không trùng! vui lòng kiểm tra")
            $('#check_match_doi_mk').css("color","red")
        }
    });

//    check strength password
    var myApp = angular.module("myapp", []);
    myApp.controller("PasswordController", function($scope) {

        var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

        $scope.passwordStrength = {
            "float": "left",
            "width": "100px",
            "height": "2px",
        };

        $scope.analyze = function(value) {
            if(strongRegex.test(value)) {
                $scope.passwordStrength["background-color"] = "green";
            } else if(mediumRegex.test(value)) {
                $scope.passwordStrength["background-color"] = "orange";
            } else {
                $scope.passwordStrength["background-color"] = "red";
            }
        };

    });

})