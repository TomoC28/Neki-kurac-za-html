<?php
    $link = mysqli_connect("localhost", "root","","test");
    if (!$link){
        die("Could not connect". mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "glavna3.php" method="post">
    PODACI ZA STUDENTA KOJEG ZELIMO DELETAT:<br><br>
    id:<input type="text" name="nid" required><br><br>
    <input type = "submit" value="SUBMIT">
</form>
</body>
</html>