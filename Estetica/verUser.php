<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		table{

	 text-align: center;
	 border-collapse: collapse;
	 background: #D6DBDF;
	 padding: 20px;
	 width: 100%;
	 height: auto;
	

	 }

td{
	 padding-top:2px;
	 padding-bottom:2px;
}
thead{
	padding: 20px;
	background: green;
	border-bottom: solid 2px blue;
	color:white;
	 
}
tr:nth-child(even){
	background: #AEB6BF;
}
tr:hover{
	background: #5D6D7E;
}
#container{
    margin: 50px auto;
    padding: 20px;
    height:550px;
    background-color: #b6b8c2; 
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
    margin-left: 25%;
    margin-right: 25%;
}
#content{
	float: center;
	color:black;
	width: calc(100% - 60px);
	min-height: calc(400px - 60px);
	padding: 20px;
}
	</style>
	<div id="container">
		<div id="content">
	<table border='1'>
		<thead>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>DNI</th>
			<th>Apellido</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Telefono</th>
			<th>Descripcion</th>
		</thead>
		<tbody>
			<?php
			session_start();
			echo"
			<td>1</td><td>".$_SESSION['nombre']."</td><td>".$_SESSION['dni']."</td><td>".$_SESSION['apellido']."</td><td>".$_SESSION['fecha']."</td><td>".$_SESSION['hora']."</td><td>".$_SESSION['telefono']."</td><td>".$_SESSION['descripcion']."</td>";
			?>
		</tbody>
	</table>
</div>
</div>

</body>
</html>

