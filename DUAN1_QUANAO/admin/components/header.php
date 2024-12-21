<body>


    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa fa-user me-2"></i>Khatoco</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Tổng quan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-shopping-basket me-2"></i>Đơn hàng</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="index.php?quanli=danh-sach-don-hang" class="dropdown-item">Tất cả đơn</a>
                            <a href="danh-sach-don-cho" class="dropdown-item">Đơn chờ xác nhận</a>

                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i
                                class="fa fa-th me-2"></i>Danh mục</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php?quanli=them-danh-muc" class="dropdown-item">Thêm mới</a>
                            <a href="index.php?quanli=danh-sach-danh-muc" class="dropdown-item">Tất cả</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fas fa-box me-2"></i>Sản phẩm</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php?quanli=them-san-pham" class="dropdown-item">Thêm mới</a>
                            <a href="index.php?quanli=danh-sach-san-pham" class="dropdown-item">Tất cả</a>

                        </div>
                    </div>

                     <a href="index.php?quanli=danh-sach-khach-hang" class="nav-item nav-link"><i
                            class="fas fa-users me-2"></i>Thành viên</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-white border-1 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="public_admin/img/user-default.png" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">hello everyone</h6>
                                        <small>15 phút trước</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item text-center">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Thông báo</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-white border-1 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">1 Đơn hàng mới</h6>
                                <small>10:20 20-11-2023</small>
                            </a>
                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item text-center">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="public_admin/img/user-default.png" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">ADMIN</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-white border-1 rounded-0 rounded-bottom m-0">
                            <!-- <a href="#" class="dropdown-item">Hồ sơ</a> -->
                            <a href="index.php?quanli=dang-xuat" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Content start -->