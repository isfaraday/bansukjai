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
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
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
                        <a class="menu-link py-3" href="<?php echo base_url('room/edit/') . $query->room_id; ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title"><?php echo $query->room_number; ?></span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link active py-3" href="<?php echo base_url('room/lease/') . $query->room_id; ?>">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">สัญญาเช่า</span>
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
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">สัญญาเช่า</h1>
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
        <!--begin::About card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-17">
                <!--begin::About-->
                <div class="mb-18">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Top-->
                        <div class="text-center mb-15">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5">สัญญาเช่าห้องพัก <?php echo $query->room_number; ?> หอพักบ้านสุขใจ</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Top-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Description-->
                    <div class="fs-5 fw-bold text-gray-600">
                        <!--begin::Text-->
                        <p class="mb-8">สัญญานี้ทำขึ้นที่ หอพักบ้านสุขใจ เมื่อวันที่ <?php echo date("Y-m-d") ?> ระหว่าง บริษัท บ้านสุขใจ อยู่บ้านเลขที่ 188/1 หมู่5 ตำบล หางดง อำเภอ หางดง จังหวัด เชียงใหม่</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">ซึ่งต่อไปในสัญญานี้จะเรียกว่า <span class="text-gray-800 pe-1">"ผู้ให้เช่า"</span> <br> ฝ่ายหนึ่งกับ <?php echo $query->member_fullname; ?> อยู่บ้านเลขที่ <?php echo $query->member_address; ?></p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">ซึ่งต่อไปในสัญญานี้จะเรียกว่า <span class="text-gray-800 pe-1">"ผู้เช่า"</span> อีกฝ่ายหนึ่ง <br> ทั้งสองฝ่ายตกลงทำสัญญากันโดยมีข้อความดังต่อไปนี้ <?php echo $query->room_number; ?> ของ หอพักบ้านสุขใจ ซึ่งตั้งอยู่ที่ 188/1 หมู่5 ตำบล หางดง อำเภอ หางดง จังหวัด เชียงใหม่ </p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑ </span>ผู้เช่าตกลงเช่าและผู้ให้เช่าตกลงให้เช่าห้องพักอาศัยห้องเลขที่ <br> เพื่อใช้เป็นที่พักอาศัย ในอัตราค่าเช่าเดือนละ <?php echo $query->roomtype_rate; ?> บาท ค่าเช่านี้ไม่รวมถึงค่าไฟฟ้า ค่าน้ำประปา ค่าโทรศัพท์ ซึ่งผู้เช่าต้องชำระแก่ผู้ให้เช่าตามอัตราที่กำหนดไว้ในสัญญาข้อ ๔</p>
                        <!--end::Text-->
                        <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๒ </span>ผู้เช่าตกลงเช่าห้องพักอาศัยตามสัญญาข้อ ๑ มีกำหนดเวลา .......... ปี นับตั้งแต่วันที่ <?php echo $query->member_create; ?> ถึงวันที่ ........................................
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๓ </span>การชำระค่าเช่า ผู้เช่าตกลงจะชำระค่าเช่าแก่ผู้ให้เช่าเป็นการล่วงหน้า โดยชำระภายในวันที่ 5 ของทุกเดือนตลอดเวลาอายุการเช่า
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๔ </span>ผู้ให้เช่าคิดค่าไฟฟ้า ค่าน้ำประปา ค่าโทรศัพท์ ในอัตราดังนี้ <br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๑) ค่าไฟฟ้ายูนิตละ 7 บาท <br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๒) ค่าน้ำประปาเหมาจ่าย 200 บาท
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๕ </span>ผู้เช่าต้องชำระค่าไฟฟ้า ค่าน้ำประปา ค่าโทรศัพท์ ตามจำนวนหน่วยที่ใช้ในแต่ละเดือนและต้องชำระพร้อมกับการชำระค่าเช่าของเดือนถัดไป
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๖ </span>เพื่อเป็นการปฏิบัติตามสัญญาเช่า ผู้เช่าตกลงมอบเงินประกันแก่ผู้ให้เช่าไว้เป็นจำนวน บาท เงินประกันนี้ผู้ให้เช่าจะคืนให้แก่ผู้เช่าเมื่อผู้เช่ามิได้ผิดสัญญา และมิได้ค้างชำระเงินต่างๆ ตามสัญญานี้
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๗ </span>ผู้เช่าต้องเป็นผู้ชำระเงินค่ากำจัดขยะเดือนละ .......... บาท
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๘ </span>ผู้เช่าต้องเป็นผู้ดูแลรักษาความสะอาดบริเวณทางเดินส่วนกลางหน้าห้องพักอาศัยของผู้เช่า และผู้เช่าจะต้องไม่นำสิ่งของใดๆ มาวางไว้ในบริเวณทางเดินดังกล่าว
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๙ </span>ผู้เช่าต้องดูแลห้องพักอาศัยและทรัพย์สินต่างๆ ในห้องพักดังกล่าวเสมือนเป็นทรัพย์สินของตนเอง และต้องรักษาความสะอาดตลอดจนรักษาความสงบเรียบร้อย ไม่ก่อให้เกิดเสียงให้เป็นที่เดือดร้อนรำคาญแก่ผู้อยู่ห้องพักอาศัยข้างเคียง
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๐ </span>ผู้เช่าต้องเป็นผู้รับผิดชอบในบรรดาความสูญหาย เสียหาย หรือบุบสลายอย่างใดๆ อันเกิดแก่ห้องพักอาศัยและทรัพย์สินต่างๆ ในห้องพักดังกล่าว
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๑ </span>ผู้เช่าต้องยอมให้ผู้ให้เช่า หรือตัวแทนของผู้ให้เช่าเข้าตรวจดูห้องพักอาศัยได้เป็นครั้งคราวในระยะเวลาอันสมควร
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๒ </span>ผู้เช่าต้องไม่ทำการดัดแปลง ต่อเติม หรือรื้อถอนห้องพักอาศัยและทรัพย์สินต่างๆ ในห้องพักดังกล่าว ไม่ว่าทั้งหมดหรือบางส่วน หากฝ่าฝืนผู้ให้เช่าจะเรียกให้ผู้เช่าทำทรัพย์สินดังกล่าวให้กลับคืนสู่สภาพเดิม และเรียกให้ผู้เช่ารับผิดชดใช้ค่าเสียหายอันเกิดความสูญหาย เสียหาย หรือบุบสลายใดๆ อันเนื่องมาจากการดัดแปลง ต่อเติม หรือรื้อถอนดังกล่าว
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๓ </span>ผู้เช่าต้องไม่นำบุคคลอื่นนอกจากบุคคลในครอบครัวของผู้เช่าเข้ามาพักอาศัยในห้องพักอาศัย
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๔ </span>ผู้เช่าสัญญาว่าจะปฏิบัติตามระเบียบข้อบังคับของอพาร์ตเม้นต์ท้ายสัญญานี้ ซึ่งคู่สัญญาทั้งสองฝ่ายให้ถือว่าระเบียบข้อบังคับดังกล่าวเป็นส่วนหนึ่งแห่งสัญญาเช่านี้ด้วย หากผู้เช่าละเมิดแล้วผู้ให้เช่าย่อมให้สิทธิตามข้อ ๑๗ และข้อ ๑๘ แห่งสัญญานี้ได้
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๕ </span>ผู้ให้เช่าไม่ต้องรับผิดชอบในความสูญหายหรือความเสียหายอย่างใดๆ อันเกิดขึ้นแก่รถยนต์รวมทั้งทรัพย์สินต่างๆ ในรถยนต์ของผู้เช่า ซึ่งได้นำมาจอดไว้ในที่จอดรถยนต์ที่ผู้ให้เช่าจัดไว้ให้
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๖ </span>ผู้เช่าตกลงว่าการผิดสัญญาเช่าเครื่องเรือนซึ่งผู้เช่าได้ทำไว้กับผู้ให้เช่าต่างหากจากสัญญานี้ ถือว่าเป็นการผิดสัญญานี้ด้วย และโดยนัยเดียวกัน การผิดสัญญานี้ย่อมถือเป็นการผิดสัญญาเช่าเครื่องเรือนด้วย
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๗ </span>หากผู้เช่าประพฤติผิดสัญญาข้อหนึ่งข้อใด หรือหลายข้อก็ดี ผู้เช่าตกลงให้ผู้ให้เช่าใช้สิทธิดังต่อไปนี้ ข้อใดข้อหนึ่งหรือหลายข้อรวมกันก็ได้ คือ <br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๑) บอกเลิกสัญญาเช่า<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๒) เรียกค่าเสียหาย<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๓) บอกกล่าวให้ผู้เช่าปฏิบัติตามข้อกำหนดในสัญญาภายในกำหนดเวลาที่ผู้ให้เช่าเห็นสมควร<br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (๔) ตัดกระแสไฟฟ้า น้ำประปา และโทรศัพท์ ได้ในทันที โดยไม่จำเป็นต้องบอกกล่าวแก่ผู้เช่าเป็นการล่วงหน้า<br>
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๘ </span>ในกรณีที่สัญญาเช่าระงับสิ้นลง ไม่ว่าด้วยเหตุใดๆ ก็ตาม ผู้เช่าต้องส่งมอบห้อง พักอาศัยคืนแก่ผู้ให้เช่าทันที หากผู้เช่าไม่ปฏิบัติตาม ผู้ให้เช่ามีสิทธิเข้าครอบครองห้องพักอาศัยที่ให้เช่าและสามารถขนบังคับย้ายบุคคลและขนย้ายทรัพย์สินของผู้เช่าออกจากห้องพักดังกล่าวได้ โดยผู้ให้เช่าไม่ต้องเป็นผู้รับผิดชอบในความสูญหายหรือความเสียหายอย่างใดๆ อันเกิดขึ้นแก่ทรัพย์สินของผู้เช่า ทั้งผู้ให้เช่ามีสิทธิริบเงินประกันการเช่าตามที่ระบุไว้ในสัญญาข้อ๖ได้ด้วย
                        <p>
                            <!--end::Text-->
                            <!--begin::Text-->
                        <p class="mb-8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="text-gray-800 pe-1">ข้อ ๑๙ </span>ในวันทำสัญญานี้ ผู้เช่าได้ตรวจดูห้องพักอาศัยที่เช่าตลอดจนทรัพย์สินต่างๆ ในห้องพักดังกล่าวแล้วเห็นว่ามีสภาพปกติทุกประการ และผู้ให้เช่าได้ส่งมอบห้องพักอาศัยและทรัพย์สินต่างๆ ในห้องพักแก่ผู้เช่าแล้ว คู่สัญญาได้อ่านและเข้าใจข้อความในสัญญานี้โดยตลอดแล้วเห็นว่าถูกต้อง จึงได้ลงลายมือชื่อไว้เป็นสำคัญต่อหน้าพยาน
                        <p>
                            <!--end::Text-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Section-->
                    <div class="mb-16">
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Publications post-->
                                <div class="card-xl-stretch ms-md-6">
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Text-->
                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">ลงชื่อ........................................ผู้เช่า</div>
                                        <!--end::Text-->
                                        <!--begin::Text-->
                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(&nbsp&nbsp&nbsp&nbsp <?php echo $query->member_fullname;?> &nbsp&nbsp&nbsp&nbsp)</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Text-->
                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">ลงชื่อ........................................ผู้ให้เช่า</div>
                                        <!--end::Text-->
                                        <!--begin::Text-->
                                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3 mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(&nbsp&nbsp&nbsp&nbsp <?php echo $_SESSION['admin_fullname'];?> &nbsp&nbsp&nbsp&nbsp)</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Publications post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::About-->
                <!-- begin: Invoice action-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">พิมพ์ใบสัญญาเช่าฉบับนี้</button>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::About card-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
<?php include("inc/footer.php"); ?>