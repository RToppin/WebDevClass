<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			var_dump($_POST);
		}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 19 Example | Rock ON </title>
</head>
<body>
	
	<form method="post">
	
		<select name="car" >
			<option value="bmw">BMW</option>
			<option value="dodge">Dodge</option>
			<option value="vet">Corvette</option>
		</select>
		
		<select name="car[]" multiple>
			<option value="bmw">BMW</option>
			<option value="dodge">Dodge</option>
			<option value="vet">Corvette</option>
		</select>

		
		<button>Sign In</button>
		
	</form>

</body>
</html>