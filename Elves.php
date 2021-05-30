<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/09/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose
	
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 11/09/2020
		-Wrote article
		-Created page
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Elves</title>
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
        <!-- Left side art -->
        <div class="leftCol">
            <img class="art" src="artwork/heritage_druid_art.jpg" alt="Heritage Druid">
            <img class="art" src="artwork/dryad_arbor_art.jpg" alt="Dryad Arbor">
            <img class="art" src="artwork/glimpse_of_nature_art.jpg" alt="Glimpse of Nature">
            <img class="art" src="artwork/craterhoof_behemoth_art.jpg" alt="Craterhoof Behemoth">
        </div>


        <div class="midCol">
            <h1>Elves</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Do you want to make lots of mana without <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Thalia, Guardian of Thraben">Thalia</a> getting in your way? What
                    about drawing lots of cards without playing blue? Do you just really like <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Craterhoof Behemoth">Craterhoof Behemoth</a>? If
                    you answered yes to any of these, you might like Elves.</p>

                <h2>Strategy</h2>
                <p>Elves is one of the most fascinating decks I've ever seen. Seeing it work is like watching the gears
                    crank in an old Swiss watch. It truly is more than the sum of its parts - which is impressive, cuz
                    some of its parts are <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Craterhoof Behemoth">8/8 hasty tramplers that buff everything else
                        you control</a>! Elves falls under the category of combo decks known as engine decks, along with
                    <a class="anotherPage" href="TES ANT.php">The Epic Storm and Ad Nauseam Tendrils</a>. These decks
                    work through a critical mass of cards pushing them to a game-winning card.
                </p>

                <p>There are a few different combos in this deck. It runs <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Glimpse of Nature">Glimpse of Nature</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Elvish Visionary">Elvish Visionary</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Wirewood Symbiote">Wirewood
                        Symbiote</a> to see tons of cards. For acceleration, the deck runs <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Birchlore Rangers">Birchlore Rangers</a>, <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Heritage Druid">Heritage
                        Druid</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Nettle Sentinel">Nettle Sentinel</a>, and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Green Sun's Zenith">Green Sun's Zenith</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Dryad Arbor">Dryad Arbor</a> to
                    ramp into the ability to keep casting green creatures, which will keep drawing more cards from <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Glimpse of Nature">Glimpse</a>.
                    Eventually, the plan is to generate enough mana to either hard cast or <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Natural Order">Natural Order</a> for <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Craterhoof Behemoth">Craterhoof
                        Behemoth</a> and swing for lethal. With so many moving parts, you'd think this deck would take a
                    while to set up the combo, but that's not true at all. The deck routinely kills on Turn 3 and I've
                    seen as early as Turn 2 before.</p>

                <p>In addition to the insane mechanism of the deck's combo, Elves has the distinct advantage over most
                    combo decks of just being able to beat the opponent to death with a bunch of little idiots. It's
                    surprising at times how fast you can die to Elves just attacking you over a few turns while you
                    fight desparately to stop it from getting to combo.

                <h2>Tips</h2>
                <ul>
                    <li>Don't shy away from a "value <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Glimpse of Nature">Glimpse</a>." Sometimes casting one to just
                        see a few extra cards will set you up for a win next turn.</li>
                    <li>As with every deck with these 2 cards in it, <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Green Sun's Zenith">GSZ</a> for X=0 to get <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Dryad Arbor">Dryad Arbor</a> is an insanely
                        strong Turn 1 ramp play.</li>
                    <li>Sometimes your best move is just to turn your creatures sideways. Your opponent probably can't
                        block them all and that damage adds up fast.</li>
                    <li>Cast 1 drop creatures before playing/tapping your <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Gaea's Cradle">Gaea's Cradle</a> to maximize the mana you get
                        from it (a 1 drop with Cradle on the field is effectively free!)</li>
                </ul>

                <h2>Variants</h2>
                <p>There aren't really "variants" of Elves. The only real variety is what colors you want to splash into
                    for sideboard answers. The deck is almost always mono-Green or Black-Green, but sometimes splashes
                    for white.</p>

                <h2>Additional Resources</h2>
                <p>Without a doubt, the most well known and skilled Elves player in the format is Julian Knab. If you
                    want to see what a good decklist is at any time, check <a class="anotherPage"
                        href="http://itsjulian.com">his website</a>. Julian is an excellent Magic player and an even
                    better Elves pilot, in addition to a very nice guy. The video on this site's <a class="anotherPage"
                        href="index.php">home page</a> is actually a video that he did. There are some people that you
                    just trust for a certain subject. You trust a doctor to tell you why you're sick. You trust a
                    teacher to give you an education. You trust Julian to tell you about pointy-eared green creatures.
                </p>

                <p>Another player that has achieved a bit more name recognition for his general skill as a player is
                    Reid Duke with Channel Fireball. At the time of writing, <a class="anotherPage"
                        href="https://www.youtube.com/watch?v=Si_PLnHq2To">this</a> is the most recent video he has done
                    with the deck, but a quick search on YouTube for "legacy elves reid duke" will present the newest
                    videos in the future.</p>
            </article>
        </div>



        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/allosaurus_shepherd_art.jpg" alt="Allosaurus Shepherd">
            <img class="art" src="artwork/green_sun_zenith_art.jpg" alt="Green Sun's Zenith">
            <img class="art" src="artwork/nettle_sentinel_art.jpg" alt="Nettle Sentinel">
            <img class="art" src="artwork/natural_order_art.jpg" alt="Natural Order">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>