<?php
require_once("header.php");
?>

<section class="pt-5 pb-9">
    <div class="container-small cart">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
        </nav>
        <h2 class="mb-6">Cart</h2>
        <div class="row g-5">
            <div class="col-12 col-lg-8">
                <div id="cartTable" data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:10}">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs-9 mb-0 border-top border-translucent">
                            <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                                    <th class="sort align-middle" scope="col" style="width:80px;">COLOR</th>
                                    <th class="sort align-middle" scope="col" style="width:150px;">SIZE</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                                    <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                                    <th class="sort text-end align-middle pe-0" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="cart-table-body">
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="product-details.html"><img src="assets/img/products/1.png" alt="" width="53"></a></td>
                                    <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                                    <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$199</td>
                                    <td class="quantity align-middle fs-8 ps-5">
                                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                                    </td>
                                    <td class="total align-middle fw-bold text-body-highlight text-end">$398</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                            </svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button></td>
                                </tr>
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="product-details.html"><img src="assets/img/products/2.png" alt="" width="53"></a></td>
                                    <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                                    <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$150</td>
                                    <td class="quantity align-middle fs-8 ps-5">
                                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                                    </td>
                                    <td class="total align-middle fw-bold text-body-highlight text-end">$300</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                            </svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button></td>
                                </tr>
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="product-details.html"><img src="assets/img/products/3.png" alt="" width="53"></a></td>
                                    <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                                    <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy Golden</td>
                                    <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">34mm</td>
                                    <td class="price align-middle text-body fs-9 fw-semibold text-end">$65</td>
                                    <td class="quantity align-middle fs-8 ps-5">
                                        <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)"><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                                    </td>
                                    <td class="total align-middle fw-bold text-body-highlight text-end">$130</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                            </svg><!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button></td>
                                </tr>
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="text-body-emphasis fw-semibold ps-0 fs-8" colspan="6">Items subtotal :</td>
                                    <td class="text-body-emphasis fw-bold text-end fs-8">$691</td>
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
</section>

<? require_once("footer.php");
