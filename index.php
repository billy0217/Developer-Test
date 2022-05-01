<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dev test task</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include_once 'inc/function.php'; ?>
	<div class="container">
		<div class="c-card">
			<h2>Task 1:</h2>
			<p>Make this work (repeat 3 times the contents of an array):</p>
			<pre>
				repeat([1,2,3]) //[1,2,3,1,2,3,1,2,3]
			</pre>
			<h3>Outcome:</h3>
			<p>For PHP solution</p>
			<pre>
				<?php print_r(repeat([1,2,3])); ?>
			</pre>
		</div>

		<div class="c-card">
			<h2>Task 2:</h2>
			<p>Make this work (no vowels, lowercase except the first letter):</p>
			<pre>
				reformat("liMeSHArp DeveLoper TEST") //Lmshrp dvlpr tst
			</pre>
			<h3>Outcome:</h3>
			<p>For PHP solution</p>
			<pre>
				<?php echo reformat("liMeSHArp DeveLoper TEST"); ?>
			</pre>
		</div>
	</div>

</body>
</html>

