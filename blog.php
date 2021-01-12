<?php
include("includes/init.php");

// open connection to database
$db = open_or_init_sqlite_db('posts.sqlite', "init/init.sql");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/all.css" media="all" />
    <!-- <link rel="icon" type="image/x-icon" href="images/favicon.ico"/> -->
    <!-- <script src="scripts/jquery-3.5.1.min.js"></script> -->
    <script src="scripts/all.js"></script>
    <title>Alston Wang</title>
</head>

<body>
    <div class="nav">
        <a href="index.html"><img class="me" src="images/me.png" alt="me"></a>
        <h2 class="name">ALSTON WANG</h2>
        <div>
            <ul class="links">
                <li class="links"><a href="portfolio.html">WORK</a></li>
                <li class="links"><a href="discovery.html">INTERESTS</a></li>
                <li class="links"><a class="active" href="blog.php">BLOG</a></li>
                <li class="links"><a href="about.html">ABOUT</a></li>
            </ul>
        </div>
    </div>

    <div class="blog-content">
        <div class="posts">

            <?php
            $records = exec_sql_query($db, "SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($records as $record) {
                echo
                    "
            <div class=one-post>

            <a href=\"post.php?id=" . $record["id"] . "\">
            <h3>" . $record["title"] . "</h3>
            <h4>" . $record["cal"] . "</h4>
            <p>" . $record["preview"] . "</p>
            </div>
            </a>
            ";
            }
            ?>

            <div class="one-post">
                <a href="jan05.html">
                    <h3>Time and Money</h3>
                    <h4>Jan 05, 2020</h4>
                    <p>
                        Recently, I finished reading a book called Die with zero: Getting all you can from your money and life by Bill Perkins...
                    </p>
                </a>

            </div>
        </div>
    </div>

    <div class="footer">
        <div>
            <i class="footer-icon far fa-envelope"></i>
            <i class="footer-icon fab fa-linkedin-in"></i>
        </div>
    </div>

</body>

</html>
