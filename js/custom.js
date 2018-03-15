var searchForm = document.querySelector(".search-form-container");

document.querySelector(".show-search").onclick = function () {
    searchForm.classList.toggle("active")
};
document.querySelector(".search-cross").onclick = function (e) {
    e.preventDefault();
    searchForm.classList.remove("active");
};
document.querySelector(".toggle-menu").onclick = function () {
    this.classList.toggle("active");
  document.querySelector(".menu").classList.toggle("active");
};

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
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        enablePagination : false,
        enableAllSteps : true,
        saveState : true
    });
//personal-cabinet added title
    $(".cabinet-steps .steps").prepend("<h2 class='title-form'>Мій кабінет</h2>");
})();