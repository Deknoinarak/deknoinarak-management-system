<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/navbar.css">
        <link rel="stylesheet" href="../../../css/page.css">
        <script src="../../../js/pagechanger.js"></script>
        <title>404 Error - Not Found</title>
        <style>
            .show-more, .show-less {
                color: #0000FF;
                text-decoration: underline;
                cursor: pointer;
                user-select: none;
            }
            .hide {
                display: none;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <!-- Change To Your Website Name! -->
                    WEBSITE
                </div>
        
                <div class="menu">
                    <!-- Add Page Link Here!!! -->
                    <a href="../../../index/home">HOME</a>
                    <a href="../../../index/portfolio">PORTFOLIO</a>
                    <a href="../../../index/project">PROJECT</a>
                    <a href="../../../index/aboutus">ABOUT</a>
                    <a href="../../../index/contact">CONTACT</a>
                </div>
        
                <!-- DON'T TOUCH THIS!!!!! -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>
        <div class="page-container">
        <center>
            <h1>404 Error!</h1>
            <h2>NOT FOUND</h2>
        </center>

        <a class="show-more">Show More</a>
        <a class="show-less hide">Show Less</a>

        <div class="detailed-error hide">
            <table border="1">
                <p>Error Detail:</p>
                <tr>
                    <td>Request URL</td>
                    <td><script>document.write(window.location.href);</script></td>
                </tr>
                <tr>
                    <td>Status Code</td>
                    <td>404.0</td>
                </tr>
            </table>
            <br>
            <p>Possible Fixes:<p>
            <p>1. Remove "/" in the end of url e.g. "index/"" to "index"</p>
            <p>1. Check if the url are correct.</p>
        </div>
        <script src="../../../js/navbar.js"></script>
        <script>
            const showMore = document.querySelector(".show-more");
            const showLess = document.querySelector(".show-less");

            const errorDetail = document.querySelector(".detailed-error");

            showMore.addEventListener("click", function() {
                this.classList.add("hide");
                showLess.classList.remove("hide");

                errorDetail.classList.remove("hide");
            })

            showLess.addEventListener("click", function() {
                this.classList.add("hide");
                showMore.classList.remove("hide");

                errorDetail.classList.add("hide");
            })
        </script>
        </div>
    </body>
</html>