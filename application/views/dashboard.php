<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	<meta name="viewport" content="width=1202px, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<title>
		Dashboard
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

	<!-- Nucleo Icons -->
	<!-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> -->
	<!-- <link id="pagestyle" rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nucleo-icons.css') ?>"> -->
	<!-- <link id="pagestyle" rel="stylesheet" type="text/css" href="<?= base_url('nucleo-svg.css') ?>"> -->

	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />  -->

	<!-- CSS Files -->
	<!-- <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.1" rel="stylesheet" /> -->
	<link id="pagestyle" rel="stylesheet" type="text/css"
		href="<?= base_url('assets/css/soft-ui-dashboard.css?v=1.0.1') ?>">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<link id="pagestyle" rel="stylesheet" type="text/css" href="<?= base_url('assets/css/tables.css') ?>">
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link id="pagestyle" rel="stylesheet" type="text/css"
		href="<?= base_url('assets/css/modal.css') ?>">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body class="g-sidenav-show bg-gray-100 ">

	<!-- <div class="row justify-content-md-center m-3">
    <div class="w-auto p-1"> -->

	<div class="main-content position-relative bg-gray-100">
		<!-- Navbar -->
		<nav
			class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
			<div class="container-fluid py-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
						<li class="breadcrumb-item text-sm"><a class="text-white opacity-5"
								href="javascript:;">Pages</a></li>
						<li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
					</ol>
					<h6 class="text-white font-weight-bolder ms-2">Profile</h6>
				</nav>
				<div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">

					<div class="ms-md-auto pe-md-3 d-flex align-items-center">
					</div>

					<ul class="navbar-nav justify-content-end">
						<li class="nav-item d-flex align-items-center">
							<a href="<?= base_url().'login';?>" class="nav-link text-white font-weight-bold px-0">
								<i class="fa fa-user me-sm-1"></i>
								<span class="d-sm-inline d-none">Sign Out</span>
							</a>
						</li>
						<li class="nav-item px-3 d-flex align-items-center">
							<a href="#" class="nav-link text-white p-0"
							data-toggle="modal" data-target="#checkSetting">
								<i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->

		<!-- Start head profile -->
		<div class="container-fluid">
			<!-- <div class="page-header min-height-300 border-radius-xl mt-4"
				style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;"> -->
			<div class="page-header min-height-300 border-radius-xl mt-4"
				style="background-image: url('<?= base_url(); ?>assets/img/curved0.jpg'); background-position-y: 50%;">
				<span class="mask bg-gradient-primary opacity-6"></span>
			</div>
			<div class="card card-body blur shadow-blur mx-4 mt-n6">
				<div class="row gx-4">
					<div class="col-auto">
						<div class="avatar avatar-xl position-relative">
							<img src="<?= base_url(); ?>assets/img/leaf.jpg" alt="..."
								class="w-100 border-radius-lg shadow-sm">
							<a href="#"
								class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2"
								data-toggle="modal" data-target="#uploadPicture">
								<i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top"
									title=""></i>
							</a>
						</div>
					</div>
					<div class="col-auto my-auto">
						<div class="h-100">
							<h5 class="mb-1">
								<!-- Alec Thompson -->
								Iman Nurjaman
							</h5>
							<p class="mb-0 font-weight-bold text-sm">
								<!-- CEO / Co-Founder -->
								NIM 172220035
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-8 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
						<div class="nav-wrapper position-relative end-0">
							<ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
								<li class="nav-item">
									<a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="javascript:;"
										role="tab" aria-controls="overview" aria-selected="true">
										<span class="ms-1">Celsius
											<DIv>
												<strong>
													26 <sup>o</sup>C
												</strong>
											</DIv>
										</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;"
										role="tab" aria-controls="teams" aria-selected="false">
										<span class="ms-1">Fahrenheit
											<div>
												<strong>
													77 <sup>o</sup>F
												</strong>
											</div>
										</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;"
										role="tab" aria-controls="dashboard" aria-selected="false">
										<span class="ms-1">Humidity
											<div>
												<strong>
													88 <sup>o</sup>H
												</strong>
											</div>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start head profile -->

		<div class="container-fluid py-4">
			<div class="row">
				<div class="col-12 col-xl-3 mt-2">
					<div class="card h-40">
						<div class="card-header pb-0 p-3">
							<h4 class="mb-0">Security</h4>
						</div>
						<div class="card-body p-3">
							<ul class="list-group">
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">RfID</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">ON</button>
									<!-- <button type="button" class="btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
								<hr class="mb-5 sidebar-divider">
							</ul>
						</div>
					</div>
					<div class="mb-2"></div>
					<div class="card h-40">
						<div class="card-header pb-0 p-3">
							<h4 class="mb-0">Lights</h4>
						</div>
						<div class="card-body p-3">
							<ul class="list-group">
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">All</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-success btn-sm mb-0 rounded-pill">ON</button>
									<button type="button"
										class="ms-1 btn btn-outline-danger btn-sm mb-0 rounded-pill">OFF</button>
								</li>
								<hr class="mb-5 sidebar-divider">
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-3 mt-2">
					<div class="card h-100">
						<div class="card-header pb-0 p-3">
							<h4 class="mb-0">Lights</h4>
						</div>
						<div class="card-body p-3">
							<ul class="list-group">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">Kitchen</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">ON</button>
									<!-- <button type="button" class="btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">Living room</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">OFF</button>
									<!-- <button type="button" class="ms-auto btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">Bedroom</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">OFF</button>
									<!-- <button type="button" class="ms-auto btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">Bathroom</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">OFF</button>
									<!-- <button type="button" class="ms-auto btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
								<hr class="sidebar-divider">
								<li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
									<div class="me-3 d-flex align-items-start flex-column justify-content-center">
										<h1 class="mb-0 text-sm">Front doors</h1>
									</div>
									<button type="button"
										class="ms-auto btn btn-outline-primary btn-sm mb-0 rounded-pill">OFF</button>
									<!-- <button type="button" class="ms-auto btn btn-success btn-sm mb-0 rounded-pill">ON</button>
                                    <button type="button" class="ms-1 btn btn-danger btn-sm mb-0 rounded-pill">OFF</button> -->
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6 mt-2">
					<div class="card h-100">
						<div class="card-header pb-0 p-3">
							<h4 class="mb-0">Notification</h4>
						</div>
						<div class="card-body p-3">
							<ul class="list-group">
								<!-- <div class="card-header pb-0">
									<h6>Authors table</h6>
								</div> -->
								<div class="card-body px-0 pt-0 pb-2">
									<div class="table-responsive p-0">
										<!-- <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
										<table id="dtBasicExample" class="table align-items-center table-paginate mb-0">
											<thead>
												<!-- <tr>
													<th
														class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														Author</th>
												</tr> -->
											</thead>
											<tbody>
												<tr>
													<td>
														<!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
														<p class="text-xs text-secondary mb-0">Turn off the kitchen
															lights at 12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the security
															lights at 07:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the Living room
															lights at 08:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the Bedroom
															lights at 21:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the Bathroom
															lights at 14:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the kitchen
															lights at 12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the Front doors
															lights at 06:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">achmad entered the house
															at 12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">Turn off the kitchen
															lights at 12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">rachmat entered the house
															at 12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">rita entered the house at
															12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>
												<tr>
													<td>
														<p class="text-xs text-secondary mb-0">lona entered the house at
															12:31 o'clock</p>
													</td>
													<td>
														<p class="text-xs text-secondary mb-0">23/04/21</p>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>

							</ul>
						</div>
					</div>
				</div>


				<!-- start margin -->
				<div class="mb-4"></div>
				<!-- end margin -->

				<!-- start table  -->
				<div class="col-12 col-xl-12">
					<div class="card h-100">

						<div class="card-header pb-0 p-3">
							<div class="row">
								<div class="col-md-2E d-flex align-items-center">
									<h4 class="mb-0">Master ID Card</h4>
								</div>
								<div class="col-md-2 text-left" data-toggle="modal" data-target="#myModal">
									<button class="btn bg-gradient-dark mb-0"><i class="fas fa-plus">&nbsp;</i></button>
								</div>
							</div>
						</div>

						<div class="card-body p-0">
							<ul class="list-group">

								<div class="card-body px-50 pt-1 pb-2">
									<div class="table-responsive p-0">
										<!-- <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
										<table id="myTable1" class="table align-items-center table-paginate mb-0">
											<!-- <table class="table table-fluid" id="myTable1"> -->
											<thead>
												<tr>
													<th
														class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														ID CARD</th>
													<th
														class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
														NAME</th>
													<th
														class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														ADDRESS</th>
													<th
														class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														CREATE</th>
													<th class="text-secondary opacity-7"></th>
													<th class="text-secondary opacity-7"></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">BEKASI</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="text-secondary font-weight-bold">23/04/18</span>
													</td>
													<td class="align-middle">
														<a href="#"
															class="text-secondary font-weight-bold text-xs"
															data-toggle="modal" data-target="#editMaster" data-original-title="Edit user">
															<i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>
															Edit
														</a>
													</td>
													<td class="align-middle">
														<a href="<?= base_url().'dashboard'?>"
															class="text-secondary font-weight-bold text-xs"
															ddata-original-title="Edit user">
															<i class="far fa-trash-alt me-2"></i>
															Delete
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

							</ul>
						</div>
					</div>
				</div>
				<!-- start table  -->

				<!-- start table  -->
				<div class="col-12 col-xl-12 mt-2">
					<div class="card h-100">
						<div class="card-header pb-0 p-3">
							<h4 class="mb-0">Record ID Card</h4>
						</div>
						<div class="card-body p-0">
							<ul class="list-group">

								<div class="card-body px-50 pt-1 pb-2">
									<div class="table-responsive p-0">
										<!-- <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
										<table id="myTable2" class="table align-items-center table-paginate mb-0">
											<!-- <table class="table table-fluid" id="myTable1"> -->
											<thead>
												<tr>
													<th
														class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
														ID CARD</th>
													<th
														class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
														NAME</th>
													<th
														class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														LAST ENTERED</th>
													<th
														class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
														DATE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-sm">
														<span class="font-weight-bold">0192827</span>
													</td>
													<td>
														<div class="d-flex px-0 py-0">
															<div class="d-flex flex-column justify-content-center">
																<h6 class="mb-0 text-sm">ACHMAD FIRDAUS</h6>
																<p class="text-xs text-secondary mb-0">
																	087872617626</p>
															</div>
														</div>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">13:00</span>
													</td>
													<td class="align-middle text-center text-sm">
														<span class="font-weight-bold">25/04/21</span>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>

							</ul>
						</div>
					</div>
				</div>
				<!-- start table  -->


			</div>
			<footer class="footer pt-3">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 mb-lg-0 mb-4">
							<div class="copyright text-center text-sm text-muted text-lg-left">
								© 2021
								<!-- <script>
									document.write(new Date().getFullYear())
								</script> -->
								<!-- ,
								made with <i class="fa fa-heart"></i> by
								<a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
									Tim</a>
								for a better web. -->
							</div>
						</div>
						<div class="col-lg-6">
							<!-- <ul class="nav nav-footer justify-content-center justify-content-lg-end">
								<li class="nav-item">
									<a href="https://www.creative-tim.com" class="nav-link text-muted"
										target="_blank">Creative Tim</a>
								</li>
								<li class="nav-item">
									<a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
										target="_blank">About Us</a>
								</li>
								<li class="nav-item">
									<a href="http://blog.creative-tim.com" class="nav-link text-muted"
										target="_blank">Blog</a>
								</li>
								<li class="nav-item">
									<a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
										target="_blank">License</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>





