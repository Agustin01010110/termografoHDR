var i=0;
setInterval(function(){
	    $.ajax({
			url: "nuevaruta",
			data: { lastId : lastId },
			success: function(response){
        //Update your dashboard gauge

				if(response.newRows)
				{
					var newRows = response.newRecords.shift();
					var newData = [moment(newRows.time).format('YYYY-MM-DD HH:mm:ss'),newRows.temp];


					lastId = response.lastId;
					if(newRows.temp > 5)
					{
						function myFunction() {
								var btn = document.createElement("BUTTON");
								var t = document.createTextNode("CLICK ME");
								btn.appendChild(t);
								document.body.appendChild(btn);
						}
					}


					data1.push(newData);//sirve para varios elementos tambien
					hc.series[0].setData(data1, false);//setData() deberia redibujar el grafico
					console.log('Datos Nuevos!');
					hc.redraw();
				}else
				{
					lastId = lastId;
					console.log('No hay datos nuevos');

				}

			},
			dataType: "json"});
}, 10000);


// setInterval(function(){
// 	var random = Math.random() * 10;
// 	    $.ajax({
// 			url: "store",
// 			data: { time: moment().format('YYYY-MM-DD H:mm:ss') , temp: random },
// 			success: function(response){
// 				if(response.success)
// 				{
// 					console.log('Exito!')
// 				}else{
// 					console.error(response.errors)
// 				}
// 			},
// 			dataType: "json"});
// }, 9000);
