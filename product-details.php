<?php
require_once("header.php");
if (!isset($_GET['id'])) {
    header(
        'location: index.php'
    );
    exit();
}

$statement = $statement = $pdo->prepare("SELECT * FROM 
    (SELECT 
        products.*, products_inventory.sold, products_inventory.current_price, products_inventory.normal_price, products_inventory.quantity 
    FROM products INNER JOIN products_inventory 
    ON products.id = products_inventory.product_id) AS product 
    WHERE product.id = ?");
$statement->execute(array($_GET['id']));
$product = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="pt-5 pb-9">

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
        <div class="container-small">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Fashion</a></li>
                    <li class="breadcrumb-item"><a href="#">Womens fashion</a></li>
                    <li class="breadcrumb-item"><a href="#">Footwear</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hills</li>
                </ol>
            </nav>
            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                <div class="col-12 col-lg-6">

                    <?php
                    $statement = $statement = $pdo->prepare("SELECT * FROM 
                        (SELECT product_photos.*, color.cvalue, photo.pvalue 
                            FROM product_photos INNER JOIN product_color 
                            ON product_photos.color_id = product_color.id INNER JOIN color 
                            ON product_photos.color_id = color.id INNER JOIN photo 
                            ON product_photos.pid = photo.id) AS pPhotoColor 
                            WHERE pPhotoColor.product_id = ?");
                    $statement->execute(array($product['0']['id']));
                    $product_photos = $statement->fetchAll(PDO::FETCH_ASSOC);


                    ?>
                    <div class="big-img">
                        <div class="big-image-wrapper swiper-wrapper">
                            <div class="image-show swiper-slide">
                                <a href="">
                                    <img src="assets/products/<?php echo $product_photos['0']['pvalue']; ?>" alt="">
                                </a>
                            </div>
                            <div class="image-show swiper-slide">
                                <a href="">
                                    <img src="assets/products/<?php echo $product_photos['1']['pvalue']; ?>" alt="">
                                </a>
                            </div>
                            <div class="image-show swiper-slide">
                                <a href="">
                                    <img src="assets/products/<?php echo $product_photos['2']['pvalue']; ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div thumbSlider="" class="small-image">
                        <ul class="small-image-wrapper swiper-wrapper">
                            <div class="row align-items-start ">
                                <div class="col-md-3 col-sm-2">
                                    <li class="thumbnail-show swipper-slide">
                                        <img src="assets/products/<?php echo $product_photos['0']['pvalue']; ?>" alt="">
                                    </li>
                                </div>
                                <div class="col-md-3 col-sm-2">
                                    <li class="thumbnail-show">
                                        <img src="assets/products/<?php echo $product_photos['1']['pvalue']; ?>" alt="">
                                    </li>
                                </div>
                                <div class="col-md-3 col-sm-2">
                                    <li class="thumbnail-show">
                                        <img src="assets/products/<?php echo $product_photos['2']['pvalue']; ?>" alt="">
                                    </li>
                                </div>

                            </div>
                        </ul>
                    </div>
                    <div class="d-flex"><button class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs-9 fs-sm-8">
                            <i class="ri-heart-line"></i><!-- <span class="me-2 far fa-heart"></span>  -->Add to wishlist</button><button class="btn btn-lg btn-warning rounded-pill w-100 fs-9 fs-sm-8"><i class="ri-shopping-cart-fill"></i><!-- <span class="fas fa-shopping-cart me-2"></span>  -->Add to cart</button></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <div class="d-flex flex-wrap">
                                <div class="me-2">
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span clas="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                </div>
                                <p class="text-primary fw-semibold mb-2">6548 People rated and reviewed </p>
                            </div>
                            <h3 class="mb-3 lh-sm"><?php echo $product['0']['name']; ?></h3>
                            <div class="d-flex flex-wrap align-items-start mb-3"><span class="badge text-bg-success fs-9 rounded-pill me-2 fw-semibold">#1 Best seller</span><a class="fw-semibold" href="#!">in Phoenix sell analytics 2021</a></div>
                            <div class="d-flex flex-wrap align-items-center">
                                <h1 class="me-3">$<?php echo $product['0']['current_price']; ?></h1>
                                <p class="text-body-quaternary text-decoration-line-through fs-6 mb-0 me-3">$<?php echo $product['0']['normal_price']; ?></p>
                                <p class="text-warning fw-bolder fs-6 mb-0">10% off</p>
                            </div>
                            <p class="text-success fw-semibold fs-7 mb-2">In stock</p>
                            <p class="mb-2 text-body-secondary"><strong class="text-body-highlight">Do you want it on Saturday, July 29th?</strong> Choose <strong class="text-body-highlight">Saturday Delivery </strong>at checkout if you want your order delivered within 12 hours 43 minutes, <a class="fw-bold" href="#!">Details. </a><strong class="text-body-highlight">Gift wrapping is available.</strong></p>
                            <p class="text-danger-dark fw-bold mb-5 mb-lg-0">Special offer ends in 23:00:45 hours</p>
                        </div>
                        <div>
                            <div class="mb-3">
                                <p class="fw-semibold mb-2 text-body">Color : <span class="text-body-emphasis" data-product-color="data-product-color">Blue</span></p>
                                <div class="d-flex product-color-variants" data-product-color-variants="data-product-color-variants">
                                    <div class="rounded-1 border border-translucent me-2 active" data-variant="Blue" data-products-images="[&quot;../../../assets/img/products/details/blue_front.png&quot;,&quot;../../../assets/img/products/details/blue_back.png&quot;,&quot;../../../assets/img/products/details/blue_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Red" data-products-images="[&quot;../../../assets/img/products/details/red_front.png&quot;,&quot;../../../assets/img/products/details/red_back.png&quot;,&quot;../../../assets/img/products/details/red_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Green" data-products-images="[&quot;../../../assets/img/products/details/green_front.png&quot;,&quot;../../../assets/img/products/details/green_back.png&quot;,&quot;../../../assets/img/products/details/green_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Purple" data-products-images="[&quot;../../../assets/img/products/details/purple_front.png&quot;,&quot;../../../assets/img/products/details/purple_back.png&quot;,&quot;../../../assets/img/products/details/purple_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Silver" data-products-images="[&quot;../../../assets/img/products/details/silver_front.png&quot;,&quot;../../../assets/img/products/details/silver_back.png&quot;,&quot;../../../assets/img/products/details/silver_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Yellow" data-products-images="[&quot;../../../assets/img/products/details/yellow_front.png&quot;,&quot;../../../assets/img/products/details/yellow_back.png&quot;,&quot;../../../assets/img/products/details/yellow_side.png&quot;]"><img src="" alt="" width="38"></div>
                                    <div class="rounded-1 border border-translucent me-2" data-variant="Orange" data-products-images="[&quot;../../../assets/img/products/details/orange_front.png&quot;,&quot;../../../assets/img/products/details/orange_back.png&quot;,&quot;../../../assets/img/products/details/orange_side.png&quot;]"><img src="" alt="" width="38"></div>
                                </div>
                            </div>
                            <div class="row g-3 g-sm-5 align-items-end">
                                <div class="col-12 col-sm-auto">
                                    <p class="fw-semibold mb-2 text-body">Size : </p>
                                    <div class="d-flex align-items-center"><select class="form-select w-auto">
                                            <option value="44">44</option>
                                            <option value="22">22</option>
                                            <option value="18">18</option>
                                        </select><a class="ms-2 fs-9 fw-semibold" href="#!">Size chart</a></div>
                                </div>
                                <div class="col-12 col-sm">
                                    <p class="fw-semibold mb-2 text-body">Quantity : </p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                            <input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" value="2">
                                            <button class="btn btn-phoenix-primary px-3" data-type="plus">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </div>
                                        <button class="btn btn-phoenix-primary px-3 border-0">
                                            <span class="fa fa-share-alt fs-7"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
        <div class="container-small">
            <ul class="nav nav-underline fs-9 mb-4" id="productTab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Description</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="specification-tab" data-bs-toggle="tab" href="#tab-specification" role="tab" aria-controls="tab-specification" aria-selected="false" tabindex="-1">Specification</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false" tabindex="-1">Ratings &amp; reviews</a></li>
            </ul>
            <div class="row gx-3 gy-7">
                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-body-emphasis" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="mb-5">CUPERTINO, CA , The M1 CPU allows Apple to deliver an all-new iMac with a lot more compact and impressively thin design. The new iMac delivers tremendous performance in an 11.5-millimeter-thin design with a stunning side profile that almost vanishes. iMac includes a 24-inch 4.5K Retina display with 11.3 million pixels, 500 nits of brightness, and over a billion colors, giving a beautiful and vivid viewing experience. It is available in a variety of striking colors to match a user's own style and brighten any area. A 1080p FaceTime HD camera, studio-quality mics, and a six-speaker sound system are all included in the new iMac, making it the greatest camera and audio system ever in a Mac. Touch ID is also making its debut on the iMac, making it easier than ever to securely log in, make Apple Pay transactions, and switch user accounts with the touch of a finger. Apps launch at lightning speed, everyday chores seem astonishingly fast and fluid, and demanding workloads like editing 4K video and working with large photos are faster than ever before thanks to the power and performance of M1 and macOS Big Sur.</p><a href="../../../assets/img/products/23.png" data-gallery="gallery-description"><img class="img-fluid mb-5 rounded-3" src="../../../assets/img/products/23.png" alt=""></a>
                            <p class="mb-0">The new iMac joins Apple's fantastic M1-powered Mac family, which includes the MacBook Air, 13-inch MacBook Pro, and Mac mini, and represents yet another step ahead in the company's shift to Apple silicon. Customers may order iMac starting Friday, April 30. It's the most personal, powerful, capable, and enjoyable it's ever been. In the second half of May, the iMac will be available."M1 is a huge step forward for the Mac," said Greg Joswiak, Apple's senior vice president of Worldwide Marketing. "Today, we're delighted to present the all-new iMac, the first Mac developed around the groundbreaking M1 processor." "The new iMac takes everything people love about iMac to an entirely new level, with its beautiful design in seven breathtaking colors, its immersive 4.5K Retina display, the greatest camera, mics, and speakers ever in a Mac, and Touch ID, combined with M1's incredible performance and macOS Big Sur's power."</p>
                        </div>
                        <div class="tab-pane pe-lg-6 pe-xl-12 fade" id="tab-specification" role="tabpanel" aria-labelledby="specification-tab">
                            <h3 class="mb-0 ms-4 fw-bold">Processor/Chipset</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"> </th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Chip name</h6>
                                        </td>
                                        <td class="px-5 mb-0">Apple M1 chip</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Cpu core</h6>
                                        </td>
                                        <td class="px-5 mb-0">8 (4 performance and 4 efficiency)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Gpu core</h6>
                                        </td>
                                        <td class="px-5 mb-0">7</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Neural engine</h6>
                                        </td>
                                        <td class="px-5 mb-0">16 cores</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Storage</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"></th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Memory</h6>
                                        </td>
                                        <td class="px-5 mb-0">8 GB unified</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">SSD</h6>
                                        </td>
                                        <td class="px-5 mb-0">256 GB</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Display</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"> </th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Display type</h6>
                                        </td>
                                        <td class="px-5 mb-0">Retina</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Size</h6>
                                        </td>
                                        <td class="px-5 mb-0">24” (actual diagonal 23.5”)</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Resolution</h6>
                                        </td>
                                        <td class="px-5 mb-0">4480 x 2520 </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Brightness</h6>
                                        </td>
                                        <td class="px-5 mb-0">500 nits</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Additional Specifications</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"> </th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Camera</h6>
                                        </td>
                                        <td class="px-5 mb-0">1080p FaceTime HD camera</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight">
                                            <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Video </h6>
                                        </td>
                                        <td class="px-5 mb-0">Full native resolution on built-in display at 1 billion colors; <br>One external display with up to 6K resolution at 60Hz</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight">
                                            <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Audio</h6>
                                        </td>
                                        <td class="px-5 mb-0">High-fidelity six-speaker with force-cancelling woofers <br>Wide stereo sound <br>Spatial audio with Dolby Atmos3<br>Studio-quality three-mic array with directional beamforming</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight">
                                            <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Inputs </h6>
                                        </td>
                                        <td class="px-5 mb-0">Magic Keyboard<br>Magic Mouse</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight">
                                            <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Wireless </h6>
                                        </td>
                                        <td class="px-5 mb-0">802.11ax Wi-Fi 6 (IEEE 802.11a/b/g/n/ac compatible)<br>Bluetooth 5.0 wireless technology</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight">
                                            <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">I/O &amp; expantions </h6>
                                        </td>
                                        <td class="px-5 mb-0">Thunderbolt / USB 4 ports x 2<br>3.5 mm headphone jack<br>Gigabit Ethernet<br>USB 3 ports x2</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Operating System</h6>
                                        </td>
                                        <td class="px-5 mb-0">macOS Monterey </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="mb-3 mt-6 ms-4 fw-bold">In The Box</h3>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">iMac 24”</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">Magic Keyboard </p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">Magic Mouse</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">143W power adapter</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">2m Power Cord</p>
                            <p class="lh-sm border-y border-translucent mb-0 py-3 px-4">USB-C to Lightning Cable</p>
                        </div>
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="bg-body-emphasis rounded-3 p-4 border border-translucent">
                                <div class="row g-3 justify-content-between mb-4">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <h2 class="fw-bolder me-3">4.9<span class="fs-8 text-body-quaternary fw-bold">/5</span></h2>
                                            <div class="me-3">
                                                <span class="fa fa-star text-warning fs-6"></span>
                                                <span class="fa fa-star text-warning fs-6"></span>
                                                <span class="fa fa-star text-warning fs-6"></span>
                                                <span class="fa fa-star text-warning fs-6"></span>
                                                <span class="fa fa-star-half-alt star-icon text-warning fs-6"></span>
                                            </div>
                                            <p class="text-body mb-0 fw-semibold fs-7">6548 ratings and 567 reviews</p>
                                        </div>
                                    </div>

                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fa fa-ellipsis-h fs-10"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-body-tertiary fs-9 mb-1">35 mins ago</p>
                                <p class="text-body-highlight mb-3">Nice and beautiful product.</p>
                                <div class="row g-2 mb-2">
                                    <div class="col-auto"><a href="" data-gallery="gallery-3"><img src="" alt="" height="164"></a></div>
                                    <div class="col-auto"><a href="" data-gallery="gallery-3"><img src="" alt="" height="164"></a></div>
                                    <div class="col-auto"><a href="" data-gallery="gallery-3"><img src="" alt="" height="164"></a></div>
                                </div>
                                <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2">
                                        <span class="fa fa-thumbs-up"></span>
                                    </button>
                                    <button class="btn btn-sm btn-phoenix-secondary me-1">
                                        <span class="fa fa-thumbs-down"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <nav>
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#!">
                                                <span class="fa fa-chevron-left"> </span> </a></li>
                                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item active"><a class="page-link" href="#!">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">
                                                <span class="fa fa-chevron-right"></span> </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

</div>


<?php
require_once("footer.php");
