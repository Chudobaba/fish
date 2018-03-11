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

(function () {
    //cart table settings
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