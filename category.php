<?php
require_once("header.php"); ?>
</header>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/category.css">
<link rel="stylesheet" href="css/styles.css">
</header>

<div class="container">
    <div class="sidebar col-md-3">
        <div class="category">
            <?php
            $statement = mysqli_prepare($conn, "SELECT * FROM main_category WHERE is_showed=1 AND is_new=0 ");
            mysqli_stmt_execute($statement);
            $result = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

            foreach ($result as $key => $value) {
            ?>
                <div class="category-header" onclick="toggleCategory('<?php echo $key; ?>')"><i class="ri-add-line"></i><?php echo $value['mc_name']; ?>
                    <?php
                    $statement = mysqli_prepare($conn, "SELECT * FROM sub_category WHERE mc_id=? ");
                    mysqli_stmt_execute($statement, array($value['mc_id']));
                    $result1 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC); ?> 
                    <div class="subcategory" id="<?php echo $key; ?>">
                    <?php

                    foreach ($result1 as $key1 => $value1) {
                    ?>
                        
                            <div class="subcategory-header" onclick="toggleSubcategory('<?php echo $key1; ?>')"><i class="ri-add-line"><?php echo $value1['sc_name']; ?></i>
                                <?php
                                $statement = mysqli_prepare($conn, "SELECT * FROM end_category WHERE sc_id=? ");

                                mysqli_stmt_execute($statement, array($value1['sc_id']));
                                $result2 = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC); ?>
                                <div class="subcategory-content" id="<?php echo $key1; ?>"><?php
                                                                                            foreach ($result2 as $row2) { ?>

                                        <a href="#"><?php echo $row2['ec_name']; ?></a>

                                    <?php } ?>
                                </div>
                            </div>
                        
                    <?php } ?>
                </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="main-content col-md-9">
        <h2>All Products Under "Men"</h2>
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Amazfit GTS 3 Smart Watch">
            <p>Amazfit GTS 3 Smart Watch for Android iPhone</p>
            <p class="price">$179 <span class="original-price">$199</span></p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Men's Soft Classic Sneaker">
            <p>Men's Soft Classic Sneaker</p>
            <p class="price">$91 <span class="original-price">$110</span></p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://via.placeholder.com/150" alt="Men's Fleece Jogger Pant">
            <p>Men's Fleece Jogger Pant</p>
            <p class="price">$37 <span class="original-price">$58</span></p>
            <button>Add to Cart</button>
        </div>
    </div>
</div>
<script src="js/category.js"></script>
</body>

</html>

<?php
require_once("footer.php"); ?>