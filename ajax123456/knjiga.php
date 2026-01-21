<?php
    $link = mysqli_connect("localhost", "root","","knjiznica");
    if (!$link){
        die("Could not connect". mysqli_connect_error());
    }
    $rez = mysqli_query($link,"SELECT * FROM knjiga");
    $podaci = $rez->fetch_all(MYSQLI_ASSOC);
    echo json_encode($podaci);
?>