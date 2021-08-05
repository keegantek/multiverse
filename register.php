<?php

$page_title = "Sign Up";

include 'processors/register.php';

include 'layout/header-min.php';
?>

<div class="form-container">
    <h1>Sign Up</h1>
    <div class="errors">
        <?php
        foreach ($errors as $error) {
            echo $error . "<br />";
        }
        ?>
    </div>
    <form action="register.php" method="post">
        <div class="form-item">
            <?php
            if (isset($errors['first_name'])) {
            ?>
                <input type="text" class="error" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
            <?php
            } else {
            ?>
                <input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
            <?php
            }
            ?>
            <?php
            if (isset($errors['last_name'])) {
            ?>
                <input type="text" class="error" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
            <?php
            } else {
            ?>
                <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
            <?php
            }
            ?>
        </div>
        <div class="form-item">
            <?php
            if (isset($errors['email'])) {
            ?>
                <input type="email" class="error" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <?php
            } else {
            ?>
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <?php
            }
            ?>
        </div>
        <div class=" form-item">
            <?php
            if (isset($errors['password'])) {
            ?>
                <input type="password" class="error" name="password" placeholder="Password">
            <?php
            } else {
            ?>
                <input type="password" name="password" placeholder="Password">
            <?php
            }
            ?>
        </div>
        <div class="form-item">
            <input type="password" name="repeat_password" placeholder="Repeat Password">
        </div>
        <div class="form-item">
            <button type="submit">Sign Up</button>
        </div>
    </form>
    <div class="form-link">Already have an account? <a href="/login.php">Sign In</a></div>
</div>

<?php
include 'layout/footer.php';
?>