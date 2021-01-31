$(document).ready(function(){
    $('.butao').click(function(){
        var num = $(".formn").val();
        window.open("https://api.whatsapp.com/send?phone=55"+num);
        var wp = "https://api.whatsapp.com/send?phone=55"+num;
        $(".formw").removeAttr("disabled");
        $(".formw").val(wp);
    });
});