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
    <form action = "glavna2.php" method="post">
    PODACI ZA STUDENTA KOJEG ZELIMO UPDATAT:<br><br>
    id:<input type="text" name="nid" required><br><br>
    updatana godina:<input type="text" name="ngod" required><br><br>
    updatano mjesto stanovanja: <input type="text" name="nms" required><br><br>
    <input type = "submit" value="SUBMIT">
</form>
</body>
</html>