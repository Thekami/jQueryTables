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
	</script>
</body>
</html>