$ = $ || jQuery;
$(".clinica-geral-main__link").click(function(e) {
    $(this).parent().parent().find(".clinica-geral-main__unidade").slideToggle();
    $(this).parent().toggleClass("unidade-ativa");
});
$(".especialidade__list--btn").click(function(e) {
    let id = $(this).attr("data-id");
    $(`.especialidade__content:not([data-id='${id}'])`).fadeOut(100, function() {
        $(`.especialidade__content[data-id='${id}']`).fadeIn(200);
    });
    $(".especialidade__list--btn").removeClass("btn-ativo");
    $(".especialidade__list--btn").parent().removeClass("btn-ativo");
    $(this).parent().addClass("btn-ativo");
    $(this).addClass("btn-ativo");
});

//# sourceMappingURL=frmnt.js.map
