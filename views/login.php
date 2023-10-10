<?php

$stylePath = "styles/login_system/login.css";

?>

<?php require 'views/partials/head.php' ?>

<main class="main_login">

    <div class="login_container container">

        <div class="img_container">
            <img src="images/logo-black.png" alt="image">
        </div>

        <form method="POST">
            <div class="input_div">
                <input type="text" placeholder="Username" name="login_username" id="login_username" required>
            </div>

            <div class="input_div">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <a href="#">forgot password?</a>
            </div>

            <div class="input_div">
                <input type="submit" value="Log in" id="submit" />
                <span>Don't have an account yet? <a href="/sia/sign_up">Sign Up</a></span>
            </div>
        </form>

        <div class="btn_links">
            <button>Sign in with Facebook</button>
            <button>Sign in with Google</button>
        </div>
    </div>

    <?php require 'includes/login_system/login.inc.php' ?>

</main>

<?php require 'views/partials/footer.php' ?>