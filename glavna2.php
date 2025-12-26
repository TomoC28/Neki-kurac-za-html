<?php
    $link = mysqli_connect("localhost", "root","","test");
    if (!$link){
        die("Could not connect". mysqli_connect_error());
    }
?>

<?php
    $ngodina = $_POST["ngod"] ??"";
    $nmjestostanovanja = $_POST["nms"] ??"";
    $id = $_POST["nid"] ??"";
    $sql = mysqli_prepare($link,"UPDATE prva SET mjestostanovanja = ?, upisanagodina=? WHERE id=?;");
    mysqli_stmt_bind_param($sql, "ssi", $ngodina, $nmjestostanovanja, $id);
    mysqli_stmt_execute($sql);
    mysqli_stmt_close( $sql);
?>