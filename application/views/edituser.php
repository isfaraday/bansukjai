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
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?php echo base_url('room') ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">เพิ่มห้องพัก</span>
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
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
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
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="<?php echo base_url('users/edit/') . $query->admin_id; ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title"><?php echo $query->username; ?></span>
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
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">แก้ไขข้อมูลผู้ใช้ระบบ</h1>
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
                    <h3 class="fw-bolder m-0">ผู้ใช้ระบบ : <?php echo $query->username; ?></h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" action="<?php echo site_url('users/editing'); ?>" method="post" onsubmit="return">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Username</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="username" class="form-control form-control-lg form-control-solid" placeholder="" value="<?php echo $query->username; ?>" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">รหัสผ่าน</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <div class="form-control-lg"><a href="#" class="link-primary">เปลี่ยนรหัสผ่าน</a></div>
                                <input type="hidden" name="password" class="form-control form-control-lg form-control-solid" placeholder="" value="<?php echo $query->password; ?>" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">ชื่อนามสกุล</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="admin_fullname" class="form-control form-control-lg form-control-solid" placeholder="" value="<?php echo $query->admin_fullname; ?>" required />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">ตำแหน่ง</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->
                                <select name="admin_permission" data-control="select2" data-placeholder="เลือกตำแหน่ง..." class="form-select form-select-solid form-select-lg" required>
                                    <option value="">เลือกตำแหน่ง...</option>
                                    <option value="1" <?php if ($query->admin_permission == "1") echo 'selected="selected"'; ?>>ผู้จัดการบริษัท</option>
                                    <option value="2" <?php if ($query->admin_permission == "2") echo 'selected="selected"'; ?>>ผู้จัดการสาขา</option>
                                </select>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <input type="hidden" name="active" value="1" />
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">สถานะของผู้ใช้</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid me-5">
                                        <input class="form-check-input" name="active" type="radio" value="0" <?php if ($query->active == "0") echo 'checked="checked"'; ?> />
                                        <span class="fw-bold ps-2 fs-6">ไม่ได้ใช้งาน</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid">
                                        <input class="form-check-input" name="active" type="radio" value="1" <?php if ($query->active == "1") echo 'checked="checked"'; ?> />
                                        <span class="fw-bold ps-2 fs-6">ใช้งานอยู่</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <input type="hidden" name="admin_id" value="<?php echo $query->admin_id; ?>"></input>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">บันทึกข้อมูล</button>
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