<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
    <title>Homework 1: Hello World</title>
		
		<link rel="stylesheet" href="style.css">

	</head>
  
	<body>

    <?php

		# Script 1.0 - index.php
		# Created 11 February 2021
		# Created by Raya Bergin
		
		?>

		<h1>Hello World!</h1>

		<figure>
			<img src="nicedog.gif" alt="nicedog" />
			<figcaption>Nicedog says Hi 😁</figcaption>
		</figure>

		<p>My name is Raya. My name is pronounced as <em>rah-yah</em>. The name <em>Raya</em> is of Hebrew origin and it means <em>friend</em>. I switched to a degree in Web Development from Nursing last Fall 2019. I'm glad I did because of my nerdy introvert personality.</p>
		<p>I'm an extremely private introvert. I'm an avid Windows/Xbox gamer. I love playing single player third-person games and, on occasion, play first-person games like <strong>Alien Isolation</strong>.</p>
		<p>I'm a voracious Audible reader. Currently, I'm listening to a fiction novel titled, <strong>The Pillars of the Earth</strong> by Ken Follett. It's an epic tale that involves four main characters and set against medieval 12th century England.</p>
		<p>I love to draw. I post new art every week on Instagram.</p>

		<?php

			echo '<p>A couple of my favorite websites are ' . '<a href="https://www.instagram.com/raya_bergin_draws/">Instagram</a>, which has been featuring my art since Fall 2018, and ' . '<a href="https://www.audible.com/?ref=a_hp_t1_nav_header_logo&pf_rd_p=36a9590e-d2dc-4c98-9c89-3388d950b863&pf_rd_r=5G5994CENV9P78MHP8PP">Audible</a>, where I can find my next great fiction or nonfiction book.</p>';

			echo '<p>This assignment is challenging because I\'m applying PHP, a programming language I\'ve never used before. But while I\'m going through the process of completing this assignment, I\'m understanding PHP more. I feel good about that. The challenge is really using CSS because I still don\'t quite understand CSS.</p>';

		?>
				
	</body>
</html>