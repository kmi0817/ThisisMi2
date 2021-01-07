<?php
  $conn = mysqli_connect('localhost', 'root', 'Talunion3546', 'ThisisMi');
  // Check connection
if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
      echo "Connected";
  }
?>
<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>This is Mi</title>
</head>
<body>
  <header>
    <h3>This is Mi</h1>
  </header>
</body>
</html>
