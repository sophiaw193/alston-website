<?php
include("includes/init.php");

// open connection to database
$db = open_or_init_sqlite_db('posts.sqlite', "init/init.sql");

check_login();

//upload form
// if (isset($_POST["submit_upload"])) {
//     $upload_image = $_FILES["gallery_image"];

//     if ($upload_image['error'] == UPLOAD_ERR_OK) {
//         $upload_name = basename($upload_image["name"]);
//         $upload_ext = strtolower(pathinfo($upload_name, PATHINFO_EXTENSION));

//         $sql = "INSERT INTO posts (file_name, file_ext, accounts_username) VALUES (:filename, :extension, :accounts_username)";
//         $params = array(
//             ':filename' => $upload_name,
//             ':extension' => $upload_ext,
//             ':accounts_username' => $current_user,
//         );
//         $result = exec_sql_query($db, $sql, $params);

//         if ($result) {
//             $file_id = $db->lastInsertId("id");
//             if (move_uploaded_file($upload_image["tmp_name"], UPLOADS_PATH . "$file_id.$upload_ext")) {
//                 array_push($messages, "Your file has been uploaded.");
//             }
//         } else {
//             array_push($messages, "Failed to upload file.");
//         }
//     } else {
//         array_push($messages, "Failed to upload file.");
//     }
// }

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

    <?php
    print_messages();
    ?>



    <div class="blog-content">
        <div class="posts">

        <?php
        $records = exec_sql_query($db, "SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo 
            "
            <div class=one-post>
     
            <a href=\"singlepost.php?id=" . $record["id"] . "\">
            <div class=\"post-text\">
            <h3>" . $record["title"] . "</h3>
            <h4>" . $record["cal"] . "</h4>
            <p>" . $record["content"] . "</p>
            </div>
            </a>
            </div>
            ";
        }
        ?>
        </div>
    </div>

    <!-- <div class="blog-content">
        <div class="posts">
            <div class="one-post">
                <div class="post-img">
                </div>
                <div class="post-text">
                    <h3>Blog Post Title</h3>
                    <h4>subtext...</h4>
                </div>
            </div>
            <div class="one-post">
                <div class="post-img">
                </div>
                <div class="post-text">
                    <h3>Blog Post Title</h3>
                    <h4>subtext...</h4>
                </div>
            </div>
            <div class="one-post">
                <div class="post-img">
                </div>
                <div class="post-text">
                    <h3>Blog Post Title</h3>
                    <h4>subtext...</h4>
                </div>
            </div>

        </div>

    </div> -->

    <div class="footer">
        <div>
            <i class="footer-icon far fa-envelope"></i>
            <i class="footer-icon fab fa-linkedin-in"></i>
        </div>
    </div>

</body>

</html>