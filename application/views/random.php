<?php 

?>
<html>
<head>
	<title>Random Word Generator</title>
	<link rel="stylesheet" href="../assets/css/skeleton.css">
	<style>
	.thenumber{
		width:400px;
		border: 1px solid black;
		text-align: center;
		font-size: 20px
	}

	p {
		text-align: center;
	}
	</style>
</head>
<body>

	<div class="containter">
		<div class="row">
			<div class="one-half column offset-by-three columns"> 
				<p> Random word (attempt # <?=$Count;?>)</p>
			</div>

		</div>
		<div class="row">
			<div class="one-half offset-by-four columns thenumber"> 
				<p><?=$Random_Num?></p>
				<form action="/random_numbers/rando" method="post">
					<input type="submit" name="submit" value="GENERATE!">
					<input type="hidden" name="action" value="generate">
				</form>

			</div>

		</div>
	</div>
</body>
</html>