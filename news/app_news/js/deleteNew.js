function deleteNew(value) {
	$.ajax({
		type: 'get',
		datatype: 'text',
		url: './database/deleteNew.php',
		data: {id: value}
	}).done(function(result){
		$('#newletter').replaceWith("");
		alert (result);
		window.location.href= "./index.php"

	})
}