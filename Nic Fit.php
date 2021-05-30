<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/27/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		
	Update 10/29/2020
		-Wrote remainder of article
		-Added art elements
		
	Update 10/27/2020
		-Created page
		-Wrote Overview and Strategy sections of article
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Nic Fit</title>
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
            <img class="art" src="artwork/veteran_explorer_art.jpg" alt="Veteran Explorer">
            <img class="art" src="artwork/cabal_therapy_art.jpg" alt="Cabal Therapy">
            <img class="art" src="artwork/pernicious_deed_art.jpg" alt="Pernicious Deed">
            <img class="art" src="artwork/abrupt_decay_art.jpg" alt="Abrupt Decay">
        </div>




        <div class="midCol">
            <h1>Nic Fit</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>There are few remaining decks from Legacy's hayday of bizarre deck names. At one point, there were
                    such bizarre titles as Czech Pile and Sylvan Plug in every forum post. Now, the responsibility of
                    this legacy of naming falls almost entirely on Nic Fit. There are 2 stories I've heard about how the
                    deck got its name. I've heard that the name came from a typo on an old forum post describing the
                    deck's key interaction as a "nic fit" instead of a "nice fit." The other story I've heard is that
                    the deck was originally created by a smoker and they called it this because games tend to go so long
                    that you can't get a smoke in between rounds of an event, resulting in a nicotine fit. The name of
                    the deck doesn't really matter, this was just fun trivial knowledge that I like to share.</p>

                <h2>Strategy</h2>
                <p>Nic Fit is one of the fair Green-based decks of the format. The deck's goal is to play big, expensive
                    threats that the rest of the format doesn't really have answers to. However, it does this in a fair
                    and reasonable way: by actually casting the cards instead of "cheating" them out off of something
                    like <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Reanimate">Reanimate</a> or
                    <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Show and Tell">Show and Tell</a>.
                    Instead, it tries to accelerate into these threats using <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Veteran Explorer">Veteran Explorer</a> and sacrificing it to <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Cabal Therapy">Cabal Therapy</a>
                    for a disruptive element. This is also one of the cheaper decks in the format to build because most
                    of the mana base is basic lands to leverage <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Veteran Explorer">Veteran Explorer's</a> ability while many Legacy
                    decks don't run enough basic lands to get any advantage from this symmetrical effect.
                </p>

                <p>Another key card in Nic Fit's strategy is <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Pernicious Deed">Pernicious Deed</a>. The idea is that you pave the
                    way for your big threats by destroying everything small, typically converted mana cost (CMC) 3 or
                    less - pretty much every permanent in the format! Beyond these 3 core cards, the decklist is pretty
                    much up to the player's discretion. Typically, a combination of strong planeswalkers and value
                    engine cards like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Tireless Tracker">Tireless Tracker</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Sylvan Library">Sylvan Library</a>.</p>


                <h2>Tips</h2>
                <ul>
                    <li>Wait a turn or two and learn what you're playing against before casting your <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Cabal Therapy">Therapies</a>
                        so you know what you want to name</li>
                    <li>If you have a <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Veteran Explorer">Veteran Explorer</a> on the field, attack
                        with it before sacrificing it to the back half of a <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Cabal Therapy">Therapy</a> unless you absolutely have to take
                        another card right away</li>
                    <li>You can afford to be attacked a few times if it means you get more value out of your <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Pernicious Deed">Pernicious
                            Deeds</a></li>
                </ul>

                <h2>Variants</h2>
                <p>Nic Fit is one of the most diverse decks in the format. It can be pretty much any combination of
                    colors in addition to the base Black-Green shell for the deck's core combo. There are a few
                    generally accepted staples in different combinations. For example, the version that plays blue often
                    includes <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Leovold, Emissary of Trest">Leovold</a> and the version with white
                    normally plays <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Thalia, Guardian of Thraben">Thalia</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Siege Rhino">Siege Rhino</a>.</p>

                <p>One of the more common versions of this deck that I have seen is known as Rector Nic Fit because it
                    uses <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Arena Rector">Arena
                        Rector</a> as a way to try to get out big, powerful planeswalkers early on and take over the
                    game with them and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Academy Rector">Academy Rector</a> to grab powerful enchantments.
                </p>

                <h2>Additional Resources</h2>
                <p>The best places I found to learn about this deck were YouTube videos from PleasantKenobi (<a
                        class="anotherPage" href="https://www.youtube.com/watch?v=Zg5cDFzcpbc&t=1129s">Deck Tech</a> and
                    <a class="anotherPage" href="https://www.youtube.com/watch?v=Y5JWZJMwiYA&t=7508s">gameplay</a>) and
                    <a class="anotherPage" href="https://strategy.channelfireball.com/all-strategy/tag/nic-fit/">Channel
                        Fireball articles</a>. This deck isn't super commonly played and is usually considered a bit of
                    a joke by the community, so there unfortunately aren't a lot of resources dedicated to it like we
                    find with other archetypes.
                </p>

            </article>
        </div>








        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/dryad_arbor_art.jpg" alt="Dryad Arbor">
            <img class="art" src="artwork/swords_art.jpg" alt="Swords to Plowshares">
            <img class="art" src="artwork/noble_hierarch_art.jpg" alt="Noble Hierarch">
            <img class="art" src="artwork/ramunap_excavator_art.jpg" alt="Ramunap Excavator">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>