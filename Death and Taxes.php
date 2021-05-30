<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/6/2020 -->

    <!-- *************************************Update Log**********************************************************
	Update 05/29/2021
		-Added Bootstrap
		-Moved <h1> tag inside "midCol" for scaling purposes
	
	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 10/23/2020
		-Fixed "Home" and "Contact Us" links on nav bar
		-Added Footer
	
	Update 10/19/2020
		-Fixed a link I missed when adding the "anotherPage" class name
		-Clarified wording of one of the "Tips"
		-Edited the disclaimer at the top of the page

	Update 10/17/2020
		-Added class "anotherPage" to links for other pages, internal and external, so they show up as the light green color
		-Added "Additional Resources" section of article
		-Updated page to new navigation bar
		
	Update 10/13/2020
		-Added art files to left and right side of page
		-Added "Tips" section to the article
	
	Update 10/6/2020
		-Created page
		-Wrote article "Overview," "Strategy," "Caveat," and "Variants" sections
	****************************************End Update Log ****************************************************-->

    <title>The Eternal Hub - Death & Taxes</title>
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
        <p class="disclaimer">I know a lot about Legacy, but it's tough to know everything about every deck. If I can
            connect you to better resources than myself, particularly dedicated websites, I will absolutely do so. I am
            good friends with Phil Gallagher, the owner of <a class="anotherPage" href="http://thrabenuniversity.com">a
                dedicated page for D&T</a>, and ask him if I'm unsure about anything related to the deck. The content on
            this page is all our own, but I cannot deny Phil's influence in my understanding of the deck. Thanks Phil!
        </p>

        <br />

        <!-- Artwork on left side of page -->
        <div class="leftCol">
            <img class="art" src="artwork/Thalia_art.jpg" alt="Thalia, Guardian of Thraben">
            <img class="art" src="artwork/vial_art.jpg" alt="Aether Vial">
            <img class="art" src="artwork/stoneforge_art.jpg" alt="Stoneforge Mystic">
            <img class="art" src="artwork/flickerwisp_art.jpg" alt="Flickerwisp">
        </div>


        <!-- The actual text of the page goes here -->
        <div class="midCol">
            <h1>Death and Taxes</h1>
            <article class="mainArticle">
                <h2>Overview</h2>
                <p>Death and Taxes is a midrange deck that also sees some play in Modern using a few substitutions to
                    achieve the same effect. D&T is fun to play because the play patterns are so diverse. As my friend,
                    creator of <a class="anotherPage" href="http://www.thrabenuniversity.com">Thraben U</a>, Phil
                    Gallagher once said, "[y]ou are playing an aggro control deck with strong prison elements." I
                    personally like to describe it as being a Fair deck with a capital "F." It's fair in the same way
                    that Dark Souls is fair; that is, it's fair to the most extreme degree. You want to stop your
                    opponent from casting spells and resolving effects that are considered to be "unfair" or "broken" in
                    the game and force them to play a reasonable game of Magic with a few low-cost creatures and spells
                    that don't generate a ton of advantage.</p>

                <h2>Strategy</h2>
                <p>The primary gameplan of D&T is to use cards like <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Wasteland">Wasteland</a>, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Rishadan Port">Rishadan Port</a>, and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Thalia, Guardian of Thraben">Thalia</a> to limit
                    your opponent's resources while you beat them down with other small creatures that restrict their
                    ability to win the game. In the mean time, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Mother of Runes">Mother of Runes</a> helps to protect your key
                    creatures from removal spells. All of this is carefully held together by <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Aether Vial">Aether Vial</a> to allow you to deploy
                    threats while you use your resources to limit your opponent as much as possible. The deck almost
                    feels like <a class="anotherPage" href="Delver.php">Delver</a> in this respect, except we actively
                    want a long game instead of trying to close it out as quickly as possible because of our late-game
                    inevitability.</p>

                <p>One of the best things about playing Taxes is the secure manabase. Basic lands are super strong in a
                    format with <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Wasteland">Wasteland</a>, and one of the priveleges of playing a
                    mono-colored deck (in addition to not needing to buy those pricy dual lands) is getting to laugh at
                    effects that punish nonbasic lands sitting on the other side of the table. Most Taxes lists run
                    between 22 and 24 lands, with about 12 of those being basic Plains. The other slots are filled out
                    with <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Wasteland">Wasteland</a>, <a
                        class="card_link" target="_blank" href="http://deckbox.org/mtg/Rishadan Port">Rishadan Port</a>,
                    and some combination of <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Karakas">Karakas</a>, <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Mishra's Factory">Mishra's Factory</a>, and <a class="card_link"
                        target="_blank" href="http://deckbox.org/mtg/Cavern of Souls">Cavern of Souls</a> depending on
                    the metagame.</p>


                <h2>Tips</h2>
                <ul>
                    <li><a class="card_link" target="_blank" href="http://deckbox.org/mtg/Flickerwisp">Flickerwisp</a>
                        is a Swiss-army knife in this deck, especially when given pseudo-flash with an <a
                            class="card_link" target="_blank" href="http://deckbox.org/mtg/Aether Vial">Aether Vial</a>
                        on 3. You can see some of the many possible uses <a class="anotherPage"
                            href="http://www.thrabenuniversity.com/?page_id=37">here</a>.</li>
                    <li>Learn as much about the other decks in the format as you can, especially the amount of basic
                        lands they run. More knowledge of the format correlates strongly with an increased win rate with
                        this deck.</li>
                    <li>Try to figure out whether you are the control deck or aggro deck. This helps you decide how to
                        play out your turns. (Note: Your role can change quickly in certain matchups; it isn't always
                        static.)</li>
                    <li>Wait as long as you can to do most actions. This gives you the most information to work with.
                    </li>
                    <li>Generally, you want to use your <a class="card_link" target="_blank"
                            href="http://deckbox.org/mtg/Rishadan Port">Rishadan Port</a> at your opponent's upkeep, but
                        sometimes you should wait until their end step (particularly against control) so that you can
                        more effectively cut them off of specific interaction for your turn.</li>
                </ul>



                <h2>Variants</h2>
                <p>From time to time you'll see D&T variants that splash different colors for access to powerful effects
                    like <a class="card_link" target="_blank" href="http://deckbox.org/mtg/Force of Will">Force of
                        Will</a> or <a class="card_link" target="_blank"
                        href="http://deckbox.org/mtg/Plague Engineer">Plague Engineer</a>. These decks may have more
                    powerful spells and abilities, and can even manage to pull out some tournament results from time to
                    time, but the general consensus among the deck's community of experts is that it's just not worth
                    giving up your consistent mana. In certain metagames, it isn't unreasonable; but generally if you
                    want the strengths of another color, there are other shells that will be better for what you want to
                    do.</p>
                <p>That said, if you have your heart set on seeing the pros and cons of the various splashes, they can
                    all be found on <a class="anotherPage" href="http://thrabenuniversity.com">Phil's site</a> under the
                    "D&T Basics" tab.</p>



                <h2>A Caveat</h2>
                <p>D&T is often one of the first decks people look at when they come to Legacy because it's so much
                    cheaper than most other decks. That doesn't mean it's a beginner deck though. It rewards a lot of
                    metagame knowledge and is very punishing of mistakes from not knowing the other decks of the format
                    inside and out. As someone who did it, I don't recommend trying to start playing Legacy with Taxes.
                    If you do, at least expect to lose a lot in the beginning. Other decks have a learning curve. I'd
                    say D&T has more of a learning cliff that you have to climb. All the while, you have a handful of
                    slots in your main deck and pretty much your entire sideboard that should change often with the
                    metagame, so you don't even have the consistency of being able to memorize your 75 while you learn
                    what's happening on the other side of the table. The deck is tough, but extremely rewarding when you
                    finally get your feet under you. As a result of playing exclusively Taxes for almost 2 years before
                    branching out, I feel pretty confident in my ability to pick up and pilot most decks with some
                    amount of competence.</p>



                <h2>Additional Resources</h2>
                <p>If you couldn't tell from how many times I referenced him and his website, I am convinced that Phil
                    Gallagher's page <a class="anotherPage" href="http://thrabenuniversity.com">Thraben University</a>
                    is the leading source of information on this deck. Additionally, Twitch streamer xJCloud is known
                    for his prowess with the deck. As a rule, if neither of them likes a card in the deck for a given
                    meta, that card probably shouldn't be in your 75 at the moment.

            </article>
        </div>

        <!-- Artwork on right side of page -->
        <div class="rightCol">
            <img class="art" src="artwork/mother_of_runes_art.jpg" alt="Mother of Runes">
            <img class="art" src="artwork/swords_art.jpg" alt="Swords to Plowshares">
            <img class="art" src="artwork/phyrexian_revoker_art.jpg" alt="Phyrexian Revoker">
            <img class="art" src="artwork/recruiter_art.jpg" alt="Recruiter of the Guard">
        </div>

    </div> <!-- end container -->

    <!-- Footer -->
    <?php
	include("Footer.html");
	?>
</body>

</html>