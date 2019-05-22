<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>CV</title>
</head>
<body>
    <div class="grid-wrapper">

        <?php include("includes/header-nav.php"); ?>

        <div id="main_section_blog" class="main_section">
            <h1>Blog</h1>
            <p>This blog will chart the development of this site and also my learning of the technology it is built on.</p>
            
            <div class="post">
                <h2>Second Post - NAV success!</h2>
                <small>21/05/2019</small>
                <p>In the last few days I have got the nav set up more or less how I want it. I have been learning CSS Grid and it took quite some time experimenting and watching videos on YouTube (shout out to Traversy Media) to finally get the spacing how I wanted it.</p>
                <p>I changed the background color for the whole page to be a deep blue. I'm quite inspired by <a href="https://chriscoyier.net/" target="_blank">Chris Coyier</a>'s site. Particularly the simple, narrow centre section with the black background and the radio buttons for selecting versions of the content. This last feature is something I want to do with my CV.</p>
            </div>

            <div class="post">
                <h2>First Post (TEST)</h2>
                <p>This is someholding text for what will become the first blog post about this site.</p>
                <p>This is the second paragraph.</p>
            </div>

        </div>

    <!-- TODO The 'skils side bar' is only intended to appear on the CV page -->
        <aside class="skills_side_bar">

        </aside>

        <?php include("includes/footer.php"); ?>

    </div>

</body>
</html>