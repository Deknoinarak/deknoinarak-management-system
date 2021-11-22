<?php
    // Includes Header
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/header.php";
?>

<section class="login-page">
    <div class="login-container">
        <h1>Login</h1>
        <form action="functions.php" method="post">
            <div class="text-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username_login" placeholder="Username">
            </div>
            <div class="text-box">
                <i class="fa-solid fa-key"></i>
                <input type="password" name="pwd_login" placeholder="Password">
            </div>
            <button  class="btn btn-login" type="submit" name="submit_login">Login</button>
        </form>
    </div>
</section>

<?php
    // Includes Footer
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/scripts.php";
    require_once "/../inetpub/github/deknoinarak-management-system/dashboard/includes/footer.php";
?>
