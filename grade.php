<!-- This php code decides the background image as the answer for the quiz -->
<?php
	$answer = array("Sherlock Holmes" => 0, "John Watson" => 0, "DI Lestrade" => 0, "Jim Moriarty" => 0);

	$current_num = 0;
	$current_char = "Sherlock Holmes";

	$name = $_POST['name'];

	$name = "http://fontmeme.com/embed.php?text=Dear%20".$name.",%20you are...&name=I%20AM%20SHERLOCKED.ttf&size=50&style_color=000000";

	$answer0 = $_POST['q0'];
	$answer1 = $_POST['q1'];
	$answer2 = $_POST['q2'];
	$answer3 = $_POST['q3'];
	$answer4 = $_POST['q4'];
	$answer5 = $_POST['q5'];
	$answer6 = $_POST['dropdown'];

	#alter to array 
	for ($x = 0; $x < 7; $x++) {

		if (${'answer'.$x} == "choice0") { $answer['Sherlock Holmes']++; }
		elseif (${'answer'.$x} == "choice1") { $answer['John Watson']++; }
		elseif (${'answer'.$x} == "choice2") { $answer['DI Lestrade']++; }
		elseif (${'answer'.$x} == "choice3") { $answer['Jim Moriarty']++; }
	} 

	#calc max num
	foreach ($answer as $char => $num) {
		if ($num > $current_num) {
			$current_num = $num;
			$current_char = $char;
		}
	}

	$back_image = "http://41.media.tumblr.com/tumblr_m366yjKGB31rpd463o1_500.jpg";

	#determine background image 
	if ($current_num != 0) {
		if ($current_char == "Sherlock Holmes") {
			$back_image = "http://cdn.quotesgram.com/img/81/21/362060187-sherlock-holmes-quotes-hd-wallpaper-4.jpg";
		}elseif ($current_char == "John Watson") {
			$back_image = "http://24.media.tumblr.com/tumblr_m366yjKGB31rpd463o2_500.jpg";
		}elseif ($current_char == "DI Lestrade") {
			$back_image = "https://s-media-cache-ak0.pinimg.com/736x/66/04/b0/6604b0e4e0fb3d8c5bd8b19228be573b.jpg";
		}elseif ($current_char == "Jim Moriarty") {
			$back_image = "http://ih1.redbubble.net/image.11839065.0757/mp,550x550,gloss,ffffff,t.3.jpg";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Sherlocked: Quiz Results</title>
	<!-- this style decides the background image from the php code above -->
	<style type="text/css">
	body{
		background-image: url('<?php echo $back_image; ?>');
	}
	</style>
	
	<link href="css/styles.css" rel="stylesheet">
</head>
<body id="grade">

	<!-- start: Navigation Bar --> 

	<ul class="nav-bar">
	<li><a href="index.html">Home</a></li>
	<li><a href="characters.php">Characters</a></li>
	<li><a href="episodes.php">Episodes</a></li>
	<li><a href="quiz.php">Quiz</a></li>
	</ul>

	<!-- end: Navigation Bar -->

	<img style="text-align: left" src='<?php echo $name; ?>'' alt="Sherlock Font">

	<p class="credits"> Wallpaper works of Taggianto @ Tumblr</p>
</body>