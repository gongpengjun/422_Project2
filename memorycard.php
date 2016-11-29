<html>
<head>

<title>Dolla Tree Memorycard</title>
<link href="dolla.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="header">
	Free Dolla Games
</div>

<div id="intro">
	Welcome to memorycard. This is how you play...<br><br>
</div>

<div id="pageStuff">
</div>

<div id="my-memory-game"></div>

<script src="js/classList.min.js"></script>
<script src="memorygame/js/memory.js"></script>
<script>
    (function(){
      var myMem = new Memory({
        wrapperID : "my-memory-game",
        cards : [
          {
            id : 1,
            img: "memorygame/img/default/beavercartoon.png"
          },
          {
            id : 2,
            img: "memorygame/img/default/cartoonbeav.png"
          },
          {
            id : 3,
            img: "memorygame/img/default/cartoongeese.png"
          },
          {
            id : 4,
            img: "memorygame/img/default/cartoongoose.png"
          },
          {
            id : 5,
            img: "memorygame/img/default/donaldduck.png"
          },
          {
            id : 6,
            img: "memorygame/img/default/ducklings.png"
          },
          {
            id : 7,
            img: "memorygame/img/default/duck.png"
          },
          {
            id : 8,
            img: "memorygame/img/default/goose1.png"
          },
          {
            id : 9,
            img: "memorygame/img/default/goose.png"
          },
          {
            id : 10,
            img: "memorygame/img/default/logo-bw.png"
          },
          {
            id : 11,
            img: "memorygame/img/default/OSUbeav.png"
          },
          {
            id : 12,
            img: "memorygame/img/default/osu.png"
          },
          {
            id : 13,
            img: "memorygame/img/default/perry.png"
          },
          {
            id : 14,
            img: "memorygame/img/default/playtapus1.png"
          },
          {
            id : 15,
            img: "memorygame/img/default/quackyduck.png"
          },
          {
            id : 16,
            img: "memorygame/img/default/rubberduck.png"
          }
        ],
        onGameStart : function() { return false; },
        onGameEnd : function() { return false; }
      });
    })();

</script>
</div

<table border="1" align="center">
	<tr>
		<td id ="" height = "20px" width = "150px" name="">Your High Score</td>
		<td id ="" height = "20px" width = "150px" name="">Overall High Score</td>
	</tr>

	<tr>
		<td id ="" height = "20px" width = "150px" name=""></td>
		<td id ="" height = "20px" width = "150px" name=""></td>
	</tr>
</table>
<br><br>

<?php
	include_once('footer.php');
?>


</body>
</html>
