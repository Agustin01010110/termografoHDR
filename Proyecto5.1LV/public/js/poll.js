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
// 	    $.ajax({
// 			url: "newDev",
// 			data: { lastId : lastId },
// 			success: function(response){
//
// 				if(response.new)
// 				{
// 						$('#mydiv').append("<button type ='button' class='btn btn-primary' onclick='myfunction()'>Aparato</button>").trigger('create');
// 						lastId = response.lastId;
// 						console.log('Dispositivo nuevo!');
// 				}
// 				else {
// 					console.log('no hay dispositivo nuevo');
// 				}
//
// 			},
// 			dataType: "json"});
// }, 5000);
