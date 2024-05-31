<?php
require_once("header.php");
?>
<link rel="stylesheet" href="css/product_page.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>
<?php
if (!isset($_GET['id'])) {
    header(
        'location: index.php'
    );
    exit();
}

$product_id = $_GET['id'];

$statement = mysqli_prepare($conn, "SELECT * FROM 
    (SELECT 
        products.*, products_inventory.sold, products_inventory.current_price, products_inventory.normal_price, products_inventory.quantity 
    FROM products INNER JOIN products_inventory 
    ON products.id = products_inventory.product_id) AS product 
    WHERE product.id = ?");
mysqli_stmt_execute($statement, array($product_id));
$product = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

$statement = mysqli_prepare($conn, "SELECT * FROM (SELECT products.id, end_category.ec_name, sub_category.sc_name, main_category.mc_name FROM products 
INNER JOIN end_category 
    ON products.category_id = end_category.ec_id 
INNER JOIN sub_category
    ON end_category.sc_id = sub_category.sc_id
INNER JOIN main_category
    ON sub_category.mc_id = main_category.mc_id) AS category WHERE category.id = ? LIMIT 1");
mysqli_stmt_execute($statement, array($product_id));
$category = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

$statement = mysqli_prepare($conn, "SELECT * FROM (SELECT product_size.id, size.id as size_id, p_id, size.svalue FROM product_size 
                                        INNER JOIN size 
                                            ON product_size.size_id = size.id) as productSize WHERE productSize.p_id = ?");
mysqli_stmt_execute($statement, array($product_id));
$product_size = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

if(isset($_POST['addtocart'])) {
    print_r($_POST);
}


?>



<div class="container">


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
        <div class="container-small">
            <!-- ========================== Bread Crumb ============================ -->
            <nav style="--bs-breadcrumb-divider: '>';" class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $category['0']['mc_name']; ?></a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $category['0']['sc_name']; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $category['0']['ec_name']; ?></li>
                </ol>
            </nav>

            <!-- ========================== Bread Crumb ============================ -->
            <div id="main">
                <?php
                $statement = $statement = mysqli_prepare($conn, "SELECT * FROM 
                        (SELECT product_photos.*, color.cvalue, photo.pvalue 
                            FROM product_photos INNER JOIN product_color 
                            ON product_photos.color_id = product_color.id INNER JOIN color 
                            ON product_photos.color_id = color.id INNER JOIN photo 
                            ON product_photos.pid = photo.id) AS pPhotoColor 
                            WHERE pPhotoColor.product_id = ?");
                mysqli_stmt_execute($statement, array($product['0']['id']));
                $product_photos = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);





                ?>
                <!-- div for displaying image of product -->
                <div id="product_display">
                    <!-- div for main big image -->
                    <div id="main_img">
                        <img src="assets/products/<?php echo $product_photos['0']['pvalue']; ?>" alt="">
                    </div>
                    <!-- End of main big image -->
                    <!-- Div for image slider -->
                    <div class="slide-box">
                        <div class="slide-img">
                            <!-- All sliding image will append here -->
                            <?php
                            foreach ($product_photos as $product_photo) {
                            ?>
                                <img src="assets/products/<?php echo $product_photo['pvalue']; ?>" alt="">
                            <?php
                            }
                            ?>
                        </div>
                        <div class="arrowbtn">
                            <button>&lt;</button>
                            <button>&gt;</button>
                        </div>
                    </div>
                    <!-- End of div image slider -->
                </div>
                <!-- End of product display -->

                <!-- div for offer and card options -->
                <div id="details">
                    <!-- Division for product name display -->
                    <div id="product_name">

                        <h3><?php echo $product['0']['name']; ?></h3>
                        <form action="" method="post">
                            <input type="hidden" name="itemid" value="<?php echo $product_id; ?>">
                            <div id="addition">
                                <div class="feature">
                                    <?php
                                    echo $product['0']['description'];
                                    ?>

                                    <div class="col-12 col-sm-auto">
                                        <p class="fw-semibold mb-2 text-body">Size : </p>
                                        <div class="d-flex align-items-center"><select class="form-select w-auto" name="size">
                                                <?php foreach ($product_size as $psize) { ?>
                                                    <option value="<?php echo $psize['size_id']; ?>"><?php echo $psize['svalue']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <p class="fw-semibold mb-2 text-body">Quantity : <?php echo $product['0']['quantity']; ?></p>



                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                            <input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" max="<?php echo $product['0']['quantity']; ?>" value="2" name="quantity">
                                            <button class="btn btn-phoenix-primary px-3" data-type="plus">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </div>
                                        <button class="btn btn-phoenix-primary px-3 border-0">
                                            <span class="fa fa-share-alt fs-7"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="price_box">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h1 class="me-3">$<?php echo $product['0']['current_price']; ?></h1>
                                        <p class="text-body-quaternary text-decoration-line-through fs-6 mb-0 me-3">$<?php echo $product['0']['normal_price']; ?></p>
                                        <p class="text-warning fw-bolder fs-6 mb-0"><?php echo number_format(((($product['0']['normal_price'] - $product['0']['current_price']) / $product['0']['normal_price']) * 100), 0) ?>% off</p>
                                    </div>

                                    <button type="submit" id="cart_btn" name="addtocart">add to cart</button>
                                    <button>buy now</button>
                                </div>
                            </div>
                        </form>


                        <!-- end of bank offer and pincode check -->
                    </div>
                    <!-- end of product name display -->
                </div>
                <!-- end of details section -->
            </div>



        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->




</div>
<script src="js/custom.js"></script>
<script src="js/product_page.js"></script>
<?php
require_once("footer.php");
