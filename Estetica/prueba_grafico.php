<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

</head>
<style type="text/css">
		body{
			position: relative;
			margin: 0;	
			padding: 0;
		}
		#box{
			text-align: center;
			position: absolute;
			top:5%;
			left: 15%;
			width: 70%;
			height: 70%;
			
		}
	</style>
<body>

	<div id="box">
    <h1></h1>
    <a href="../index.html">| Ir al inicio</a>
    <canvas id="grafica"></canvas>
        <script>
        	
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var act = getParameterByName('act');
console.log(act);
var lab = "a";
var datos = [];
var etiquetas = [];
if(act=="anual"){
        etiquetas = ["Enero", "Febrero", "Marzo", "Mayo","Abril","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        lab = "Actividad anual";
        datos = [100, 86, 80, 100, 20, 34, 23, 13, 88, 26, 97, 76];
}
if(act=="dia"){
        etiquetas = ["Lunes", "Martes", "Miercoles", "Jueves","Viernes","Sabado"];
        lab = "concurrencia (cantidad de turnos)";
        datos = [10,21,23,14,5,31];
}

// Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X.
   

    // Podemos tener varios conjuntos de datos. Comencemos con uno
    const datosVentas = {
        label: lab,
        data: datos , // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
        borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    
    
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            labels: etiquetas ,
            datasets: [
                datosVentas,
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });

        </script>
    </div>
</body>

</html>