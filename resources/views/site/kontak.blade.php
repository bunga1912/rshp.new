<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - RSHP UNAIR</title>
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

        .navbar .btn-login {
            border: 2px solid #f4c542;
            background: transparent;
            color: white;
            font-weight: 700;
            padding: 10px 28px;
        }

        .navbar .btn-login:hover {
            background: #f4c542;
            color: #002147;
        }

        /* Main Content */
        .main-content {
            margin-top: 120px;
            padding: 3rem 5%;
            min-height: calc(100vh - 200px);
        }

        .page-title {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInDown 1s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .page-title h1 {
            font-size: 3.5rem;
            color: white;
            font-weight: 800;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            margin-bottom: 0.5rem;
        }

        .page-title p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
        }

        /* Contact Container */
        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Contact Info Section */
        .contact-info {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-info h2 {
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .info-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.4s ease;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(244, 197, 66, 0.5);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.2));
            border-color: #f4c542;
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .info-icon {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #f4c542, #FFD700);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .info-card h3 {
            color: #002147;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .info-card p {
            color: #333;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-left: 76px;
        }

        .info-card a {
            color: #004aad;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .info-card a:hover {
            color: #f4c542;
        }

        /* Map Section */
        .map-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 2rem;
            overflow: hidden;
        }

        .map-container h3 {
            color: white;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .map-frame {
            width: 100%;
            height: 450px;
            border-radius: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Contact Form */
        .contact-form-section {
            max-width: 1400px;
            margin: 4rem auto 0;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
        }

        .contact-form-section h2 {
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #f4c542;
            background: white;
            box-shadow: 0 0 20px rgba(244, 197, 66, 0.4);
            transform: translateY(-2px);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            color: #002147;
            border: none;
            padding: 1.2rem 3rem;
            border-radius: 15px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
            grid-column: 1 / -1;
            justify-self: center;
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #FFD700, #f4c542);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.6);
        }

        .btn-submit:active {
            transform: translateY(-2px);
        }

        /* Emergency Section */
        .emergency-section {
            max-width: 1400px;
            margin: 4rem auto 0;
            background: linear-gradient(135deg, #dc2626, #991b1b);
            border-radius: 30px;
            padding: 3rem;
            text-align: center;
            color: white;
            box-shadow: 0 10px 40px rgba(220, 38, 38, 0.4);
        }

        .emergency-section h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .emergency-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .emergency-contacts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .emergency-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .emergency-card:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px);
        }

        .emergency-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .emergency-card .phone-number {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .emergency-card .time {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Social Media */
        .social-media {
            max-width: 1400px;
            margin: 4rem auto 0;
            text-align: center;
        }

        .social-media h2 {
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            transition: all 0.4s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .social-icon:hover {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            transform: translateY(-10px) rotate(5deg);
            box-shadow: 0 15px 40px rgba(244, 197, 66, 0.6);
        }

        /* Alert */
        .alert {
            padding: 1rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            display: none;
            animation: slideDown 0.5s ease;
            text-align: center;
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
            margin-top: 5rem;
        }

        .copyright-section span {
            color: white;
            font-weight: 700;
        }

        @media (max-width: 968px) {
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

            .page-title h1 {
                font-size: 2.5rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }

            .contact-form {
                grid-template-columns: 1fr;
            }

            .emergency-contacts {
                grid-template-columns: 1fr;
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-title">
            <h1>Hubungi Kami</h1>
            <p>Kami Siap Melayani Anda 24/7</p>
        </div>

        <!-- Contact Info & Map -->
        <div class="contact-container">
            <!-- Contact Info -->
            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📍</div>
                        <h3>Alamat</h3>
                    </div>
                    <p>
                        Kampus C Universitas Airlangga<br>
                        Mulyorejo, Kec. Mulyorejo<br>
                        Surabaya, Jawa Timur 60115
                    </p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📞</div>
                        <h3>Telepon</h3>
                    </div>
                    <p>
                        <a href="tel:0315927832">031 5927832</a><br>
                        <a href="tel:08123456789">0812-3456-7890</a> (WhatsApp)
                    </p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">📧</div>
                        <h3>Email</h3>
                    </div>
                    <p>
                        <a href="mailto:info@rshp.unair.ac.id">info@rshp.unair.ac.id</a><br>
                        <a href="mailto:appointment@rshp.unair.ac.id">appointment@rshp.unair.ac.id</a>
                    </p>
                </div>

                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-icon">🕐</div>
                        <h3>Jam Operasional</h3>
                    </div>
                    <p>
                        <strong>Senin - Jumat:</strong> 08:00 - 20:00<br>
                        <strong>Sabtu:</strong> 08:00 - 18:00<br>
                        <strong>Minggu:</strong> 09:00 - 15:00<br>
                        <strong>Darurat:</strong> 24/7
                    </p>
                </div>
            </div>

            <!-- Map -->
            <div class="map-container">
                <h3>📍 Lokasi Kami</h3>
                <iframe 
                    class="map-frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2881491944444!2d112.78153731477538!3d-7.319096494710901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7faf81a6cd501%3A0x49fda19e7ae7e34e!2sUniversitas%20Airlangga%20Campus%20C!5e0!3m2!1sen!2sid!4v1634567890123!5m2!1sen!2sid"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <!-- Emergency Section -->
        <div class="emergency-section">
            <h2>🚨 Kontak Darurat 🚨</h2>
            <p>Untuk kasus darurat, hubungi kami segera!</p>
            
            <div class="emergency-contacts">
                <div class="emergency-card">
                    <h3>📞 Hotline 24/7</h3>
                    <div class="phone-number">031 5927832</div>
                    <div class="time">Tersedia 24 Jam</div>
                </div>
                
                <div class="emergency-card">
                    <h3>💬 WhatsApp</h3>
                    <div class="phone-number">0812-3456-7890</div>
                    <div class="time">Respons Cepat</div>
                </div>
                
                <div class="emergency-card">
                    <h3>🚑 Ambulans</h3>
                    <div class="phone-number">0811-1111-222</div>
                    <div class="time">Siaga 24 Jam</div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-section">
            <h2>Kirim Pesan</h2>
            
            <div id="alertBox" class="alert"></div>
            
            <form class="contact-form" onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label for="name">Nama Lengkap *</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon *</label>
                    <input type="tel" id="phone" name="phone" placeholder="08xxxxxxxxxx" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="email@example.com" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subjek *</label>
                    <select id="subject" name="subject" required>
                        <option value="">Pilih Subjek</option>
                        <option value="konsultasi">Konsultasi Umum</option>
                        <option value="appointment">Buat Janji</option>
                        <option value="darurat">Darurat</option>
                        <option value="informasi">Informasi Layanan</option>
                        <option value="keluhan">Keluhan/Saran</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label for="message">Pesan *</label>
                    <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Pesan</button>
            </form>
        </div>

        <!-- Social Media -->
        <div class="social-media">
            <h2>Ikuti Kami</h2>
            <div class="social-icons">
                <a href="#" class="social-icon" title="Facebook">📘</a>
                <a href="#" class="social-icon" title="Instagram">📷</a>
                <a href="#" class="social-icon" title="Twitter">🐦</a>
                <a href="#" class="social-icon" title="YouTube">📺</a>
                <a href="#" class="social-icon" title="WhatsApp">💬</a>
                <a href="#" class="social-icon" title="Email">📧</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="copyright-section">
            Copyright © 2025 RSHP UNAIR | <b>Designed and Developed</b> by 
            <span>Bunga Lala Sal Sabila</span>
        </div>
    </footer>

    <script>
        // Show Alert
        function showAlert(message, type) {
            const alertBox = document.getElementById('alertBox');
            alertBox.textContent = message;
            alertBox.className = `alert alert-${type} show`;
            
            setTimeout(() => {
                alertBox.classList.remove('show');
            }, 5000);
        }

        // Handle Form Submit
        function handleSubmit(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (name && phone && email && subject && message) {
                showAlert('✅ Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.', 'success');
                
                // Reset form
                setTimeout(() => {
                    document.querySelector('.contact-form').reset();
                }, 2000);
            }
        }

        // Smooth animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.info-card, .emergency-card, .social-icon').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Add stagger effect
        const cards = document.querySelectorAll('.info-card, .emergency-card');
        cards.forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });

        // Social icons animation
        const socialIcons = document.querySelectorAll('.social-icon');
        socialIcons.forEach((icon, index) => {
            icon.style.transitionDelay = `${index * 0.05}s`;
        });
    </script>
</body>
</html>