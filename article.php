<?php
    // Require Functions
    require_once "/../inetpub/github/deknoinarak-management-system/includes/functions/functions.php";

    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";

    if (isset($_GET["id"])) {
        include("/../inetpub/github/deknoinarak-management-system/includes/pages/article.php");
    }
    else {
?>
    
    <h1>Latest Article</h1>

    <div class="article-container">
        <div class="blog-post">
            <div class="blog-post__img">
                <img src="https://docs.joomla.org/images/thumb/b/be/Help-3x-system-control-panel-en.png/500px-Help-3x-system-control-panel-en.png" alt="IMG_ARTICLE_ID_1">
            </div>
            <div class="blog-post__info">
                <div class="blog-post__data">
                    <div class="blog-post__icon-text">
                        <span class="icon"><i class="fa-regular fa-calendar"></i></span>
                        <span class="text">20/11/2021</span>
                    </div>
                    <div class="blog-post__icon-text">
                        <span class="icon"><i class="fa-regular fa-user"></i></span>
                        <span class="text">Deknoinarak (Owner)</span>
                    </div>
                    <!-- <div class="blog-post__icon-text">
                        <span class="icon"><i class="fa-regular fa-heart"></i></span>
                        <span class="text">0</span>
                    </div>
                    <div class="blog-post__icon-text">
                        <span class="icon"><i class="fa-regular fa-message"></i></span>
                        <span class="text">0</span>
                    </div> -->
                </div>
                <h2 class="blog-post__title">
                    How To Use DCM (Deknoinarak Content Management)
                </h2>
                <div class="blog-post__cta">
                    <a href="../../../../../article/1/How-To-Use-DCM" class="btn">Read More</a>
                    <!-- <button><i class="fa-solid fa-share-nodes"></i></button> -->
                </div>
            </div>
        </div>
    </div>

    <h1>Other Articles</h1>
    <div class="article-container">
        <div class="article-container-grid-other">
            <div class="blog-recommend">
                <div class="blog-post blog-recommend-post">
                    <div class="blog-post__img">
                        <img src="https://docs.joomla.org/images/thumb/b/be/Help-3x-system-control-panel-en.png/500px-Help-3x-system-control-panel-en.png" alt="IMG_ARTICLE_ID_1">
                    </div>
                    <div class="blog-post__info">
                        <div class="blog-post__data">
                            <div class="blog-post__icon-text">
                                <span class="icon"><i class="fa-regular fa-calendar"></i></span>
                                <span class="text">20/11/2021</span>
                            </div>
                            <div class="blog-post__icon-text">
                                <span class="icon"><i class="fa-regular fa-user"></i></span>
                                <span class="text">Deknoinarak (Owner)</span>
                            </div>
                            <!-- <div class="blog-post__icon-text">
                                <span class="icon"><i class="fa-regular fa-heart"></i></span>
                                <span class="text">0</span>
                            </div>
                            <div class="blog-post__icon-text">
                                <span class="icon"><i class="fa-regular fa-message"></i></span>
                                <span class="text">0</span>
                            </div> -->
                        </div>
                        <h3 class="blog-post__title">
                            How To Use DCM (Deknoinarak Content Management)
                        </h3>
                        <div class="blog-post__cta">
                            <a href="../../../../../article/1/How-To-Use-DCM" class="btn">Read More</a>
                            <!-- <button><i class="fa-solid fa-share-nodes"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
    }
    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/footer.php";
?>