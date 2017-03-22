$(document).ready(function(){
     var id_report = $("#id_ob").val();
	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/dispositivos_jcd.php",
		method: "GET",
        data: { id_reporte: id_report },
		success: function(dis) {
			console.log(dis);
            var dis2 = $.parseJSON(dis);
            var datos2 = dis2.datos;
 	      /*  Dona de dispositiv Inicio */
             var disposiLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !disposiLoaded){
                    var ctxdisp = document.getElementById("dispositiv");

                    var dataDispo = {
                            labels: ["Android", "IOS", "Windows"],
                            datasets: [{
                                label: 'Edad',
                                data: datos2,
                                backgroundColor: [
                                   '#8dbe00',
                                    '#909090',
                                    '#0191f2',
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };


                    var optionsDispo = {
                            responsive: true,
                        };

                    var disposi = new Chart(ctxdisp, {
                        type: 'pie',
                        data: dataDispo,
                        options: optionsDispo
                    });  

                     disposiLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /*  Dona de dispositiv Fin */
		},
		error: function(dis) {
			console.log(dis);
		}
	});
});