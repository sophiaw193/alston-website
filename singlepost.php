<?php include('includes/init.php');

//get current user id for user access controls

if (isset($_GET['id'])) {
  $current_image_id = (int)$_GET['id'];
}

$records = exec_sql_query($db, "SELECT * FROM accounts INNER JOIN posts ON posts.accounts_username=accounts.username WHERE posts.id=$current_image_id")->fetchAll(PDO::FETCH_ASSOC);

if ($records) {
  $account = $records[0];
  $user_uploaded=$account['username'];
}

if ($current_user==$user_uploaded) {
  $show_delete="show_delete";
} else {
  $show_delete="";
}

if ($current_user==$user_uploaded) {
  $show_remove="show_remove";
} else {
  $show_remove="";
}

//delete image

if (isset($_POST["delete"])) {

  $sql = "DELETE FROM posts WHERE id=:current_image_id";
  $params = array(
    ':current_image_id' => $current_image_id,
  );

  $result = exec_sql_query($db, $sql, $params);

  if ($result) {
    array_push($messages, "File deleted.");

    $check = exec_sql_query($db, "SELECT * FROM posts WHERE id='$current_image_id'")->fetchAll(PDO::FETCH_ASSOC);
    if (empty($check)) {
      header ('location: index.php');
    }

  } else {
    array_push($messages, "Failed to delete file. Please try again.");
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media="all" />

  <title>Image</title>
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

  foreach ($records as $record) {
    echo "<div class=post>
    <h1>" . $record["title"] . "</h1>
    <h2>" . $record["cal"] . "</h2>
<p>". $record["content"] . "</p>

</a></div>

";
}

  ?>


  </body>

  </html>
