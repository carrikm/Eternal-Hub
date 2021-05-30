<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last updated 05/29/2021 -->
    <!-- Created 10/17/2020 -->

    <!-- *************************************Update Log**********************************************************
		Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purposes

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 10/23/2020
		-Fixed "Home" and "Contact Us" links on nav bar
		-Added footer
		
	Update 10/17/2020
		-Created page
		-Wrote entire article
	****************************************End Update Log ****************************************************-->

    <title>The Eternal Hub - Burn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import css file for the page's content -->
    <link rel="stylesheet" href="article styles.css">


    <!-- This is the script that shows cards when you hover over them -->
    <script src="https://deckbox.org/assets/external/tooltip.js"></script>
</head>

<body>
    <!-- Fetch logo and nav bar -->
    <?php
	include("Header.html");
	?>


    
    <div class="container">

	    <!-- Artwork on left side of page -->
	    <div class="leftCol">
		<img class="art" src="artwork/monastery_swiftspear_art.jpg" alt="Monastery Swiftspear">
		<img class="art" src="artwork/lightning_bolt_art.jpg" alt="Lightning Bolt">
		<img class="art" src="artwork/fireblast_art.jpg" alt="Fireblast">
		<img class="art" src="artwork/goblin_guide_art.jpg" alt="Goblin Guide">
	    </div>


	    <!-- Actual article/page content -->
	    <div class="midCol">
		<h1>Burn</h1>
		<article class="mainArticle">
		    <h2>Overview</h2>
		    <p>Burn is one of the most fun and simple decks in the format. The best part of it though is the price. You
			aren't doing anything super complicated with this deck, but it'll get your opponent dead without killing
			your wallet in the process.</p>


		    <h2>Strategy</h2>
		    <p>Burn isn't here to play any fancy dual lands or even show off with a Turn 1 kill. But I'll tell you what
			Burn <i>is</i> here to do: get your opponent dead. Every nonland card in the deck is either a super
			aggressive creature like <a class="card_link" target="_blank"
			    href="http://deckbox.org/mtg/Monastery Swiftspear">Monastery Swiftspear</a> or a burn spell that
			deals direct damage like <a class="card_link" target="_blank"
			    href="http://deckbox.org/mtg/Lightning Bolt">Lightning Bolt</a>.</p>

		    <p>Your entire gameplan is throwing damage at your opponent until their life total hits 0. That's it, nice
			and simple. </p>


		    <h2>Tips</h2>
		    <ul>
			<li>Use all your fetchlands that are on the battlefield before casting <a class="card_link"
				target="_blank" href="http://deckbox.org/mtg/Price of Progress">Price of Progress</a> to avoid
			    hurting yourself with it.</li>
			<li>Only use spells to kill creatures that make your gameplan harder to execute. This includes anything
			    that causes life gain, whether it be an activated ability like on <a class="card_link"
				target="_blank" href="http://deckbox.org/mtg/Scavenging Ooze">Scavenging Ooze</a> or creatures
			    with Lifelink, and creatures that make your spells cost more or prevent you from casting spells.
			</li>
			<li>Try not to mulligan very much with this deck. You need to see and cast a certain amount of spells to
			    win the game. Every mulligan is pushing that goal another turn out.</li>
			<li>Play your creatures and repeated damage effects like <a class="card_link" target="_blank"
				href="http://deckbox.org/mtg/Pyrostatic Pillar">Pyrostatic Pillar</a> as early as possible. The
			    longer they are on the field doing damage, the better they are.</li>
		    </ul>

		    <h2>Variants</h2>
		    <p>There are no real variants of this deck. It's always mono-red with a ton of damage spells and aggressive
			creatures. Individual cards may weave in and out of the deck in varying numbers, but the shell is always
			the same.</p>


		    <h2>Additional Resources</h2>
		    <p>Pretty much the only thing I could find that gave any explanation on Burn that was worth anything was <a
			    class="anotherPage" href="https://www.youtube.com/watch?v=g4_us_2hLu0">MTG Goldfish's <i>Budget
				Magic</i> video</a> and <a class="anotherPage"
			    href="https://www.youtube.com/watch?v=ZoNdOVuYRa8">PleasantKenobi's <i>Legacy on a Budget</i>
			    video</a> (Content Warning: Sometimes PK uses profanity and crude humor.)</p>

		    <p>The deck just doesn't have a ton of following because it doesnt put up a ton of results. But if you're
			looking for a cheap deck to play around with in the format, there are none cheaper or easier to pick up
			than Burn!</p>

		</article>
	    </div>

	    <!-- Artwork on right side of page -->
	    <div class="rightCol">
		<img class="art" src="artwork/eidolon_of_the_great_revel_art.jpg" alt="Eidolon of the Great Revel">
		<img class="art" src="artwork/lava_spike_art.jpg" alt="Lava Spike">
		<img class="art" src="artwork/pyrostatic_pillar_art.jpg" alt="Pyrostatic Pillar">
		<img class="art" src="artwork/price_of_progress_art.jpg" alt="Price of Progress">
	    </div>

    </div> <-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>
