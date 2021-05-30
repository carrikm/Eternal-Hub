<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/04/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		
	Update 11/04/2020
		-Created page
		-Wrote article
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Red Prison</title>
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
            <img class="art" src="artwork/chalice_of_the_void_art.jpg" alt="Chalice of the Void">
            <img class="art" src="artwork/blood_moon_art.jpg" alt="Blood Moon">
            <img class="art" src="artwork/goblin_rabblemaster_art.jpg" alt="Goblin Rabblemaster">
            <img class="art" src="artwork/trinisphere_art.jpg" alt="Trinisphere">
        </div>


        <div class="midCol">
            <h1>Red Prison</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Red Prison is one of the premier control decks of the format and also one of the few decks in this
                    category that won't let you cast <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Force of Will">Force of Will</a>.

                <h2>Strategy</h2>
                <p>Red Prison is a deck that aims to lock the opponent out of casting spells through the use of
                    disruptive elements like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Chalice of the Void">Chalice of the Void</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Trinisphere">Trinisphere</a>,
                    followed by either a fast clock with aggressive creatures or a planeswalker.</p>
                <p>To help the deck get disruption out as early as possible, it runs a lot of acceleration in the form
                    of the format's Sol Lands <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Ancient Tomb">Ancient Tomb</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/City of Traitors">City of Traitors</a>, as well as
                    <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Chrome Mox">Chrome Mox</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Simian Spirit Guide">Simian
                        Spirit Guide</a>. This powerful collection can have you casting a trinisphere on turn 1 followed
                    by a <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Chandra, Torch of Defiance">Chandra</a> or <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Karn, the Great Creator">Karn</a> as early as turn
                    2.
                </p>

                <h2>Tips</h2>
                <ul>
                    <li>Identify whether your hand is more control or aggro focused and which role you should be filling
                        in a matchup. This will help with mulligan decisions.</li>
                    <li>Most of your hands will have a clear plan. Play to it!</li>
                    <li>If you have a hand with lock pieces and threats and you don't know what your opponent is
                        playing, cast your lock pieces first.</li>
                    <li>Use <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Blood Moon">Blood Moon</a>
                        or <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Magus of the Moon">Magus of
                            the Moon</a> to avoid sacrificing your <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/City of Traitors">City of Traitors</a> when you play your next
                        land.</li>
                </ul>

                <h2>Additional Resources</h2>
                <p>Phil Gallagher of <a class="anotherPage" href="http://thrabenuniversity.com">Thraben U</a> is quite a
                    fan of this archetype, and was a great resource for me in writing the "Tips" section of this
                    article. He is friendly and always willing to talk to people about Magic.</p>
                <p><a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/level-one-legacy-mono-red-prison/">Channel
                        Fireball</a> has a good primer article for the deck, albeit this was made before the deck
                    adopted the "karn package" of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Karn, the Great Creator">Karn, the Great Creator</a> and a handful
                    of situational artifacts in the sideboard to tutor out with it. If you want to read a Reddit thread
                    about the deck with this change, I found <a class="anotherPage"
                        href="https://www.reddit.com/r/MTGLegacy/comments/cp0xx9/exploring_the_current_state_of_red_prison_or_how/">this
                        primer</a>.</p>
                <p>If you're like me and prefer to do your learning from watching other players pilot the deck, there
                    are also some good videos from <a class="anotherPage"
                        href="https://www.youtube.com/watch?v=luifsUtoGsU">PleasantKenobi</a> and <a class="anotherPage"
                        href="https://www.youtube.com/watch?v=XVRC0ujmAWo">Andrea Mengucci</a> through Channel Fireball.
                    Phil also has several recordings of his streams with the deck available on YouTube <a
                        class="anotherPage" href="https://www.youtube.com/watch?v=ySzzUGzSUFM">here</a>, <a
                        class="anotherPage" href="https://www.youtube.com/watch?v=bVl9YXtII08">here</a>, and <a
                        class="anotherPage" href="https://www.youtube.com/watch?v=ABnGSwpZggg">here</a>, as well as <a
                        class="anotherPage" href="https://www.youtube.com/watch?v=gSr3iTH4RZ4">a breakdown of his
                        performance</a> in a <i>Magic Online</i> Legacy Challenge.</p>
            </article>
        </div>


        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/simian_spirit_guide_art.jpg" alt="Simian Spirit Guide">
            <img class="art" src="artwork/legion_warboss_art.jpg" alt="Legion Warboss">
            <img class="art" src="artwork/karn_the_great_creator_art.jpg" alt="Karn, the Great Creator">
            <img class="art" src="artwork/chandra_torch_of_defiance_art.jpg" alt="Chandra, Torch of Defiance">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>