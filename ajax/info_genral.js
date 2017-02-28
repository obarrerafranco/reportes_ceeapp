$(document).ready(function(){
     var id_report = $("#id_ob").val();
	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/info_genral.php",
		method: "GET",
        data: { id_reporte: id_report },
		success: function(info2) {
			console.log(info2);
            var info = $.parseJSON(info2);
            var fechas = info.fechas;
            var datos = info.datos;
 	/* General bar Inicio */
      var generalLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 250 && !generalLoaded){
                    var ctxgral = document.getElementById("infogral");

                    var dataGeneral = {
                           labels:  fechas,
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
		error: function(info2info2) {
			console.log(info2);
		}
	});
});