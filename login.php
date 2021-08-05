<?php

$page_title = "Sign In";

include 'processors/login.php';

include 'layout/header-min.php';
?>

<div class="form-container">
    <h1>Sign In</h1>
    <div class="errors">
        <?php
        foreach ($errors as $error) {
            echo $error . "<br />";
        }
        ?>
    </div>
    <form action="login.php" method="post">
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
            <button type="submit">Sign In</button>
        </div>
    </form>
    <div class="form-link">Don't have an account? <a href="/register.php">Sign Up</a></div>
</div>

<?php
include 'layout/footer.php';
?>