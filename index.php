<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/10/2020 -->
    <!-- This is the home page of the website and contains a summary of the website and links to all other pages in the site -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap, handled responsive scaling
		-Moved title <h1> tag into "midCol" to make everything center better on smaller screens
		
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		
	Update 11/01/2020
		-Added link to video explanation of Legacy from Julian Knab's YouTube channel (after getting his express permission to do so)
		
	Update 10/27/2020
		-Rearranged deck category sections
		
	Update 10/23/2020
		-Fixed "Home" and "Contact Us" links on nav bar
		-Added Footer
	
	Update 10/16/2020
		-Work on navigation bar, produced dropdown menus. Still need to fix the "Home" and "Contact Us buttons on nav bar.
	
	Update 10/14/2020
		-Created separate CSS stylesheet, "article styles.css", and moved all CSS from this page to that file
		
	Update 10/13/2020
		-Started making CSS stylesheet for the page
	
	Update 10/10/2020
		-Created page
		-Wrote introduction letter and created headings for the Deck Types
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import css file for the page's content -->
    <link rel="stylesheet" href="article styles.css">


    <!-- This is the script that shows cards when you hover over them -->
    <script src="https://deckbox.org/assets/external/tooltip.js"></script>
</head>

<body>
    <!-- Fetch header file including site logo and navigation bar -->
    <?php
	include("Header.html");
	?>

    <div class="container">

        <!-- Artwork on left of article-->
        <div class="leftCol">
            <img class="art" src="artwork/brainstorm_art.jpg" alt="Brainstorm">
            <img class="art" src="artwork/life_from_the_loam_art.jpg" alt="Life from the Loam">
            <img class="art" src="artwork/griselbrand_art.jpg" alt="Griselbrand">
            <img class="art" src="artwork/force_of_will_art.jpg" alt="Force of Will">
            <img class="art" src="artwork/green_sun_zenith_art.jpg" alt="Green Sun's Zenith">
            <img class="art" src="artwork/dark_ritual_art.jpg" alt="Dark Ritual">
            <img class="art" src="artwork/swords_art.jpg" alt="Swords to Plowshares">
            <img class="art" src="artwork/oko_thief_of_crowns_art.jpg" alt="Oko, Thief of Crowns">
            <img class="art" src="artwork/chalice_of_the_void_art.jpg" alt="Chalice of the Void">
            <img class="art" src="artwork/knight_of_the_reliquary_art.jpg" alt="Knight of the Reliquary">
            <img class="art" src="artwork/terminus_art.jpg" alt="Terminus">
        </div>

        <!-- Article goes here -->
        <div class="midCol">
            <h1>THE LEGACY HUB</h1>
            <article>
                <h2>Greetings and welcome to the Legacy Hub!</h2>

                <p>I suppose I should start by explaining what Legacy is for those of you who may be unfamiliar. This
                    is,
                    after all, a website for newcomers. Legacy is a format of play in the game <i>Magic: the
                        Gathering</i>
                    that was first created in 2006 which allows you to use cards from the game's entire history, except
                    for
                    <a class="anotherPage" href="https://magic.wizards.com/en/game-info/gameplay/formats/legacy">a short
                        list of cards that are banned in the format.</a> It is often regarded as one of if not the most
                    powerful formats in the game. I started my journey into eternal magic (called such because the cards
                    never shift in and out of the format except for bans, unlike Standard) with the format often
                    considered
                    to be "between" Standard and Legacy: Modern. After only a year, I switched to Legacy to fill a seat
                    in a
                    team event with some friends and found myself absolutely overwhelmed by this fascinating format in
                    the
                    fall of 2018 and have stayed here since.
                </p>

                <p>Unfortunately, the fun of this format has acquired the stigma over the years of being too pricy - and
                    it's understandable why. This is one of the few formats that allows you to play the rare (and
                    therefore
                    expensive) cards of the past like the original Dual Lands, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Lion's Eye Diamond">Lion's Eye Diamond</a>,and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Force of Will">Force of Will</a>. (Also, because
                    this
                    website is for people coming to Legacy, there are a lot of cards that will be mentioned here that
                    you
                    probably don't recognize right away. That's okay, I've included a wonderful tool that allows you to
                    hover over the card names (highlighted in blue) and it will display the card for you. Give it a
                    try!) As
                    a result, decks in this format routinely cost several thousand dollars. Even playing through
                    <i>Magic:
                        the Gathering Online</i>, where cards are often significantly cheaper because there are fewer
                    restrictions on when they can reprint a card there, the average Legacy list will probably run you
                    between 200 and 500 tix (the in-game currency equal to 1 USD). And with so many different decks to
                    choose from, the idea of buying a bunch of decks or parts of them is unreasonable.
                </p>

                <p>That's where I come in. The Legacy Hub is a website made to help you choose what your first deck will
                    be
                    so that you don't have to spend hundreds or thousands of dollars only to find out that you don't
                    care
                    for a deck. At the time of building this site, I've been playing Legacy for 2 years. I spent most of
                    that time playing <a class="anotherPage" href="Death and Taxes.php">Death and Taxes</a>, a deck that
                    greatly rewards knowledge of the different decks of the format. I've also branched out into playing
                    <a class="anotherPage" href="Reanimator.php">Reanimator</a> and <a class="anotherPage"
                        href="TES ANT.php">The Epic Storm (TES)</a> in recent months. I want to make it very clear that
                    <b>I
                        DO NOT CONSIDER MYSELF TO BE AN EXPERT ON MOST OF THE DECKS ON THIS SITE</b>. There are a lot of
                    people who have dedicated a lot more time to any given deck than I have. This website isn't going to
                    give much in the way of new information for advanced players who are already proficient with their
                    deck
                    looking for ways to improve. There are plenty of other resources for that, and I will leave links to
                    and
                    credit those if I am aware of them. I say again, <b>THIS SITE IS FOR PEOPLE WHO WANT TO FIND THEIR
                        FIRST
                        DECK IN THE FORMAT OR PICK UP THE BASICS OF A NEW DECK QUICKLY</b>.
                </p>


                <p>-Carrik McNerlin</p>

                <br><br>

                <p>Here is an <a class="anotherPage" href="http://www.youtube.com/watch?v=bS8T7XrCL44">excellent
                        video</a>
                    from Legacy Elves master Julian Knab about the format and some of the possibilities as of the fall
                    of
                    2020.</p>

                <br><br>

                <h2>Choosing a Strategy</h2>
                <p>If you look at their overarching strategies, most Legacy decks fall into 1 of 4 categories: Aggro,
                    Control, Midrange, and Combo. The first step in choosing your deck is knowing what kind of deck you
                    want
                    to play.</p>



                <h3>Aggro</h3>
                <p>Aggressive, or Aggro, decks have one goal: get your opponent dead, and get them dead fast. This can
                    be
                    achieved primarily by burn spells like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Lightning Bolt">Lightning Bolt</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Chain Lightning">Chain Lightning</a> and creatures
                    that
                    can do a lot of damage quickly if unanswered, like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Delver of Secrets">Delver of Secrets</a>.</p>

                <p>Decks: <a class="anotherPage" href="Delver.php">Delver</a>, <a class="anotherPage"
                        href="Burn.php">Burn</a>, <a class="anotherPage" href="Eldrazi.php">Eldrazi</a></p>




                <h3>Midrange</h3>
                <p>Midrange decks try to strike a happy medium between Aggro and Control. These decks use things like
                    discard spells to keep their opponents off balance long enough to establish dominance of the board.
                    Whereas aggro decks will try to go for a win with fast creatures, midrange decks give up some speed
                    for
                    incremental advantage. One of the most common things to see in these decks is a card like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Aether Vial">Aether Vial</a> or a
                    card that searches for another card when it enters the battlefield.</p>

                <p>It can be hard to draw the line sometimes of where Aggro decks end and Midrange decks begin. As such,
                    some of the decks in this list may also be considered Aggro by other players.</p>

                <p>Decks: <a class="anotherPage" href="Death and Taxes.php">Death & Taxes</a>, <a class="anotherPage"
                        href="Maverick.php">Maverick</a>, <a class="anotherPage" href="Nic Fit.php">Nic Fit</a>, <a
                        class="anotherPage" href="Cloudpost.php">Cloudpost</a></p>



                <h3>Control</h3>
                <p>Control decks want to make the game go on as long as possible and stop you from playing meaningful
                    spells
                    (or sometimes any spells at all). Control decks vary from only 1 or 2 all the way up to 5 colors,
                    but
                    almost always play blue, so countermagic like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Force of Will">Force of Will</a>, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Force of Negation">Force of Negation</a>, and <a
                        class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Counterbalance">Counterbalance</a> is super common
                    along with cantrips like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> to dig through their deck to find more
                    answers or their big win condition cards.</p>

                <p>The primary exception that I've found to this is Red Prison. This deck is, as the name suggests, only
                    red
                    and colorless spells. Instead of counterspells, it relies on fast mana to power out effects like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Chalice of the Void">Chalice of
                        the
                        Void</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Trinisphere">Trinisphere</a> to slow down or stop your opponent
                    from
                    casting spells altogether while it deploys threats that rapidly make the game unwinnable.</p>

                <p>Decks: <a class="anotherPage" href="Miracles.php">Miracles</a>, <a class="anotherPage"
                        href="3c Control.php">3-5c Control</a>, <a class="anotherPage" href="Red Prison.php">Red
                        Prison</a>
                </p>



                <h3>Combo</h3>
                <p>Combo decks are a special breed. They come in 2 forms: engine-based and simple A+B. Engine based
                    decks
                    require a critical mass of cards to be able to "go off," typically by generating a lot of mana and
                    killing your opponent with a card like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Tendrils of Agony">Tendrils of Agony</a>, though not always. On the
                    other hand, A+B decks are focused around one interaction between 2 or 3 effects. They fill their
                    decks
                    with as many copies of these 2 effects as possible and otherwise either protecting the combo or
                    trying
                    to play the role of a control deck until the combo is assembled.</p>

                <p>If you like to gamble, you'll probably like some combo decks.</p>


                <P>Decks: <a class="anotherPage" href="Lands.php">Lands</a>, <a class="anotherPage"
                        href="Reanimator.php">Reanimator</a>, <a class="anotherPage" href="Show and Tell.php">Show and
                        Tell</a>, <a class="anotherPage" href="Dark Depths.php">Dark Depths</a>, <a class="anotherPage"
                        href="TES ANT.php">The Epic Storm(TES)/Ad Nauseum Tendrils(ANT)</a>, <a class="anotherPage"
                        href="Elves.php">Elves</a></p>
            </article>
        </div>

        <!-- Artwork on right -->
        <div class="rightCol">
            <img class="art" src="artwork/delver_art.jpg" alt="Delver of Secrets">
            <img class="art" src="artwork/Thalia_art.jpg" alt="Thalia, Guardian of Thraben">
            <img class="art" src="artwork/dark_depths_art.jpg" alt="Dark Depths">
            <img class="art" src="artwork/elvish_reclaimer_art.jpg" alt="Elvish Reclaimer">
            <img class="art" src="artwork/led_art.jpg" alt="Lion's Eye Diamond">
            <img class="art" src="artwork/rishadan_port_art.jpg" alt="Rishadan Port">
            <img class="art" src="artwork/echo_of_eons_art.jpg" alt="Echo of Eons">
            <img class="art" src="artwork/belcher_art.jpg" alt="Goblin Charbelcher">
            <img class="art" src="artwork/show_and_tell_art.jpg" alt="Show and Tell">
            <img class="art" src="artwork/hogaak_art.jpg" alt="Hogaak, Arisen Necropolis">
            <img class="art" src="artwork/grim_monolith_art.jpg" alt="Grim Monolith">
        </div>
    </div> <!-- end container-->

    <!-- Fetch footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>