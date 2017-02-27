$(document).ready(function(){

	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/semana.php",
		method: "GET",
		success: function(seman) {
			console.log(seman);
            var seman2 = $.parseJSON(seman);
            var fecha = seman2.fecha;
            var scans = seman2.scans;
            var views = seman2.views;
 	       /* Semana linea Inicio */
          var semanaLoaded = false;
                $(document).on('scroll', function(){      
                    var scrollTop = $(window).scrollTop();
                    if(scrollTop > 250 && !semanaLoaded){
                        var ctxsemana = document.getElementById("semana");
                        var dataSemana = {
                                    labels: fecha,
                                    datasets: [
                                         {
                                            label: "Numero de views",
                                            fill: true,
                                            lineTension: 0.1,
                                            backgroundColor: "#0c2756",
                                            borderColor: "#0c2756",
                                            borderCapStyle: 'butt',
                                            borderDash: [],
                                            borderDashOffset: 0.0,
                                            borderJoinStyle: 'miter',
                                            pointBorderColor: "#0c2756",
                                            pointBackgroundColor: "#fff",
                                            pointBorderWidth: 1,
                                            pointHoverRadius: 5,
                                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                            pointHoverBorderColor: "rgba(220,220,220,1)",
                                            pointHoverBorderWidth: 2,
                                            pointRadius: 3,
                                            pointColor: "rgba(148, 193, 31,1)",
                                            pointHitRadius: 10,
                                            data: views,
                                            spanGaps: false,
                                        },
                                          {
                                            label: "Numero de scans",
                                            fill: true,
                                            lineTension: 0.1,
                                            backgroundColor: "#94C11F",
                                            borderColor: "#94C11F",
                                            borderCapStyle: 'butt',
                                            borderDash: [],
                                            borderDashOffset: 0.0,
                                            borderJoinStyle: 'miter',
                                            pointBorderColor: "#94C11F",
                                            pointBackgroundColor: "#fff",
                                            pointBorderWidth: 1,
                                            pointHoverRadius: 5,
                                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                            pointHoverBorderColor: "rgba(220,220,220,1)",
                                            pointHoverBorderWidth: 2,
                                            pointRadius: 3,
                                            pointColor: "rgba(148, 193, 31,1)",
                                            pointHitRadius: 10,
                                            data: scans,
                                            spanGaps: false,
                                        }
                                    ]
                            };

                        var optionsSemana = {
                                responsive: true,
                            };

                        var genero = new Chart(ctxsemana, {
                            type: 'line',
                            data: dataSemana,
                            options: optionsSemana
                        });  

                         semanaLoaded = true;
                        }
                        else{
                        return;
                        }
                     });
            /* Semana Linea Fin */
		},
		error: function(edad) {
			console.log(edad);
		}
	});
});