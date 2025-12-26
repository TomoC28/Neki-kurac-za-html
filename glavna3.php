<?php
    $link = mysqli_connect("localhost", "root","","test");
    if (!$link){
        die("Could not connect". mysqli_connect_error());
    }
?>

<?php
    $id = $_POST["nid"] ??"";
    $sql = mysqli_prepare($link,"DELETE FROM prva WHERE id=?");
    $sql->bind_param("i", $id);
    mysqli_stmt_execute($sql);
    mysqli_stmt_close( $sql);
?>