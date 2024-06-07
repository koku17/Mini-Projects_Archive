<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Qualculate Web Simulator</title>
		<link href=".css" rel="stylesheet">
		<link rel="icon" href="favicon.png">
	</head>
	<body>
	<div>
		<center>
			<h1> Qualculate Prompt </h1>
			<form method="post" action="">
				<input class="prompt" type="text" name="math-prompt" onfocus="this.placeholder = ''" onblur="this.placeholder = 'integrate(2x)'" placeholder="integrate(2x)">
				<br/>
				<br/>
				<button class="prompt-button" type="submit"> Submit </button>
			</form><br/><br/>
		</center>
			<?php
				if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["math-prompt"] != null){
					echo "<center><h1> Result </h1></center>";
					$prompt=$_POST["math-prompt"];
					echo "<p> Prompt : <span class=\"code\"> $prompt </span></p>";
					$output=shell_exec("qalc -t '$prompt'");
					echo "<center><div class=\"result\"> $output </div></center>";
				}
			?>
	</div>
		<center><h1> How to </h1></center>
			<div class="wiki">
				<p>
					<ul>
						<li> Basic Arithmetic Operations with <span class="code"> +, -, *, /, % </span> </li>
						<li> Computation of functions such as <span class="code"> polynomials, sin(x), arcsin(x), log(x), ln(x)</span> etc </li>
						<li> Comparison Operatins with <span class="code"> &lt;, &gt;, &le;, &ge;</span> etc </li>
						<li> Base Operatins with <span class="code"> hex(number), dec(number), oct(number), bin(number)</span> etc </li>
						<li> Calculus using <span class="code"> integrate(function), diff(function)</span> </li>
						<li> Currency conversions <span class="code"> amount &lt;currency&gt; to &lt;currency&gt; </span></li>
					</ul>
					For more info check <a href="https://qalculate.github.io/manual/index.html"> here </a>
				</p>
			</div>
	</body>
</html>
