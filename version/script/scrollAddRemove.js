$(document).ready(function(){
    var section1Height = $('#row1').height();
    var section12Height = $('#row12').height();
    var section2Height = $('#row2').height();
    var section3Height = $('#row3').height();

    $(window).scroll(function() {
        var winTop = $(window).scrollTop();
        if(winTop >= section1Height && winTop <= section2Height){
            $('#menuLi12').addClass("clickedMenuLi").not().removeClass("clickedMenuLi");
        }
    });
});