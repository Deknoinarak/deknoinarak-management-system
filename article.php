<?php
    // Require Functions
    require_once "/../inetpub/github/deknoinarak-management-system/includes/functions/functions.php";

    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";
?>
    
    <h1>Article</h1>

    <p>Article ID: <?php if(isset($_GET["id"])) {echo $_GET["id"];} else { echo "No Article ID"; } ?></p>
    <p>Title: <?php if(isset($_GET["title"])) {echo $_GET["title"];} else { echo "No Article Name"; } ?></p>

    <div class="article-container">
        <div class="blog-post">
            <div class="blog-post img">
                <img src="" alt="IMG_ARTICLE_ID_1">
            </div>
            <div class="blog-post info">
                <div class="blog-post data">
                    <span>Sunday</span>
                    <span>November 20 2021</span>
                </div>
                <h1 class="blog-post title">
                    How To Use DCM (Deknoinarak Content Management)
                </h1>
                <p class="blog-post text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nobis doloremque et quaerat corporis fugiat vel nihil consequuntur
                    eius veritatis aut ut, pariatur vitae reprehenderit veniam consectetur 
                    odio natus. Nostrum, vero.
                </p>
                <a href="1/How-To-Use-DCM" class="blog-post cta">Read More</a>
            </div>
        </div>
    </div>

<?php
    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/footer.php";
?>