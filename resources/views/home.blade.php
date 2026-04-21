<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Thông tin Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.2;
            animation: float 20s infinite;
        }

        .shape-1 {
            width: 250px;
            height: 250px;
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            top: -80px;
            left: -80px;
        }

        .shape-2 {
            width: 180px;
            height: 180px;
            background: linear-gradient(45deg, #f857a6, #ff5858);
            bottom: -60px;
            right: -60px;
            animation-delay: -7s;
        }

        .shape-3 {
            width: 120px;
            height: 120px;
            background: linear-gradient(45deg, #a8edea, #fed6e3);
            top: 20%;
            right: 5%;
            animation-delay: -12s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(15px, -25px) rotate(5deg); }
            50% { transform: translate(-8px, 15px) rotate(-5deg); }
            75% { transform: translate(25px, 8px) rotate(3deg); }
        }

        .profile-card {
            position: relative;
            width: 420px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .profile-header {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            padding: 40px 30px 60px;
            text-align: center;
            position: relative;
        }

        .profile-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            background: white;
            border-radius: 24px 24px 0 0;
        }

        .avatar-container {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #11998e;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 4px solid white;
        }

        .avatar-status {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            background: #38ef7d;
            border-radius: 50%;
            border: 3px solid white;
        }

        .user-name {
            font-size: 24px;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .user-email {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
        }

        .profile-body {
            padding: 20px 30px 30px;
        }

        .info-box {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            margin-bottom: 25px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .info-label {
            font-size: 13px;
            color: #6c757d;
            font-weight: 500;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-value {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stats-row {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-item {
            flex: 1;
            background: white;
            border-radius: 16px;
            padding: 15px;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        .stat-icon i { color: white; font-size: 18px; }

        .stat-value {
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }

        .stat-label {
            font-size: 11px;
            color: #6c757d;
            margin-top: 3px;
        }

        .logout-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            border: none;
            border-radius: 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 65, 108, 0.3);
        }

        .logout-btn:active {
            transform: translateY(-1px);
        }

        /* Not logged in state */
        .not-logged-in {
            text-align: center;
            padding: 60px 30px;
        }

        .not-logged-in i {
            font-size: 60px;
            color: #6c757d;
            margin-bottom: 20px;
        }

        .not-logged-in h3 {
            color: #333;
            margin-bottom: 20px;
        }

        .back-btn {
            padding: 14px 30px;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(17, 153, 142, 0.3);
            color: white;
        }

        @media (max-width: 480px) {
            .profile-card { width: 90%; }
            .profile-header { padding: 30px 20px 50px; }
            .profile-body { padding: 15px 20px 25px; }
        }
    </style>
</head>
<body>

    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>

    @if(auth()->check())

    <div class="profile-card">
        <div class="profile-header">
            <div class="avatar-container">
                <div class="avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="avatar-status"></div>
            </div>
            <h2 class="user-name">{{ auth()->user()->name }}</h2>
            <p class="user-email">{{ auth()->user()->email }}</p>
        </div>

        <div class="profile-body">
            <div class="info-box">
                <p class="info-label">Mã sinh viên</p>
                <p class="info-value">{{ auth()->user()->student_id }}</p>
            </div>

            <div class="stats-row">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <p class="stat-value">✓</p>
                    <p class="stat-label">Đã xác thực</p>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <p class="stat-value">Google</p>
                    <p class="stat-label">Phương thức</p>
                </div>
            </div>

            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    Đăng xuất
                </button>
            </form>
        </div>
    </div>

    @else

    <div class="profile-card">
        <div class="not-logged-in">
            <i class="fas fa-user-clock"></i>
            <h3>Bạn chưa đăng nhập</h3>
            <p class="text-muted mb-4">Vui lòng đăng nhập để truy cập hệ thống</p>
            <a href="/login" class="back-btn">
                <i class="fas fa-sign-in-alt me-2"></i>
                Quay lại đăng nhập
            </a>
        </div>
    </div>

    @endif

</body>
</html>