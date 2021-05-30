<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/05/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
		
	Update 11/05/2020
		-Wrote article
		-Created page
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Reanimator</title>
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
            <img class="art" src="artwork/griselbrand_art.jpg" alt="Griselbrand">
            <img class="art" src="artwork/reanimate_art.jpg" alt="Reanimate">
            <img class="art" src="artwork/chancellor_of_the_annex_art.jpg" alt="Chancellor of the Annex">
            <img class="art" src="artwork/entomb_art.jpg" alt="Entomb">
        </div>


        <div class="midCol">
            <h1>Reanimator</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>What would you say if I told you that you can have 8-drop creatures on the field as early as turn 1?
                    It's more likely than you think with Reanimator!</p>

                <h2>Strategy</h2>
                <p>Reanimator is typically a BR deck and one of the staple combo lists of the format. It's an A+B combo
                    deck based around getting big, powerful creatures (typically <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Griselbrand">Griselbrand</a>) into the graveyard and reanimating
                    them with one of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Reanimate">Reanimate</a>, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Animate Dead">Animate Dead</a>, or <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Exhume">Exhume</a>. To get them into the graveyard,
                    the deck runs <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Faithless Looting">Faithless Looting</a>, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Entomb">Entomb</a>, and discard spells like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Unmask">Unmask</a> and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Cabal Therapy">Cabal Therapy</a>,
                    which can be used either to get fatties into the graveyard or to protect your reanimation spells
                    from opposing countermagic and disruption. The deck splashes into white and green for answers to
                    disruption in the sideboard.</p>

                <p>Reanimator tends to run a mostly uniform list with stock creature slots in the form of 4 <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Griselbrand">Griselbrands</a> and
                    4 copies of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Chancellor of the Annex">Chancellor of the Annex</a> as a secondary
                    reanimation target and an additional piece of protection for your fast combo. From there, a few flex
                    slots exist. Common go-tos are <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Ashen Rider">Ashen Rider</a> as an answer to troublesome permanents
                    that dodges <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Karakas">Karakas</a>
                    and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Elesh Norn, Grand Cenobite">Elesh Norn</a> to shut down small
                    creature decks like <a class="anotherPage" href="Elves.php">Elves</a> and <a class="anotherPage"
                        href="Death and Taxes.php"> Death & Taxes</a>. </p>

                <p>In post-sideboard games, Reanimator has 2 plans that it can play. You can try to deal with your
                    opponent's graveyard hate (they always have it because this deck is always around) using things like
                    <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Assassin's Trophy">Assassin's
                        Trophy</a> and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Reverent Silence">Reverent Silence</a> or try to play a slightly
                    more fair game and not rely as heavily on your graveyard. Ways to do this include the more
                    reasonably castable <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Grave Titan">Grave Titan</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Lake of the Dead">Lake of the Dead</a> package or
                    trying to play a slower, grindy game with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Cryptbreaker">Cryptbreakers</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Pack Rat">Pack Rats</a>. It's not uncommon to see
                    players bring in answers to hate in addition to one or two copies of these cards to hedge against
                    unexpected hate pieces.
                </p>

                <h2>Tips</h2>
                <ul>
                    <li>Hold your hand disruption until the turn you want to go off or the turn before.</li>
                    <li><a class="card_link" target="_blank" href="http://deckbox.org/mtg/Exhume">Exhume</a> plays
                        around <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Surgical Extraction">Surgical Extraction</a> as long as you
                        have 2 different creatures in your graveyard.</li>
                    <li>You can also play around most graveyard "nukes" like <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Surgical Extraction">Surgical</a> and <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Crop Rotation">Crop Rotation</a> into <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Bojuka Bog">Bojuka Bog</a>
                        with an <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Exhume">Exhume</a> and
                        waiting for the graveyard killer to resolve before casting <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Entomb">Entomb</a></li>
                    <li>Play a spread of black fetchlands to avoid being locked out of your mana by <a class="card_link"
                            target="_blank" href="http://deckbox.org/mtg/Pithing Needle">Pithing Needle</a>.</li>
                    <li>Wait to use fetchlands to play around <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Wasteland">Wasteland</a> until you need to use that color.</li>
                </ul>


                <h2>Variants</h2>
                <p>While BR is the most common version, the deck actually started as UB shell. This version played <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Force of Will">Force of Will</a>
                    to protect its combo and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Careful Study">Careful Study</a> in place of <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Faithless Looting">Faithless Looting</a> to dig/put
                    fatties from your hand into the bin. I've seen this version of the deck perhaps twice in my ~2 years
                    of playing Legacy. It was historically okay in slow, control metas; but the addition of <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko</a> to
                    those decks to effectively blank your threats has effectively been the last nail in this shell's
                    coffin and I don't expect to see any reanimation spells to bring it back.</p>
                <p>There is a blazing fast, glass cannon BW version of Reanimator known as Tin Fins. This version
                    mulligans super aggressively (even more than the BR version, which is often resilient enough to mull
                    down to 4 or 5 and still win) to get out <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Griselbrand">Griselbrand</a> and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Children of Korlis">Children of Korlis</a> and keep
                    reanimating and sacrificing the Children to regain all the life you lost from drawing with
                    Griselbrand, allowing you to draw even more cards. This shell wants to jam this combo and get a
                    storm kill with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Tendrils of Agony">Tendrils of Agony</a> after casting a lot of 0
                    or 1 mana spells. This package is sometimes ported into the BR lists as well as some <a
                        class="anotherPage" href="Dark Depths.php">Dark Depths</a> lists as a backup plan.</p>

                <h2>Additional Resources</h2>
                <p>The de facto king of reanimator is Eric Landon (ewlandon on <i>MTGO</i>, @Ewlandon1 on Twitter). The
                    man is one of the all-time trophy leaders for Magic Online tournaments, especially if you consider
                    his alternate accounts that he does deck testing on. Here is a link to <a class="anotherPage"
                        href="https://www.youtube.com/user/ewlandon">his YouTube channel</a>.</p>
            </article>
        </div>



        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/dark_ritual_art.jpg" alt="Dark Ritual">
            <img class="art" src="artwork/ashen_rider_art.jpg" alt="Ashen Rider">
            <img class="art" src="artwork/elesh_norn_art.jpg" alt="Elesh Norn">
            <img class="art" src="artwork/animate_dead_art.jpg" alt="Animate Dead">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>