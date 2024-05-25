<?php
include ("header.php");
?>
</header>
<!-- slider -->

<div class="slider">
    <div class="container">
        <div class="wrapper">
            <div class="myslider">
                <div class="wrapper">
                    <?php
                    $statement = $pdo->prepare("SELECT * FROM slider LIMIT 4");
                    $statement->execute();
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

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
                                    <a href="<?php echo $row['button_url']; ?>"
                                        class="primary-button"><?php echo $row['button_text']; ?></a>
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

            <?php 
                $statement = mysqli_prepare($conn, "SELECT * FROM products WHERE is_trending = 1");
                mysqli_stmt_execute($statement);
                $result = mysqli_fetch_assoc(mysqli_stmt_get_result($statement));
                
                
            ?>

            <div class="column">
                <div class="flexwrap">
                    <?php 
                        print_r($result);
                        foreach($result as $row) {
                            print_r($row);
                        }
                    ?>
                    <div class="row products big">
                        <div class="item">


                            <div class="offer">
                                <p>Offer ends at</p>
                                <ul class="flexcenter">
                                    <li>1</li>
                                    <li>15</li>
                                    <li>27</li>
                                    <li>60</li>
                                </ul>
                            </div>


                            <div class="media">
                                <div class="image">
                                    <a href="#"><img src="assets/products/apparel4.jpg" alt=""></a>
                                </div>
                                <div class="hoverable">
                                    <ul>
                                        <li><a href="#"><i class="ri-heart-line"></i></a></li>
                                        <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                        <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                    </ul>
                                </div>
                                <div class="discount circle flexcenter"><span>31%</span></div>
                            </div>
                            <div class="content">
                                <div class="rating">
                                    <div class="stars"></div>
                                    <span class="mini-text">(2,546)</span>
                                </div>
                                <h3 class="main-links"><a href="#">Happy Sailed Womens Summer Boho Floral</a></h3>
                            </div>
                            <div class="price">
                                <div class="current">$129.99</div>
                                <div class="normal mini-text">$189.98</div>
                            </div>


                            <div class="stock mini-text">
                                <div class="qty">
                                    <span>Stoke: <strong class="qty-available">107</strong></span>
                                    <span>Sold: <strong class="qty-sold">3,459</strong></span>
                                </div>
                                <div class="bar">
                                    <div class="available"></div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="row products mini"></div>
                    <div class="row products mini"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ("footer.php"); ?>