<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/12/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purposes
	
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		
	Update 11/12/2020
		-Wrote article
		-Created page
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Lands</title>
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
            <img class="art" src="artwork/dark_depths_art.jpg" alt="Dark Depths">
            <img class="art" src="artwork/punishing_fire_art.jpg" alt="Punishing Fire">
            <img class="art" src="artwork/thespian_stage_art.jpg" alt="Thespian Stage">
            <img class="art" src="artwork/tabernacle_art.jpg" alt="Tabernacle at Pendrell Vale">
        </div>


        <div class="midCol">
            <h1>Lands</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>If you don't like playing or losing to blue decks but also want to play a grindy deck, Lands may be
                    the list for you.</p>

                <h2>Strategy</h2>
                <p>Lands is a toolbox deck consisting of several packages of value cards, all including at least one of
                    the strongest lands in the game. The deck's core is a Red-Green shell with <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Taiga">Taiga</a> as a great tell that you're
                    playing against it (it's one of only 2 or 3 decks that I can think of that do so, since Bryant Cook
                    started including it in <a class="anotherPage" href="TES ANT.php">TES</a>), but the card that really
                    holds this deck together is <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Life from the Loam">Life from the Loam</a>. Ideally, you'll be
                    dredging and casting Loam every turn. </p>
                <p>There area few combos that this deck runs. <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Life from the Loam">Loam</a> gets back all of the lands you discard
                    or destroy with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a>, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Mox Diamond">Mox Diamond</a>, and your <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wastelands</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Ghost Quarter">Ghost
                        Quarters</a>. Using <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Exploration">Exploration</a>, you can have some really explosive
                    ramp starts. One of the other core synergies of the deck is recurring <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Punishing Fire">Punishing Fire</a> with <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Grove of the Burnwillows">Grove
                        of the Burnwillows</a> as a form of removal and direct damage.</p>

                <p>In addition to the combos in this deck, it runs a few utility lands that can be fetched up with <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a>.
                    This typically includes <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Glacial Chasm">Glacial Chasm</a>, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Bojuka Bog">Bojuka Bog</a>, and the famous reason
                    most people can't afford this deck in paper: <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Tabernacle at Pendrell Vale">Tabernacle at Pendrell Vale</a>.</p>

                <p>Recent sets have given Lands another way to grind for a win in the form of <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Field of the Dead">Field of the Dead</a>. Gone are
                    the days where you absolutely have to make a 20/20 like our sister deck <a class="anotherPage"
                        href="Dark Depths.php">Depths</a>. Now, you just have inevitability in the forme of a horde of
                    zombies. We've also gotten the addition of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Valakut Exploration">Valakut Exploration</a> as a way to close
                    games out.</p>

                <h2>Tips</h2>
                <ul>
                    <li>Plan out your first few turns from your opening hand. This deck has a lot of moving parts, and
                        you can realistically recur a land from your graveyard early on.</li>
                    <li>Play your <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Dark Depths">Dark
                            Depths</a> and <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Thespian's Stage">Thespian's Stages</a> out as close to the
                        turn you produce Marit Lage as possible.</li>
                    <li>Copy basic lands when you can with <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Thespian's Stage">Thespian's Stage</a> to protect it from
                        opposing <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Wasteland">Wastelands</a>.</li>
                </ul>

                <h2>Variants</h2>
                <p>Recently, the printing of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Uro, Titan of Nature's Wrath">Uro</a> has created
                    the only variation on the lands deck, where the deck gives up on the <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Punishing Fire">Punishing Fire</a> + <a
                        class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Grove of the Burnwillows">Grove</a> combo to go into UG instead,
                    sometimes with a small splash into red for the sideboard. Otherwise, the only real variaion is in
                    the flexible utility land slots.</p>

                <h2>Additional Resources</h2>
                <p>As usual, Channel Fireball has <a class="anotherPage"
                        href="https://www.youtube.com/watch?v=_U1jdo-Sf2A">a video</a> from a member of their team (in
                    this case the one and only LSV) playing the deck. This list is, of course, a bit out of date but the
                    strategy is largely the same. Luis Scott-Vargas is one of the best players the game has ever seen,
                    and his prowess shows pretty easily in this video. If you can find footage of him playing a deck,
                    that's always a premium resource to study.</p>
            </article>
        </div>



        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/crop_rotation_art.jpg" alt="Crop Rotation">
            <img class="art" src="artwork/mox_diamond_art.jpg" alt="Mox Diamond">
            <img class="art" src="artwork/exploration_art.jpg" alt="Exploration">
            <img class="art" src="artwork/life_from_the_loam_art.jpg" alt="Life from the Loam">
        </div>
    </div> <!-- end container -->


    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>