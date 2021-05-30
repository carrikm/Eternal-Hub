<?php

$messageSent = false;
// verify that they have entered something in all boxes
if ((isset($_POST['contactName']) && $_POST['contactName'] != '') &&
    (isset($_POST['contactEmail']) && $_POST['contactEmail'] != '') &&
    (isset($_POST['subject']) && $_POST['subject'] != '') &&
    (isset($_POST['emailMessage']) && $_POST['emailMessage'] != '')
) {
    if (filter_var($_POST['contactEmail'], FILTER_VALIDATE_EMAIL)) {
        // variables for information from form
        $name = $_POST['contactName'];
        $email = $_POST['contactEmail'];
        $subject = $_POST['subject'];
        $message = $_POST['emailMessage'];

        // me
        $sendTo = "carrikmcnerlin@gmail.com";
        $body = "";

        $body .= "From: " . $name . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        // send message
        mail($sendTo, $subject, $body);
        $messageSent = true;
    } else {
        $messageSent = false;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Carrik McNerlin, last edited 05/29/2021 -->
    <!-- Page created 10/16/2020 -->
    <!-- This is just a contact info page for others to reach out to me-->

    <!-- *************************************Update Log**********************************************************
	Update 05/29/2021
		-Added email form
		-Added Bootstrap

	Update 11/13/2020
		-Changed file to .php for "include" method use with header and footer filesize
		-Corrected internal links to .php extensions

	Update 10/23/2020
		-Fixed "Home" and "Contact Us" links on nav bar
		-Added footer
	
	Update 10/16/2020
		-Created page
		-Wrote page content
	****************************************End Update Log ****************************************************-->

    <title>The Eternal Hub - Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import general use CSS file for the page's content -->
    <link rel="stylesheet" href="article styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- Logo and Nav bar -->
    <?php
    include("Header.html");
    ?>

    <div class="container">
        <article>
            <h1>Ways to Reach Me</h1>

            <p>Thank you for your interest in my website! If you'd like to reach out to me, I can be found at the
                following:</p>
            <ul name="contactList">
                <li><a class="external_link" href="http://carrikmcnerlin.wordpress.com/">My Resume</a></li>
                <li><a class="external_link" href="http://facebook.com/carrikm/">Facebook</a></li>
                <li><a class="external_link" href="http://linkedin.com/in/carrikmcnerlin">LinkedIn</a></li>
                <li><a class=external_link" href="http:/>/github.com/carrikm">GitHub</a></li>
            </ul>


            <div class="emailContainer">
                <?php

                if (!$messageSent) :
                ?>
                <h3 class="emailTitle">Email Me</h3>
                <form action="Contact-Us.php" method="POST" enctype="multipart/form-data" class="form" name="emailForm">
                    <div class="form-group">
                        <label for="contactName">Name*:</label>
                        <input type="text" id="contactName" name="contactName" required>
                    </div>

                    <div class="form-group">
                        <label for="contactEmail">Email*:</label>
                        <input type="email" id="contactEmail" name="contactEmail" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject*:</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="emailMessage">Message*:</label>
                        <textarea id="emailMessage" name="emailMessage" cols="30" rows="10" required></textarea>
                        <br />
                    </div>

                    <button class="emailSubmit" type="submit">Send</button>
                </form>
                <p class="requireNotice">*=required</p>
                <?php
                else :
                ?>
                <!-- show success message if email  sent or form -->
                <div id="status" class="success">Email Sent!</div>
                <?php
                endif;
                ?>
            </div>



        </article>
    </div> <!-- end container -->

    <!-- Footer -->
    <?php
    include("Footer.html");
    ?>
</body>

</html>
