<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - RSHP UNAIR</title>
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

        /* Service Categories */
        .service-categories {
            max-width: 1400px;
            margin: 0 auto 4rem;
        }

        .category-section {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
            margin-bottom: 3rem;
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

        .category-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .category-header h2 {
            font-size: 2.5rem;
            color: white;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .category-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.6);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.2));
            border-color: #f4c542;
        }

        .service-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: block;
            text-align: center;
        }

        .service-card h3 {
            color: #002147;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-align: center;
        }

        .service-card p {
            color: #333;
            font-size: 1rem;
            line-height: 1.8;
            text-align: center;
        }

        .service-card ul {
            list-style: none;
            margin-top: 1rem;
            padding-left: 0;
        }

        .service-card ul li {
            color: #002147;
            padding: 0.5rem 0;
            font-weight: 500;
            position: relative;
            padding-left: 1.5rem;
        }

        .service-card ul li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #f4c542;
            font-weight: 700;
        }

        /* Featured Services */
        .featured-services {
            max-width: 1400px;
            margin: 4rem auto;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
        }

        .featured-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .featured-header h2 {
            font-size: 2.5rem;
            color: white;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .featured-card {
            background: linear-gradient(135deg, #002147 0%, #004aad 100%);
            border-radius: 20px;
            padding: 2.5rem;
            color: white;
            transition: all 0.4s ease;
            border: 3px solid rgba(244, 197, 66, 0.3);
        }

        .featured-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(244, 197, 66, 0.6);
            border-color: #f4c542;
        }

        .featured-icon {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            display: block;
            text-align: center;
        }

        .featured-card h3 {
            color: #f4c542;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-align: center;
        }

        .featured-card p {
            font-size: 1.05rem;
            line-height: 1.8;
            opacity: 0.95;
            margin-bottom: 1.5rem;
        }

        .featured-card .features {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }

        .featured-card .features h4 {
            color: #f4c542;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .featured-card .features ul {
            list-style: none;
            padding: 0;
        }

        .featured-card .features li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }

        .featured-card .features li::before {
            content: "★";
            position: absolute;
            left: 0;
            color: #f4c542;
        }

        /* Emergency Banner */
        .emergency-banner {
            max-width: 1400px;
            margin: 3rem auto;
            background: linear-gradient(135deg, #dc2626, #991b1b);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            color: white;
            box-shadow: 0 10px 40px rgba(220, 38, 38, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.02);
            }
        }

        .emergency-banner h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .emergency-banner p {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
        }

        .emergency-banner .phone {
            font-size: 2rem;
            font-weight: 700;
            background: rgba(255, 255, 255, 0.2);
            padding: 1rem 2rem;
            border-radius: 15px;
            display: inline-block;
            margin-top: 1rem;
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

            .category-section {
                padding: 2rem 1.5rem;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .featured-grid {
                grid-template-columns: 1fr;
            }

            .emergency-banner h2 {
                font-size: 1.8rem;
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
            <a href="{{ route ('home') }}" class="btn-cta">Buat Janji</a>
            <a href="{{ route ('login') }}" class="btn-login">Login</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-title">
            <h1>Layanan Kami</h1>
            <p>Pelayanan Kesehatan Hewan Terpadu dan Profesional</p>
        </div>

        <!-- Emergency Banner -->
        <div class="emergency-banner">
            <h2>🚨 Layanan Darurat 24/7 🚨</h2>
            <p>Kami siap melayani kasus darurat hewan kesayangan Anda kapan saja</p>
            <div class="phone">📞 031 5927832</div>
        </div>

        <!-- Medical Services -->
        <div class="service-categories">
            <div class="category-section">
                <div class="category-header">
                    <h2>Layanan Medis Umum</h2>
                    <p>Pemeriksaan dan perawatan kesehatan rutin untuk hewan kesayangan Anda</p>
                </div>
                <div class="service-grid">
                    <div class="service-card">
                        <span class="service-icon">🩺</span>
                        <h3>Konsultasi & Pemeriksaan</h3>
                        <p>Pemeriksaan kesehatan menyeluruh oleh dokter hewan berpengalaman</p>
                        <ul>
                            <li>Check-up rutin</li>
                            <li>Konsultasi nutrisi</li>
                            <li>Konsultasi perilaku</li>
                            <li>Pemeriksaan kesehatan berkala</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">💉</span>
                        <h3>Vaksinasi</h3>
                        <p>Program vaksinasi lengkap untuk perlindungan optimal hewan peliharaan</p>
                        <ul>
                            <li>Vaksin rabies</li>
                            <li>Vaksin distemper</li>
                            <li>Vaksin parvo</li>
                            <li>Vaksin kombinasi</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">💊</span>
                        <h3>Farmasi Klinik</h3>
                        <p>Penyediaan obat-obatan berkualitas dengan konsultasi farmasis</p>
                        <ul>
                            <li>Obat resep dokter</li>
                            <li>Vitamin & suplemen</li>
                            <li>Obat kutu & cacing</li>
                            <li>Konsultasi penggunaan obat</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">🧪</span>
                        <h3>Grooming & Spa</h3>
                        <p>Perawatan kecantikan dan kebersihan hewan kesayangan</p>
                        <ul>
                            <li>Mandi & potong kuku</li>
                            <li>Styling & trimming</li>
                            <li>Perawatan telinga</li>
                            <li>Perawatan gigi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Specialist Services -->
            <div class="category-section">
                <div class="category-header">
                    <h2>Layanan Spesialis</h2>
                    <p>Penanganan medis lanjutan oleh dokter spesialis bersertifikat</p>
                </div>
                <div class="service-grid">
                    <div class="service-card">
                        <span class="service-icon">⚕️</span>
                        <h3>Bedah & Operasi</h3>
                        <p>Tindakan bedah dengan teknologi dan fasilitas modern</p>
                        <ul>
                            <li>Sterilisasi (kastrasi/ovariohisterektomi)</li>
                            <li>Bedah jaringan lunak</li>
                            <li>Bedah ortopedi</li>
                            <li>Bedah tumor</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">📸</span>
                        <h3>Radiologi & Imaging</h3>
                        <p>Diagnostik pencitraan untuk diagnosis akurat</p>
                        <ul>
                            <li>X-Ray digital</li>
                            <li>Ultrasound (USG)</li>
                            <li>Endoskopi</li>
                            <li>Interpretasi hasil</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">🔬</span>
                        <h3>Laboratorium Klinik</h3>
                        <p>Pemeriksaan laboratorium lengkap dan akurat</p>
                        <ul>
                            <li>Hematologi</li>
                            <li>Kimia darah</li>
                            <li>Urinalisis</li>
                            <li>Mikrobiologi</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <span class="service-icon">🦷</span>
                        <h3>Dental Care</h3>
                        <p>Perawatan kesehatan gigi dan mulut hewan</p>
                        <ul>
                            <li>Scaling gigi</li>
                            <li>Pencabutan gigi</li>
                            <li>Perawatan periodontal</li>
                            <li>Dental X-ray</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Services -->
        <div class="featured-services">
            <div class="featured-header">
                <h2>Layanan Unggulan RSHP UNAIR</h2>
            </div>
            <div class="featured-grid">
                <div class="featured-card">
                    <span class="featured-icon">🏥</span>
                    <h3>Intensive Care Unit (ICU)</h3>
                    <p>Fasilitas perawatan intensif dengan pemantauan 24 jam untuk hewan dalam kondisi kritis. Dilengkapi dengan peralatan medis canggih dan tim medis yang siaga.</p>
                    <div class="features">
                        <h4>Fasilitas ICU:</h4>
                        <ul>
                            <li>Monitor vital signs real-time</li>
                            <li>Oxygen therapy</li>
                            <li>Infus & nutrisi parenteral</li>
                            <li>Tim dokter & perawat 24/7</li>
                            <li>Isolasi untuk kasus menular</li>
                        </ul>
                    </div>
                </div>

                <div class="featured-card">
                    <span class="featured-icon">🔍</span>
                    <h3>Diagnostik Lanjutan</h3>
                    <p>Pusat diagnostik terlengkap dengan teknologi terkini untuk mendeteksi berbagai penyakit hewan dengan akurat dan cepat.</p>
                    <div class="features">
                        <h4>Layanan Diagnostik:</h4>
                        <ul>
                            <li>CT Scan & MRI</li>
                            <li>Echocardiography</li>
                            <li>Histopatologi</li>
                            <li>Tes alergi</li>
                            <li>PCR & molecular testing</li>
                        </ul>
                    </div>
                </div>

                <div class="featured-card">
                    <span class="featured-icon">🏠</span>
                    <h3>Hospitalisasi</h3>
                    <p>Fasilitas rawat inap yang nyaman dan aman untuk pemulihan optimal hewan kesayangan Anda dengan perawatan penuh kasih sayang.</p>
                    <div class="features">
                        <h4>Fasilitas Rawat Inap:</h4>
                        <ul>
                            <li>Kandang individual ber-AC</li>
                            <li>Pemantauan berkala</li>
                            <li>Feeding & medication teratur</li>
                            <li>Area karantina terpisah</li>
                            <li>Laporan harian ke pemilik</li>
                        </ul>
                    </div>
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

        document.querySelectorAll('.service-card, .featured-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Add stagger effect
        const cards = document.querySelectorAll('.service-card, .featured-card');
        cards.forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });
    </script>
</body>
</html>