<!-- Modal add master -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="mt-10 modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModal">Add ID Card</h5>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
					<!-- <span aria-hidden="true">&times;</span> -->
				</button>
			</div>
			<div class="modal-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>ID Card</label>
								<input name="Address" type="text" class="form-control" placeholder="ID Card" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input name="Address" type="text" class="form-control" placeholder="Name" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Address</label>
								<input name="Address" type="text" class="form-control" placeholder="Address" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">&nbspClose&nbsp</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal edit master -->
<div class="modal fade" id="editMaster" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="mt-10 modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editMaster">Edit ID Card</h5>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
					<!-- <span aria-hidden="true">&times;</span> -->
				</button>
			</div>
			<div class="modal-body">

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>ID Card</label>
								<input name="Address" type="text" class="form-control" placeholder="ID Card" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input name="Address" type="text" class="form-control" placeholder="Name" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Address</label>
								<input name="Address" type="text" class="form-control" placeholder="Address" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">&nbspClose&nbsp</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal upload picture -->
<div class="modal fade" id="uploadPicture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="mt-10 modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="uploadPicture">Upload picture</h5>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
					<!-- <span aria-hidden="true">&times;</span> -->
				</button>
			</div>
			<div class="modal-body">
				<form action="">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">

								<input type="file" id="actual-btn" hidden class="form-control" name ="photoUser" aria-describedby="inputGroupFileAddon03" aria-label="Upload" accept="image/*">
								<label for="actual-btn" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Choose File</label>
								<!-- <button for="actual-btn" class="btn btn-primary" type="button" >Save &nbsp<i class="fa fa-save"></i></button> -->
								<!-- name of file chosen -->
								<span id="file-chosen">No file chosen</span>

							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">&nbspClose&nbsp</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal edit master -->
