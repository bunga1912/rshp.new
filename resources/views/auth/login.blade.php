<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RSHP UNAIR</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: linear-gradient(to bottom right, #0055A4, #FFD700);
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header */
        .site-header {
            background: linear-gradient(90deg, #002147, #004aad, #f4c542);
            backdrop-filter: blur(10px);
            padding: 15px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-area img {
            width: 80px;
            transition: transform 0.3s ease;
        }

        .logo-area:hover img {
            transform: scale(1.1) rotate(5deg);
        }

        .tulisan-logo {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            line-height: 1.4;
        }

        .navbar {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .navbar a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.4);
            color: #002147;
            transform: translateY(-2px);
        }

        .navbar a.active {
            background: rgba(255, 255, 255, 0.3);
            border-bottom: 3px solid #f4c542;
        }

        .navbar .btn-cta {
            background: #f4c542;
            color: #002147;
            font-weight: 700;
            padding: 12px 28px;
        }

        .navbar .btn-cta:hover {
            background: white;
            color: #002147;
        }

        /* Login Container */
        .login-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 150px 5% 50px;
        }

        .login-container {
            max-width: 500px;
            width: 100%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-icon {
            font-size: 5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .login-header h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .login-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }

        /* Form Styles */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            font-size: 1.3rem;
            color: #004aad;
        }

        .form-group input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #f4c542;
            background: white;
            box-shadow: 0 0 20px rgba(244, 197, 66, 0.4);
            transform: translateY(-2px);
        }

        .form-group input::placeholder {
            color: #999;
        }

        /* Password Toggle */
        .toggle-password {
            position: absolute;
            right: 1rem;
            cursor: pointer;
            font-size: 1.3rem;
            color: #004aad;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #f4c542;
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: -0.5rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            font-size: 0.95rem;
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #f4c542;
        }

        .forgot-password {
            color: white;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            color: #f4c542;
            text-shadow: 0 0 10px rgba(244, 197, 66, 0.5);
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            color: #002147;
            border: none;
            padding: 1rem 2rem;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #FFD700, #f4c542);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.6);
        }

        .btn-submit:active {
            transform: translateY(-1px);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 2px;
            background: rgba(255, 255, 255, 0.3);
        }

        .divider span {
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
        }

        /* Register Link */
        .register-link {
            text-align: center;
            color: white;
            font-size: 1rem;
        }

        .register-link a {
            color: #f4c542;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .register-link a:hover {
            color: white;
            text-shadow: 0 0 10px rgba(244, 197, 66, 0.8);
        }

        /* Role Selection */
        .role-selection {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .role-option {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .role-option:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: #f4c542;
            transform: translateY(-5px);
        }

        .role-option.active {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            border-color: #f4c542;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .role-option .role-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .role-option .role-label {
            color: white;
            font-weight: 700;
            font-size: 1rem;
        }

        .role-option.active .role-label {
            color: #002147;
        }

        /* Alert Messages */
        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            display: none;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert.show {
            display: block;
        }

        .alert-error {
            background: rgba(220, 38, 38, 0.9);
            color: white;
            border: 2px solid #dc2626;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.9);
            color: white;
            border: 2px solid #22c55e;
        }

        /* Footer */
        .copyright-section {
            background: #f4c542;
            text-align: center;
            padding: 1.5rem;
            font-size: 1rem;
            color: #002147;
            font-weight: 600;
        }

        .copyright-section span {
            color: white;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .site-header {
                flex-direction: column;
                gap: 1rem;
                padding: 15px 3%;
            }

            .navbar {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }

            .login-container {
                padding: 2rem 1.5rem;
            }

            .login-header h1 {
                font-size: 2rem;
            }

            .role-selection {
                grid-template-columns: 1fr;
            }

            .form-options {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="logo-area">
            <img src="https://cak.unair.ac.id/assets/cakassets/img/logo-unair.png" alt="Logo UNAIR"/>
            <h2 class="tulisan-logo">
                Educational Veterinary<br>
                Hospital
            </h2>
        </div>

        <nav class="navbar">
            <a href="{{ route ('home') }}">Home</a>
            <a href="{{ route ('struktur') }}">Struktur Organisasi</a>
            <a href="{{ route ('layanan') }}">Layanan</a>
            <a href="{{ route ('kontak') }}">Kontak</a>
            <a href="{{ route ('buatjanji') }}" class="btn-cta">Buat Janji</a>
            <a href="{{ route ('login') }}" class="btn-login">Login</a>
        </nav>
    </header>

    <!-- Login Container -->
    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-header">
                <span class="login-icon">🔐</span>
                <h1>Login</h1>
                <p>Masuk ke Akun Anda</p>
            </div>

            <!-- Alert Messages -->
            <div id="alertBox" class="alert"></div>

            <!-- Role Selection -->
            <div class="role-selection">
                <div class="role-option active" data-role="client" onclick="selectRole('client')">
                    <div class="role-icon">👤</div>
                    <div class="role-label">Klien/Pemilik</div>
                </div>
                <div class="role-option" data-role="staff" onclick="selectRole('staff')">
                    <div class="role-icon">👨‍⚕️</div>
                    <div class="role-label">Staff/Dokter</div>
                </div>
            </div>

            <!-- Login Form -->
            <form class="login-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <span class="input-icon">📧</span>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Masukkan email Anda"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <span class="input-icon">🔒</span>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Masukkan password Anda"
                            required
                        >
                        <span class="toggle-password" onclick="togglePassword()">👁️</span>
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" id="remember">
                        <span>Ingat Saya</span>
                    </label>
                    <a href="#" class="forgot-password" onclick="showForgotPassword(event)">Lupa Password?</a>
                </div>

                <button type="submit" class="btn-submit">Masuk</button>
            </form>

            <div class="divider">
                <span>atau</span>
            </div>

            <div class="register-link">
                Belum punya akun? <a href="#" onclick="showRegister(event)">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="copyright-section">
            Copyright © 2025 RSHP UNAIR | <b>Designed and Developed</b> by 
            <span>Bunga Lala Sal Sabila</span>
        </div>
    </footer>

    <script>
        let selectedRole = 'client';

        // Select Role
        function selectRole(role) {
            selectedRole = role;
            document.querySelectorAll('.role-option').forEach(option => {
                option.classList.remove('active');
            });
            document.querySelector(`[data-role="${role}"]`).classList.add('active');
        }

        // Toggle Password Visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleIcon.textContent = '👁️';
            }
        }

        // Show Alert
        function showAlert(message, type) {
            const alertBox = document.getElementById('alertBox');
            alertBox.textContent = message;
            alertBox.className = `alert alert-${type} show`;
            
            setTimeout(() => {
                alertBox.classList.remove('show');
            }, 5000);
        }

        // Handle Login
        function handleLogin(event) {
            event.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;

            // Demo validation
            if (email && password) {
                showAlert('Login berhasil! Mengalihkan...', 'success');
                
                setTimeout(() => {
                    if (selectedRole === 'client') {
                        window.location.href = 'dashboard-client.html';
                    } else {
                        window.location.href = 'dashboard-staff.html';
                    }
                }, 2000);
            } else {
                showAlert('Email dan password harus diisi!', 'error');
            }
        }

        // Show Forgot Password
        function showForgotPassword(event) {
            event.preventDefault();
            const email = prompt('Masukkan email Anda untuk reset password:');
            if (email) {
                showAlert(`Link reset password telah dikirim ke ${email}`, 'success');
            }
        }

        // Show Register
        function showRegister(event) {
            event.preventDefault();
            showAlert('Fitur registrasi akan segera hadir!', 'success');
        }

        // Animation on load
        window.addEventListener('load', () => {
            document.querySelector('.login-container').style.opacity = '0';
            setTimeout(() => {
                document.querySelector('.login-container').style.transition = 'opacity 1s ease';
                document.querySelector('.login-container').style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>