$(document).ready(function(){
    $(".push_menu").click(function(){
        $(".wrapper").toggleClass("active");
    });

});

$(document).ready(function(){
    $(".menu li a").click(function(){
        //$(this).parent('li:has(ul)').find('ul').show();
        //$(this).parent('li:has(ul)').children('ul').toggle(300);

        $(this).parent().children('ul.parent').toggle(300);
    });
});


