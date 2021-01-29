<?php include('includes/init.php');

if (isset($_GET['id'])) {
  $current_post_id = (int)$_GET['id'];
}

$records = exec_sql_query($db, "SELECT * FROM posts WHERE id=$current_post_id")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media="all" />
  <script src="scripts/all.js"></script>

  <title>Blog</title>
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

  <a class="arrow" href="blog.php">←
  </a>



    <?php

    foreach ($records as $record) {
      echo "<div class=post>
    <h1>" . $record["title"] . "</h1>
    <h2>" . $record["cal"] . "</h2>
    <hr></hr>
<p>" . $record["content"] . "

</div>

";
    }

    ?>

  <div class="footer">
    <div>
      <i class="footer-icon far fa-envelope"></i>
      <i class="footer-icon fab fa-linkedin-in"></i>
    </div>
  </div>


</body>

</html>