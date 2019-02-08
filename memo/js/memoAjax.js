(function() {

	$('#create').on('click', function(event) {
		$.ajax({
			type : 'POST',
			dataType : 'json',
			url : '/memo/memoCreateAjax.php',
			data : {
				'inputMemo' : $('#inputMemo').val(),
			},
			success : function(data) {
				console.log('通信成功');
				console.log(data);
				$('#confirm').click();
			},
			error : function(data) {
				console.log('通信失敗');
				console.log(data);
			}
		});
		console.log('create');
	});

	$('#confirm').on('click', function(event) {
		$.ajax({
			type : 'POST',
			dataType : 'json',
			url : '/memo/memoConfirmAjax.php',
			success : function(data) {
				console.log('通信成功');
				var outputMemo = '';
				for (key in data) {
					outputMemo += '■' + key + '\n' + data[key] + '\n';
				}
				$('#confirmMemo').val(outputMemo);
				console.log(data);
			},
			error : function(data) {
				console.log('通信失敗');
				console.log(data);
			}
		});
		console.log('confirm');
	});

	$('#delete').on('click', function(event) {
		$.ajax({
			type : 'POST',
			dataType : 'json',
			url : '/memo/memoDeleteAjax.php',
			data : {
				'deleteMemoId' : $('#deleteMemoId').val(),
			},
			success : function(data) {
				console.log('通信成功');
				console.log(data);
				$('#confirm').click();
			},
			error : function(data) {
				console.log('通信失敗');
				console.log(data);
			}
		});
		console.log('delete');
	});

})();