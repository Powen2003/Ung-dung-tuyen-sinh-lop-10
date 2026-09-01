<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Khu Vực Thí Sinh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="card login-card">
            <div class="card-header">
                <i class="fas fa-user-graduate"></i>
                <h3>Khu Vực Thí Sinh</h3>
                <p style="margin: 10px 0 0 0; font-size: 0.95rem; opacity: 0.9;">Tra cứu điểm và quản lý nguyện vọng</p>
            </div>

            <div class="card-body">
                <form id="loginForm" method="POST" action="process_login.php">
                    <div class="form-group">
                        <label for="sbd">
                            <i class="fas fa-id-card"></i> Số Báo Danh
                        </label>
                        <input type="text" class="form-control" id="sbd" name="sbd"
                            placeholder="Nhập số báo danh của bạn" required pattern="[0-9]{1,}" minlength="1">
                        <small class="text-muted d-block mt-2">Ví dụ: 123456</small>
                    </div>

                    <div class="form-group">
                        <label for="code">
                            <i class="fas fa-key"></i> Mã Tra Cứu
                        </label>
                        <input type="password" class="form-control" id="code" name="code" placeholder="Nhập mã tra cứu"
                            required minlength="6">
                        <small class="text-muted d-block mt-2">Mã tra cứu được gửi qua email/SMS</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe">
                        <label class="form-check-label" for="rememberMe">
                            Nhớ tôi lần tới
                        </label>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt"></i> Đăng Nhập
                    </button>

                    <div class="login-info">
                        <i class="fas fa-info-circle"></i>
                        <strong>Bạn chưa có tài khoản?</strong><br>
                        Mã tra cứu được gửi sau khi hoàn tất hồ sơ dự tuyển.
                        Hãy kiểm tra email hoặc liên hệ phòng tuyển sinh.
                    </div>
                </form>

                <div class="back-link">
                    <a href="../index.php">
                        <i class="fas fa-arrow-left"></i> Quay lại trang chủ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Form validation
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        const sbd = document.getElementById('sbd').value.trim();
        const code = document.getElementById('code').value.trim();

        if (!sbd || !code) {
            e.preventDefault();
            alert('Vui lòng nhập đầy đủ thông tin đăng nhập');
            return false;
        }

        if (!/^\d+$/.test(sbd)) {
            e.preventDefault();
            alert('Số báo danh chỉ chứa các chữ số');
            return false;
        }
    });
    </script>
</body>

</html>