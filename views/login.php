<?php

$stylePath = "styles/login.css";

?>

<?php require 'views/partials/head.php' ?>

<main class="main_login">

    <div class="login_container container-md">

        <div class="img_container">
            <img class="img-fluid" src="images/logo-black.png" alt="image">
        </div>

        <form action="#" method="POST">
            <div class="input_div">
                <input type="text" placeholder="Username" id="login_username" required>
            </div>

            <div class="input_div">
                <input type="text" placeholder="Password" id="password" minlength="8" required>
                <a href="#">forgot password?</a>
            </div>

            <div class="input_div">
                <input type="submit" value="Log in" id="submit" />
                <span>Don't have an account yet? <a href="#">Sign Up</a></span>
            </div>
        </form>

        <div class="btn_links">
            <button>Sign in with Facebook</button>
            <button>Sign in with Google</button>
        </div>
    </div>

</main>

<?php require 'views/partials/footer.php' ?>