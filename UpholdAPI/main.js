function UpholdTicker(iCurrencyPair) {
	$.ajax({
		url: 'UpholdAPI.php',
		dataType: 'json',
		data: {
			currencyPair: iCurrencyPair
		},
		type:'POST'
	}).done(function(res) {
		var data = "";

		if(res.length !== undefined) {
			$("#thPair").show();
			for (i in res){
				var id = parseInt(i) + 1;
				data += '<tr>';
				data += '<th scope="row">'+ id +'</th>';
				data += '<td>'+ res[i].currency +'</td>';
				data += '<td>'+ res[i].pair +'</td>';
				data += '<td>'+ res[i].bid +'</td>';
				data += '<td>'+ res[i].ask +'</td>';
				data += '</tr>';
			}
		}else{
			var compra = parseFloat(res.bid);
				compra = compra*0.65/100;
			compra = parseFloat(res.ask)-compra;
				$("#thPair").hide();
				data += '<tr>';
				data += '<th scope="row">1</th>';
				data += '<td>'+ res.currency +'</td>';
				data += '<td>'+ res.ask +'</td>';
				data += '<td>'+ compra +'</td>';
				data += '</tr>';
		}

		$("#contentCurrencyPair").html(data);

	});
}
