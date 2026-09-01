<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ Thống Tuyển Sinh Lớp 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-graduation-cap"></i>
                Tuyển Sinh Lớp 10
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#student">Thí sinh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#admin">Quản lý</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-lg">
            <h1>Hệ Thống Tuyển Sinh Lớp 10</h1>
            <p>Nền tảng tra cứu điểm thi và quản lý tuyển sinh hiện đại, an toàn, minh bạch</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container-lg container-main">
        <div class="row g-4">
            <!-- Thí sinh / Phụ huynh -->
            <div class="col-md-6" id="student">
                <div class="card card-user-type card-student">
                    <div class="card-header-custom">
                        <i class="fas fa-user-graduate icon-card"></i>
                        <div>Thí sinh & Phụ huynh</div>
                    </div>
                    <div class="card-body">
                        <p>
                            <strong>Tra cứu điểm thi, điểm chuẩn</strong> bằng Số báo danh (SBD) hoặc Mã tra cứu an
                            toàn.
                        </p>
                        <p>
                            Xem thông tin tuyển sinh, kế hoạch tuyển dụng, quy chế tuyển sinh và nguyện vọng của bạn.
                        </p>
                        <p>
                            <small class="text-muted">
                                <i class="fas fa-lock"></i>
                                Thông tin cá nhân được bảo mật tuyệt đối
                            </small>
                        </p>
                        <a href="student/login.php" class="btn btn-access btn-student">
                            <i class="fas fa-arrow-right"></i> Vào khu vực thí sinh
                        </a>
                    </div>
                </div>
            </div>

            <!-- Cán bộ / Lập trình viên -->
            <div class="col-md-6" id="admin">
                <div class="card card-user-type card-admin">
                    <div class="card-header-custom">
                        <i class="fas fa-cogs icon-card"></i>
                        <div>Cán bộ & Quản trị</div>
                    </div>
                    <div class="card-body">
                        <p>
                            <strong>Quản lý, nhập, cập nhật dữ liệu</strong> tuyển sinh: điểm thi, danh sách phách, điểm
                            chuẩn.
                        </p>
                        <p>
                            Công cụ quản lý toàn diện với bảo mật cao, hỗ trợ nhập điểm theo phòng thi, theo phách, theo
                            tên/SBD.
                        </p>
                        <p>
                            <small class="text-muted">
                                <i class="fas fa-shield-alt"></i>
                                Yêu cầu xác thực tài khoản
                            </small>
                        </p>
                        <a href="admin/login.php" class="btn btn-access btn-admin">
                            <i class="fas fa-arrow-right"></i> Vào khu vực quản lý
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container-lg">
            <h2 class="section-title">Hướng Dẫn Sử Dụng</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card border-0" style="background: white; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-graduation-cap" style="color: var(--primary-color);"></i>
                                Cho Thí Sinh
                            </h5>
                            <ul style="padding-left: 1.5rem; color: #6b7280;">
                                <li>Nhập Số báo danh hoặc Mã tra cứu</li>
                                <li>Xem điểm thi các môn</li>
                                <li>Kiểm tra điểm chuẩn và kết quả</li>
                                <li>Tìm hiểu thông tin trường học</li>
                                <li>Cập nhật nguyện vọng (nếu có)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0" style="background: white; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);">
                        <div class="card-body">
                            <h5 class="card-title">
                                <i class="fas fa-cogs" style="color: var(--secondary-color);"></i>
                                Cho Quản Trị Viên
                            </h5>
                            <ul style="padding-left: 1.5rem; color: #6b7280;">
                                <li>Đăng nhập bằng tài khoản cán bộ</li>
                                <li>Nhập/cập nhật điểm theo phòng thi</li>
                                <li>Quản lý danh sách phách (bảo mật rọc phách)</li>
                                <li>Công bố điểm chuẩn</li>
                                <li>Xuất báo cáo tuyển sinh</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container-lg">
            <div class="row g-4">
                <div class="col-md-3">
                    <h6><i class="fas fa-graduation-cap"></i> Về Hệ Thống</h6>
                    <p>Hệ thống tuyển sinh lớp 10 hiện đại, an toàn và minh bạch.</p>
                </div>
                <div class="col-md-3">
                    <h6><i class="fas fa-link"></i> Liên Kết</h6>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="student/login.php">Khu vực thí sinh</a></li>
                        <li><a href="admin/login.php">Khu vực quản lý</a></li>
                        <li><a href="#info">Hướng dẫn</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><i class="fas fa-phone"></i> Liên Hệ</h6>
                    <p>
                        Điện thoại: <a href="tel:+841234567890">(+84) 123 456 7890</a><br>
                        Email: <a href="mailto:info@tuyensinh.edu.vn">info@tuyensinh.edu.vn</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h6><i class="fas fa-map-marker-alt"></i> Địa Chỉ</h6>
                    <p>Sở Giáo dục và Đào tạo<br>
                        [Tên tỉnh/thành phố]<br>
                        Việt Nam</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 - 2025 Hệ Thống Tuyển Sinh Lớp 10. Bản quyền thuộc về Sở Giáo dục và Đào tạo.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>