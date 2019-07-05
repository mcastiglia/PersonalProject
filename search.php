<?php // PHP Scripting (Database Stuff)
require_once "db.php"; // Gives Connection Information for DB

if(isset($_POST['search'])){ // If There is Anything in the Search Box
    // PlaceHolder
    ///
    /// Will Narrow Down vets in database that show on page to what was typed in the search box.
    ///
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search | FindAVet PBC</title>
        <!--Sets Meta Tags for SEO (later)-->
        <meta charset="UTF-8">
        <meta name="description" content="FindAVet PBC">
        <meta name="keywords" content="Vet, Find, Palm Beach, County, Palm Beach County, Find a Vet, Find a Vet Palm Beach County, Find a Vet PBC, PBC">
        <meta name="author" content="Michael Castiglia">
        <!--Makes it look good on all devices (everything scales to the width of the screen-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Sets Stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <header>
            <div class="menu"> <!--Makes it easily styleable-->
                <!--Also clickable, can discard checkbox and make menu with this-->
                <label for="menu">
                    <!--For the hamburger menu-->
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <input type="checkbox" id="menu"> <!--Hamburger menu button for mobile (used only for css)-->
            <nav>
                <!--Actual Links for Navigation-->
                <a href="index.html">Home</a>
                <a href="#">Search</a> <!--Makes Navigation Faster to Same Page-->
                <a href="about.html">About</a>
            </nav>
        </header>
        <article>
            <h2 class="header">Find A Vet!</h2> <!--Header Tag for Search Page-->
        </article>
        <footer>
            <p class="footerp">
                © Michael Castiglia 2019. All Rights Reserved. This site is for the sole use of education (IB MYP Personal Project). <!--Copyright Information-->
            </br>
                <a href="index.html">Home</a> - <a href="#">Search</a> - <a href="about.html">About</a> <!--Links for Footer (In Case Something Breaks in Header)-->
                                            <!--Makes Navigation Faster to Same Page-->
            </p>
        </footer>
    </body>
</html>