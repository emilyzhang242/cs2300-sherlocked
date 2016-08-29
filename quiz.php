<!DOCTYPE html> 
<html lang="en">
<head>
	<title> Sherlocked: Quiz </title>

	<link href="css/styles.css" rel="stylesheet">
</head>
<body id="quiz">

	<!-- start: Navigation Bar --> 

	<ul class="nav-bar">
		<li><a href="index.html">Home</a></li>
		<li><a href="characters.php">Characters</a></li>
		<li><a href="episodes.php">Episodes</a></li>
		<li><a href="#">Quiz</a></li>
	</ul>

	<!-- end: Navigation Bar -->

	<img style="text-align: left" src="http://fontmeme.com/embed.php?text=SHERLOCK%20QUIZ&name=I%20AM%20SHERLOCKED.ttf&size=60&style_color=000000" alt="Sherlock Font">
	<img style="text-align: left" src="http://fontmeme.com/embed.php?text=Which%20Sherlock%20character%20are%20you?&name=I%20AM%20SHERLOCKED.ttf&size=25&style_color=000000" alt="Sherlock Font">
	<br><br><br><br>
	
	<!-- start: form -->
	<form action="grade.php" method="post">

		<h3> Please fill in all questions below. </h3> <br>
		<ol>
		<li>
			<p><b>Your name:</b><br></p>
  			<input type="text" name="name" />
  		</li>
			<?php include ('php/quiz_info.php'); ?>
		<li>
			<div>
				<p><b>Which is your favorite character?</b></p>
				<select name="dropdown">
    				<option value="choice0">Sherlock Holmes</option>
    				<option value="choice1">John Watson</option>
    				<option value="choice2">Greg Lestrade</option>
    				<option value="choice3">Jim Moriarty</option>
  				</select>
  			</div>
  			<br> <br>
			<input type="submit" value="Submit Quiz" />
		</li>
		</ol>
	</form>

	<!-- end: form -->

	<br><br><br><br><br><br><br>


	<p class="credits" style="color: black"> Wallpaper from Pinterest<br> Quiz contents courtesy of BBC</p>

</body>
