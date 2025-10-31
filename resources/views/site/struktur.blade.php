<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - RSHP UNAIR</title>
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
            min-height: calc(100vh - 400px);
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

        /* Organization Chart */
        .org-container {
            max-width: 1400px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 4rem 3rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
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

        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3rem;
        }

        .org-level {
            display: flex;
            justify-content: center;
            gap: 2.5rem;
            flex-wrap: wrap;
            position: relative;
        }

        .org-box {
            background: linear-gradient(135deg, #002147 0%, #004aad 100%);
            color: white;
            padding: 2rem 2.5rem;
            border-radius: 20px;
            min-width: 280px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 33, 71, 0.4);
            transition: all 0.4s ease;
            position: relative;
            border: 3px solid rgba(244, 197, 66, 0.3);
        }

        .org-box:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.6);
            border-color: #f4c542;
        }

        .org-box::before {
            content: '';
            position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 35px;
            background: rgba(255, 255, 255, 0.5);
        }

        .org-level:first-child .org-box::before {
            display: none;
        }

        .org-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .org-box h3 {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            font-weight: 700;
            color: #f4c542;
        }

        .org-box h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .org-box p {
            font-size: 0.95rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Team Section */
        .team-section {
            margin-top: 4rem;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-title {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(244, 197, 66, 0.5);
            background: rgba(255, 255, 255, 0.3);
        }

        .team-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        .team-card h4 {
            color: #002147;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .team-card p {
            color: #333;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Footer */
        .contact-section {
            background: linear-gradient(to right, #002147, #004aad, #f4c542);
            text-align: center;
            padding: 3rem 5%;
            color: white;
            margin-top: 5rem;
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

            .page-title h1 {
                font-size: 2.5rem;
            }

            .org-container {
                padding: 2rem 1.5rem;
            }

            .org-box {
                min-width: 100%;
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
            <h1>Struktur Organisasi</h1>
            <p>Tim Profesional RSHP UNAIR</p>
        </div>

        <div class="org-container">
            <div class="org-chart">
                <!-- Level 1: Direktur -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-icon">👨‍⚕️</div>
                        <h3>Direktur RSHP</h3>
                        <h4>Prof. Dr. drh. Ahmad Suwarno, M.Vet</h4>
                        <p>Memimpin dan mengkoordinasikan seluruh kegiatan RSHP UNAIR</p>
                    </div>
                </div>

                <!-- Level 2: Wakil Direktur -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-icon">👩‍⚕️</div>
                        <h3>Wakil Direktur</h3>
                        <h4>Dr. drh. Siti Aminah, M.Si</h4>
                        <p>Membantu tugas direktur dalam operasional harian</p>
                    </div>
                </div>

                <!-- Level 3: Kepala Divisi -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-icon">⚕️</div>
                        <h3>Kepala Medis</h3>
                        <h4>drh. Budi Santoso, Sp.KH</h4>
                        <p>Mengawasi pelayanan medis dan kualitas perawatan</p>
                    </div>
                    <div class="org-box">
                        <div class="org-icon">📋</div>
                        <h3>Kepala Administrasi</h3>
                        <h4>Drs. Joko Widodo, M.M.</h4>
                        <p>Mengelola administrasi dan keuangan rumah sakit</p>
                    </div>
                    <div class="org-box">
                        <div class="org-icon">🔬</div>
                        <h3>Kepala Laboratorium</h3>
                        <h4>drh. Rina Kusuma, M.Sc</h4>
                        <p>Mengatur operasional laboratorium dan diagnostik</p>
                    </div>
                </div>

                <!-- Level 4: Staff -->
                <div class="org-level">
                    <div class="org-box">
                        <div class="org-icon">👥</div>
                        <h3>Tim Dokter Hewan</h3>
                        <h4>20+ Dokter Spesialis</h4>
                        <p>Spesialis berbagai bidang kedokteran hewan</p>
                    </div>
                    <div class="org-box">
                        <div class="org-icon">👨‍⚕️</div>
                        <h3>Tim Perawat</h3>
                        <h4>30+ Perawat Terlatih</h4>
                        <p>Perawatan dan asisten medis profesional</p>
                    </div>
                    <div class="org-box">
                        <div class="org-icon">🏥</div>
                        <h3>Tim Support</h3>
                        <h4>15+ Staff Pendukung</h4>
                        <p>Administrasi, farmasi, dan layanan pendukung</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Highlights -->
        <div class="team-section">
            <h2 class="team-title">Keahlian Tim Kami</h2>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-icon">🩺</div>
                    <h4>Spesialis Bedah</h4>
                    <p>Tim bedah berpengalaman dengan teknologi operasi modern</p>
                </div>
                <div class="team-card">
                    <div class="team-icon">🔬</div>
                    <h4>Spesialis Diagnostik</h4>
                    <p>Ahli laboratorium dan pencitraan medis terkini</p>
                </div>
                <div class="team-card">
                    <div class="team-icon">💊</div>
                    <h4>Spesialis Farmasi</h4>
                    <p>Farmasis klinis untuk terapi obat yang optimal</p>
                </div>
                <div class="team-card">
                    <div class="team-icon">🦷</div>
                    <h4>Spesialis Dental</h4>
                    <p>Perawatan kesehatan gigi dan mulut hewan</p>
                </div>
                <div class="team-card">
                    <div class="team-icon">🏥</div>
                    <h4>Intensive Care</h4>
                    <p>Tim ICU untuk perawatan intensif 24/7</p>
                </div>
                <div class="team-card">
                    <div class="team-icon">📚</div>
                    <h4>Tim Pendidikan</h4>
                    <p>Pembimbing mahasiswa dan peneliti kedokteran hewan</p>
                </div>
            </div>
        </div>
    </main>

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

    <script>
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

        document.querySelectorAll('.org-box, .team-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>