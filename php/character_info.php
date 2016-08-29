<?php

	$chars = array("Sherlock Holmes", "John Watson", "Mycroft Holmes", "Molly Hooper", "Jim Moriarty", 
		"Mrs. Hudson", "Mary Morstan", "Greg Lestrade", "Irene Adler", "Charles Augustus Magnussen");

	$professions = array("Consulting Detective", "Professional Blogger", "Occupies a \"minor\" position 
	in the British Government", "Mortician", "Consulting Criminal", "Landlady (not a housekeeper)",
	"Retired Assassin", "Detective Inspector", "Professional Dominatrix", "Businessman: the Napoleon of 
	Blackmail");

	$actor = array("Benedict Cumberbatch", "Martin Freeman", "Mark Gatiss", "Louise Brealey", "Andrew Scott", 
		"Una Stubbs", "Amanda Abbington", "Rupert Graves", "Laura Pulver", "Lars Mikkelsen");

	$appear = array("All Episodes", "All Episodes", "All Seasons", "All Seasons", "Season 1, Season 2",
		"All Seasons", "Season 2, Season 3", "All Seasons", "Season 2", "Season 3");

	$quotes = array("Anderson, don't talk out loud. You lower the IQ of the whole street.",
					"I always hear 'punch me in the face' when you're speaking, but it's usually subtext.",
					"We are in Buckingham Palace, the very heart of the nation. Sherlock Holmes, put 
					your trousers on!",
					"I've seen much worse. But then, I do post-mortems.",
					"In a world of locked rooms, the man with the key is king, and honey, you should see me in a crown",
					"I'm your landlady, not a plot device.",
					"Mycroft: What do you think of MI5 Security? Mary: I think it would be a good idea.",
					"Not my division.",
					"Brainy's the new sexy.",
					"You should have that on a T-shirt.");

	$pictures = array("https://girlmeetssherlock.files.wordpress.com/2014/01/sherlock1.jpg",
				"https://riskyfueldotcom.files.wordpress.com/2012/02/john-watson-sherlock6.jpg",
				"https://pbs.twimg.com/profile_images/411740879603257344/t08hmG3Y.jpeg",
				"https://yt3.ggpht.com/-HMVOZIIjq5A/AAAAAAAAAAI/AAAAAAAAAAA/InjsYxTXq_4/s900-c-k-no/photo.jpg",
				"https://s-media-cache-ak0.pinimg.com/236x/81/c4/3d/81c43d728b86268319825394a062419e.jpg",
				"http://res.cloudinary.com/uktv/image/upload/b_rgb:000000,w_660,h_371,c_fill,q_75/v1366623346/bzb4k8jkmzr2swoipcxt.jpg",
				"http://bakerstreetbabes.com/wp-content/uploads/2014/06/Mary2.jpg",
				"http://orig11.deviantart.net/6428/f/2012/099/9/8/profile_picture_by_greg_lestrade_rp-d4vly21.jpg",
				"https://s-media-cache-ak0.pinimg.com/236x/80/8f/ba/808fbac4538786aad0eb7b79beea7ac9.jpg",
				"http://33.media.tumblr.com/1e20039cd4786cc6b05261f0e0edf3be/tumblr_inline_n0en5tYLQa1qk8yis.jpg");

	$pic_creds = array('girlmeetssherlock@wordpress',
						'riskyfueldotcom@wordpress',
						'pbs.com',
						'ggpht.com',
						'pinimg.com',
						'cloudinary.com',
						'bakerstreetbabes.com',
						'orig11@DeviantArt',
						'pinimg.com',
						'tumblr.com');

	function create_characters() {

		global $chars, $professions, $actor, $appear, $quotes, $pictures, $pic_creds;

		for ($x = 0; $x < sizeof($chars); $x++) {
			echo "<div class=\"row_char\">";
			echo "<div class=\"pictures\" style=\"background-image: url(".$pictures[$x].")\">";
			echo "</div>";
			echo "<p style='color: white; font-size: 10px; margin-top:30px; margin-left: 130px'>$pic_creds[$x]</p>";
			#character info code
			echo "<div class=\"pic_text\">";
			echo "<p> Name: ".$chars[$x]."<br>"."Profession: ".$professions[$x].
			"<br>"."Actor: ".$actor[$x]."<br>"."Appears in: ".$appear[$x]."<br><br>".
			"Notable quote: \"".$quotes[$x]."\"<br><br>";
			echo "</div>";
			echo "</div>";
		}	

	}

	create_characters();
?>
