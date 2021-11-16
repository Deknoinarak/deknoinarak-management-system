<?php
    // Includes Header
    require_once "/../inetpub/cms/deknoinarak-cms-core/includes/header.php";
    require_once "/../inetpub/cms/deknoinarak-cms-core/includes/navbar.php";

    // Switch page by index.php?page=home
    if ($_GET['page']) {
        // Copy and paste if statement for add page and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
        if ($_GET['page'] == 'home') {
            include('/../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php');
        }
        if ($_GET['page'] == 'project') {
            include('/../inetpub/cms/deknoinarak-cms-core/includes/pages/project.php');
        }
        if ($_GET['page'] == 'aboutus') {
            include('/../inetpub/cms/deknoinarak-cms-core/includes/pages/aboutus.php');
        }
    }

    // Includes Footer
    require_once "/../inetpub/cms/deknoinarak-cms-core/includes/scripts.php";
    require_once "/../inetpub/cms/deknoinarak-cms-core/includes/footer.php";