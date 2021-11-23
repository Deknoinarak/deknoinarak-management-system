<?php
    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/navbar.php";

    // Switch page by index.php?page=home or index/home
    if (isset($_GET['page'])) {
        if ($_COOKIE["lang"] == "th") {
            // Copy and paste elseif statement for add page in language "TH" and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
            if ($_GET['page'] == 'dashboard') {
                include('/../inetpub/github/deknoinarak-management-system/dashboard/includes/pages/dashboard_TH.php');
            }
            elseif ($_GET['page'] == 'account') {
                include('/../inetpub/github/deknoinarak-management-system/dashboard/includes/pages/adminaccount_TH.php');
            }
            else {
                include('/../inetpub/github/deknoinarak-management-system/includes/error/404.php');
            }
        }
        else {
            // Copy and paste elseif statement for add page and change 'home' to your page and your page file e.g. /../inetpub/cms/deknoinarak-cms-core/includes/pages/home.php
            if ($_GET['page'] == 'dashboard') {
                include('/../inetpub/github/deknoinarak-management-system/dashboard/includes/pages/dashboard.php');
            }
            elseif ($_GET['page'] == 'account') {
                include('/../inetpub/github/deknoinarak-management-system/dashboard/includes/pages/adminaccount.php');
            }
            else {
                include('/../inetpub/github/deknoinarak-management-system/includes/error/404.php');
            }
        }
    }
    else {
        header("Location: ../../../../../dashboard/index/dashboard");
    }

    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/footer.php";
?>
