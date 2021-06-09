$(document).ready(function() {

    $("#hideLogin").click(function() {
        $("#loginForm").hide();
        $("#registerForm").show();
    });

    $("#hideRegister").click(function() {
        $("#loginForm").show();
        $("#registerForm").hide();
    });

    $('h1').on('focus', function(){
        $('#mySpan').animate({
            'opacity' : 0
        }, 400, function(){
            $(this).html('Test test test').animate({'opacity': 1}, 400);});
        
    });    
    

});