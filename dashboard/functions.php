<?php
    if (isset($_GET["setcookie"])) {
        if (isset($_GET["value"])) {
            $cookie_name = $_GET["setcookie"];
            $cookie_value = $_GET["value"];

            // Set Cookie For 30 Days
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            echo "<script type='text/JavaScript'>history.back(-1);</script>";
        }
    }

    if (isset($_GET["delcookie"])) {
        
    }