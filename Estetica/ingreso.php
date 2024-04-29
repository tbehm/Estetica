<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ingreso</title>
</head>
<body>
    <section >   
        <form action=" " method="post" class="form">
            <h1 style="text-align: center; padding: 10px 0px;">Nuevo ingreso</h1>
            <label>DNI</label>
            <input type="number" name="dni" min="0" ><br>
    
            <label>Apellido</label>
            <input type="text" name="apellido" required><br>
    
            <label>Nombre</label>
            <input type="text" name="nombre" required><br>

            <label>Fecha</label>
            <input type="date" name="fecha" required><br>

            <label>Hora</label>
            <input type="time" name="hora" required><br>
    
            <label>Teléfono</label>
            <input type="varchar" name="telefono" min="0" required><br>
    
            <label>Descripcion del turno</label>
            <input type="text" name="descripcion" min="0" required><br>
    
            <input type="submit" value="Ingresar" class="form-s">   
        </form>
    </section>
</body>
</html>
<?php 
if(isset($_POST['dni'])){
    session_start();
    $_SESSION['dni'] = $_POST['dni'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['telefono'] = $_POST['telefono'];
    $_SESSION['fecha'] = $_POST['fecha'];
    $_SESSION['hora'] = $_POST['hora'];
    $_SESSION['descripcion'] = $_POST['descripcion'];

    header('location:verUser.php');


}
?>