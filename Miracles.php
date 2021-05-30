<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/29/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 10/29/2020
		-Created page
		-Wrote article
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Miracles</title>
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
            <img class="art" src="artwork/terminus_art.jpg" alt="Terminus">
            <img class="art" src="artwork/force_of_will_art.jpg" alt="Force of Will">
            <img class="art" src="artwork/brainstorm_art.jpg" alt="Brainstorm">
            <img class="art" src="artwork/oko_thief_of_crowns_art.jpg" alt="Oko, Thief of Crowns">
        </div>


        <div class="midCol">
            <h1>Miracles (UW Control)</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>If you think fun is a zero-sum game, control decks are the thing for you! These decks are built
                    around controlling the board by countering spells and killing creatures before burying your opponent
                    in card advantage and planeswalkers.</p>

                <h2>Strategy</h2>
                <p>Recently, the deck has taken to splashing lightly into green for access to <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko, Thief of Crowns</a>, but
                    is historically just a Blue-White (UW) control deck and one of the most powerful shells in the
                    format, but also one of the toughest to learn because it relies on format knowledge.</p>
                <p>You are trying to grind the game out as long as possible and stop your opponent's gameplan with some
                    of the most powerful countermagic in the game until you can cast a super powerful spell that
                    absolutely takes over the game. As such, it's important to know what spells are important enough to
                    counter and when you're just starting out it isn't uncommon to just try to counter any and every
                    spell and then lose to the ones that really matter because you spent all your control magic on their
                    early game cantrips that probably aren't going to matter a ton by the end of the game.</p>

                <h2>Tips</h2>
                <ul>
                    <li>If you see a lot of control decks running around when you play, try playing <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Accumulated Knowledge">Accumulated
                            Knowledge</a>. It's great for drawing insane amounts of cards against slow decks.</li>
                    <li>Against decks with hand disruption, don't be afraid to <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> to hide your best cards on top of
                        your deck</li>
                    <li><a class="card_link" target="_blank" href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> can
                        be used to put a <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Terminus">Terminus</a> or <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Entreat the Angels">Entreat the Angels</a> back on top of your
                        deck when the time is right to use it</li>
                    <li>There are exceptions that you'll learn to recognize, but generally you don't want to worry about
                        countering your opponents' cantrips. Save that <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Force of Will">Force of Will</a> for what they're looking for,
                        not what they use to find it!</li>
                    <li>The "miracle" mechanic also works if you draw cards on your opponent's turn, for example by
                        casting a <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a></li>
                </ul>

                <h2>Variants</h2>
                <p>There aren't really big changes in Miracles to consider. The biggest questions are usually whether
                    your opponent is running <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Shark Typhoon">Shark Typhoon</a> as a win condition and if they're
                    playing more than one <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Terminus">Terminus</a>.</p>

                <p>Outside of that, the only thing to be aware of is that some lists splash very lightly into red for <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Lightning Bolt">Lightning
                        Bolt</a>, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Pyroblast">Pyroblast</a>, and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Red Elemental Blast">Red Elemental Blast</a>.</p>

                <h2>Additional Resources</h2>
                <p>By far the biggest resource I think of for any control variant is Anuraag Das, who joined <a
                        class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/author/anuraag-das/">Channel
                        Fireball's</a> network of content creators during the spring or early summer of 2020. The man is
                    known for his prowess, analytical thinking, and borderline addiction to drawing cards! He streams
                    daily on <a class="anotherPage" href="www.twitch.tv/anzidmtg">his Twitch channel</a> and promotes a
                    friendly environment in his chat and loves to chat with viewers.</p>

            </article>
        </div>



        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/shark_typhoon_art.jpg" alt="Shark Typhoon">
            <img class="art" src="artwork/swords_art.jpg" alt="Swords to Plowshares">
            <img class="art" src="artwork/ice_fang_coatl_art.jpg" alt="Ice-Fang Coatl">
            <img class="art" src="artwork/monastery_mentor_art.jpg" alt="Monastery Mentor">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>