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
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
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
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?php echo base_url('invoices/add') ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">สร้างใบแจ้งหนี้</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="<?php echo site_url('invoices/bill/') . $query->bills_id; ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">ใบแจ้งหนี้</span>
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
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">ใบแจ้งหนี้ (Invoice)</h1>
            <!--end::Title-->
        </div>
        <?php if ($permission <= '2') { ?>
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Button-->
            <form class="form" action="<?php echo site_url('invoices/addings'); ?>" method="post">
                <input type="hidden" name="bills_id" value="<?php echo $query->bills_id; ?>">
                <input type="hidden" name="room_id" value="<?php echo $query->room_id; ?>">
                <input type="hidden" name="member_id" value="<?php echo $query->member_id; ?>">
                <input type="hidden" name="bills_roomrate" value="<?php echo $query->roomtype_rate; ?>">
                <input type="hidden" name="bills_water" value="<?php echo $query->bills_water; ?>">
                <input type="hidden" name="bills_electric" value="<?php echo ($query->unit2 - $query->unit1) * $query->unit; ?>">
                <input type="hidden" name="unit" value="<?php echo $query->unit; ?>">
                <input type="hidden" name="unit1" value="<?php echo $query->unit1; ?>">
                <input type="hidden" name="unit2" value="<?php echo $query->unit2; ?>">
                <input type="hidden" name="other" value="<?php echo $query->other; ?>">
                <input type="hidden" name="bills_other" value="<?php echo $query->bills_other; ?>">
                <input type="hidden" name="bills_result" value="<?php echo $query->roomtype_rate + $query->bills_water + $query->bills_other + ($query->unit2 - $query->unit1) * $query->unit; ?>">
                <input type="hidden" name="bills_status" value="<?php echo $query->bills_status; ?>">
                <input type="hidden" name="bills_pay" value="<?php echo $query->bills_pay; ?>">
                <input type="hidden" name="bills_create" value="<?php echo $query->bills_create; ?>">
                <input type="submit" class="btn btn-primary font-weight-bold me-3" value="บันทึกใบแจ้งหนี้" />
            </form>
            <!--end::Button-->
            <!--begin::Button-->
            <a href="<?php echo site_url('invoices/receipt/') . $query->bills_id; ?>" class="btn btn-success font-weight-bold me-3">สร้างใบเสร็จรับเงิน (Receipt) ของใบแจ้งหนี้ฉบับนี้</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
        <?php } ?>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div class="d-flex flex-row flex-column-fluid container">
    <!--begin::Content Wrapper-->
    <div class="main d-flex flex-column flex-row-fluid">
        <div class="content flex-column-fluid" id="kt_content">
            <!-- begin::Card-->
            <div class="card card-custom overflow-hidden">
                <div class="card-body p-0">
                    <!-- begin: Invoice-->
                    <!-- begin: Invoice header-->
                    <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-color:Gray;">
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                <h1 class="display-4 text-white font-weight-boldest mb-10">บ้านสุขใจ</h1>
                                <div class="d-flex flex-column align-items-md-end px-0">
                                    <!--begin::Logo-->
                                    <a class="mb-5">
                                        <img width="100" src="https://promptpay.io/0951481212.png">
                                    </a>
                                    <!--end::Logo-->
                                    <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                        <span>เลขที่ 188/1 หมู่5 ตำบลหางดง อำเภอหางดง </span>
                                        <span>จังหวัดเชียงใหม่ 50230</span>
                                    </span>
                                </div>
                            </div>
                            <div class="border-bottom w-100 opacity-20"></div>
                            <div class="d-flex justify-content-between text-white pt-6">
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolde mb-2">รายละเอียดการเช่า (Booking Information)</span>
                                    <span class="opacity-70">ผู้เช่า (Customer) : <?php echo $query->member_fullname; ?></span>
                                    <span class="opacity-70">ห้อง (Unit) : <?php echo $query->room_number; ?></span>
                                </div>
                                <div class="d-flex flex-column flex-root">
                                </div>
                                <div class="d-flex flex-column flex-root">
                                    <span class="font-weight-bolder mb-2">รายละเอียดใบแจ้งหนี้ (Invoice Information)</span>
                                    <span class="opacity-70">วันที่ออกใบแจ้งหนี้ (Invoice Issue Date) : <?php echo $query->bills_create; ?></span>
                                    <span class="opacity-70">กำหนดชำระเงิน (Payment Due Date) : <?php echo $query->bills_pay; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice header-->
                    <!-- begin: Invoice body-->
                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pl-0 font-weight-bold text-muted text-uppercase">รายการ</th>
                                            <th class="text-right font-weight-bold text-muted text-uppercase">ราคาต่อหน่วย (บาท)</th>
                                            <th class="text-right font-weight-bold text-muted text-uppercase">จำนวนหน่วย</th>
                                            <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">จำนวนเงิน (บาท)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="font-weight-boldest font-size-lg">
                                            <td class="pl-0 pt-7">ค่าเช่า (Rental)</td>
                                            <td class="text-right pt-7"><?php echo $query->roomtype_rate; ?></td>
                                            <td class="text-right pt-7"></td>
                                            <td class="text-danger pr-0 pt-7 text-right"><?php echo $query->bills_roomrate; ?></td>
                                        </tr>
                                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                                            <td class="border-top-0 pl-0 py-4">ค่าไฟฟ้า (Electricity)</td>
                                            <td class="border-top-0 text-right py-4"><?php echo $query->unit; ?></td>
                                            <td class="border-top-0 text-right py-4"><?php echo $query->unit2 - $query->unit1; ?> (<?php echo $query->unit1; ?> - <?php echo $query->unit2; ?>)</td>
                                            <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo ($query->unit2 - $query->unit1) * $query->unit; ?></td>
                                        </tr>
                                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                                            <td class="border-top-0 pl-0 py-4">ค่าน้ำ (Water)</td>
                                            <td class="border-top-0 text-right py-4"><?php echo $query->bills_water; ?></td>
                                            <td class="border-top-0 text-right py-4"></td>
                                            <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $query->bills_water; ?></td>
                                        </tr>
                                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                                            <td class="border-top-0 pl-0 py-4">อื่นๆ (other) <?php echo $query->other; ?></td>
                                            <td class="border-top-0 text-right py-4"><?php echo $query->bills_other; ?></td>
                                            <td class="border-top-0 text-right py-4"></td>
                                            <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $query->bills_other; ?></td>
                                        </tr>
                                        <tr class="font-weight-boldest border-bottom-0 font-size-lg">
                                            <td class="border-top-0 pl-0 py-4"></td>
                                            <td class="border-top-0 text-right py-4"></td>
                                            <td class="border-top-0 text-right py-4">รวมทั้งหมด (Total)</td>
                                            <td class="text-danger border-top-0 pr-0 py-4 text-right"><?php echo $query->roomtype_rate + $query->bills_water + $query->bills_other + ($query->unit2 - $query->unit1) * $query->unit; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice body-->
                    <!-- begin: Invoice action-->
                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">พิมพ์ใบแจ้งหนี้ฉบับนี้</button>
                                <?php if ($permission <= '2') { ?>
                                <a href="<?php echo site_url('invoices/del/') . $query->bills_id; ?>" onclick="return confirm('ยืนยัน')" class="btn btn-danger font-weight-bold">ลบใบแจ้งหนี้ฉบับนี้</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice action-->
                    <!-- end: Invoice-->
                </div>
            </div>
            <!-- end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--begin::Content Wrapper-->
</div>
<!--end::Container-->
<?php include("inc/footer.php"); ?>