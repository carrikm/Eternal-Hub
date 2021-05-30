<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last updated 05/29/2021 -->
    <!-- Created 10/19/2020 -->

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
	
	Update 10/19/2020
		-Created page
		-Wrote entire article
	****************************************End Update Log ****************************************************-->

    <title>The Eternal Hub - Cloudpost</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import css file for the page's content -->
    <link rel="stylesheet" href="article styles.css">


    <!-- This is the script that shows cards when you hover over them -->
    <script src="https://deckbox.org/assets/external/tooltip.js"></script>
</head>

<body>
    <?php
	include("Header.html");
	?>

    <div class="container">

        <!-- Artwork on left side of page -->
        <div class="leftCol">
            <img class="art" src="artwork/chalice_of_the_void_art.jpg" alt="Chalice of the Void">
            <img class="art" src="artwork/glimmerpost_art.jpg" alt="Glimmerpost">
            <img class="art" src="artwork/primeval_titan_art.jpg" alt="Primeval Titan">
            <img class="art" src="artwork/vesuva_art.jpg" alt="Vesuva">
        </div>


        <!-- Actual article -->
        <div class="midCol">
            <h1>Cloudpost</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>This archetype was difficult for me to categorize. It honestly deserves a category of its own, like
                    Tron in Modern, because Big Mana decks are so unique but it wouldn't make sense to make an entire
                    category of deck just for one shell. They aren't overly aggressive most of the time, but they aren't
                    really combo decks either (save for the combination of lands that ramp with each other). Calling
                    most variants of Post midrange decks also feels wrong, but it's the category that probably best fits
                    the deck of the 4 general deck philosophies.</p>


                <h2>Strategy</h2>
                <p>The goal of a Cloudpost deck is simple: make mana, and lots of it! There are several strategies to do
                    so, as well as ways to spend that mana. This is perhaps the most varied archetype in the format.
                    Some versions are more artifact-centric, generating additional mana with <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Grim Monolith">Grim Monolith</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Voltaic Key">Voltaic Key</a>.
                    Some instead adopt a color, typically green, to leverage ramp and land selection cards like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Elvish Reclaimer">Elvish
                        Reclaimer</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a> to get to the titular Locus
                    "-post" lands as quickly as possible.</p>

                <p>The most common version of the deck is Colorless 12-Post. The deck derives its name from the only
                    Locus lands in the game, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Cloudpost" Cloudpost> and <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Glimmerpost">Glimmerpost</a> and rounding out the last 4 copies
                        with <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Vesuva">Vesuva</a> to
                        copy the actual ones. To further amplify its potential, the deck also usually runs <a
                            class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Candelabra of Tawnos">Candelabra of Tawnos</a> to untap the
                        Cloudposts for even more mana. Once it has all this mana, it tries to resolve one of several win
                        conditions:</p>
                <ul>
                    <li>A very large <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Walking Ballista">Walking Ballista</a>that can continue to grow
                        in subsequent turns until you can kill your opponent with its ability that does 1 damage each
                        time it's activated.</li>
                    <li>An Eldrazi Titan, typically <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Ulamog, the Ceaseless Hunger">Ulamog</a> or <a
                            class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Emrakul, the Aeons Torn">Emrakul</a>.</li>
                    <li>Locking the opponent out of the game with <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Karn, the Great Creator">Karn</a> and <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Mycosynth Lattice">Lattice</a>, preventing them
                        from even tapping their lands for mana.</li>
                    <li>Another game-winning Planeswalker, typically <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Ugin, the Spirit Dragon">Ugin, the Spirit Dragon</a>.</li>
                </ul>

                <p>Very few decks have any effective means of actually <i>beating</i> 12-Post. The best they can usually
                    do is slow it down with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Wasteland">Wasteland</a> and countermagic for the first business
                    spell. Sometimes this buys the opponent enough time to close the game out, but not always. If a
                    12-Post player's life total isn't being aggressively threatened by an opponent on anything but
                    combo, they probably win.</p>


                <h2>Tips</h2>
                <ul>
                    <li>Play <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Cloudpost">Cloudpost</a>
                        before <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Glimmerpost">Glimmerpost</a> when possible to optimize the
                        amount of mana you generate per turn and the amount of life gain from the Glimmerpost.</li>
                    <li>If you're playing the green version, try to keep up <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a> when possible. Your opponents
                        will have to respect the possibility and you'll force them to play suboptimally.</li>
                    <li>Always play the game out until you are decidedy dead. 12-Post has some of the most insane
                        inevitability in the format if it gets to set up properly, but that doesn't matter if you
                        concede after your opponent counters your first threat.</li>
                </ul>


                <h2>Variants</h2>
                <p>Eldrazi Post is a hybridization of the <a class="anotherPage" href="Eldrazi.php">Eldrazi Stompy aggro
                        deck</a> and 12-Post's big mana. It sacrifices the speed of the aggro deck for an onslaught of
                    game-ending threats a few turns later.</a>

                <p>Green Cloudpost tries to play more of a midrange strategy, using some small creatures like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Elvish Reclaimer">Reclaimer</a>
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Primeval Titan">Primeval
                        Titan</a> to present a clock, block, and find utility lands. It plays a lot more like <a
                        class="anotherPage" href="Lands.php">Lands</a> than the other versions of the deck, until it
                    reaches the mana to cast its haymakers.</p>

                <p>Artifact Ramp 12-Post runs the same suite of win conditions that traditional 12-Post does, but tries
                    to win a little faster by using artifacts like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Grim Monolith">Grim Monolith</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Basalt Monolith">Basalt Monolith</a> in conjunction
                    with artifact untapping effects like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Voltaic Key">Voltaic Key</a> to try to power out its threats.</p>


                <h2>Additional Resources</h2>
                <p>Here's an article about <a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/deck-of-the-day-legacy-12-post/">Classic
                        12-Post</a>. It lacks some of the utility lands that the deck often plays today (namely <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Blast Zone">Blast Zone</a>) and
                    the <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Karn, the Great Creator">Karn</a>-<a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Mycosynth Lattice">Lattice</a> combo, but still
                    demonstrates the general plan well.</p>

                <p>For Eldrazi Post, I found <a class="anotherPage"
                        href="https://www.hipstersofthecoast.com/2019/02/legacy-eldrazi-post-crash-course/">a run-down
                        of the deck</a> that was written right after my first Legacy event! <a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/deck-of-the-day-eldrazi-post-legacy/">CFB's
                        <i>Deck of the Day</i></a> also explains the deck quite well.</p>

                <p>I also found a <a class="anotherPage"
                        href="https://www.channelfireball.com/articles/deck-of-the-day-colorless-12-post/"><i>Deck of
                            the Day</i></a> written about the version that uses <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Voltaic Key">Voltaic Key</a>.</p>
            </article>
        </div>


        <!-- Art on right -->
        <div class="rightCol">
            <img class="art" src="artwork/ulamog_the_ceaseless_hunger_art.jpg" alt="Ulamog, the Ceaseless Hunger">
            <img class="art" src="artwork/cloudpost_art.jpg" alt="Cloudpost">
            <img class="art" src="artwork/golos_art.jpg" alt="Golos, Tireless Pilgrim">
            <img class="art" src="artwork/grim_monolith_art.jpg" alt="Grim Monolith">
        </div>

    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>