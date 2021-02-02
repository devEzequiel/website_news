function acess(value){
	
	$.ajax({
		type: 'post',
		datatype: 'html',
		url: './database/acessNew.php',
		data: {id: value}
	}).done(function(noticia){
		
		$('.hide4').replaceWith("");
		$('.hide3').replaceWith("");
		$('#div-summir').html(noticia);
	})

}

