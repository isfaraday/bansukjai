<?php include("inc/header.php"); ?>
<!--begin::Container-->
<div class="header-menu-container d-flex align-items-stretch flex-stack h-lg-75px w-100" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu container-xxl flex-column align-items-stretch flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">หน้าหลัก</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?php echo base_url('home') ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">หน้าหลัก</span>
                        </a>
                    </div>
                </div>
            </div>
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
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">รายงานอื่นๆ</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="<?php echo base_url('invoices') ?>">
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
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">รายงานใบแจ้งหนี้</h1>
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
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Tables Widget 11-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="card-toolbar">
                        <a href="<?php echo base_url('invoices/add') ?>" class="btn btn-sm btn-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->สร้างใบแจ้งหนี้
                        </a>
                    </div>
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
                                    <th class="ps-4 min-w-100px rounded-start">ห้อง</th>
                                    <th class="min-w-150px">ลูกค้า</th>
                                    <th class="min-w-100px">วันเข้าพัก</th>
                                    <th class="min-w-100px">วันออกใบแจ้งหนี้</th>
                                    <th class="min-w-100px">กำหนดชำระเงิน</th>
                                    <th class="min-w-100px">ยอดรวม (บาท)</th>
                                    <th class="min-w-100px">สถานะ</th>
                                    <th class="min-w-100px text-end rounded-end"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <?php foreach ($query as $row) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a class="text-dark fw-bolder text-hover-primary mb-1 fs-6">&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row->room_number; ?></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->member_fullname; ?></a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->member_create; ?></a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_create; ?></a>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_pay; ?></a>
                                        </td>
                                        <td>
                                            <?php if ($row->bills_result == 0) { ?>
                                                <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_result; ?></a>
                                                <!--begin::Hint-->
                                                <div class="form-text">กดดูใบแจ้งหนี้ <br> แล้วกดบันทึกใบแจ้งหนี้</div>
                                                <!--end::Hint-->
                                            <?php } else { ?>
                                                <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php echo $row->bills_result; ?></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"><?php if ($row->bills_status == '0') {
                                                                                                                    echo "ยังไม่มีใบเสร็จรับเงิน";
                                                                                                                } else if ($row->bills_status == '1') {
                                                                                                                    echo "มีใบเสร็จรับเงินแล้ว <br> ชำระครบแล้ว ";
                                                                                                                } ?></a>
                                        </td>
                                        <td class="text-end">
                                            <a href="<?php echo site_url('invoices/bill/') . $row->bills_id; ?>" class="btn btn-bg-light btn-color-muted btn-active-light-primary btn-sm px-4 me-2">ดูใบแจ้งหนี้</a>
                                            <?php if ($row->bills_status == 0) { ?>
                                                <a href="<?php echo site_url('invoices/receipt/') . $row->bills_id; ?>" class="btn btn-success btn-color-white btn-active-light-primary btn-sm px-4 me-2">สร้างใบเสร็จรับเงิน</a>
                                            <?php } else if ($row->bills_status == 1) { ?>
                                                <a href="<?php echo site_url('invoices/bills/') . $row->bills_id; ?>" class="btn btn-bg-primary btn-color-white btn-active-light-primary btn-sm px-4">ดูใบเสร็จรับเงิน</a>
                                            <?php } ?>
                                        </td>
                                </tbody>
                                <!--end::Table body-->
                            <?php } ?>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 11-->
        </div>
    </div>
</div>
<?php include("inc/footer.php"); ?>