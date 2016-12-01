<html>
<head>

<title>Dolla Tree BlockBreaker</title>
<link href="dolla.css" rel="stylesheet" type="text/css" />
<script language = "javascript" src = "brick/game.js"></script>
</head>

<body>


<div id="header">
	Free Dolla Games
</div>

<div id="intro">
<?php
	//include_once('accountInfo.php');
?>
	<br>Welcome to blockbreaker! Destroy all of the blocks!<br>
	Click inside the box and use your left/right arrow keys to move the platform.<br>
	Don't let the ball hit the ground!<br><br>
	<iframe src="brick/game.html" height="515" width="515"></iframe>
</div>

<div id="pageStuff">

</div>
<div style="height: 150px;">

</div>
<div id="button" align="center">
        <br>
                <a href = "blockbreaker.php" class="button">New Game</a>
</div>
<br><br>
<?php
	include_once('brickscores.php');
?>
<br><br>
<?php
	include_once('footer.php');
?>

</body>
</html>
