<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 11/12/2020 -->

    <!-- *************************************Update Log*******************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purpose

	Update 11/16/2020
		-Added "Additional Resources" section
		
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions
	
	Update 11/12/2020
		-Wrote article
		-Created page
	**************************************End Update Log ****************************************************-->


    <title>The Eternal Hub - Show & Tell</title>
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
            <img class="art" src="artwork/show_and_tell_art.jpg" alt="Show and Tell">
            <img class="art" src="artwork/griselbrand_art.jpg" alt="Griselbrand">
            <img class="art" src="artwork/force_of_will_art.jpg" alt="Force of Will">
            <img class="art" src="artwork/emrakul_aeons_torn_art.jpg" alt="Emrakul, the Aeons Torn">
        </div>


        <div class="midCol">
            <h1>Sneak and Show</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Show and Tell is what you get when you want to play <a class="anotherPage"
                        href="Reanimator.php">Reanimator</a> but want to be able to play the slow game.</p>

                <h2>Strategy</h2>
                <p>Show and Tell decks are A+B combo decks focused around the deck's namesake card, <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Show and Tell">Show and Tell</a>. The goal is to
                    get
                    the mana to cast this as soon as possible, using things like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Lotus Petal">Lotus Petal</a> and the Sol lands to accelerate into
                    it as
                    early as turn 1. From there, you put a game-winning creature into play. This is either <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Griselbrand">Griselbrand</a> or
                    <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Emrakul, the Aeons Torn">Emrakul</a>.
                    The deck also plays <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Sneak Attack">Sneak Attack</a> to double up on the exploited
                    effect.
                </p>

                <p>Beyond that, the deck runs a full suite of cantrips to dig toward combo pieces and <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Force of Will">Force of Will</a>
                    and <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Daze">Daze</a> to protect the
                    combo
                    and stop your opponent's gameplan while you assemble.</p>

                <h2>Tips</h2>
                <ul>
                    <li>Don't keep hands without at least one of the combo pieces.</li>
                    <li>In response to hand disruption, you can <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Brainstorm">Brainstorm</a> to hide the best cards (usually a
                        combo
                        piece) on top of your library.</li>
                    <li>Shuffle off your <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Ponder">Ponders</a> aggressively. If you don't need one of the
                        cards you see, shuffle.</li>
                    <li>Assume your opponents always have <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Force of Will">Force</a> until you know what they're playing.
                    </li>
                    <li>Wait until you can protect it to cast your <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Show and Tell">Show and Tell</a>.</li>
                </ul>

                <h2>Variants</h2>
                <p>There are 2 primary variants of Sneak & Show that pop up regularly: traditional Blue-Red SnS and
                    Blue-Green Omnitell. The traditional UR version is described as "Sneak n Show" because of the
                    inclusion
                    of <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Sneak Attack">Sneak Attack</a>
                    and
                    is described above.</p>
                <p>The UG shell is almost entirely blue, unlike the traditional list, and focuses on putting an <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Omniscience">Omniscience</a> into
                    play off the <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Show and Tell">Show
                        and
                        Tell</a>. From here, they just cantrip away until they find one of the big scary creatures
                    (typically looking for <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Emrakul, the Aeons Torn">Emrakul</a>) and casting it for free to
                    win
                    the game. The only reason the deck plays green at all is <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Veil of Summer">Veil of Summer</a> in the maindeck as additional
                    protection for trying to combo off.</p>
                <p>It's very rare, but UB Show and Tell exists. The big change here is that it goes up on hand
                    disruption
                    like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Thoughtseize">Thoughtseize</a> as
                    the second way to protect the combo. I think the consensus is though that if you want to play
                    discard
                    spells and <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Griselbrand">Griselbrand</a>, you should just play <a
                        class="anotherPage" href="Reanimator.php">Reanimator</a>.</p>


                <h2>Additional Resources</h2>
                <p>Riley Knight did a wonderful <a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/channelmagic-articles/level-one-legacy-sneak-and-show/">primer
                        article</a> on Sneak and Show at the beginning of last year. As such, it doesn't include or take
                    into account many of the powerful new cards that have become staples in the format like <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Oko, Thief of Crowns">Oko, Thief
                        of
                        Crowns</a> but is still a very solid introduction to the thought patterns and justification of
                    card
                    inclusions. I think these insights are strong because they allow for extrapolation regardless of
                    metagame shifts or new cards.</p>
                <p>The most recognizable champion of this deck online is <i>MTGO</i> user JPA93, Jonathan Anghelescu. He
                    wrote an article in mid-2019 for <a class="anotherPage"
                        href="https://article.hareruyamtg.com/article/26578/?lang=en">Hareruya</a>. Again, while the
                    information is slightly dated and your list probably won't be perfectly identical, JPA's word is
                    gospel
                    on Sneak and Show strategies and his insights on the deck are worth their weight in gold.</p>
                <p><a class="anotherPage"
                        href="https://strategy.channelfireball.com/all-strategy/mtg/legacy-sneak-and-show-deck-guide/">Here</a>
                    is another CFB article that is much more recent and explains a lot of the reasoning behind new lists
                    and
                    sideboarding plans from JPA.</p>
            </article>
        </div>


        <!-- Right side art -->
        <div class="rightCol">
            <img class="art" src="artwork/omniscience_art.jpg" alt="Omniscience">
            <img class="art" src="artwork/sneak_attack_art.jpg" alt="Sneak Attack">
            <img class="art" src="artwork/lotus_petal_art.jpg" alt="Lotus Petal">
            <img class="art" src="artwork/brainstorm_art.jpg" alt="Brainstorm">
        </div>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>