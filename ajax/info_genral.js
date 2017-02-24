$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/info_genral.php",
		method: "GET",
		success: function(info) {
			console.log(info);

			var etiqu = "";//info[0];
			var datos = ""; //info[1];

			//for(var i in info) {
				//etiqu.push(info[0]);
				//datos.push(info[1]);
			//}
            console.log(etiqu);
                etiqu =  ["18 Enero", "19 Enero", "20 Enero", "21 Enero", "22 Enero", "23 Enero", "24 Enero"] ;
                datos = [5352, 4223, 4166, 2365, 1303, 3097, 3088];
 	/* General bar Inicio */
      var generalLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 250 && !generalLoaded){
                    var ctxgral = document.getElementById("infogral");

                    var dataGeneral = {
                           labels:  etiqu,
                    datasets: [
                        {
                            label: "Scans generales",
                            fillColor: "rgba(148, 193, 31,1)",
                            strokeColor: "rgba(148, 193, 31,1)",
                            pointColor: "rgba(148, 193, 31,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                             data: datos,
                            backgroundColor: [
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756'
                                ],
                        },
                        
                    ]
                        };

                    var optionsGeneral = {
                            responsive: true,
                        };

                    var edad = new Chart(ctxgral, {
                        type: 'bar',
                        data: dataGeneral,
                        options: optionsGeneral
                    });  

                     generalLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* General Bar Fin */
		},
		error: function(data) {
			console.log(data);
		}
	});
});/*
$(document).ready(function(){
    $.ajax({
        url: "http://localhost:8081/cee_report/ajax/info_genral.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var fechas = [];
            var datos = [];

            /*for(var i in data) {
                fechas.push(data[i].fg);
                datos.push(data[i].dg);
            }*/

          /*  var chartdata = {
                labels: ["18 Enero", "19 Enero", "20 Enero", "21 Enero", "22 Enero", "23 Enero", "24 Enero"],
                datasets : [
                    {
                        label: "Scans generales" ,
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: [5352, 4223, 4166, 2365, 1303, 3097, 3088],
                    }
                ]
            };

            var ctx = $("#infogral");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});*/