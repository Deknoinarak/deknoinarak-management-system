<?php
    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";

    // Switch page by index.php?page=home or index/home
    if (isset($_GET['page'])) {
        // Copy and paste if statement for add page and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
        if ($_GET['page'] == 'home') {
            include('/../inetpub/github/deknoinarak-management-system/includes/pages/home.php');
        }
        if ($_GET['page'] == 'project') {
            include('/../inetpub/github/deknoinarak-management-system/includes/pages/project.php');
        }
        if ($_GET['page'] == 'aboutus') {
            include('/../inetpub/github/deknoinarak-management-system/includes/pages/aboutus.php');
        }
        else {
            include('/../inetpub/github/deknoinarak-management-system/includes/error/404.php');
        }
    }
    else {
        header("Location: index/home");
    }

    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/footer.php";