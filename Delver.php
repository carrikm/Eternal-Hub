<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last updated 05/29/2021 -->
    <!-- Created 10/17/2020 -->

    <!-- *************************************Update Log**********************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose
	
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		-Mentioned Death's Shadow Delver in the "Variants" Section

	Update 10/23/2020
		-Fixed "Home" and "Contact Us" links in nav bar
		-Added footer
		
	Update 10/19/2020
		-Corrected typos in some card links
		-Cleared up wording in the paragraph about UW Delver/Stoneblade in the "Variants" section
	
	Update 10/17/2020
		-Created page
		-Wrote entire article
	****************************************End Update Log ****************************************************-->

    <title>The Eternal Hub - Delver</title>
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
        <!-- Artwork on left of page -->
        <div class="leftCol">
            <img class="art" src="artwork/delver_art.jpg" alt="Delver of Secrets">
            <img class="art" src="artwork/brainstorm_art.jpg" alt="Brainstorm">
            <img class="art" src="artwork/dreadhorde_arcanist_art.jpg" alt="Dreadhorde Arcanist">
            <img class="art" src="artwork/oko_thief_of_crowns_art.jpg" alt="Oko, Thief of Crowns">
        </div>


        <!-- Actual content -->
        <div class="midCol">
            <h1>Delver</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Delver is the marquis aggro deck of the format. While extremely rewarding, the deck is very skill
                    intensive because of the amount of different paths games can take when you introduce cantrips into
                    your deck. Do you shuffle away the cards from that <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Ponder">Ponder</a>? Should you counter this spell? If so, which
                    counterspell do you use? All these and more can shape the course of a game, and it's very hard to
                    judge exactly <i>why</i> you lost a game because of all the branching decision points.</p>

                <p>Your goal is to play "under" your opponent by winning before they can really set up shop on their
                    gameplan.</p>


                <h2>Strategy</h2>
                <p>While you have the ability to turn into a value-based midrange deck, the core of Delver's gameplan is
                    to deploy an aggressive threat like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Delver of Secrets">Delver of Secrets</a> early and kill your
                    opponent before they can stabilize and beat you. To back up your threats, the deck plays <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wasteland</a> and
                    "soft counters" like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Daze">Daze</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Spell Pierce">Spell Pierce</a> that the opponent can't pay for
                    early on and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Force of Will">Force
                        of Will</a> to keep your opponent from establishing their gameplan.</p>



                <h2>Tips</h2>
                <ul>
                    <li>It shouldn't be a surprise that you want to try to find a hand with either a Turn 1 <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Delver of Secrets">Delver</a>
                        or at the least a Turn 2 <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Dreadhorde Arcanist">Arcanist</a>. These are the powerful
                        creature engines of your deck.</li>
                    <li>Try to learn about how many of each nonbasic land the other decks in the format run. Use your <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wastelands</a> to
                        try to knock your opponent off of a color when you can.</li>
                    <li>Be patient with your instants. You may convince your opponent to play around soft permission
                        that you don't actually have by waiting to <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> on their end step instead of during
                        your turn.</li>
                    <li>While not always the case, it is often correct to <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Ponder">Ponder</a> instead of <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Brainstorm">Brainstorming</a>. The general
                        exception to this is if you have what's generally known as a "perfect brainstorm" - where you
                        can use a fetch land or other way of shuffling your deck afterwards to avoid drawing the 2 worst
                        cards from your hand again.</li>
                    <li>Soft permission spells get worse as the game goes on and your opponent has access to more mana.
                        Don't be afraid to pitch them to a <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Force of Will">Force of Will</a> in the mid-to-late game.
                        That's probably the best value you'll get from them at that point.</li>
                </ul>



                <h2>Variants</h2>
                <p>There are few decks with as many different varieties in Legacy that Delver has. I've seen Delver
                    decks in just about every color combination, though most of them include at least Blue (U) and Red
                    (R). Many players find themselves comfortable in most matchups with just the classic UR version and
                    will stick to this combination.</p>

                <p>However, if you want to have more answers than the traditional shell gives you, there are some
                    options. At the time of writing, RUG/Temur Delver is particularly popular. The green splash gives
                    access to <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko</a> as well as aggressive bodies in the
                    form of <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Tarmogoyf">Tarmogoyf</a>
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Hooting Mandrills">Hooting
                        Mandrills</a>. This shell is typically favored in a metagame where you see lots of combo decks,
                    so you can try to race your opponent's combo.</p>

                <p>In slow metagames full of control and midrange decks, you may favor the black splash in Grixis
                    Delver. The most common changes to see for Grixis is to go up on discard effects like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Thoughtseize">Thoughtseize</a>
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Cabal Therapy">Cabal
                        Therapy</a>. Additionally, you get access to Edict effects (cards that make your opponent
                    sacrifice a creature, named after <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Diabolic Edict">Diabolic Edict</a>) like <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Liliana's Triumph">Liliana's Triumph</a> and
                    sometimes even <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Liliana of the Veil">Liliana of the Veil's</a> -2 ability.</p>

                <p>There is also a UB or Grixis shell that runs the shocklands, staple dual lands from Modern that allow
                    you to have them enter the battlefield untapped for 2 life, to get out a <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Death's Shadow">Death's Shadow</a> as the primary
                    threat.</p>

                <p>A white splash for Delver is rare but not unheard of. Generally if you want to play UW and run the
                    game with creatures, your best bet is probably some form of Stoneblade deck, a midrange strategy
                    along the lines of <a class="anotherPage" href="Death and Taxes.php">Death & Taxes</a> that relies
                    on slowing your opponent down with strong answers like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Force of Will">Force of Will</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Swords to Plowshares">Swords to Plowshares</a>
                    while you push damage across with equipment like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Batterskull">Batterskull</a>.</p>


                <h2>Additional Resources</h2>
                <p>If you want to take a deeper look at the deck's construction, the old forum site <a
                        class="anotherPage"
                        href="http://www.mtgthesource.com/forums/showthread.php?22676-Deck-U-R-Delver"> the Source</a>
                    has an in-depth explanation of the general UR shell and Channel FireBall has been doing a series of
                    videos with Twitch streamer Anuraag Das (AnziD on MTGO) and has done many videos with Magic Pro
                    Andrea Mengucci about the archetype. These videos can be found under <a class="anotherPage"
                        href="https://www.youtube.com/playlist?list=PL04lbfeNAaS8bfDwOfwdj8OxAcyJk4anf">their YouTube
                        channel's Legacy playlist</a>.</p>
                <p>Note: the Source's forum is very detailed and a great resource, but the deck has evolved a lot since
                    the first post there. Many new cards have found their home in the deck. As such, while much of the
                    wisdom still holds true please be aware that these are not current lists by any means.</p>

                <p>For a more recent in-depth article, Consistent Pro Tour contender Reid Duke wrote <a
                        class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/reids-guide-to-legacy-delver/">this</a>,
                    which features some relatively stock decklists and an explanation for many of the deck construction
                    choices.</p>

                <p>I don't know who the author is to give them the credit they deserve, but I was referred to this site
                    dedicated to <a class="anotherPage" href="http://bluereddelver.wordpress.com/">Blue Red Delver</a>
                    specifically. If you have your heart set on the versatility that UR provides, this is a great place
                    to look!</p>
            </article>
        </div>


        <!-- Artwork on right of page-->
        <div class="rightCol">
            <img class="art" src="artwork/daze_art.jpg" alt="Daze">
            <img class="art" src="artwork/lightning_bolt_art.jpg" alt="Lightning Bolt">
            <img class="art" src="artwork/force_of_will_art.jpg" alt="Force of Will">
            <img class="art" src="artwork/ponder_art.jpg" alt="Ponder">
        </div>

    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>