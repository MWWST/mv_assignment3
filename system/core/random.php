<?php 

?>
<html>
<head>
	<title>Random Word Generator</title>
	<link rel="stylesheet" href="./assets/css/skeleton.css">
	<style>
	.thenumber{
		width:300px;
		border: 1px solid black;
	}
	</style>
</head>
<body>

	<div class="containter" 
		<div class="row">
			<div class="one-halfcolumn"> 
				<p> Random word (attempt #22)</p>
			</div>

		</div>
		<div class="row">
			<div class="one-halfcolumn thenumber"> 
				<p> ABC123456</p>
				<form action="/random_numbers/rando/" method="post">
					<input type="submit" name="submit" value="SUBMIT!">
					<input type="hidden" name="action" value="generate">
				</form>

			</div>

		</div>
	</div>
</body>
</html>