<?php
require_once("header.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
</header>

<main class="main" id="top">
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-body-tertiary mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"><span class="fa-solid fa-filter me-2"></span>Filter</button>
            <div class="row">
                <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
                    <div class="phoenix-offcanvas-filter bg-body scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn" style="top: 92px">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseAvailability" role="button" aria-expanded="true" aria-controls="collapseAvailability">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Availability</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseAvailability">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="inStockInput" type="checkbox" name="color" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="inStockInput">In stock</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="preBookInput" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="preBookInput">Pre-book</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="outOfStockInput" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="outOfStockInput">Out of stock</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseColorFamily" role="button" aria-expanded="true" aria-controls="collapseColorFamily">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Color family</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseColorFamily">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlack" type="checkbox" name="color" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlack">Black</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlue" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlue">Blue</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckRed" type="checkbox" name="color"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckRed">Red</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseBrands" role="button" aria-expanded="true" aria-controls="collapseBrands">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Brands</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseBrands">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="brands" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckBlackberry">Blackberry
                                    </label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckApple" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckApple">Apple
                                    </label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckNokia" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckNokia">Nokia
                                    </label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckSony" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flexCheckSony">Sony
                                    </label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckLG" type="checkbox" name="brands"><label class="form-check-label d-block lh-sm fs-8 text-body mb-0 fw-normal" for="flexCheckLG">LG
                                    </label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Price range</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapsePriceRange">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="input-group me-2"><input class="form-control" type="text" aria-label="First name" placeholder="Min"><input class="form-control" type="text" aria-label="Last name" placeholder="Max"></div><button class="btn btn-phoenix-primary px-3" type="button">Go</button>
                            </div>
                        </div><a class="btn px-0 y-4 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Rating</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseRating">
                            <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio1" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span></div>
                            <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio2" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span>
                                <p class="ms-1 mb-0">&amp; above</p>
                            </div>
                            <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio3" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span>
                                <p class="ms-1 mb-0">&amp; above </p>
                            </div>
                            <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio4" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span>
                                <p class="ms-1 mb-0">&amp; above</p>
                            </div>
                            <div class="d-flex align-items-center mb-3"><input class="form-check-input me-3" id="flexRadio5" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span><span class="fa-regular fa-star text-warning-light fs-9 me-1"></span>
                                <p class="ms-1 mb-0">&amp; above </p>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDisplayType" role="button" aria-expanded="true" aria-controls="collapseDisplayType">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Display type</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseDisplayType">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="lcdInput" type="checkbox" name="displayType" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="lcdInput">LCD</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="ipsInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="ipsInput">IPS</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="oledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oledInput">OLED</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="amoledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="amoledInput">AMOLED</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="retinaInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="retinaInput">Retina</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCondition" role="button" aria-expanded="true" aria-controls="collapseCondition">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Condition</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseCondition">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="newInput" type="checkbox" name="condition" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="newInput">New</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="usedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="usedInput">Used</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="refurbrishedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="refurbrishedInput">Refurbrished</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDelivery" role="button" aria-expanded="true" aria-controls="collapseDelivery">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Delivery</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseDelivery">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="freeShippingInput" type="checkbox" name="delivery" checked><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="freeShippingInput">Free Shipping</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneDayShippingInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oneDayShippingInput">One-day Shipping</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="codInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="codInput">Cash on Delivery</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCampaign" role="button" aria-expanded="true" aria-controls="collapseCampaign">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Campaign</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseCampaign">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="summerSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="summerSaleInput">Summer Sale</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="marchMadnessInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="marchMadnessInput">March Madness</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="flashSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="flashSaleInput">Flash Sale</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="bogoBlastInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="bogoBlastInput">BOGO Blast</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarranty" role="button" aria-expanded="true" aria-controls="collapseWarranty">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Warranty</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseWarranty">
                            <div class="mb-2">
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="threeMonthInput">3 months</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="sixMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="sixMonthInput">6 months</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneYearInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="oneYearInput">1 year</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="twoYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="twoYearsInput">2 years</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="threeYearsInput">3 years</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="fiveYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="fiveYearsInput">5 years</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarrantyType" role="button" aria-expanded="true" aria-controls="collapseWarrantyType">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Warranty Type</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseWarrantyType">
                            <div class="mb-2">
                                <div class="form-check mb-0x"><input class="form-check-input mt-0" id="replacementInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="replacementInput">Replacement</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="serviceInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="serviceInput">Service</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="partialCoveregeInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="partialCoveregeInput">Partial Coverage</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="appleCareInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="appleCareInput">Apple Care</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="moneyBackInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="moneyBackInput">Money back</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="extendableInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="extendableInput">Extendable</label></div>
                            </div>
                        </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCertification" role="button" aria-expanded="true" aria-controls="collapseCertification">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-8 text-body-highlight">Certification</div><span class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseCertification">
                            <div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="rohsInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="rohsInput">RoHS</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="fccInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="fccInput">FCC</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="conflictInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="conflictInput">Conflict Free</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoOneInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoOneInput">ISO 9001:2015</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoTwoInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoTwoInput">ISO 27001:2013</label></div>
                                <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoThreeInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0" for="isoThreeInput">IEC 61000-4-2</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop style="top: 92px"></div>
                </div>
                <div class="col-lg-9 col-xxl-10">
                    <div class="row gx-3 gy-6 mb-8">
                        <?php
                        $statement = $pdo->prepare("SELECT * FROM products ");
                        $statement->execute();
                        $result1 = $statement->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($result1 as $row1) {
                            $statement = $pdo->prepare("SELECT * FROM review WHERE id = ?");
                            $statement->execute(array($row1['id']));
                            $reviews = $statement->fetchAll(PDO::FETCH_ASSOC);

                        ?>
                            <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                                <div class="Sh-100">
                                    <div class="text-decoration-none h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="border border-1 rounded-3 position-relative mb-3">
                                                    <span class="badge position-absolute translate-middle bg-primary" style="top: 30px; right: 5px;" >
                                                        <span class="fa fa-heart d-block-hover " style="font-size: 20px;"></span>
                                                    </span>
                                                    <img class="img-fluid" src="assets/products/<?php echo $row1['cover']; ?>" alt="" />
                                                </div>
                                                <a class="stretched-link" href="product-details.php?id=<?php echo $row1['id'] ?>">
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
                                                    $statement1 = $pdo->prepare("SELECT * FROM products_inventory WHERE id = ? LIMIT 1");
                                                    $statement1->execute(array($row1['id']));
                                                    $result2 = $statement1->fetchAll(PDO::FETCH_ASSOC);
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
