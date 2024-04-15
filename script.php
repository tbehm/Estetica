<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
$year=$_POST['anio'];
$ope=$_POST['op'];
switch ($ope) {
    case 'anual':
        $etiquetas = ["Enero", "Febrero", "Marzo", "Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]
        $fec= date("Y-m-d", mktime(0,0,0, 1,1,$year));
        $fin = date("Y-m-d", mktime(0,0,0, 31,12,$year));
        $consulta = $conexion->prepare("SELECT * FROM turnos WHERE `fecha`>='$fec'");
        $consulta->execute();
        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $c=0;
        $data=$datos;
        foreach($datos as $elemento){
            for($i=0;$i<11;$i++){
            if($i==date("m", mktime(0,0,0, )))
            $data[$c]=$elemento['fecha'];

            }
            $dates[]=
            $data[$c]=$elemento['fecha'];
            $c++;
        }
        $label="actividad del año $year";
        $labels[12] =["Enero"]
        break;
    
    default:
        # code...
        break;
}
?>
 
<script type="text/javascript">

const miVariableEnJavaScript = "<?php echo $miVariable ?>";

// Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas ="<?php echo $etiquetas; ?>";

// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Ventas por mes",
    data: [5000, 1500, 8000, 5102], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'line',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
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