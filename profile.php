<?php
require_once('header.php');
if (isset($_POST['logout'])) {
    unset($_SESSION['customer']);
    header(
        "location: " . BASE_URL . "index.php"
    );

    exit();
}

?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>

<section class="mb-4">
    <div class="d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">hi <?php echo $_SESSION['customer']['first_name'] . "👋"; ?></h2>
                            <form action="" method="post">
                                <input type="submit" value="logout" name="logout">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
require_once('footer.php');
