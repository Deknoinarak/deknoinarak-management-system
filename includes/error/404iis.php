<?php
    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/includes/header.php";
    require_once "/../inetpub/github/deknoinarak-management-system/includes/navbar.php";
?>
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