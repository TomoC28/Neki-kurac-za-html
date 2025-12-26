<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root","","test");
    if (!$link){
        die("Could not connect". mysqli_connect_error());
    }
    ?>
    <form action ="glavna.php" method="post">
        ID:<input type="text" name="id" required><br><br>
        Ime:<input type="text" name="ime" required><br><br>
        Prezime:<input type="text" name="prezime" required><br><br>
        Mjesto stanovanja:<input type="text" name="mjesto" required><br><br>
        Datum rođenja:<input type="date" name="datrod" required><br><br>
        Smjer:<input type="text" name="smjer" required><br><br>
        Upisana godina:<input type="text" name="upgodina" required><br><br>
        <input type = "submit" value="SUBMIT">
    </form>

    <?php
        $rez = mysqli_query($link,"SELECT * FROM prva");
        $podaci = $rez->fetch_all(MYSQLI_ASSOC);
        $prvi = $podaci[0];
        echo $prvi['id'];
    ?>

    <table border = "1">
        <tr>
            <th>id</th>
            <th>ime</th>
            <th>prezime</th>
            <th>mjesto stanovanja</th>
            <th>datum rodenja</th>
            <th>smjer</th>
            <th>upisana godina</th>
            <?php
                foreach ($podaci as $red) {
            ?>
            <tr>
                <td><?= htmlspecialchars($red['id']) ?></td>
                <td><?= htmlspecialchars($red['ime']) ?></td>
                <td><?= htmlspecialchars($red['prezime']) ?></td>
                <td><?= htmlspecialchars($red['mjestostanovanja']) ?></td>
                <td><?= htmlspecialchars($red['datrod']) ?></td>
                <td><?= htmlspecialchars($red['smjer']) ?></td>
                <td><?= htmlspecialchars($red['upisanagodina']) ?></td>
            </tr>
            <?php
                }
            ?>
        </tr>
    </table>
</body>
</html>

<?php
    $id = $_POST["id"] ?? "";
    $ime = $_POST["ime"] ?? "";
    $prezime = $_POST["prezime"] ?? "";
    $mjestostanovanja = $_POST["mjesto"] ?? "";
    $datrod = $_POST["datrod"] ?? "";
    $smjer = $_POST["smjer"] ?? "";
    $godina = $_POST["upgodina"] ?? "";
    $sql = mysqli_prepare($link,"INSERT INTO prva (id,ime,prezime,mjestostanovanja,datrod, smjer, upisanagodina) VALUES (?, ?, ?, ?, ?, ?, ?);");
    mysqli_stmt_bind_param($sql, "issssss", $id, $ime, $prezime, $mjestostanovanja, $datrod, $smjer, $godina);
    mysqli_stmt_execute($sql);
    mysqli_stmt_close( $sql);
?>

<br><br>
<form action = "glavna2.php" method="post">
    PODACI ZA STUDENTA KOJEG ZELIMO UPDATAT:<br><br>
    id:<input type="text" name="nid" required><br><br>
    updatana godina:<input type="text" name="ngod" required><br><br>
    updatano mjesto stanovanja: <input type="text" name="nms" required><br><br>
</form>