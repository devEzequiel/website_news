$(document).ready(function displayNews(){

	$.ajax({

		type: 'get',
		datatype: 'json',
		url: './database/displayNews.php'

	}).done(function(news){
		var html = []
		for (var i = 0; i < news.length; i++) {
			html += '<div class="col-lg-3 hide2" id="'+news[i].id_news+'"><h1 id="tit-cat">'+news[i].titulo+'</h1><p id="cat-cat">'+news[i].categoria+'</p><p id="texto-cat">'+news[i].noticia+'</p><button id="botao" type="submit" style="color: white;" onclick="acess('+news[i].id_news+')">Acessar</button></div>'
		}
		$('#conteudo').replaceWith("");
		$('.hide3').html(html);
	})
})





