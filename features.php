<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>CV</title>
</head>
<body>
    <div class="grid-wrapper">

        <?php include("includes/header-footer.php"); ?>

        <div id="main_section">
            <h1>Featured Features</h1>
            <h2>What's this page about?</h2>
            <p>This page will be a showcase for various skills and features.</p>
            <p>Things like ...</p>
            <ul>
                <li>A map that uses the Google API to centre on the visitor's location</li>
                <li>A weather forecast based upon the visitor's current location - Met Office API</li>
                <li>Some JavaScript stuff that does fancy DOM manipulation</li>
                <li>CSS transitions</li>
                <li>Form(s) retrieving and writing to a database using PHP</li>
                <li>A contact section</li>
                <li>Authentication</li>
                <li>Whatever else occurs to me along the way</li>
            </ul>

        </div>

    <!-- TODO The 'skils side bar' is only intended to appear on the CV page -->
        <aside class="skills_side_bar">
            <p>Maybe include the side bar on this page?</p>

        </aside>

        <?php include("includes/footer.php"); ?>

    </div>

</body>
</html>