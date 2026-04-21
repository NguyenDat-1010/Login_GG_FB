<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Hệ thống Quản lý Sinh viên</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
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
            opacity: 0.3;
            animation: float 20s infinite;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #48dbfb, #1dd1a1);
            bottom: -50px;
            right: -50px;
            animation-delay: -5s;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, #a55eea, #ff6b9d);
            top: 50%;
            right: 10%;
            animation-delay: -10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(20px, -30px) rotate(5deg); }
            50% { transform: translate(-10px, 20px) rotate(-5deg); }
            75% { transform: translate(30px, 10px) rotate(3deg); }
        }

        .login-card {
            position: relative;
            width: 420px;
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #feca57, #48dbfb, #1dd1a1, #a55eea);
            border-radius: 24px 24px 0 0;
        }

        .logo-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .logo-container i { font-size: 36px; color: white; }

        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: white;
            text-align: center;
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-subtitle {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
            text-align: center;
            margin-bottom: 35px;
        }

        .social-btn {
            width: 100%;
            padding: 16px 24px;
            border: none;
            border-radius: 16px;
            font-size: 16px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .social-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .social-btn:hover::before { left: 100%; }
        .social-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .btn-google { background: white; color: #333; margin-bottom: 16px; }
        .btn-google:hover { background: #f8f9fa; color: #333; }
        .btn-google i {
            font-size: 20px;
            background: conic-gradient(from 0deg, #ea4335, #fbbc05, #34a853, #4285f4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-facebook { background: #1877f2; color: white; }
        .btn-facebook:hover { background: #166fe5; color: white; }
        .btn-facebook i { font-size: 20px; }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.3);
        }

        .divider span {
            padding: 0 15px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 13px;
        }

        .login-footer {
            text-align: center;
            margin-top: 25px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 12px;
        }

        .login-footer a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover { text-decoration: underline; }

        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            backdrop-filter: blur(5px);
        }

        .loading-content { text-align: center; color: white; }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255, 255, 255, 0.2);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 480px) {
            .login-card {
                width: 90%;
                padding: 40px 25px;
                margin: 20px;
            }
            .login-title { font-size: 24px; }
        }
    </style>
</head>
<body>

    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>

    <div id="loading">
        <div class="loading-content">
            <div class="loading-spinner"></div>
            <h4>Đang chuyển hướng...</h4>
            <p class="mt-2">Vui lòng chờ trong giây lát</p>
        </div>
    </div>

    <div class="login-card">
        <div class="logo-container">
            <i class="fas fa-graduation-cap"></i>
        </div>
        
        <h1 class="login-title">Chào mừng!</h1>
        <p class="login-subtitle">Đăng nhập để truy cập hệ thống quản lý sinh viên</p>

        <button onclick="showLoading(); window.location.href='/auth/google'" class="social-btn btn-google">
            <i class="fab fa-google"></i>
            Đăng nhập với Google
        </button>

        <button onclick="showLoading(); window.location.href='/auth/facebook'" class="social-btn btn-facebook">
            <i class="fab fa-facebook-f"></i>
            Đăng nhập với Facebook
        </button>

        <div class="divider">
            <span>hoặc</span>
        </div>

        <p class="login-footer">
            Bằng việc đăng nhập, bạn đồng ý với 
            <a href="#">Điều khoản</a> & <a href="#">Chính sách</a>
        </p>
    </div>

    <script>
        function showLoading() {
            document.getElementById('loading').style.display = 'flex';
        }
    </script>

</body>
</html>