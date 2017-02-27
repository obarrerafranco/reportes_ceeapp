$(document).ready(function(){

	$.ajax({
		url: "http://localhost:8081/cee_report/ajax/genero.php",
		method: "GET",
		success: function(gene) {
			console.log(gene);
            var gene2 = $.parseJSON(gene);
            var datos2 = gene2.datos;
 	      /* General bar Inicio */
             var generoLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !generoLoaded){
                    var ctxgenero = document.getElementById("genero");

                    var dataGenero = {
                            labels: [ "Femenino", "Masculino"],
                            datasets: [{
                                label: 'Genero',
                                data: datos2,
                                backgroundColor: [
                                    '#ff777c',
                                    '#1f5bbd'
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };

                    var optionsGenero = {
                            responsive: true,
                        };

                    var genero = new Chart(ctxgenero, {
                        type: 'doughnut',
                        data: dataGenero,
                        options: optionsGenero
                    });  

                     generoLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* General Bar Fin */
		},
		error: function(gene) {
			console.log(gene);
		}
	});
});