<div class="modal fade" id="checkSetting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="mt-10 modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="checkSetting">Setting</h5>
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
					<!-- <span aria-hidden="true">&times;</span> -->
				</button>
			</div>
			<div class="modal-body">
					
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input name="Address" type="text" class="form-control" placeholder="Name" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nim</label>
								<input name="Address" type="text" class="form-control" placeholder="ID Card" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email</label>
								<input name="Email" type="email" class="form-control" placeholder="Email" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>New password</label>
								<input name="Password" type="password" class="form-control" placeholder="Password" required>
								<div class="invalid-feedback">
									Please provide a valid Address.
								</div>
							</div>
						</div>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">&nbspClose&nbsp</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</div>

					
<!-- start edit upload file  -->
	<!-- actual upload which is hidden -->
	<!-- <input type="file" id="actual-btn" hidden/> -->
	<!-- our custom upload button -->
	<!-- <label for="actual-btn">Choose File</label> -->
	<!-- name of file chosen -->
	<!-- <span id="file-chosen">No file chosen</span> -->

	<!-- <input type="file" id="actual-btn" hidden class="form-control" name ="photoUser" aria-describedby="inputGroupFileAddon03" aria-label="Upload" accept="image/*">
	<label for="actual-btn" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Choose File</label>
	<span id="file-chosen">No file chosen</span> -->
<!-- end edit upload file  -->




	<!--   Core JS Files   -->
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
	<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>



	<script>

// start upload button 
const actualBtn = document.getElementById('actual-btn');
const fileChosen = document.getElementById('file-chosen');
actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
// end upload button 


		$(document).ready(function () {
			$('#masteridcardtable').DataTable();
			$('.dataTables_length').addClass('bs-select');
		});
		$(document).ready(function () {
			$('#myTable2').DataTable();
		});
		$(document).ready(function () {
			$('#myTable1').DataTable();
		});

		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>

	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>




</body>

</html>