<?php

include("header.php");

if (isset($_POST['form2'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $evalid = true;
        $fnvalid = true;
        $lnvalid = true;
        $unvalid = true;
        $cvalid = true;
        $svalid = true;
        $pvalid = true;
        $rpvalid = true;
        if (filter_var($_POST['c_email_r'], FILTER_VALIDATE_EMAIL) === false) {
            $evalid = false;
        } else {
            $statement = $pdo->prepare("SELECT * FROM users WHERE email=?");
            $statement->execute(array($_POST['c_email_r']));
            $total = $statement->rowCount();
            if ($total) {
                $evalid = false;
            }
        }
        if (empty($_POST['c_fname_r'])) {
            $fnvalid = false;
        }
        if (empty($_POST['c_lname_r'])) {
            $lnvalid = false;
        }
        if (empty($_POST['c_username_r'])) {
            $unvalid = false;
        }
        if (empty($_POST['c_password_r'])) {
            $pvalid = false;
        }
        if (empty($_POST['c_rpassword_r'])) {
            $rpvalid = false;
        } else if ($_POST['c_password_r'] != $_POST['c_rpassword_r']) {
            $rpvalid = -1;
        }

        if ($evalid && $fnvalid && $lnvalid && $cvalid && $svalid && $pvalid && $rpvalid && $unvalid) {
            $token = md5(time());
            $cust_datetime = date('Y-m-d h:i:s');
            $cust_timestamp = time();

            $statement = $pdo->prepare("INSERT INTO `users` (`first_name`, `last_name`, 
            `username`, `email`, `password`, `token`, `status`) VALUES
            (?, ?, ?, ?, ?, ?, ?)");

            $statement->execute(array(
                strip_tags($_POST['c_fname_r']),
                strip_tags($_POST['c_lname_r']),
                strip_tags($_POST['c_username_r']),
                strip_tags($_POST['c_email_r']),
                md5($_POST['c_password_r']),
                $token,
                0
            ));

            $evalid = -2;
            $fnvalid = -2;
            $lnvalid = -2;
            $unvalid = -2;
            $cvalid = -2;
            $svalid = -2;
            $pvalid = -2;
            $rpvalid = -2;

            unset($_POST['c_fname_r']);
            unset($_POST['c_lname_r']);
            unset($_POST['c_username_r']);
            unset($_POST['c_email_r']);
            unset($_POST['c_password_r']);
            unset($_POST['c_country_r']);
            unset($_POST['c_state_r']);
            unset($_POST['c_zipcode_r']);
            unset($_POST['form1']);

            header(
                'Location: verifyEmail.php'
            );
            exit();
        }
    }
}
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>


<section class="mb-4">
    <div class="mask d-flex align-items-center gradient-custom-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <div class="logo d-flex mb-4 justify-content-center"><a href="index.php" class="me-2"><span class="circle"></span>.Store</a></div>

                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-sm">
                                        <div data-mdb-input-init class="form-floating form-outline mb-4">
                                            <input type="text" id="formFname" class="form-control form-control-lg <?php if (isset($fnvalid)) {
                                                                                                                        if ($fnvalid === true) {
                                                                                                                            echo "is-valid";
                                                                                                                        } else if ($fnvalid === false) {
                                                                                                                            echo "is-invalid";
                                                                                                                        }
                                                                                                                    } ?>" placeholder="name" name="c_fname_r" value="<?php if (isset($_POST['c_fname_r'])) {
                                                                                                                                                                            echo $_POST['c_fname_r'];
                                                                                                                                                                        } ?>" />
                                            <label for="formFname">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div data-mdb-input-init class="form-floating form-outline mb-4">
                                            <input type="text" id="formLname" class="form-control form-control-lg <?php if (isset($lnvalid)) {
                                                                                                                        if ($lnvalid === true) {
                                                                                                                            echo "is-valid";
                                                                                                                        } else if ($lnvalid === false) {
                                                                                                                            echo "is-invalid";
                                                                                                                        }
                                                                                                                    } ?>" placeholder="name" name="c_lname_r" value="<?php if (isset($_POST['c_lname_r'])) {
                                                                                                                                                                            echo $_POST['c_lname_r'];
                                                                                                                                                                        } ?>" />
                                            <label for="formLname">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating form-outline mb-4">
                                    <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username" name="c_username_r" value="<?php if (isset($_POST['c_username_r'])) {
                                                                                                                                                                echo $_POST['c_username_r'];
                                                                                                                                                            } ?>">
                                    </div>
                                </div>


                                <div data-mdb-input-init class="form-floating form-outline mb-4">
                                    <input type="email" id="formEmail" class="form-control form-control-lg <?php if (isset($evalid)) {
                                                                                                                if ($evalid === true) {
                                                                                                                    echo "is-valid";
                                                                                                                } else if ($evalid === false) {
                                                                                                                    echo "is-invalid";
                                                                                                                }
                                                                                                            } ?>" placeholder="name@email.com" name="c_email_r" value="<?php if (isset($_POST['c_email_r'])) {
                                                                                                                                                                            echo $_POST['c_email_r'];
                                                                                                                                                                        } ?>" />
                                    <label class="form-label" for="formEmail">Your Email</label>
                                    <div class="invalid-feedback">
                                        Please provide valid email.
                                    </div>
                                </div>

                                <div data-mdb-input-init class="form-floating form-outline mb-4">
                                    <input type="password" id="formPassword" class="form-control form-control-lg <?php if (isset($pvalid)) {
                                                                                                                        if ($pvalid === true) {
                                                                                                                            echo "is-valid";
                                                                                                                        } else if ($pvalid === false) {
                                                                                                                            echo "is-invalid";
                                                                                                                        }
                                                                                                                    } ?>" placeholder="password" name="c_password_r" value="<?php if (isset($_POST['c_password_r'])) {
                                                                                                                                                                                echo $_POST['c_password_r'];
                                                                                                                                                                            } ?>" />
                                    <label class="form-label" for="formPassword">Password</label>
                                    <div class="invalid-feedback">
                                        Password cannot be empty.
                                    </div>
                                </div>

                                <div data-mdb-input-init class="form-floating form-outline mb-4">
                                    <input type="password" id="formRPassword" class="form-control form-control-lg <?php if (isset($rpvalid)) {
                                                                                                                        if ($rpvalid === true) {
                                                                                                                            echo "is-valid";
                                                                                                                        } else if ($rpvalid === false) {
                                                                                                                            echo "is-invalid";
                                                                                                                        }
                                                                                                                    } ?>" placeholder="repeat your password" name="c_rpassword_r" value="<?php if (isset($_POST['c_rpassword_r'])) {
                                                                                                                                                                                                echo $_POST['c_rpassword_r'];
                                                                                                                                                                                            } ?>" />
                                    <label class="form-label" for="formRPassword">Repeat your password</label>
                                    <div class="invalid-feedback">
                                        <?php
                                        if ($rpvalid === false) {
                                            echo "Password cannot be empty.";
                                        } else {
                                            echo "Password aren't matched.";
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="formCountry">Country</label>
                                    <select name="c_country_r" id="formCountry" class="form-select">
                                        <option selected disabled value="">Choose...</option>
                                        <?php
                                        $statement = $pdo->prepare("SELECT * FROM country ORDER BY country_name ASC");
                                        $statement->execute();
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                        ?>
                                            <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div data-mdb-input-init class="form-floating form-outline mb-4">
                                            <input type="text" id="formState" class="form-control form-control-lg" placeholder="state" name="c_state_r" value="<?php if (isset($_POST['c_state_r'])) {
                                                                                                                                                                    echo $_POST['c_state_r'];
                                                                                                                                                                } ?>" />
                                            <label class="form-label" for="formState">State</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div data-mdb-input-init class="form-floating form-outline mb-4">
                                            <input type="number" id="formZipCode" class="form-control form-control-lg" placeholder="country" name="c_zipcode_r" value="<?php if (isset($_POST['c_zipcode_r'])) {
                                                                                                                                                                            echo $_POST['c_zipcode_r'];
                                                                                                                                                                        } ?>" />
                                            <label class="form-label" for="formZipCode">Zip Code</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="formPolicy" />
                                    <label class="form-check-label" for="formPolicy">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body secondary-button" name="form2" value="Register">
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

include("footer.php");
