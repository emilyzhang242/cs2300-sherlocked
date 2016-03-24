<?php

	$eps = array("Season%20One", "Season%20Three", "Season%20Two", "Christmas%20Specials");

	$ep_names = array("empty", "A Study in Pink", "The Blind Banker", "The Great Game", 
					"A Scandal in Belgravia", "The Hounds of Baskerville", "The Reichenbach Fall",
					"The Empty Hearse", "The Sign of Three", "His Last Vow",
					"Many Happy Returns", "The Abominable Bride");

	$pictures = array("empty",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01grjmd.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01grnhc.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01grrvg.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01h8lns.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01h8pc9.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01h8t6r.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01nmx4j.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01p8d8x.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p01pw5gv.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p02ys5d5.jpg",
				"http://ichef.bbci.co.uk/images/ic/640x360/p039nnl1.jpg");

	$links = array("empty",
					"http://www.bbc.co.uk/programmes/b00t8wp0",
					"http://www.bbc.co.uk/programmes/b00tc6t2",
					"http://www.bbc.co.uk/programmes/b00tffft",
					"http://www.bbc.co.uk/programmes/p00m5wm9",
					"http://www.bbc.co.uk/programmes/b019h2f9",
					"http://www.bbc.co.uk/programmes/b01b2vl4",
					"http://www.bbc.co.uk/programmes/p01dmfz6",
					"http://www.bbc.co.uk/programmes/b03ny7ng",
					"http://www.bbc.co.uk/programmes/b03pzpgy",
					"http://www.bbc.co.uk/programmes/p01np1b8",
					"http://www.bbc.co.uk/programmes/p0390wnv");

	$popup_text = array("empty",
						"Dr. Watson and Sherlock Holmes meet, and tackle the case of the impossible suicides.",
						"Can Sherlock and John solve the case of a mysterious cipher?",
						"A battle of wits ensues between Sherlock and a stranger who seems to know all the answers.",
						"Blackmail threatens the monarchy, and Sherlock is about to meet the woman who beats him.",
						"A hound from hell. Sherlock's most famous case. But is a monster really stalking Dartmoor?",
						"The return of Moriarty. The crime of the century. Can Sherlock possibly survive?",
						"Sherlock returns! But for Watson, it might be a case of 'be careful what you wish for'.",
						"Sherlock faces his biggest challenge of all - delivering a best man's speech.",
						"Sherlock Holmes crosses swords with Charles Augustus Magnussen, the king of blackmail.",
						"Sherlock has been gone for 2 years. But someone isn't quite convinced that he's dead...",
						"In a Victorian-set special, Holmes and Watson investigate a mysterious ghostly bride.");

	function create_episodes() {

		global $eps, $ep_names, $pictures, $links, $popup_text;

		for ($x = 1; $x < sizeof($eps)+1; $x++) {
			echo "<div class=\"row_ep\">";
			#decides season color
			if ($x%2 == 1) {
				echo "<img class=\"season\" src=\"http://fontmeme.com/embed.php?text=".$eps[$x-1]."&name=I%20AM%20SHERLOCKED.ttf&size=30&style_color=000000\" alt=\"Sherlock Font\">";
			}else{
				echo "<img class=\"season\" src=\"http://fontmeme.com/embed.php?text=".$eps[$x-1]."&name=I%20AM%20SHERLOCKED.ttf&size=30&style_color=ffffff\" alt=\"Sherlock Font\">";
			}
			#makes the divs for the videos, divided by season 
			for ($y = 1; $y < 4; $y++) {
				if (!($x==4 && $y==3)) {
					echo "<a href=\"".$links[($x-1)*3+$y]."\"></a><div class=\"vids\" style=\"background-image: url(".$pictures[($x-1)*3+$y].")\"> ";
					echo "<div id= \"case".(($x-1)*3+$y)."\" class=\"parent\">";
					echo "<div id=\"popup".(($x-1)*3+$y)."\" class=\"popup_text\" style=\"display: none\">".$popup_text[($x-1)*3+$y]."</div> ";
					echo "</div>";
					echo "<p class=\"vid_titles\">".$ep_names[($x-1)*3+$y]."</p>";
					echo "</div>";
				}
			}
			echo "</div>";
		}	

	}

	create_episodes();
?>