//search settings
var searchForm = $(".search-form-container");
$(".show-search").click(function () {
    searchForm.toggleClass("active");
});
$(".search-cross").click(function (e) {
    e.preventDefault();
    searchForm.removeClass("active");
});

//toggle menu and overflow hidden (html,body)
$(".toggle-menu").click(function () {
    $(this).toggleClass("active");
    $(".menu").toggleClass("active");
    $("html,body").toggleClass("active");
});

//cart table settings
(function () {

    $(".delete").click(function () {
        $(this).closest('tr').remove();
    });
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
})();

//registration delivery settings
(function () {
    var form = $("#registrationFoDelivery");
    if(form){
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#email"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            saveState : true,
            labels: {
                cancel: "Cancel",
                current: "вибраний:",
                finish: "кінець",
                next: "Далі",
                previous: "Повернутися назад",
                loading: "Loading ..."
            },
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onStepChanged : function () {
                if( $( ".last" ).hasClass( "current" )){
                    $(".actions").remove();
                }
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });
    }
    $(".pay-item").click(function () {
        $(".payment-container").find(".radio-input").removeAttr("checked");
        $(".pay-item").removeClass("active");
        $(this).addClass("active");
        $(this).find(".radio-input").attr("checked","checked");
    });
})();

//personal-cabinet
(function () {
    $("#example-vertical").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "fade",
        transitionEffectSpeed: "0",
        stepsOrientation: "vertical",
        enablePagination : false,
        enableAllSteps : true,
        saveState : true
    });

//personal-cabinet added title
    $(".cabinet-steps .steps").prepend("<h2 class='title-form'>Мій кабінет</h2>");

    //edit input
    $(".edit-button").click(function () {
        var parent = $(this).parent();
        var input = parent.find('input');
        if(input.attr("readonly")){
            parent.addClass("active");
            input.removeAttr("readonly");
        }else {
            input.attr("readonly","readonly");
            parent.removeClass("active");
        }
    })
})();