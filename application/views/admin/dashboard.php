<!--**********************************
			Sidebar end
		***********************************-->

<!--**********************************
			Content body start
		***********************************-->
<div class="content-body">
	<div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Statistics</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">


			<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
				<div class="widget-stat card bg-danger">
					<div class="card-body  p-4">
						<div class="media">
							<span class="me-3">
								<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
									viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</span>
							<div class="media-body text-white text-end">
								<p class="mb-1">Data Pegawai</p>
								<h3 class="text-white">
									<?php echo $pegawai; ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
				<div class="widget-stat card bg-success">
					<div class="card-body p-4">
						<div class="media">
							<span class="me-3">
								<i class="flaticon-381-diamond"></i>
							</span>
							<div class="media-body text-white text-end">
								<p class="mb-1">Data Admin</p>
								<h3 class="text-white">
									<?php echo $admin; ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
				<div class="widget-stat card bg-info">
					<div class="card-body p-4">
						<div class="media">
							<span class="me-3">
								<i class="flaticon-381-heart"></i>
							</span>
							<div class="media-body text-white text-end">
								<p class="mb-1">Data Jabatan</p>
								<h3 class="text-white">
									<?php echo $jabatan; ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
				<div class="widget-stat card bg-primary">
					<div class="card-body p-4">
						<div class="media">
							<span class="me-3">
								<i class="flaticon-381-user-7"></i>
							</span>
							<div class="media-body text-white text-end">
								<p class="mb-1">Data Kehadiran</p>
								<h3 class="text-white">
									<?php echo $kehadiran; ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>





		</div>
	</div>
</div>
<!--**********************************
			Content body end
		***********************************-->