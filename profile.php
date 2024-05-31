<?php
require_once('header.php');
if (isset($_POST['logout'])) {
    $current_date_time = date('Y-m-d H:i:s');
    $statement = mysqli_prepare($conn, "UPDATE users SET token = NULL, updated_at = ? WHERE id = ?");
    mysqli_stmt_execute($statement, array($current_date_time, $_SESSION['customer']['id']));

    unset($_SESSION['customer']);
    unset($_COOKIE['token']);

    header(
        "location: " . BASE_URL . "index.php"
    );

    exit();
}

?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/profile.css">
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
                          

<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<div class="my-5">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
			<form class="file-upload" method="post">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="mb-4 mt-0">Contact detail</h4>
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">First Name *</label>
									<input type="text" class="form-control" placeholder="Demlew" aria-label="First name" >
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Last Name *</label>
									<input type="text" class="form-control" placeholder="Abebe" aria-label="Last name" >
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Phone number *</label>
									<input type="text" class="form-control" placeholder="(333) 000 555" aria-label="Phone number">
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Mobile number *</label>
									<input type="text" class="form-control" placeholder="+91 9852 8855 252" aria-label="Phone number">
								</div>
								<!-- Email -->
								<div class="col-md-12">
									<label for="inputEmail4" class="form-label">Email *</label>
									<input type="email" class="form-control" id="inputEmail4" placeholder="example@homerealty.com">
								</div>
                                <!-- country -->
    <!-- Don't forget to add country list                -->
                                <label class="form-label">Country</label>
                                <select class="form-select" id="country" name="country">

                                </select>
								<!-- zipcode -->
								<div class="col-md-6">
									<label class="form-label">ZipCode *</label>
									<input type="text" class="form-control">
								</div>
                                <!-- State -->
                                <div class="col-md-6">
                                    <label class="form-label">State *</label>
                                    <input type="text" class="form-control">
                                </div>

                                
							</div> <!-- Row END -->
						</div>
					</div>
						
					<!-- change password -->
					<div class="col-xxl-6">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="my-4">Change Password</h4>
								<!-- Old password -->
								<div class="col-md-6">
									<label for="exampleInputPassword1" class="form-label">Old password *</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div>
								<!-- New password -->
								<div class="col-md-6">
									<label for="exampleInputPassword2" class="form-label">New password *</label>
									<input type="password" class="form-control" id="exampleInputPassword2">
								</div>
								<!-- Confirm password -->
								<div class="col-md-12">
									<label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
									<input type="password" class="form-control" id="exampleInputPassword3">
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->
				<!-- button -->
				<div class="gap-3 d-md-flex justify-content-md-end text-center">
					<button type="button" class="btn btn-dark btn-lg">Delete profile</button>
					<button type="button" class="btn  btn-lg" style="background-color:#c3ff93">Update profile</button>
                    <input type="submit" class="btn btn-warning btn-lg" value="logout" name="logout">
				</div>
			</form> <!-- Form END -->
		</div>
	</div>
	</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
require_once('footer.php');
