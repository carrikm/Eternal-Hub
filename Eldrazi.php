<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last updated 05/29/2021 -->
    <!-- Created 10/19/2020 -->

    <!-- *************************************Update Log**********************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

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

    <title>The Eternal Hub - Eldrazi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import css file for the page's content -->
    <link rel="stylesheet" href="article styles.css">


    <!-- This is the script that shows cards when you hover over them -->
    <script src="https://deckbox.org/assets/external/tooltip.js"></script>
</head>

<body>
    <!-- logo and nav bar -->
    <?php
	include("Header.html");
	?>

    <div class="container">
        <!-- Artwork on left side of page -->
        <div class="leftCol">
            <img class="art" src="artwork/chalice_of_the_void_art.jpg" alt="Chalice of the Void">
            <img class="art" src="artwork/thought_knot_seer_art.jpg" alt="Thought-Knot Seer">
            <img class="art" src="artwork/eldrazi_temple_art.jpg" alt="Eldrazi Temple">
            <img class="art" src="artwork/reality_smasher_art.jpg" alt="Reality Smasher">
        </div>



        <!-- Actual article -->
        <div class="midCol">
            <h1>Eldrazi</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>This is one of the most potent decks in the format and it's easy to learn. You have very few decision
                    branches to win or lose to, so if you lose to your own playing it's easier to see (and subsequently
                    fix) than most other decks in the format. Your goal is to play big, powerful creatures that
                    overpower any creatures your opponent plays while stopping them from digging for answers.</p>

                <h2>Strategy</h2>
                <p>Eldrazi Stompy is mostly focused on leveraging Sol lands (lands that make 2 mana, named after <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Sol Ring">Sol Ring</a>) like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Ancient Tomb">Ancient Tomb</a> to
                    power out <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Chalice of the Void">Chalice of the Void</a> on 1 in the first turn
                    to lock the opponent out of interacting or digging for answers while you consistently play big and
                    aggressive eldrazi creatures. </p>

                <p>Most versions of the deck now run <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Once Upon a Time">Once Upon a Time</a> to allow for more aggressive
                    mulligans. This isn't always the case though, as some players just prefer to fill out with more
                    threats and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Dismember">Dismembers</a> to clear the way for their beaters.</p>


                <h2>Tips</h2>
                <ul>
                    <li>Mulligan to hands with the ability to cast early disruption, whether it be in the form of a <a
                            class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Chalice of the Void">Chalice</a> on Turn 1 or a <a
                            class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Thought-Knot Seer">Thought-Knot Seer</a> on the following turn.
                    </li>
                    <li>Cast <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Eldrazi Mimic">Mimics</a>
                        as early as possible, and try to cast something bigger on each subsequent turn.</li>
                    <li>It's sometimes correct to play into countermagic - every spell they counter is another big
                        creature that resolves later on.</li>
                </ul>

                <h2>Variants</h2>
                <p>There are 2 Eldrazi decks in Legacy: Eldrazi Stompy (above) and Eldrazi Post, a deck in the <a
                        class="anotherPage" href="Cloudpost.php">Cloudpost</a> family, which is also discussed on the
                    linked page there. The primary difference is how much mana you want to be generating and how large
                    the creatures you want to build are. Stompy gives you the chance to close games with more explosive
                    starts; but Post generates absurd amounts of mana as the game goes long, so it has more
                    inevitability and can play <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Ulamog, the Ceaseless Hunger">Ulamog</a> as a top-end.</p>

                <h2>Additional Resources</h2>
                <p>At the time of writing this article, Eldrazi hasn't gotten any new tech in a while (since 2015 and
                    2016's <i>Battle for Zendikar</i> block), despite the recent launch of the set <i>Zendikar
                        Rising</i> which takes place on the Eldrazi's home plane. As such, most articles are current
                    except for sideboarding, which changes anyway.</p>

                <p>Stompy articles: <a class="anotherPage"
                        href="https://www.channelfireball.com/articles/legacy-eldrazi-deck-guide/">Stompy article from
                        shortly after <i>BFZ</i> block</a>, <a class="anotherPage"
                        href="https://blog.cardkingdom.com/deck-week-legacy-eldrazi/">Card Kingdom <i>Deck of the
                            Week</i></a></p>

                <p>Eldrazi Post links: <a class="anotherPage"
                        href="https://www.hipstersofthecoast.com/2019/02/legacy-eldrazi-post-crash-course/">A run-down
                        of the deck (from my first Legacy event!)</a>, <a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/deck-of-the-day-eldrazi-post-legacy/">CFB's
                        <i>Deck of the Day</i></a></p>
            </article>
        </div>


        <!-- Artwork on rightt side of page -->
        <div class="rightCol">
            <img class="art" src="artwork/eldrazi_mimic_art.jpg" alt="Eldrazi Mimic">
            <img class="art" src="artwork/eye_of_ugin_art.jpg" alt="Eye of Ugin">
            <img class="art" src="artwork/dismember_art.jpg" alt="Dismember">
            <img class="art" src="artwork/matter_reshaper_art.jpg" alt="Matter Reshaper">
        </div>

    </div> <!-- end container -->


    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>