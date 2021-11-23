<?php
    // Require Functions
    // require_once "/../inetpub/github/deknoinarak-management-system/includes/functions/functions.php";

    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";

    // Switch page by index.php?page=home or index/home
    if (isset($_GET['page'])) {
        if ($_COOKIE["lang"] == "th") {
            // Copy and paste elseif statement for add page in language "TH" and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
            if ($_GET['page'] == 'home') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/home_TH.php');
            }
            elseif ($_GET['page'] == 'aboutus') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/aboutus_TH.php');
            }
            elseif ($_GET['page'] == 'portfolio') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/portfolio_TH.php');
            }
            elseif ($_GET['page'] == 'contact') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/contact_TH.php');
            }
            else {
                include('/../inetpub/github/deknoinarak-management-system/includes/error/404.php');
            }
        }
        else {
            // Copy and paste elseif statement for add page and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
            if ($_GET['page'] == 'home') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/home.php');
            }
            elseif ($_GET['page'] == 'aboutus') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/aboutus.php');
            }
            elseif ($_GET['page'] == 'portfolio') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/portfolio.php');
            }
            elseif ($_GET['page'] == 'contact') {
                include('/../inetpub/github/deknoinarak-management-system/includes/pages/contact.php');
            }
            else {
                include('/../inetpub/github/deknoinarak-management-system/includes/error/404.php');
            }
        }
    }
    else {
        header("Location: index/home");
    }

    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/footer.php";