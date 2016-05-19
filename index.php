<?php
	// require('server/mysql.php');
	// $main = new mysql();
	// $consult = "SELECT * FROM viajes";
	// echo '<pre>';
	// var_dump($main->query_row($consult));
	// echo '<pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Tables</title>
</head>
<body>
	<div id="tableContainer">
		<table id="table">
			<thead id="thead"></thead>
			<tbody id="tbody"></tbody>
		</table>
	</div>
	
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="js/jQueryTables.js" type="text/javascript"></script>

	<script>
		$.ajax({
			url:'server/viajes.php',
			type:'post',
			data: {},
			dataType:'json',
			success: function(data){
				console.log(data)
				var headers = ["Nombre", "Telefono", "Direccion", "Credito"]
				jQueryTable("tableContainer", headers, data, 20, "505px")
			}
		}); //fin ajax

		// var data = '[["309","2","El chanal","2016-03-01","2016-03-02"],["122","4","La Feria","2016-02-26","2016-02-26"]]'
		// data = JSON.parse(data);
		// var headers = ["No. Unidad", "No. Chofer", "Destino", 
		// 						"Fecha de salida", "Fecha de regreso"]
		// jQueryTable("tableContainer", headers, data, 8, 100)

		//jQueryTable(id_container, headers)
	</script>
</body>
</html>