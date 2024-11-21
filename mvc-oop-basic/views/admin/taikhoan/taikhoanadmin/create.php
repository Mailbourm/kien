<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Trang thêm Addmin</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
          

            <form action="index.php?act=them-admin" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab" aria-selected="true">
                                            Bảng Thêm Admin
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Họ và tên</label>
                                                    <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên ">
                                                    <?php if(isset($_SESSION['errors']['ho_ten'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['ho_ten'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                                    <?php if(isset($_SESSION['errors']['email'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Giá sản phẩm</label>
                                                    <input type="number" class="form-control" name="gia_san_pham" placeholder="Nhập giá Sản Phẩm">
                                                    <?php if(isset($_SESSION['errors']['gia_san_pham'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['gia_san_pham'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Giá Khuyến Mãi</label>
                                                    <input type="number" class="form-control" name="gia_khuyen_mai"  placeholder="Nhập giá khuyến Mãi">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Số Lượng</label>
                                                    <input type="number" class="form-control" name="so_luong" placeholder="Nhập số lượng">
                                                    <?php if(isset($_SESSION['errors']['so_luong'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['so_luong'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày sinh</label>
                                                    <input type="date" class="form-control" name="ngay_nhap" placeholder="Ngày nhập">
                                                    <?php if(isset($_SESSION['errors']['ngay_nhap'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['ngay_nhap'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Trạng Thái</label>
                                                    <select class="form-select" aria-label="Default select example" name="trang_thai">
                                                        <option selected>Trạng Thái</option>
                                                        <option value="1">Còn Hàng</option>
                                                        <option value="2">Hết hàng</option>
                                                    </select>
                                                    <?php if(isset($_SESSION['errors']['trang_thai'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['trang_thai'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Ảnh đại diện</label>
                                                    <div class="input-group">
                                                    <input class="form-control" name="anh_dai_dien" type="file" id="hinh_anh">
                                                    <button class="btn btn-outline-secondary">Rest Ảnh</button>
                                                    </div>
                                                        
                                                    <?php if(isset($_SESSION['errors']['anh_dai_dien'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['anh_dai_dien'] ?></p>
                                                <?php endif; ?>
                                                    </div>
                                                </div>             
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mô tả</label>
                                                        <textarea class="form-control" name="mo_ta" placeholder="Nhập mô tả" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab-pane -->
                                   
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <a href="index.php?act=list-admin"class="btn btn-primary w-sm">Quay lại</a>
                            <button type="submit" name="them-admin" class="btn btn-secondary w-sm">Thêm addmin</button>
                        </div>
                    </div>
                   
                </div>
                <!-- end row -->
            </form>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
     
</div>
<?php include '../views/admin/layout/footer.php' ?>