$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/info_genral.php",
		method: "GET",
		success: function(info) {
			console.log(info);
			var etiqu = [];
			var datosa = [];

			for(var i in info) {
				etiqu.push(info[i].etiqueid);
				datosa.push(info[i].datosid);
			}
			
 	/* General bar Inicio */
      var generalLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 250 && !generalLoaded){
                    var ctxgral = document.getElementById("infogral");

                    var dataGeneral = {
                           labels: etiqu,
                    datasets: [
                        {
                            label: "Scans generales",
                            fillColor: "rgba(148, 193, 31,1)",
                            strokeColor: "rgba(148, 193, 31,1)",
                            pointColor: "rgba(148, 193, 31,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                             data: datosa,
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
});