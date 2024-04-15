<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="script.js" method="post">
        	    
       	<label>ver actividad anual</label>
        <input type="submit" name="op" value="anual" required><br>
       	<label>Comparar dos años:</label>
       	
        <input type="submit" name="op" value="compare" required><br>
       	<br>
        <label>que dias tengo mas actividad?:</label>
        <input type="submit" name="op" value="week" required><br>

<?php

// Esta variable puede venir de cualquier lugar
$miVariable = "vars";
// Aquí más código...
?>

<script type="text/javascript">

const miVariableEnJavaScript = "<?php echo $miVariable ?>";
</script>
</body>
</html>