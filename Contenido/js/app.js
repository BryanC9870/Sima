$(document).ready(function(){
	$.ajax({
		url: "../qgetdata.php",
		method: "POST",
		success: function(data) {
			console.log(data);
			var num1 = [];
			var num2 = [];

			for(var i in data) {
				num1.push(data[i].TipoActividad);
				num2.push(data[i].TipoActividad);
			}

			var chartdata = {
				labels: Aprendices,
				datasets : [
					{
						label: 'MONITORIAS',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: num2
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});