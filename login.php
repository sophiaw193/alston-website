<?php include('includes/init.php');
$db = open_or_init_sqlite_db('posts.sqlite', "init/init.sql");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media="all" />

  <title>Login</title>
</head>

<body>

    <h1 class="formtitle">Log in</h1>

    <?php
    print_messages();
    ?>

    <form id="loginForm" action="login.php" method="post">
      <ul class="formelements">
        <li class="forminputs">
          <label>Username:</label>
          <input type="text" name="username" required/>
        </li>
        <li>
          <label>Password:</label>
          <input type="password" name="password" required/>
        </li>
        <li>
          <button class="button" name="login" type="submit">Log In</button>
        </li>
      </ul>
    </form>

</body>
</html>
