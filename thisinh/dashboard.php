<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Thí Sinh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-header">
                    <i class="fas fa-user-graduate"></i>
                    <h5>Thí Sinh</h5>
                    <div class="student-id">
                        <small>SBD: <strong id="studentSBD">123456</strong></small>
                    </div>
                </div>

                <ul class="sidebar-menu">
                    <li>
                        <a href="#personal-info" class="nav-link active" data-tab="personal-info">
                            <i class="fas fa-user"></i>
                            Thông Tin Cá Nhân
                        </a>
                    </li>
                    <li>
                        <a href="#preferences" class="nav-link" data-tab="preferences">
                            <i class="fas fa-list"></i>
                            Nguyện Vọng
                        </a>
                    </li>
                    <li>
                        <a href="#scores" class="nav-link" data-tab="scores">
                            <i class="fas fa-chart-bar"></i>
                            Tra Cứu Điểm
                        </a>
                    </li>
                    <li>
                        <a href="#documents" class="nav-link" data-tab="documents">
                            <i class="fas fa-file-alt"></i>
                            Tài Liệu
                        </a>
                    </li>
                </ul>

                <a href="logout.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Đăng Xuất
                </a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>
                        <i class="fas fa-dashboard"></i>
                        Bảng Điều Khiển Thí Sinh
                    </h1>
                </div>

                <!-- Tab Content -->
                <div id="personal-info" class="tab-content active">
                    <div class="section-card">
                        <div class="section-title">
                            <i class="fas fa-id-card"></i>
                            Thông Tin Cá Nhân
                        </div>

                        <div class="info-box">
                            <i class="fas fa-info-circle"></i>
                            Vui lòng cập nhật thông tin chính xác. Thông tin này được sử dụng cho hồ sơ dự tuyển của bạn.
                        </div>

                        <div class="success-message" id="personalSuccessMsg">
                            <i class="fas fa-check-circle"></i> Cập nhật thông tin thành công!
                        </div>

                        <form id="personalInfoForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="fullName">Họ và Tên <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" 
                                           placeholder="Nhập họ và tên đầy đủ" required>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Ngày Sinh <span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="gender">Giới Tính <span style="color: red;">*</span></label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="">-- Chọn giới tính --</option>
                                        <option value="male">Nam</option>
                                        <option value="female">Nữ</option>
                                        <option value="other">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="idNumber">Số CMND/CCCD <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="idNumber" name="idNumber" 
                                           placeholder="Nhập số CMND/CCCD" required minlength="9" maxlength="12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span style="color: red;">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Nhập địa chỉ email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Điện Thoại <span style="color: red;">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" 
                                       placeholder="Nhập số điện thoại" required pattern="[0-9]{10}">
                            </div>

                            <div class="form-group">
                                <label for="address">Địa Chỉ Thường Trú <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="address" name="address" 
                                       placeholder="Nhập địa chỉ thường trú" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="province">Tỉnh/Thành Phố <span style="color: red;">*</span></label>
                                    <select class="form-select" id="province" name="province" required>
                                        <option value="">-- Chọn tỉnh/thành phố --</option>
                                        <option value="ha_noi">Hà Nội</option>
                                        <option value="hcm">TP. Hồ Chí Minh</option>
                                        <option value="da_nang">Đà Nẵng</option>
                                        <option value="other">Khác</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="school">Trường Cấp 2 <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="school" name="school" 
                                           placeholder="Nhập tên trường cấp 2" required>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary-custom">
                                    <i class="fas fa-save"></i> Lưu Thông Tin
                                </button>
                                <button type="reset" class="btn btn-secondary-custom">
                                    <i class="fas fa-redo"></i> Làm Lại
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Preferences Tab -->
                <div id="preferences" class="tab-content">
                    <div class="section-card">
                        <div class="section-title">
                            <i class="fas fa-list-ul"></i>
                            Đăng Ký Nguyện Vọng
                        </div>

                        <div class="info-box">
                            <i class="fas fa-lightbulb"></i>
                            Hãy lựa chọn các nguyện vọng theo thứ tự ưu tiên của bạn. Bạn có thể đăng ký tối đa 5 nguyện vọng.
                        </div>

                        <div class="success-message" id="preferencesSuccessMsg">
                            <i class="fas fa-check-circle"></i> Cập nhật nguyện vọng thành công!
                        </div>

                        <form id="preferencesForm">
                            <div class="mb-3">
                                <label for="schoolSelect" class="form-label">
                                    Chọn Trường <span style="color: red;">*</span>
                                </label>
                                <select class="form-select" id="schoolSelect" name="schoolSelect" required>
                                    <option value="">-- Chọn trường học --</option>
                                    <option value="1" data-code="TH001">Trường THPT Chuyên Lê Hồng Phong - Mã: TH001</option>
                                    <option value="2" data-code="TH002">Trường THPT Phan Bội Châu - Mã: TH002</option>
                                    <option value="3" data-code="TH003">Trường THPT Nguyễn Huệ - Mã: TH003</option>
                                    <option value="4" data-code="TH004">Trường THPT Lê Qúy Đôn - Mã: TH004</option>
                                    <option value="5" data-code="TH005">Trường THPT Trần Phú - Mã: TH005</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-primary-custom" id="addPreferenceBtn">
                                <i class="fas fa-plus"></i> Thêm Nguyện Vọng
                            </button>

                            <div id="preferencesContainer" style="margin-top: 25px;">
                                <!-- Preferences will be added here -->
                            </div>

                            <div class="form-actions" style="margin-top: 25px;">
                                <button type="submit" class="btn btn-primary-custom">
                                    <i class="fas fa-check"></i> Xác Nhận Nguyện Vọng
                                </button>
                                <button type="button" class="btn btn-secondary-custom" id="clearPreferencesBtn">
                                    <i class="fas fa-trash"></i> Xóa Hết
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Scores Tab -->
                <div id="scores" class="tab-content">
                    <div class="section-card">
                        <div class="section-title">
                            <i class="fas fa-chart-bar"></i>
                            Tra Cứu Điểm
                        </div>

                        <div class="info-box">
                            <i class="fas fa-calendar-check"></i>
                            Điểm thi sẽ được công bố vào ngày <strong>15/06/2024</strong>. Vui lòng quay lại sau ngày này để xem điểm.
                        </div>

                        <div style="text-align: center; padding: 40px;">
                            <i class="fas fa-hourglass-half" style="font-size: 3rem; color: #ddd; margin-bottom: 15px; display: block;"></i>
                            <p style="color: #999;">Điểm thi chưa được công bố</p>
                        </div>
                    </div>
                </div>

                <!-- Documents Tab -->
                <div id="documents" class="tab-content">
                    <div class="section-card">
                        <div class="section-title">
                            <i class="fas fa-file-download"></i>
                            Tài Liệu
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; text-align: center; cursor: pointer; transition: all 0.3s ease;"
                                     onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                    <i class="fas fa-file-pdf" style="font-size: 2.5rem; color: #ff6b6b; margin-bottom: 10px; display: block;"></i>
                                    <h6>Quy Chế Tuyển Sinh</h6>
                                    <small class="text-muted">PDF - 2.5 MB</small>
                                    <br><br>
                                    <a href="#" class="btn btn-sm btn-primary-custom" onclick="alert('Tải tệp'); return false;">
                                        <i class="fas fa-download"></i> Tải
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; text-align: center; cursor: pointer; transition: all 0.3s ease;"
                                     onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                    <i class="fas fa-file-pdf" style="font-size: 2.5rem; color: #ff6b6b; margin-bottom: 10px; display: block;"></i>
                                    <h6>Hướng Dẫn Đăng Ký Nguyện Vọng</h6>
                                    <small class="text-muted">PDF - 1.8 MB</small>
                                    <br><br>
                                    <a href="#" class="btn btn-sm btn-primary-custom" onclick="alert('Tải tệp'); return false;">
                                        <i class="fas fa-download"></i> Tải
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tab Navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all tabs and contents
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked link and corresponding content
                this.classList.add('active');
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Personal Info Form Submission
        document.getElementById('personalInfoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate form submission
            const fullName = document.getElementById('fullName').value;
            
            // Show success message
            const successMsg = document.getElementById('personalSuccessMsg');
            successMsg.style.display = 'block';
            
            setTimeout(() => {
                successMsg.style.display = 'none';
            }, 3000);
            
            console.log('Personal info saved:', {
                fullName: fullName,
                dob: document.getElementById('dob').value,
                gender: document.getElementById('gender').value,
                idNumber: document.getElementById('idNumber').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                address: document.getElementById('address').value,
                province: document.getElementById('province').value,
                school: document.getElementById('school').value
            });
        });

        // Preferences Management
        let preferenceCount = 0;
        const preferences = [];

        document.getElementById('addPreferenceBtn').addEventListener('click', function() {
            const schoolSelect = document.getElementById('schoolSelect');
            const selectedOption = schoolSelect.options[schoolSelect.selectedIndex];
            
            if (!selectedOption.value) {
                alert('Vui lòng chọn một trường học');
                return;
            }

            if (preferences.length >= 5) {
                alert('Bạn chỉ có thể thêm tối đa 5 nguyện vọng');
                return;
            }

            preferenceCount++;
            const preferenceId = 'pref-' + Date.now();
            const schoolCode = selectedOption.getAttribute('data-code');
            const schoolName = selectedOption.text.split(' - ')[0];

            const preference = {
                id: preferenceId,
                rank: preferenceCount,
                name: schoolName,
                code: schoolCode
            };
            preferences.push(preference);

            // Add to DOM
            const container = document.getElementById('preferencesContainer');
            const preferenceDiv = document.createElement('div');
            preferenceDiv.className = 'preference-item';
            preferenceDiv.id = preferenceId;
            preferenceDiv.innerHTML = `
                <span class="preference-rank">${preferenceCount}</span>
                <div class="preference-info">
                    <div class="preference-school">${schoolName}</div>
                    <div class="preference-code">Mã: ${schoolCode}</div>
                </div>
                <button type="button" class="btn btn-sm btn-danger" onclick="removePreference('${preferenceId}')">
                    <i class="fas fa-trash"></i> Xóa
                </button>
            `;
            container.appendChild(preferenceDiv);

            // Reset select
            schoolSelect.value = '';
        });

        window.removePreference = function(preferenceId) {
            const element = document.getElementById(preferenceId);
            if (element) {
                element.remove();
                preferences.splice(preferences.findIndex(p => p.id === preferenceId), 1);
                // Reorder ranks
                reorderPreferences();
            }
        };

        function reorderPreferences() {
            const container = document.getElementById('preferencesContainer');
            const items = container.querySelectorAll('.preference-item');
            items.forEach((item, index) => {
                const rank = item.querySelector('.preference-rank');
                rank.textContent = index + 1;
                preferences[index].rank = index + 1;
            });
        }

        document.getElementById('clearPreferencesBtn').addEventListener('click', function() {
            if (confirm('Bạn chắc chắn muốn xóa tất cả nguyện vọng?')) {
                document.getElementById('preferencesContainer').innerHTML = '';
                preferences.length = 0;
                preferenceCount = 0;
            }
        });

        // Preferences Form Submission
        document.getElementById('preferencesForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (preferences.length === 0) {
                alert('Vui lòng thêm ít nhất một nguyện vọng');
                return;
            }

            const successMsg = document.getElementById('preferencesSuccessMsg');
            successMsg.style.display = 'block';
            
            setTimeout(() => {
                successMsg.style.display = 'none';
            }, 3000);

            console.log('Preferences saved:', preferences);
        });

        // Load sample data (remove in production)
        window.addEventListener('load', function() {
            document.getElementById('fullName').value = 'Nguyễn Văn A';
            document.getElementById('dob').value = '2008-05-15';
            document.getElementById('gender').value = 'male';
            document.getElementById('idNumber').value = '123456789';
            document.getElementById('email').value = 'nguyenvana@gmail.com';
            document.getElementById('phone').value = '0912345678';
            document.getElementById('address').value = '123 Đường Trần Hưng Đạo';
            document.getElementById('province').value = 'ha_noi';
            document.getElementById('school').value = 'Trường THCS Hoàng Mai';
        });
    </script>
</body>

</html>
