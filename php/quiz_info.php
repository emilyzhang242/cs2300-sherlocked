<?php

	$questions = array("You have just woken up, what's the first thing you do?",
						"There's a mild commotion by the front door. What do you do?",
						"There are 10 people by the bus stop. Why is this notable?",
						"How do you take your coffee?",
						"On leaving the coffee shop, you notice someone left an unattended bag. What do you do?",
						"When going out for dinner, what factors most influence your decision?");

	$q0 = array("Mentally flick through your morning schedule.", "Read the newspaper.", "Drink Coffee.",
				"Sing in the shower.");

	$q1 = array("Continue doing what you were doing; you know what happened already.",
				"Cautiously listen before getting up to check.",
				"Get up and open in the door.",
				"Shoot a couple times through the door, then check.");

	$q2 = array("The 8:15 has gone, and the 8:31 will be late due to an incident three streets across. 
				There should be more people.",
				"Only some of the people are dressed appropriately.",
				"It isn't. Where's my car?",
				"You only have enough anthrax for seven.");

	$q3 = array("Black, two sugars.", "Dark.", "With a donut.", "I only take tea.");

	$q4 = array("Observe the bag for a moment and file away the important things before leaving.",
				"Keep track of it for a couple moments and notify the owner before leaving.",
				"Call the authorities. It might be a bomb.",
				"You know why it's there. It has its use.");

	$q5 = array("How open-minded they are about letting homeless people wander in and out.",
				"How discreet and refined it is.",
				"Nice ambiance, not too expensive.",
				"Sufficient view of the bank next door.");

	function create_quiz() {

		global $questions, $q0, $q1, $q2, $q3, $q4, $q5;

		for ($x = 0; $x < sizeof($questions); $x++) {
			echo "<li>";
			echo "<p><b>".$questions[$x]."</b></p>";
			for ($y=0; $y < sizeof($q0); $y++) {
				echo "<div>";
				echo "<input type=\"radio\" id=\"q".(($x*5)+$y)."\" name=\"q".$x."\" value=\"choice".$y."\"/>";
				echo "<label for=\"q".(($x*5)+$y)."\">&nbsp;&nbsp;".${'q'.$x}[$y]."</label>";
				echo "</div>";
			}
			echo "</li>";
		}
	}

	create_quiz();
?>