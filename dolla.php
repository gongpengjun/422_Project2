<html>
<head>

<title>Dolla Tree</title>
<link href="dolla.css" rel="stylesheet" type="text/css" />

</head>

<body>


<div id="header">
	Free Dolla Games
</div>

<div id ="intro">
<?php echo "Welcome "; echo $_SESSION['user_name']; ?>
</div>

<div id="pageStuff">
	<table id="table" name="table" border="1" align="center">
		<td><a href = "tictactoe.html"><img src="ticTacToe.png" alt="Tic tac toe" height="150" width="150"></img></a></td>
		<td><a href = "blockbreaker.html"><img src="bricks.png" alt="Block breaker" height="150" width="150"></img></a></td>
	</table>
	<table id="table" name="table" border="1" align="center">	
		<td><a href = "navigator.html"><img src="navigate.png" alt="Navigator" height="150" width="150"></img></a></td>
		<td><a href = "memorycard.html"><img src="memory.png" alt="" height="150" width="150"></img></a></td>
		<td><a href = "hangman.html"><img src="hangman.png" alt="" height="150" width="150"></img></a></td>
	</table>
<br><br>
</div>

<?php
	include_once('footer.php');
?>
		


</body>
</html>
