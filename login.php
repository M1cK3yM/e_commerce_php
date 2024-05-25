<?php
require_once("header.php");
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/signin.css">
</header>

<?php
if (isset($_POST['form1'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['c_email'])) {
            $alertMessage = "email is required";
            $alertClass = "alert-danger";
        } else if (empty($_POST['c_password'])) {
            $alertMessage = "password is required";
            $alertClass = "alert-danger";
        } else {
        }
    }
}
?>
<main class="text-center">
    <div class="form-signin">
        <form action="" method="post">
            <div class="logo d-flex mb-4 justify-content-center"><a href="index.php" class="me-2"><span class="circle"></span>.Store</a></div>

            <?php if (isset($alertMessage)) { ?>
                <div class="alert <?= $alertClass ?> alert-dismissible fade show" role="alert">
                    <?= $alertMessage ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="c_email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="c_password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg mb-3" type="submit" id="login" name="form1">Login</button>
            <a href="forget-password.php" id="forgetL">Forget password?</a>
        </form>
    </div>

</main>
<?php
require_once("footer.php");
