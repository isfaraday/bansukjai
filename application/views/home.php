<?php include("inc/header.php"); ?>
<!--begin::Container-->
<div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-75px w-100" id="kt_header_nav">
	<!--begin::Menu wrapper-->
	<div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
		<!--begin::Menu-->
		<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
			<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
				<span class="menu-link py-3">
					<span class="menu-title">หน้าหลัก</span>
					<span class="menu-arrow d-lg-none"></span>
				</span>
				<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
					<div class="menu-item">
						<a class="menu-link active py-3" href="<?php echo base_url('home') ?>">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">หน้าหลัก</span>
						</a>
					</div>
				</div>
			</div>
			<?php if ($permission <= '2') { ?>
				<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
					<span class="menu-link py-3">
						<span class="menu-title">ห้องพัก</span>
						<span class="menu-arrow d-lg-none"></span>
					</span>
					<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
						<div class="menu-item">
							<a class="menu-link py-3" href="<?php echo base_url('room') ?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">ห้องพัก</span>
							</a>
						</div>
					</div>
				</div>
				<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
					<span class="menu-link py-3">
						<span class="menu-title">รายงานอื่นๆ</span>
						<span class="menu-arrow d-lg-none"></span>
					</span>
					<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
						<div class="menu-item">
							<a class="menu-link py-3" href="<?php echo base_url('invoices') ?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">รายงานใบแจ้งหนี้</span>
							</a>
						</div>
					</div>
				</div>
				<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
					<span class="menu-link py-3">
						<span class="menu-title">ลูกค้า</span>
						<span class="menu-arrow d-lg-none"></span>
					</span>
					<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
						<div class="menu-item">
							<a class="menu-link py-3" href="<?php echo base_url('customer') ?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">รายชื่อลูกค้าปัจจุบัน</span>
							</a>
						</div>
					</div>
				</div>
				<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
					<span class="menu-link py-3">
						<span class="menu-title">ผู้ดูแลระบบ</span>
						<span class="menu-arrow d-lg-none"></span>
					</span>
					<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
						<div class="menu-item">
							<a class="menu-link py-3" href="<?php echo base_url('users') ?>">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">ผู้ใช้ระบบ</span>
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu wrapper-->
</div>
<!--end::Container-->
</div>
<!--end::Header-->
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-7" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column me-3">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bolder my-1 fs-3">หน้าหลัก
				<!--begin::Separator-->
				<span class="h-20px border-gray-400 border-start mx-3"></span>
				<!--end::Separator-->
				<!--begin::Description-->
				<small class="text-gray-500 fs-7 fw-bold my-1"><?php if ($permission == 1) {
																	echo 'ผู้จัดการบริษัท';
																} else if ($permission == 2) {
																	echo 'ผู้จัดการสาขา : บ้านสุขใจ';
																} else if ($permission == 3) {
																	echo 'ผู้เช่า';
																} ?></small>
				<!--end::Description-->
			</h1>
			<!--end::Title-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
	<!--begin::Post-->
	<div class="content flex-row-fluid" id="kt_content">
		<!--begin::details View-->
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
			<!--begin::Card header-->
			<div class="card-header cursor-pointer">
				<!--begin::Card title-->
				<div class="card-title m-0">
					<h3 class="fw-bolder m-0">ข้อมูลภาพรวม</h3>
				</div>
				<!--end::Card title-->
			</div>
			<!--begin::Card header-->
			<!--begin::Card body-->
			<div class="card-body p-9">
				<!--begin::Row-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">บริษัท</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bolder fs-6 text-gray-800">บ้านสุขใจ</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">ห้องทั้งหมด</label>
					<!--end::Label-->
					<?php if ($permission <= '2') { ?>
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<a href="<?php echo base_url('room') ?>" class="fw-bold fs-6 text-gray-800 text-hover-primary"><?php echo count($room); ?> ห้อง</a>
						</div>
						<!--end::Col-->
					<?php } else if ($permission == '3') { ?>
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<a class="fw-bold fs-6 text-gray-800 text-hover-primary"><?php echo count($room); ?> ห้อง</a>
						</div>
						<!--end::Col-->
					<?php } ?>
				</div>
				<!--end::Input group-->
				<!--begin::Input group-->
				<div class="row mb-7">
					<!--begin::Label-->
					<label class="col-lg-4 fw-bold text-muted">ห้องว่างวันนี้</label>
					<!--end::Label-->
					<!--begin::Col-->
					<div class="col-lg-8">
						<span class="fw-bold text-gray-800 fs-6 "><?php echo count($empty); ?> ห้อง</span>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::details View-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-10">
			<?php if ($permission <= '2') { ?>
				<!--begin::Col-->
				<div class="col-xl-8 mb-xl-10">
					<!--begin::Tables Widget 11-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">ใบแจ้งหนี้ที่ยังไม่ออกใบเสร็จ</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr class="fw-bolder text-muted bg-light">
											<th class="ps-4 min-w-100px rounded-start">กำหนดชำระเงิน</th>
											<th class="min-w-100px">ห้อง</th>
											<th class="min-w-150px">ลูกค้า</th>
											<th class="min-w-100px">ยอด(บาท)</th>
											<th class="min-w-100px text-end rounded-end"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<?php foreach ($bills as $row) { ?>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex justify-content-start flex-column">
															<a class="text-dark text-hover-primary mb-1 fs-6">&nbsp&nbsp&nbsp<?php echo $row->bills_pay; ?></a>
														</div>
													</div>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->room_number; ?></a>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->member_fullname; ?></a>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_result; ?></a>
												</td>
												<td class="text-end">
													<a href="<?php echo site_url('invoices/bill/') . $row->bills_id; ?>" class="btn btn-bg-light btn-color-muted btn-active-light-primary btn-sm px-4 me-2">ดูใบแจ้งหนี้</a>
													<a href="<?php echo site_url('invoices/receipt/') . $row->bills_id; ?>" class="btn btn-bg-primary btn-color-white btn-active-light-primary btn-sm px-4">สร้างใบเสร็จรับเงิน</a>
												</td>
											<tr>
											<?php } ?>
										</tbody>
										<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--begin::Body-->
					</div>
					<!--end::Tables Widget 11-->
				</div>
				<!--end::Col-->
			<?php } else if ($permission == '3') { ?>
				<!--begin::Col-->
				<div class="col-xl-8 mb-xl-10">
					<!--begin::Tables Widget 11-->
					<div class="card mb-5 mb-xl-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">แจ้งชำระเงิน</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-3">
							<!--begin::Table container-->
							<div class="table-responsive">
								<!--begin::Table-->
								<table class="table align-middle gs-0 gy-4">
									<!--begin::Table head-->
									<thead>
										<tr class="fw-bolder text-muted bg-light">
											<th class="ps-4 min-w-100px rounded-start">กำหนดชำระเงิน</th>
											<th class="min-w-100px">ห้อง</th>
											<th class="min-w-150px">ลูกค้า</th>
											<th class="min-w-100px">ยอด(บาท)</th>
											<th class="min-w-100px text-end rounded-end"></th>
										</tr>
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<?php foreach ($debt as $row) { ?>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex justify-content-start flex-column">
															<a class="text-dark text-hover-primary mb-1 fs-6">&nbsp&nbsp&nbsp<?php echo $row->bills_pay; ?></a>
														</div>
													</div>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->room_number; ?></a>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->member_fullname; ?></a>
												</td>
												<td>
													<a class="text-dark text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_result; ?></a>
												</td>
												<td class="text-end">
													<a href="<?php echo site_url('invoices/bill/') . $row->bills_id; ?>" class="btn btn-bg-light btn-color-muted btn-active-light-primary btn-sm px-4 me-2">ดูใบแจ้งหนี้</a>
													<?php if ($row->bills_status == 0) { ?>

													<?php } else if ($row->bills_status == 1) { ?>
														<a href="<?php echo site_url('invoices/bills/') . $row->bills_id; ?>" class="btn btn-bg-primary btn-color-white btn-active-light-primary btn-sm px-4">ดูใบเสร็จรับเงิน</a>
													<?php } ?>
												</td>
											<tr>
											<?php } ?>
										</tbody>
										<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Table container-->
						</div>
						<!--begin::Body-->
					</div>
					<!--end::Tables Widget 11-->
				</div>
				<!--end::Col-->
			<?php } ?>
			<!--begin::Col-->
			<div class="col-xl-4 mb-5 mb-xl-10">
				<!--begin::Tables Widget 1-->
				<div class="card card-xl-stretch mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">ห้องว่างวันนี้</span>
							<span class="text-muted fw-bold fs-7"><?php echo count($empty); ?> ห้อง</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body py-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table align-middle gs-0 gy-2">
								<!--begin::Table head-->
								<thead>
									<tr>
										<th class="p-0 w-50px"></th>
										<th class="p-0 min-w-50px"></th>
										<th class="min-w-50px rounded-end">ราคาห้อง</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<?php if ($permission <= '2') { ?>
									<!--begin::Table body-->
									<?php foreach ($empty as $row) { ?>
										<tbody>
											<tr>
												<td>
												</td>
												<td>
													<a href="<?php echo site_url('room/booking/') . $row->room_id; ?>" class="text-dark fw-bolder text-hover-primary mb-1 fs-6"><?php echo $row->room_number; ?></a>
												</td>
												<td>
													<a class="text-danger fw-bolder mb-1 fs-6"><?php echo $row->roomtype_rate; ?></a>
												</td>
											</tr>
										</tbody>
									<?php } ?>
									<!--end::Table body-->
								<?php } else if ($permission == '3') { ?>
									<!--begin::Table body-->
									<?php foreach ($empty as $row) { ?>
										<tbody>
											<tr>
												<td>
												</td>
												<td>
													<a class="text-dark fw-bolder text-hover-primary mb-1 fs-6"><?php echo $row->room_number; ?></a>
												</td>
												<td>
													<a class="text-danger fw-bolder mb-1 fs-6"><?php echo $row->roomtype_rate; ?></a>
												</td>
											</tr>
										</tbody>
									<?php } ?>
									<!--end::Table body-->
								<?php } ?>
							</table>
							<!--end::Table-->
						</div>
						<!--end::Table container-->
					</div>
				</div>
				<!--endW::Tables Widget 1-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Post-->
</div>
<!--end::Container-->
<?php include("inc/footer.php"); ?>