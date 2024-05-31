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
            $cust_email = strip_tags($_POST['c_email']);
            $cust_password = strip_tags($_POST['c_password']);

            $statement = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
            mysqli_stmt_execute($statement, array($cust_email));
            $total = mysqli_num_rows(mysqli_stmt_get_result($statement));
            mysqli_stmt_execute($statement, array($cust_email));
            $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

            foreach ($result as $row) {
                $cust_status = $row['status'];
                $row_password = $row['password'];
            }

            if ($total == 0) {
                $alertMessage = "Incorrect password or email";
            } else {
                if ($row_password != md5($cust_password)) {
                    $alertMessage = "Incorrect password or email";
                } else {
                    if ($cust_status == 0) {
                        $alertMessage = "Verify your email first";
                    } else {
                        $_SESSION['customer'] = $row;
                        if ($_POST['remember']) {
                            $token = generateToken();
                            $statement = mysqli_prepare($conn, "UPDATE users SET token=? , updated_at=? WHERE email = ?");
                            $current_date_time = date('Y-m-d H:i:s');
                            if (mysqli_stmt_execute($statement, array($token, $current_date_time, $cust_email))) {
                                setcookie("token", $token,  time() + TOKEN_EXPIRAION_TIME);
                            }
                        }

                        header("location: " . BASE_URL . "index.php");
                    }
                }
            }
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
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                    <input type="checkbox" value="remember-me" name="remember"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg mb-3" type="submit" id="login" name="form1">Login</button>
            <p class="text-center text-muted mb-3">New to .Store? <a href="register.php"><u>Create account here</u></a></p>
            <a href="forget-password.php" id="forgetL">Forget password?</a>
        </form>
    </div>


</main>

<?php
require_once("footer.php");
