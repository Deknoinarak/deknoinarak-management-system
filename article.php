<?php
    // Require Functions
    require_once "/../inetpub/github/deknoinarak-management-system/includes/functions/functions.php";

    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    ?>
        <script>
            document.title = "article";
            console.log(document.title);
        </script>
    <?php
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";
?>
    
    <h1>Article</h1>

    <p>Article ID: <?php if(isset($_GET["id"])) {echo $_GET["id"];} else { echo "No Article ID"; } ?></p>
    <p>Title: <?php if(isset($_GET["title"])) {echo $_GET["title"];} else { echo "No Article Name"; } ?></p>

<?php
    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/footer.php";
?>