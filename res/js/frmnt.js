$(".clinica-geral-main__link").click((function(a){$(this).parent().parent().find(".clinica-geral-main__unidade").slideToggle(),console.log("click"),$(this).parent().toggleClass("unidade-ativa")})),$(".especialidade__list--btn").click((function(a){let i=$(this).attr("data-id");$(`.especialidade__content:not([data-id='${i}'])`).fadeOut(100,(function(){$(`.especialidade__content[data-id='${i}']`).fadeIn(200)})),$(".especialidade__list--btn").removeClass("btn-ativo"),$(".especialidade__list--btn").parent().removeClass("btn-ativo"),$(this).parent().addClass("btn-ativo"),$(this).addClass("btn-ativo")}));