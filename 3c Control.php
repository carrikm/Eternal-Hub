<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/29/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purposes

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
	
	Update 11/04/2020
		-Wrote remainder of article
		-replaced art files
		
	Update 10/29/2020
		-Created page
		-Wrote Overview and Additional Resources sections of article
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - 3-5c Control</title>
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
        <!-- Left side art -->
        <div class="leftCol">
            <img class="art" src="artwork/arcums_astrolabe_art.jpg" alt="Arcum's Astrolabe">
            <img class="art" src="artwork/veil_of_summer_art.jpg" alt="Veil of Summer">
            <img class="art" src="artwork/jace_the_mind_sculptor_art.jpg" alt="Jace, the Mind Sculptor">
            <img class="art" src="artwork/abrupt_decay_art.jpg" alt="Abrupt Decay">
        </div>


        <div class="midCol">
            <h1>3-5c Control (Snowko, Czech Pile, & More)</h1>

            <article class="mainArticle">
                <h2>Overview</h2>
                <p>If you think fun is a zero-sum game, control decks are the thing for you! These decks are built
                    around controlling the board by countering spells and killing creatures before burying your opponent
                    in card advantage and planeswalkers.</p>

                <h2>Strategy</h2>
                <p>3-5c Control has taken a turn for the more aggressive with sets released in 2019 and 2020. The deck
                    has moved mostly to basic snow lands despite running so many colors, and it has been able to do this
                    on the back of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Arcum's Astrolabe">Arcum's Astrolabe</a>. The present iteration of
                    the deck is known as "Snowko" because the deck leverages the snow lands while generating an obscene
                    amount of value with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko, Thief of Crowns</a>.</P>
                <p>The snow lands and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Arcum's Astrolabe">Astrolabe</a> negate one of the strongest ways
                    other decks have historically staggered the multi-color control decks by trivializing land
                    destruction and pseudo-destruction like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Rishadan Port">Rishadan Port</a>. This has given Snowko the power
                    to rise to the top of the meta and stay as one of the best decks in the format for months at the
                    time of writing this.</p>

                <h2>Tips</h2>
                <ul>
                    <li>If you play against another deck that tries to play discard, sideboard yours out. In a war of
                        attrition like that you want to be the one casting haymakers, not the one trying to stop it.
                    </li>
                    <li><a class="card_link" target="_blank" href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> and
                        a fetch land can potentially turn dead cards in your hand into better ones.</li>
                    <li>Wait until you have protection to cast your game-winning spells so you know they'll resolve.
                    </li>
                    <li>Play or watch others play different decks when you can. You'll learn what spells to interact
                        with from that deck.</li>
                </ul>



                <h2>Variants</h2>
                <p>There are 3 primary variants of the 3+ color decks, unsurprisingly decided by number of colors they
                    run.</p>

                <h3>3c Conrol</h3>
                <p>This category typically is referred to as Grixis control because it's often in the Grixis color group
                    of black, red, and blue. A staple of this archetype is a strong hand disruption element in addition
                    to the usual suite of blue spells. BUG control is also not unheard of, especially since the printing
                    of powerhouse spells like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Uro, Titan of Nature's Wrath">Uro</a>. </p>

                <h3>4c Control</h3>
                <p>Sometimes called "Czech Pile" by players who came to the format back when naming conventions for
                    Legacy decks were the wild west, 4c decks tend to come in the form of shells that don't feature
                    white. On occasion another color is given up instead, but white is generally considered to be the
                    least effective control color (unless you ask a <a class="anotherPage"
                        href="Death and Taxes.php">D&T</a> player!). The most unique variant of 4c control is called
                    "Stryfo pile," named after the deck's creator <i>Magic: the Gathering Online</i> user Stryfo. This
                    shell is most noted for the use of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Dack Fayden">Dack Fayden</a>, a card that generally only sees play
                    in Vintage and Commander. The current iteration is also the only deck in the format that still uses
                    a card with the <i>Companion</i> mechanic after the rules change that fixed how powerful they are,
                    <a class="card_link" target="_blank" href="http://deckbox.com/mtg/Yorion, Sky Nomad">Yorion</a>.
                </p>


                <h3>5c Control </h3>
                <p>The greediest of greedy mana, yet not too greedy to run <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Back to Basics">Back to Basics</a>? You heard it here first! 5c
                    control decks seek to have answers to absolutely everything. Creatures? They have <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Swords to Plowshares">Swords to
                        Plowshares</a>. Trying to draw a bunch of cards and combo off? The usual suite of counterspells
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Narset, Parter of Veils">the
                        new Narset</a>. Trying to fight the fair fight with countermagic? <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Pyroblast">Pyroblast</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Veil of Summer">Veil of Summer</a> in the
                    sideboard.</p>


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
            <img class="art" src="artwork/ice_fang_coatl_art.jpg" alt="Ice-Fang Coatl">
            <img class="art" src="artwork/swords_art.jpg" alt="Swords to Plowshares">
            <img class="art" src="artwork/oko_thief_of_crowns_art.jpg" alt="Oko, Thief of Crowns">
            <img class="art" src="artwork/uro_art.jpg" alt="Uro, Titan of Nature's Wrath">
        </div>
    </div> <!-- end container -->
    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>