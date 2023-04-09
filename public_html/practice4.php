<!DOCTYPE html>
<html>
	<style>
    		body {background-color:#c6b7df;}
    		h1   {color: gray; font-weight: bolder; font-family: monospace; text-decoration: underline; text-transform: capitalize;}
    		p    {font-family: "Courier New", monospace; font-size: small;}
    		body {text-align: center};
	</style>
	
	<head>
		<h1>Multiplication Table!</h1>
		
	</head>
	
	<body>
	
		<p>
			Enter a number below to see the display of a multiplication table from 1 to that number. 
		</p>
		
		<form method="post">
			
			Enter a number: <input type ="text" name="number"><br>
			<input type="submit">

			
		</form>
		
		<style>
			table, th, td {
				border: 1px solid black;
			}
		</style>		
		
		<table style="width: 100%;">
			<br>
			<?php
				
				$num = $_POST["number"];
				
				echo "<table>";
				echo "<tr><td></td>";
				
				for ($i =1; $i <= $num; $i++)
					{echo "<td>$i</td>";}
				
				echo "</tr>";
				
				for($i = 1; $i <= $num; $i++){
					echo "<tr><td>$i</td>";
					for ($j = 1; $j <= $num; $j++){
						$result = $i *$j;
						echo "<td>$result</td>";
					}
					echo "</tr>";
				}
				echo"</table>";
				
				
			?>
		</table>
		
	</body>
	
</html>
