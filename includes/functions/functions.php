<?php
    echo "This is just a debug page. If you click at somewhere and suddenly see this page. Please contact <a href='mailto:platwohateit.contact@gmail.com'>Deknoinarak's Github</a>";
    if (isset($_GET["setcookie"])) {
        if (isset($_GET["value"])) {
            $cookie_name = $_GET["setcookie"];
            $cookie_value = $_GET["value"];

            // Set Cookie For 30 Days
            if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/")) {
                echo "Set Cookies";
            }
            else {
                echo"Error While Setting Cookies";
            }
            echo "<script type='text/JavaScript'>window.location.href = document.referrer</script>";
        }
    }

    if (isset($_GET["delcookie"])) {
        $cookie_name = $_GET["delcookie"];
        // set the expiration date to one hour ago
        setcookie($cookie_name, "", time() - 99999999);
        echo "<script type='text/JavaScript'>history.back(-1);</script>";
    }