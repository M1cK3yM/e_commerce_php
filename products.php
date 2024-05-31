<?php
require_once("header.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>

<main class="main" id="top">
    <section class="pt-5 pb-9">
        <div class="container"><button class="btn btn-sm btn-phoenix-secondary text-body-tertiary mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"><span class="fa-solid fa-filter me-2"></span>Filter</button>
            <div class="row">
                <div class="col-lg-9 col-xxl-10">
                    <div class="row gx-3 gy-6 mb-8">
                        <?php
                        $statement = mysqli_prepare($conn, "SELECT * FROM products ");
                        mysqli_stmt_execute($statement);
                        $result1 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                        foreach ($result1 as $row1) {
                            $statement = mysqli_prepare($conn, "SELECT * FROM review WHERE id = ?");
                            mysqli_stmt_execute($statement, array($row1['id']));
                            $reviews = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);
                            

                        ?>
                            <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                                <div class="Sh-100">
                                    <div class="text-decoration-none h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="border border-1 rounded-3 position-relative mb-3">
                                                    <span class="badge position-absolute translate-middle bg-primary" style="top: 30px; right: 5px;">
                                                        <span class="fa fa-heart d-block-hover " style="font-size: 20px;"></span>
                                                    </span>
                                                    <img class="img-fluid" src="assets/products/<?php echo $row1['cover']; ?>" alt="" />
                                                </div>
                                                <a
                                                  href="product-details.php?id=<?php echo $row1['id'] ?>">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name"><?php echo $row1['name']; ?></h6>
                                                </a>
                                                <p class="fs-9">

                                                    <?php
                                                    if (count($reviews)) {
                                                        $sumRating = 0;
                                                        foreach ($reviews as $review) {
                                                            $sumRating += $review['rating'];
                                                        }
                                                        $avgRating = $sumRating / count($reviews);
                                                        $remRating = $sumRating % count($reviews);

                                                        if ($remRating) {
                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($avgRating <= 5) {
                                                    ?>
                                                                    <span class="ri-star-fill text-warning"></span>
                                                                <?php
                                                                } else if ($avgRating == $i) {
                                                                ?>
                                                                    <span class="ri-star-half-line text-warning"></span>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <span class="ri-start-line text-warning-light"></span>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                            <span class="text-body-quaternary fw-semibold ms-1">(<?php echo count($reviews) ?> people rated)</span>
                                                            <?php
                                                        } else {

                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($avgRating <= 5) {
                                                            ?>
                                                                    <span class="fa fa-star text-warning"></span>
                                                                <?php } else { ?>
                                                                    <span class="fa fa-star text-warning-light"></span>
                                                            <?php }
                                                            } ?>
                                                            <span class="text-body-quaternary fw-semibold ms-1">(<?php echo count($reviews) ?> people rated)</span>
                                                        <?php
                                                        }
                                                    } else {

                                                        ?>
                                                        <span class="ri-star-line text-warning-light"></span>
                                                        <span class="ri-star-line text-warning-light"></span>
                                                        <span class="ri-star-line text-warning-light"></span>
                                                        <span class="ri-star-line text-warning-light"></span>
                                                        <span class="ri-star-line text-warning-light"></span>
                                                        <span class="text-body-quaternary fw-semibold ms-1">(NOT RATED)</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                            <div>
                                                <p class="fs-9 text-body-tertiary mb-2"><?php echo $row1['summary']; ?></p>
                                                <div class="d-flex align-items-center mb-1">
                                                    <?php
                                                    $statement1 = mysqli_prepare($conn, "SELECT * FROM products_inventory WHERE id = ? LIMIT 1");
                                                    mysqli_stmt_execute($statement1, array($row1['id']));
                                                    $result2 = mysqli_fetch_all(mysqli_stmt_get_result($statement1), MYSQLI_ASSOC);
                                                    $row2 =  $result2['0'];
                                                    ?>
                                                    <p class="me-2 text-body text-decoration-line-through mb-0">$<?php echo $row2['normal_price']; ?></p>
                                                    <h3 class="text-body-emphasis mb-0">$<?php echo $row2['current_price']; ?></h3>
                                                </div>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <span class="fa fa-chevron-left"> </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <span class="fa fa-chevron-right"></span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
</main>

<?php require_once("footer.php");
