<?php
include("header.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>
<!-- slider -->

<div class="slider">
    <div class="container">
        <div class="wrapper">
            <div class="myslider">
                <div class="wrapper">
                    <?php
                    $statement = mysqli_prepare($conn, "SELECT * FROM slider LIMIT 4");
                    mysqli_stmt_execute($statement);
                    $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);
                    
                    foreach ($result as $row) {
                    ?>
                        <div class="slide">
                            <div class="item">
                                <div class="image object-cover">
                                    <img src="assets/slider/<?php echo $row['photo']; ?>" alt="">
                                </div>
                                <div class="text-content flexcol">
                                    <h4><?php echo $row['heading']; ?></h4>
                                    <h2><span><?php echo $row['content1']; ?></span><br><span><?php echo $row['content2']; ?></span>
                                    </h2>
                                    <a href="<?php echo $row['button_url']; ?>" class="primary-button"><?php echo $row['button_text']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                <a class="next" onclick="plusSlides(1)">&#10095</a>

                <div class="pagination">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider -->

<div class="container" style="height: 200px;"></div>

<!-- trending -->
<div class="trending">
    <div class="container">
        <div class="wrapper">
            <div class="sectop flexitem">
                <h2><span class="circle"></span><span>Trending Products</span></h2>
            </div>
            <div class="product-carousel row align-item-center">
                <?php
                $statement = mysqli_prepare($conn, "SELECT * FROM products WHERE is_trending = 1");
                mysqli_stmt_execute($statement);
                $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

                foreach ($result as $row) {
                    $statement = mysqli_prepare($conn, "SELECT * FROM 
                                                                (SELECT 
                                                                    products.*,
                                                                    products_inventory.sold, 
                                                                    products_inventory.current_price, 
                                                                    products_inventory.normal_price, 
                                                                    products_inventory.quantity 
                                                                FROM products INNER JOIN products_inventory 
                                                                ON products.id = products_inventory.product_id) AS product 
                                                                WHERE product.id = ?");
                    mysqli_stmt_execute($statement, array($row['id']));
                    $product = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);
                ?>


                    <div class="col">
                        <a href="product-details.php?id=<?php echo $row['id']; ?>">
                            <div class="card border-0" style="width: 18rem;">
                                <img class="border" src="assets/products/<?php echo $row['cover']; ?>" alt="">
                                <div class="card-body">
                                    <h5 class="card-title fw-boldas"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"></p>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-body text-decoration-line-through mb-0"><?php echo $product['0']['normal_price']; ?></p>
                                        <h3 class="text-body-emphasis mb-0"><?php echo $product['0']['current_price']; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl.animate.js"></script>

<?php

include("footer.php"); ?>