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
                        <a class="menu-link py-3" href="<?php echo base_url('invoices') ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">รายงานใบแจ้งหนี้</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?php echo site_url('invoices/adds/'); ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">สร้างใบแจ้งหนี้</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="<?php echo site_url('invoices/receipt/') . $query->bills_id; ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">สร้างใบเสร็จรับเงิน</span>
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
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">สร้างใบเสร็จรับเงิน (Receipt)</h1>
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
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">ใบเสร็จรับเงิน</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="<?php echo site_url('invoices/addings'); ?>" method="post">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">ห้อง</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="room_id" id="room" data-control="select2" data-placeholder="เลือกห้อง..." class="form-select form-select-solid form-select-lg">
                                    <option value="<?php echo $query->room_id; ?>"><?php echo $query->room_number; ?></option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">ลูกค้า</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="member_id" id="member" data-control="select2" data-placeholder="เลือกลูกค้า..." class="form-select form-select-solid form-select-lg">
                                    <option value="<?php echo $query->member_id; ?>"><?php echo $query->member_fullname; ?></option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">กำหนดชำระเงิน</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="date" name="bills_pay" class="form-control form-control-lg form-control-solid" placeholder="" value="<?php echo $query->bills_pay; ?>" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">ค่าเช่า</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="bills_roomrate" id="rate" data-control="select2" data-placeholder="เลือกราคา..." class="form-select form-select-solid form-select-lg">
                                    <option value="<?php echo $query->bills_roomrate; ?> "><?php echo $query->bills_roomrate; ?></option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning p-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">คิดค่าไฟฟ้า</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <!--begin::Input-->
                                        <select name="unit1" id="unit1" data-control="select2" data-placeholder="มิเตอร์ไฟฟ้าจากวันที่ (เลขมิเตอร์)" class="form-select form-select-solid form-select-lg">
                                            <option value="<?php echo $query->unit1; ?> "><?php echo $query->unit1; ?></option>
                                        </select>
                                        <!--begin::Hint-->
                                        <div class="form-text">ข้อมูลวันที่
                                            <a href="<?php echo base_url('room') ?>" class="fw-bolder">คลิกที่นี่ หากต้องการบันทึกเลขมิเตอร์ไฟฟ้าเพิ่ม</a>
                                        </div>
                                        <!--end::Hint-->
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <!--begin::Input-->
                                        <select name="unit2" id="unit2" data-control="select2" data-placeholder="มิเตอร์ไฟฟ้าถึงวันที่ (เลขมิเตอร์)" class="form-select form-select-solid form-select-lg">
                                            <option value="<?php echo $query->unit2; ?>"><?php echo $query->unit2; ?></option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning p-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6"></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="number" name="unit" id="unit" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="x บาทต่อหน่วย" value="<?php echo $query->unit; ?>" min="0" readonly/>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="number" name="bills_electric" class="form-control form-control-lg form-control-solid" placeholder="xx.xx บาท" value="<?php echo ($query->unit2 - $query->unit1) * $query->unit; ?>" readonly/>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary p-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">คิดค่าน้ำ</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="bills_water" class="form-control form-control-lg form-control-solid" placeholder="ขั้นต่ำ 200" value="200" readonly/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6"></label>
                            <!--end::Label-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">ค่าใช้จ่ายอื่นๆ</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="text" name="other" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="เว้นว่างได้" value="<?php echo $query->other; ?>" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row">
                                        <input type="number" name="bills_other" class="form-control form-control-lg form-control-solid" placeholder="xx.xx บาท" value="<?php echo $query->bills_other; ?>" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">ยอดรวม</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="bills_result" class="form-control form-control-lg form-control-solid" placeholder="xx.xx บาท" value="<?php echo $query->roomtype_rate + $query->bills_water + $query->bills_other + ($query->unit2 - $query->unit1) * $query->unit; ?>" readonly />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <input type="hidden" name="bills_id" value="<?php echo $query->bills_id; ?>">
                        <input type="hidden" name="bills_status" value="1" />
                        <input type="hidden" name="bills_create" value="<?php echo date('Y-m-d'); ?>" />
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">สร้างใบเสร็จรับเงิน</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
    </div>
</div>
<?php include("inc/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('#room').change(function() {
            var room_id = $('#room').val();
            if (room_id != '') {
                $.ajax({
                    url: "<?php echo base_url('invoices/member'); ?>",
                    method: "POST",
                    data: {
                        room_id: room_id
                    },
                    success: function(data) {
                        $('#member').html(data);
                    }
                });
            } else {
                $('#member').html('<option value="">เลือกลูกค้า.../option>');
            }
        });
    });
    $(document).ready(function() {
        $('#room').change(function() {
            var room_id = $('#room').val();
            if (room_id != '') {
                $.ajax({
                    url: "<?php echo base_url('invoices/elect1'); ?>",
                    method: "POST",
                    data: {
                        room_id: room_id
                    },
                    success: function(data) {
                        $('#unit1').html(data);
                    }
                });
            } else {
                $('#unit1').html('<option value="">มิเตอร์ไฟฟ้าจากวันที่ (เลขมิเตอร์)/option>');
            }
        });
    });
    $(document).ready(function() {
        $('#room').change(function() {
            var room_id = $('#room').val();
            if (room_id != '') {
                $.ajax({
                    url: "<?php echo base_url('invoices/elect2'); ?>",
                    method: "POST",
                    data: {
                        room_id: room_id
                    },
                    success: function(data) {
                        $('#unit2').html(data);
                    }
                });
            } else {
                $('#unit2').html('<option value="">มิเตอร์ไฟฟ้าถึงวันที่ (เลขมิเตอร์)/option>');
            }
        });
    });
    $(document).ready(function() {
        $('#room').change(function() {
            var room_id = $('#room').val();
            if (room_id != '') {
                $.ajax({
                    url: "<?php echo base_url('invoices/rate'); ?>",
                    method: "POST",
                    data: {
                        room_id: room_id
                    },
                    success: function(data) {
                        $('#rate').html(data);
                    }
                });
            } else {
                $('#rate').html('<option value="">เลือกราคา.../option>');
            }
        });
    });
</script>