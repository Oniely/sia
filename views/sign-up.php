<?php

$stylePath = 'styles/login_system/sign-up.css';

?>

<?php require 'views/partials/head.php' ?>

<main class="main_sign_up">

    <div class="sign_up_container">

        <img class="sign_up_logo" src="images/logo-black.png" alt="logo">

        <div class="header_container">
            <h1>Welcome Back</h1>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>

        <form method="POST">
            <div class="input_div">
                <input type="text" placeholder="First Name" name="fname" required>
            </div>

            <div class="input_div">
                <input type="text" placeholder="Middle Name" name="mname">
            </div>

            <div class="input_div" >
                <input type="text" placeholder="Last Name" name="lname" required>
            </div>

            <div class="input_div">
                <div class="input_flex">
                    <select name="gender" id="gender" name="gender">
                        <option value="" disabled selected hidden>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                    
                    <input type="number" name="age" placeholder="Age">

                    <input type="date" name="birthdate">
                </div>
            </div>

            <div class="input_div">
                <input type="text" placeholder="Username/Email" name="usernameEmail">
            </div>

            <div class="input_div">
                <input type="text" placeholder="Password" name="password">
            </div>

            <div class="input_div">
                <input type="submit" value="Sign Up">
            </div>

            <div class="input_div tac_container">
                <input type="checkbox" name="tac" id="tac" required>
                <label for="tac">I agree to <button>Terms and Condition</button></label>
            </div>
        </form>

        <?php require 'includes/login_system/sign-up.inc.php' ?>

    </div>
    
    <div class="img_container">
        <img class="img-fluid" src="images/wall.jpeg" alt="image">
    </div>
    
</main>

<?php require 'views/partials/footer.php' ?>