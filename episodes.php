<!DOCTYPE html> 
<html lang="en">
<head>
	<title> Sherlocked: Episodes </title>

	<link href="css/styles.css" rel="stylesheet">
</head>
<body id="episodes">

	<!-- start: Navigation Bar --> 

	<ul class="nav-bar">
		<li><a href="index.html">Home</a></li>
		<li><a href="characters.php">Characters</a></li>
		<li><a href="#">Episodes</a></li>
		<li><a href="quiz.php">Quiz</a></li>
	</ul>

	<!-- end: Navigation Bar -->

	<img style="float: right" src="http://fontmeme.com/embed.php?text=EPISODES&name=I%20AM%20SHERLOCKED.ttf&size=60&style_color=ffffff" alt="Sherlock Font">

	<div style="height: 125px"></div>
	<?php include ('php/episode_info.php'); ?>

	<!-- JAVASCRIPT BELOW --> 

	<script type="text/javascript">

		//all 11 episodes are accounted for in the code below. 
		//This code makes the summaries show up for the videos on the images when hovered over
		// The actual summaries themselves are stored in the php file episode_info

		var a = document.getElementById('case1');
		a.onmouseover = function() {
  			document.getElementById('popup1').style.display = 'block';
		}
		a.onmouseout = function() {
  			document.getElementById('popup1').style.display = 'none';
		}

		var b = document.getElementById('case2');
		b.onmouseover = function() {
  			document.getElementById('popup2').style.display = 'block';
		}
		b.onmouseout = function() {
  			document.getElementById('popup2').style.display = 'none';
		}

		var c = document.getElementById('case3');
		c.onmouseover = function() {
  			document.getElementById('popup3').style.display = 'block';
		}
		c.onmouseout = function() {
  			document.getElementById('popup3').style.display = 'none';
		}

		var d = document.getElementById('case4');
		d.onmouseover = function() {
  			document.getElementById('popup4').style.display = 'block';
		}
		d.onmouseout = function() {
  			document.getElementById('popup4').style.display = 'none';
		}

		var e = document.getElementById('case5');
		e.onmouseover = function() {
  			document.getElementById('popup5').style.display = 'block';
		}
		e.onmouseout = function() {
  			document.getElementById('popup5').style.display = 'none';
		}

		var f = document.getElementById('case6');
		f.onmouseover = function() {
  			document.getElementById('popup6').style.display = 'block';
		}
		f.onmouseout = function() {
  			document.getElementById('popup6').style.display = 'none';
		}

		var g = document.getElementById('case7');
		g.onmouseover = function() {
  			document.getElementById('popup7').style.display = 'block';
		}
		g.onmouseout = function() {
  			document.getElementById('popup7').style.display = 'none';
		}

		var h = document.getElementById('case8');
		h.onmouseover = function() {
  			document.getElementById('popup8').style.display = 'block';
		}
		h.onmouseout = function() {
  			document.getElementById('popup8').style.display = 'none';
		}

		var i = document.getElementById('case9');
		i.onmouseover = function() {
  			document.getElementById('popup9').style.display = 'block';
		}
		i.onmouseout = function() {
  			document.getElementById('popup9').style.display = 'none';
		}

		var j = document.getElementById('case10');
		j.onmouseover = function() {
  			document.getElementById('popup10').style.display = 'block';
		}
		j.onmouseout = function() {
  			document.getElementById('popup10').style.display = 'none';
		}

		var k = document.getElementById('case11');
		k.onmouseover = function() {
  			document.getElementById('popup11').style.display = 'block';
		}
		k.onmouseout = function() {
  			document.getElementById('popup11').style.display = 'none';
		}

	</script>

	<!-- END JAVASCRIPT --> 

	<p class="credits"> Wallpaper property of FreeWallSupp.com<br> All episode photos courtesy of BBC</p>

</body>