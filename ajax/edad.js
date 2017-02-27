$(document).ready(function(){

	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/edad.php",
		method: "GET",
		success: function(edad) {
			console.log(edad);
            var edad2 = $.parseJSON(edad);
            var datos3 = edad2.datos;
 	      /* Edad donuts Inicio */
             var edadLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !edadLoaded){
                    var ctxedad = document.getElementById("edad");

                    var dataEdad = {
                            labels: ["10-19 años", "20-29 años", "30-39 años", "40-60 años"],
                            datasets: [{
                                label: 'Edad',
                                data: datos3,
                                backgroundColor: [
                                    '#ff6b61',
                                    '#f0a150',
                                    '#b5d36f',
                                    '#143b80',
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };

                    var optionsEdad = {
                            responsive: true,
                        };

                    var edad = new Chart(ctxedad, {
                        type: 'pie',
                        data: dataEdad,
                        options: optionsEdad
                    });  

                     edadLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* Edad donuts Fin */
		},
		error: function(edad) {
			console.log(edad);
		}
	});
});