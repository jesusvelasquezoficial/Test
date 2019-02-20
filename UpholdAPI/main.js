function UpholdTicker(iCurrencyPair) {
	$.ajax({
		url: 'UpholdAPI.php',
		dataType: 'json',
		data: {
			currencyPair: iCurrencyPair
		},
		type:'POST'
	}).done(function(response) {
		var data = "";

		if(response.length !== undefined) {
			for (i in response){
				var id = parseInt(i) + 1;
				data += '<tr>';
				data += '<th scope="row">'+ id +'</th>';
				data += '<td>'+ response[i].currency +'</td>';
				data += '<td>'+ response[i].pair +'</td>';
				data += '<td>'+ response[i].bid +'</td>';
				data += '<td>'+ response[i].ask +'</td>';
				data += '</tr>';
			}
		}else{
				$("#thPair").remove();
				data += '<tr>';
				data += '<th scope="row">1</th>';
				data += '<td>'+ response.currency +'</td>';
				data += '<td>'+ response.bid +'</td>';
				data += '<td>'+ response.ask +'</td>';
				data += '</tr>';
		}

		$("#contentCurrencyPair").html(data);

	});
}
