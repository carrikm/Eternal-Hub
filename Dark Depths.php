<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/10/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purposes
			
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		-Added Rainbow Depths to the "Variants" section at the request of Darkview
		
	Update 11/10/2020
		-Wrote article
		-Created page
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Dark Depths</title>
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
            <img class="art" src="artwork/dark_depths_art.jpg" alt="Dark Depths">
            <img class="art" src="artwork/vampire_hexmage_art.jpg" alt="Vampire Hexmage">
            <img class="art" src="artwork/thespian_stage_art.jpg" alt="Thespian Stage">
            <img class="art" src="artwork/thoughtseize_art.jpg" alt="Thoughtseize">
        </div>


        <div class="midCol">
            <h1>Dark Depths</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>If you get giddy at the thought of unleashing Great Cthulhu from the deep to destroy your enemies,
                    maybe Dark Depths combo is the right deck for you!</p>

                <h2>Strategy</h2>
                <p>Depths is an A+B combo deck based around removing ice counters from <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Dark Depths">Dark Depths</a> to create a <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Marit Lage">Marit Lage</a> token
                    and kill your opponent on the following turn. To do this, we play <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Vampire Hexmage">Vampire Hexmage</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Thespian's Stage">Thespian's
                        Stage</a>.</p>
                <p>The rest of the deck is built around protecting these pieces through hand disruption like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Thoughtseize">Thoughtseize</a>
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Duress">Duress</a> and finding
                    the other half of the combo with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Sylvan Scrying">Sylvan Scrying</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a>. The land search
                    spells play double duty in digging for combo lands and as a protection piece by searching for <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Sejiri Steppe">Sejiri Steppe</a>
                    to protect your <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Marit Lage">Marit
                        Lage</a> from removal or give it protection from a blocker to push the kill through.</p>

                <h2>Tips</h2>
                <ul>
                    <li>If you're playing online, pay attention to which copy of <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Dark Depths">Dark Depths</a> you keep when you copy it with <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Thespian's Stage">Stage</a>.
                        You need to keep the Stage copy or else you won't get the token.</li>
                    <li>Play patient. You can take a few hits if it means you can protect your creature when you make
                        it.</li>
                    <li>Evaluate your hands based on what you have. You want to at least have half of the Depths combo
                        for any keep.</li>
                    <li>Even though there are a lot of cards that can potentially muck with your combo, most decks only
                        play one or two of those cards. Learn what answers different decks play to beat you.</li>
                </ul>

                <h2>Variants</h2>
                <p>There are 2 primary ways that Depths is played, fast and slow combo.</p>

                <p>Turbo Depths is by far the more common right now, and you will be able to tell the difference by the
                    amount of fast mana you see in the list. Turbo Depths is designed to burn hot and play fast. All the
                    <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Elvish Spirit Guide">Spirit
                        Guides</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Lotus Petal">Petals</a> are meant to push your combo through as
                    fast as possible. The deck is designed to play out for the first 3 or 4 turns. It's not impossible
                    to win after this when you can make a creature that ends the game with one attack, but it gets
                    significantly harder. You aren't made to grind, but you can sorta do it to scrap together your
                    combo.
                </p>

                <p>Slow Depths isn't afraid to take a few turns and really tear your hand apart before making <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Marit Lage">Marit Lage</a>. It
                    gives up some of the speed of Turbo Depths for even more consistency and protection in the late
                    game. This version will usually run <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Sylvan Safekeeper">Sylvan Safekeepers</a> in the main deck instead
                    of the sideboard as supplemental protection, as well as more copies of <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Elvish Reclaimer">Elvish Reclaimer</a> and removal
                    like <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Abrupt Decay">Abrupt
                        Decay</a> to be able to play a more midrange game, too. This version is more well-rounded, but
                    this comes at the cost of losing to other fast decks more often.</p>

                <p>Sometimes BUG/Sultai Depths comes up. The blue splash is usually for <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> and sideboard cards like
                    <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Flusterstorm">Flusterstorm</a> and
                    is otherwise identical to one of the other variants.
                </p>

                <p>There's also a neat Rainbow Depths shell that runs <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Mana Confluence">Mana Confluence</a>, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Gemstone Mine">Gemstone Mines</a>, and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/City of Brass">City of Brass</a>
                    in place of the traditional fetchlands, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Bayou">Bayous</a>, and Swamps. This makes the deck much less
                    resilient ot land destruction and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Blood Moon">Blood Moon</a> effects, but allows for a small splash
                    into other colors (usually blue) for more answers.</p>


                <h2>Additional Resources</h2>
                <p>Tom Hepp (Negator77 on <i>MTGO</i> and @Negator77 on Twitter) is one of the best Depths players there
                    is. There are tons of great videos on YouTube of him tutoring streamers on how to play the deck.</p>
            </article>
        </div>



        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/crop_rotation_art.jpg" alt="Crop Rotation">
            <img class="art" src="artwork/elvish_spirit_guide_art.jpg" alt="Elvish Spirit Guide">
            <img class="art" src="artwork/sejiri_steppe_art.jpg" alt="Sejiri Steppe">
            <img class="art" src="artwork/elvish_reclaimer_art.jpg" alt="Elvish Reclaimer">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>