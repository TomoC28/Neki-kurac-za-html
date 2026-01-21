<?php
    session_start();
    if (!isset($_SESSION["brojac"])) {
        $_SESSION["brojac"] = 0;
    }

    $_SESSION["brojac"]++;
    echo $_SESSION["brojac"];
?>