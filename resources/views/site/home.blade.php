<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RSHP UNAIR</title>
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
            transition: all 0.3s ease;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 15px;
            animation: slideInLeft 1s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
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
            animation: slideInRight 1s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
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
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .navbar a:hover::before {
            left: 100%;
        }

        .navbar a:hover {
            background: rgba(255, 255, 255, 0.4);
            color: #002147;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.4);
        }

        .navbar .btn-cta {
            background: #f4c542;
            color: #002147;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(244, 197, 66, 0.4);
            padding: 12px 28px;
        }

        .navbar .btn-cta:hover {
            background: white;
            color: #002147;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.5);
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

        /* Hero Section */
        .hero-section {
            margin-top: 100px;
            position: relative;
            text-align: left;
            color: white;
            min-height: 85vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=1600') center/cover;
            opacity: 0.2;
            animation: kenZoomIn 20s ease-in-out infinite alternate;
        }

        @keyframes kenZoomIn {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 5%;
            animation: fadeInUp 1.5s ease-out;
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

        .hero-content h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .hero-content .author {
            font-size: 1.5rem;
            font-style: italic;
            margin: 1rem 0;
            opacity: 0.9;
        }

        .hero-divider {
            width: 50%;
            border: 2px solid white;
            margin: 1.5rem 0;
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);
        }

        .hero-content .tagline {
            font-size: 1.8rem;
            font-weight: 600;
            margin-top: 1rem;
            line-height: 1.6;
        }

        /* About Section */
        .about-section {
            padding: 5rem 5%;
            background: transparent;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .section-title h2 {
            font-size: 3rem;
            color: white;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 0.5rem;
        }

        .section-title p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 3rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .about-content p {
            color: white;
            font-size: 1.1rem;
            line-height: 2;
            text-align: center;
        }

        /* Services Section */
        .services-section {
            padding: 5rem 5%;
            background: transparent;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(244, 197, 66, 0.2) 0%, transparent 70%);
            transition: all 0.5s ease;
            opacity: 0;
        }

        .service-card:hover::before {
            opacity: 1;
            top: -30%;
            left: -30%;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.5);
            background: rgba(255, 255, 255, 0.4);
            border-color: #f4c542;
        }

        .service-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .service-card h3 {
            color: #002147;
            font-size: 1.6rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .service-card p {
            color: #333;
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Structure Section */
        .structure-section {
            padding: 5rem 5%;
            background: transparent;
        }

        .structure-content {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 3rem;
            transition: all 0.3s ease;
        }

        .structure-content:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.4);
        }

        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .org-level {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .org-box {
            background: linear-gradient(135deg, #002147 0%, #004aad 100%);
            color: white;
            padding: 1.5rem 2rem;
            border-radius: 15px;
            min-width: 200px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 33, 71, 0.3);
            transition: all 0.3s ease;
            position: relative;
        }

        .org-box::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: white;
        }

        .org-box:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.5);
        }

        .org-box h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .org-box p {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Vision Mission Section */
        .vision-mission-section {
            padding: 5rem 5%;
            background: transparent;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .vm-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 3rem;
            border-radius: 20px;
            transition: all 0.4s ease;
        }

        .vm-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.5);
            background: rgba(255, 255, 255, 0.35);
        }

        .vm-card h3 {
            color: #002147;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            text-align: center;
        }

        .vm-card ul {
            list-style: none;
            padding: 0;
        }

        .vm-card li {
            color: #333;
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 1rem;
            padding-left: 2rem;
            position: relative;
        }

        .vm-card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #f4c542;
            font-weight: bold;
            font-size: 1.3rem;
        }

        /* Stats Section */
        .stats-section {
            padding: 4rem 5%;
            background: transparent;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.4);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 40px rgba(244, 197, 66, 0.5);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .stat-label {
            font-size: 1.1rem;
            color: white;
            font-weight: 600;
        }

        /* Footer */
        .contact-section {
            background: linear-gradient(to right, #002147, #004aad, #f4c542);
            text-align: center;
            padding: 3rem 5%;
            color: white;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            letter-spacing: 3px;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .divider {
            width: 150px;
            height: 4px;
            background: white;
            margin: 1rem auto 2rem;
            border-radius: 2px;
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.3);
        }

        .contact-section p {
            margin: 1rem 0;
            line-height: 1.8;
            font-size: 1.1rem;
        }

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

        /* Floating Elements */
        .floating-paw {
            position: fixed;
            font-size: 2.5rem;
            opacity: 0.15;
            animation: floatAround 20s infinite;
            pointer-events: none;
            z-index: 1;
        }

        @keyframes floatAround {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(100px, -100px) rotate(90deg);
            }
            50% {
                transform: translate(0, -200px) rotate(180deg);
            }
            75% {
                transform: translate(-100px, -100px) rotate(270deg);
            }
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #f4c542 0%, #ffd700 100%);
            color: #002147;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.5);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.7);
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

            .navbar a {
                padding: 10px 18px;
                font-size: 0.9rem;
            }

            .hero-content h2 {
                font-size: 2rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .services-grid, .vm-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Floating decorative elements -->
    <div class="floating-paw" style="top: 10%; left: 5%;">🐾</div>
    <div class="floating-paw" style="top: 40%; right: 8%; animation-delay: 5s;">🐾</div>
    <div class="floating-paw" style="top: 70%; left: 10%; animation-delay: 10s;">🐾</div>
    <div class="floating-paw" style="top: 85%; right: 15%; animation-delay: 15s;">🐾</div>

    <!-- Header -->
    <header class="site-header">
        <div class="logo-area">
            <img 
                src="https://blogger.googleusercontent.com/img/a/AVvXsEgZ-cte4n-okRYtmDbpbqX5tK1M_s04XgqTVN2JUSwcolRCVqi9wu7i2BHJscATN-D31BWoYNCmIgo24_jCkIDE_2j5Y53ouYWxr8DPTG-nv0f4FHvEUetXyO7uRsWprpk4HMEgZXGMxeOP6LTtT48_YGkT3kRr6XezE_70pWpQAZmIy-U7nkONox7HYw=w640-h360" 
                alt="Logo UNAIR" 
                style="
                width: 120px; 
                height: auto;
            ">

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

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-content">
            <h2>
                "IT TAKES NOTHING AWAY<br>
                TO BE KIND TO AN ANIMAL"
            </h2>
            <p class="author">— Joaquin Phoenix</p>
            <hr class="hero-divider">
            <p class="tagline">
                MELAYANI DENGAN KASIH<br>
                SERVE WITH LOVE
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="section-title">
            <h2>Tentang RSHP UNAIR</h2>
            <p>Rumah Sakit Hewan Pendidikan Terdepan di Indonesia</p>
        </div>
        <div class="about-content">
            <p>
                RSHP UNAIR adalah Rumah Sakit Hewan Pendidikan yang berada di bawah naungan Universitas Airlangga. 
                Kami berkomitmen untuk memberikan pelayanan kesehatan hewan berkualitas tinggi dengan didukung oleh 
                tenaga medis profesional, fasilitas modern, dan teknologi terkini. Sebagai institusi pendidikan, 
                kami juga berperan aktif dalam pengembangan ilmu kedokteran hewan melalui penelitian dan pengabdian masyarakat.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="layanan">
        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>Pelayanan kesehatan hewan terlengkap dan terpercaya</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🏥</div>
                <h3>Pemeriksaan Umum</h3>
                <p>Pemeriksaan kesehatan rutin untuk hewan peliharaan Anda dengan peralatan modern dan dokter berpengalaman</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💉</div>
                <h3>Vaksinasi</h3>
                <p>Program vaksinasi lengkap untuk melindungi hewan kesayangan dari berbagai penyakit berbahaya</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔬</div>
                <h3>Laboratorium</h3>
                <p>Fasilitas laboratorium canggih untuk diagnosis akurat dan cepat dengan berbagai jenis pemeriksaan</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚕️</div>
                <h3>Operasi</h3>
                <p>Ruang operasi steril dengan tim dokter bedah berpengalaman dan peralatan medis terkini</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🏠</div>
                <h3>Rawat Inap</h3>
                <p>Fasilitas perawatan intensif yang nyaman, aman, dan diawasi 24 jam oleh tenaga medis profesional</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🚑</div>
                <h3>Gawat Darurat</h3>
                <p>Layanan emergency 24/7 untuk kondisi darurat dengan respon cepat dan penanganan tepat</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🦷</div>
                <h3>Perawatan Gigi</h3>
                <p>Layanan dental care lengkap untuk kesehatan gigi dan mulut hewan peliharaan Anda</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💊</div>
                <h3>Farmasi</h3>
                <p>Apotek lengkap dengan obat-obatan berkualitas dan konsultasi farmasi profesional</p>
            </div>
        </div>
    </section>

    <!-- Structure Section -->
    <section class="structure-section" id="struktur">
        <div class="section-title">
            <h2>Struktur Organisasi</h2>
            <p>Tim profesional yang berdedikasi untuk hewan kesayangan Anda</p>
        </div>
        <div class="structure-content">
            <div class="org-chart">
                <div class="org-level">
                    <div class="org-box">
                        <h4>Direktur RSHP</h4>
                        <p>Prof. Dr. drh. John Doe, M.Vet</p>
                    </div>
                </div>
                <div class="org-level">
                    <div class="org-box">
                        <h4>Wakil Direktur</h4>
                        <p>Dr. drh. Jane Smith, M.Si</p>
                    </div>
                </div>
                <div class="org-level">
                    <div class="org-box">
                        <h4>Kepala Medis</h4>
                        <p>drh. Ahmad Fajar, Sp.KH</p>
                    </div>
                    <div class="org-box">
                        <h4>Kepala Administrasi</h4>
                        <p>Budi Santoso, S.E., M.M.</p>
                    </div>
                    <div class="org-box">
                        <h4>Kepala Laboratorium</h4>
                        <p>drh. Siti Nurhaliza, M.Sc</p>
                    </div>
                </div>
                <div class="org-level">
                    <div class="org-box">
                        <h4>Tim Dokter Hewan</h4>
                        <p>20+ Dokter Spesialis</p>
                    </div>
                    <div class="org-box">
                        <h4>Tim Perawat</h4>
                        <p>30+ Perawat Terlatih</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="vision-mission-section" id="visi">
        <div class="section-title">
            <h2>Visi, Misi & Tujuan</h2>
            <p>Komitmen kami untuk kesehatan hewan Indonesia</p>
        </div>
        <div class="vm-grid">
            <div class="vm-card">
                <h3>🎯 VISI</h3>
                <ul>
                    <li>Menjadi rumah sakit hewan pendidikan terdepan di Indonesia</li>
                    <li>Menghasilkan lulusan dokter hewan yang kompeten dan profesional</li>
                    <li>Memberikan pelayanan kesehatan hewan berkualitas internasional</li>
                </ul>
            </div>
            <div class="vm-card">
                <h3>🚀 MISI</h3>
                <ul>
                    <li>Menyelenggarakan pendidikan kedokteran hewan yang berkualitas</li>
                    <li>Melakukan penelitian di bidang kesehatan hewan</li>
                    <li>Memberikan pelayanan kesehatan hewan yang prima</li>
                    <li>Melakukan pengabdian masyarakat di bidang kesehatan hewan</li>
                </ul>
            </div>
            <div class="vm-card">
                <h3>🎓 TUJUAN</h3>
                <ul>
                    <li>Meningkatkan kualitas pendidikan dan pelayanan kesehatan hewan</li>
                    <li>Mengembangkan ilmu pengetahuan dan teknologi kedokteran hewan</li>
                    <li>Meningkatkan kesejahteraan hewan melalui pelayanan prima</li>
                    <li>Berkontribusi pada kesehatan masyarakat melalui One Health</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="section-title">
            <h2>Pencapaian Kami</h2>
            <p>Angka yang membuktikan dedikasi kami</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">15K+</div>
                <div class="stat-label">Hewan Ditangani</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Dokter Hewan</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">15+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Kepuasan Pasien</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="contact-section">
            <h2>KONTAK KAMI</h2>
            <div class="divider"></div>
            <p>
                Kampus C Universitas Airlangga,<br>
                Mulyorejo, Kec. Mulyorejo, Surabaya,<br>
                Jawa Timur 60115
            </p>
            <p>
                Phone : 031 5927832
            </p>
        </div>
        <div class="copyright-section">
            Copyright © 2025 RSHP UNAIR | <b>Designed and Developed</b> by 
            <span>Bunga Lala Sal Sabila</span>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop">↑</div>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.site-header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 6px 25px rgba(0, 0, 0, 0.2)';
            } else {
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            }

            // Scroll to top button
            const scrollTop = document.getElementById('scrollTop');
            if (window.scrollY > 300) {
                scrollTop.classList.add('visible');
            } else {
                scrollTop.classList.remove('visible');
            }
        });

        // Service cards hover effect
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Scroll to top functionality
        document.getElementById('scrollTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card, .vm-card, .stat-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>