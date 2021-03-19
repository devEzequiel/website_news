function deleteNew(value) {
	if(window.confirm("Você deseja deletar esse registro?")){
		$.ajax({
			type: 'get',
			datatype: 'text',
			url: './database/deleteNew.php',
			data: {id: value}
		}).done(function(result){
			//$('#newletter').replaceWith("");
			window.location.href= "./index.php"
		})
	}
}
