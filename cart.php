<?php
require_once("header.php");
require_once("config/functions.php");




?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>
<section class="pt-5">
    <div class="container">
        <nav class="mb-2" aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="cart.php">Cart</a></li>
            </ol>
        </nav>
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable">
                    <div class="table-responsive px-1" style="overflow: auto">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap align-middle fs-10"></th>
                                    <th class="white-space-nowrap align-middle" style="min-width:250px;">PRODUCTS</th>
                                    <th class="align-middle" style="width:80px;">COLOR</th>
                                    <th class="align-middle" style="width:150px;">SIZE</th>
                                    <th class="align-middle text-end" style="width:300px;">PRICE</th>
                                    <th class="align-middle ps-5" style="width:200px;">QUANTITY</th>
                                    <th class="align-middle text-end" style="width:250px;">TOTAL</th>
                                    <th class="text-end align-middle pe-0"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="cart-table-body">
                                <?php foreach ($cart as $item) { ?>
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="product-details.html"><img src="assets/img/products/1.png" alt="" width="53"></a></td>
                                    <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2 text-truncate d-block" href="product-details.html" style="max-width: 300px;"><?php echo $item['name'] ?></a></td>
                                    <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$<?php echo $item['price']; ?></td>
                                    <td class="quantity align-middle fs-8 ps-5">
                                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                                            <button class="btn btn-sm px-2" data-type="minus">-</button>
                                            <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="<?php echo $item['quantity']; ?>" aria-label="Amount (to the nearest dollar)">
                                            <button class="btn btn-sm px-2" data-type="plus">+</button></div>
                                    </td>
                                    <td class="total align-middle fw-bold text-body-highlight text-end">$<?php echo $item['price']*$item['quantity'] ?></td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2">
                                        <span class="fa fa-trash"></span></button></td>
                                </tr>
                                <?php  } ?>
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="text-body-emphasis fw-semibold ps-0 fs-8" colspan="6">Items subtotal :</td>
                                    <td class="text-body-emphasis fw-bold text-end fs-8">$<?php $ctotal = 0;
                                                                        if (empty($cart)) {
                                                                            echo "0.00";
                                                                        } else {
                                                                            foreach ($cart as $item) {
                                                                                $ctotal += $item['price']*$item['quantity'];
                                                                            }
                                                                            echo number_format((float)$ctotal, 2, '.', '');
                                                                        } ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-between-center mb-3">
                            <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="#!">Edit cart </a>
                        </div><select class="form-select mb-3" aria-label="delivery type">
                            <option value="cod">Cash on Delivery</option>
                            <option value="card">Card</option>
                            <option value="paypal">Paypal</option>
                        </select>
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="text-body fw-semibold">Items subtotal :</p>
                                <p class="text-body-emphasis fw-semibold">$691</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-body fw-semibold">Discount :</p>
                                <p class="text-danger fw-semibold">-$59</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-body fw-semibold">Tax :</p>
                                <p class="text-body-emphasis fw-semibold">$126.20</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-body fw-semibold">Subtotal :</p>
                                <p class="text-body-emphasis fw-semibold">$665</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-body fw-semibold">Shipping Cost :</p>
                                <p class="text-body-emphasis fw-semibold">$30</p>
                            </div>
                        </div>
                        <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher"><button class="btn btn-phoenix-primary px-5">Apply</button></div>
                        <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                            <h4 class="mb-0">Total :</h4>
                            <h4 class="mb-">$695.20</h4>
                        </div><button class="btn btn-primary w-100">Proceed to check out <i class="ri-arrow-right-s-line"></i><!-- <span class="fas fa-chevron-right ms-1 fs-10"></span> Font Awesome fontawesome.com --></button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of .container-->

    <script src="js/custom.js"></script>
</section>

<?php
require_once("footer.php");
