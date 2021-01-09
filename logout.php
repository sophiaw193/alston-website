<?php include('includes/init.php');

log_out();
if (!$current_user) {
  record_message("You've been successfully logged out.");
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media="all" />

  <title>Logout</title>
</head>

<body>

    <h1 class="formtitle">Log Out</h1>

    <?php
    print_messages();
    ?>

</body>

</html>
