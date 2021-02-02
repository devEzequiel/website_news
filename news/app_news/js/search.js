//funçao utilizando AJAX para pesquisar notícias
var n = 0
$(document).ready(function(){
	

	$('#form-btn').on('click', function(){


		var pesq = $('#form-pesq').val();
		$.ajax({

			type: 'post',
			datatype: 'json',
			url: './database/searchNew.php',
			data: {value: pesq}

		}).done(function(news){

			if (news[1]=="Nenhuma noticia foi encontrada"){
				
				$('.hide3').html('<h4>Nenhuma noticia foi encontrada</h4>');

			}
			else {
				var html = []
				for (var i = 0; i < news.length; i++) {
	                html += '<div id="'+news[i].id_news+'" class="col-lg-3 hide2"><h1 id="tit-cat">'+news[i].titulo+'</h1><p id="cat-cat">'+news[i].categoria+'</p><p id="texto-cat">'+news[i].noticia+'</p><button id="botao" type="submit" style="color: white;" onclick="acess('+news[i].id_news+')">Acessar</button></div>'
	            }

	            $('.hide2').replaceWith("");
	            $('.hide3').html(html);
			}
		})
	})
})