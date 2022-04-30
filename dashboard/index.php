<?php

    // Security Section

    // if (!isset($_SESSION["login_session"])) {
    //     header("Location: login.php");    
    // }

    // Include Header

    include("includes/header.php");
    include("includes/navbar.php");

    // GET Pages -- Dashboard
    if (isset($_GET["dashboard"])) {
        include("pages/dashboard.php");
    }

    // GET Pages -- Admin (Section)
    if (isset($_GET["admin"])) {
        include("pages/admin/" . $_GET["admin"] . ".php");
    }

    // Include Footer
    include("includes/footer.php");
    include("includes/scripts.php");
