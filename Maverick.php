<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/25/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 10/25/2020
		-Created page
		-Wrote entire article
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Maverick</title>
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
            <img class="art" src="artwork/green_sun_zenith_art.jpg" alt="Green Sun's Zenith">
            <img class="art" src="artwork/knight_of_the_reliquary_art.jpg" alt="Knight of the Reliquary">
            <img class="art" src="artwork/Thalia_art.jpg" alt="Thalia, Guardian of Thraben">
            <img class="art" src="artwork/abrupt_decay_art.jpg" alt="Abrupt Decay">
        </div>



        <!-- Actual Content -->
        <div class="midCol">
            <h1>Maverick</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Maverick is a midrange "toolbox" strategy that leverages ramping into its own powerful spells and
                    mana denial elements from its sister deck, <a class="anotherPage"
                        href="Death and Taxes.php">D&T</a>.</p>


                <h2>Strategy</h2>
                <p>Maverick is an interesting beast to study. The deck runs several seemingly disparate strategies in
                    the same pile. You'll see mana dorks like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Noble Hierarch">Noble Hierarch</a> played alongside <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wasteland</a> and <a
                        class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Thalia, Guardian of Thraben">Thalia, Guardian of Thraben</a>. <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Green Sun's Zenith">Green Sun's
                        Zenith</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Knight of the Reliquary">Knight of the Reliquary</a> allow for a
                    "toolbox" of creatures and lands, respectively. This means that you can play single copies of
                    "silver bullet" cards that can single-handedly defeat different strategies.</p>


                <h2>Tips</h2>
                <ul>
                    <li>One of the most powerful things you can do in your first turn is playing a land, then casting <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Green Sun's Zenith">Green
                            Sun's Zenith</a> for X=0 to get <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Dryad Arbor">Dryad Arbor</a> as early ramp.</li>
                    <li>If you use <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Maze of Ith">Maze
                            of Ith</a> in your deck, you can attack with <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Knight of the Reliquary">Knight of the Reliquary</a> and then
                        untap it between damage and your second main phase to give it pseudo-vigilance to activate its
                        land ability too.</li>
                    <li><a class="card_link" target="_blank" href="http://deckbox.org/mtg/Ramunap Excavator">Ramunap
                            Excavator</a> and <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Wasteland">Wasteland</a> is a super strong combo to keep your
                        opponent from casting spells.</li>
                    <li>Learn what colors your opponents run and how many nonbasics of those colors they use to make
                        your <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wastelands</a>
                        more potent.</li>
                </ul>

                <h2>Variants</h2>
                <p>There aren't really any variations in this deck. Some people will play different cards in the deck's
                    flex slots, but the shell is always the same. There's no change in the colors the deck runs or
                    anything like that. It's always White, Black, and Green.</p>

                <h2>Additonal Resources</h2>
                <p>From time to time, you'll be able to find an entire website dedicated to a specific archetype. These
                    pages are full of insanely valuable information for players of all skill levels. Fortunately, there
                    is a dedicated Maverick site, <a class="anotherPage"
                        href="http://www.greensunzenith.com">GreenSunZenith.com</a> run by avid Legacy lover and beloved
                    member of our community, Douges. If you want to know more about the deck, I encourage you to check
                    out his site and stream.</p>

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