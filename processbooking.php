<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="php to process booking forms">
        <meta name="keywords" content="HTML, Doctype, Head, Body, Meta, Paragraph, Headings, Strong, Emphasis">
        <meta name="author" content="Ethan Gibbons">
        <title>Booking Confirmation</title>
    </head>

    <body>
        <h1>Rohirrim Tour Booking Confirmation</h1>

        <?php
            if (isset ($_POST["firstname"])) {
                $firstname = $_POST["firstname"];
                echo "<p>This is a test: Your first name is $firstname</p>";
            }
            else {
                echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }

            if (isset ($_POST["lastname"])) {
                $lastname = $_POST["lastname"];
                echo "<p>This is a test: Your last name is $lastname</p>";
            }
            else {
                echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }

            if (isset ($_POST["age"])) {
                $age = $_POST["age"];
                echo "<p>This is a test: Your age is $age</p>";
            }
            else {
                echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }
            
            if (isset ($_POST["food"])) {
                $food = $_POST["food"];
                echo "<p>This is a test: Your food is $food</p>";
            }
            else {
                echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }

            if (isset ($_POST["partysize"])) {
                $partysize = $_POST["partysize"];
                echo "<p>This is a test: Your party size is $partysize</p>";
            }
            else {
                echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
            }

            if (isset ($_POST["species"])) {
                $species = $_POST["species"];
            }
            else {
                $species = "Unknown species";
            }
            
            if (isset ($_POST["4day"])) {$tour = "4 tour";}
            if (isset ($_POST["10day"])) {$tour = "10 tour";}
            if (isset ($_POST["4day"]) and ($_POST["10day"])) {$tour = "4 day and 10 day tours";}

            echo "<p>Welcome " . $firstname . " " . $lastname . "!<br>You are now booked on the " . $tour . 
            ".<br>Species: " . $species . "<br>Age: " . $age . "<br>Meal Preference: " . $food . 
            "<br>Number of travellers: " . $partysize . "</p>"
        ?>
        
    </body>
</html>