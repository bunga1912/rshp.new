<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Janji - RSHP UNAIR</title>
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

        /* Steps */
        .steps-container {
            max-width: 1200px;
            margin: 0 auto 3rem;
            display: flex;
            justify-content: space-between;
            gap: 2rem;
        }

        .step {
            flex: 1;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
        }

        .step.active {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            border-color: #f4c542;
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.6);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
        }

        .step.active .step-number {
            background: #002147;
            color: #f4c542;
        }

        .step h3 {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .step.active h3,
        .step.active p {
            color: #002147;
        }

        .step p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
        }

        /* Appointment Form */
        .appointment-container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 3rem;
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

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .section-title {
            color: white;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 2rem;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .appointment-form {
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

        .form-group label .required {
            color: #ff6b6b;
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
            min-height: 120px;
        }

        /* Time Slots */
        .time-slots {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
            grid-column: 1 / -1;
        }

        .time-slot {
            padding: 1rem;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
            font-weight: 600;
        }

        .time-slot:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px);
        }

        .time-slot.selected {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            border-color: #f4c542;
            color: #002147;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .time-slot.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .time-slot.disabled:hover {
            transform: none;
        }

        /* Service Cards */
        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            grid-column: 1 / -1;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .service-card:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px);
        }

        .service-card.selected {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            border-color: #f4c542;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .service-card .icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .service-card h4 {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .service-card.selected h4,
        .service-card.selected p {
            color: #002147;
        }

        .service-card p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            text-align: center;
        }

        /* Summary */
        .summary-box {
            background: linear-gradient(135deg, rgba(0, 33, 71, 0.3), rgba(0, 74, 173, 0.3));
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .summary-box h3 {
            color: #f4c542;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .summary-label {
            font-weight: 600;
        }

        .summary-value {
            color: #f4c542;
            font-weight: 700;
        }

        /* Buttons */
        .form-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
            grid-column: 1 / -1;
        }

        .btn {
            padding: 1rem 3rem;
            border-radius: 15px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-prev {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-prev:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        .btn-next, .btn-submit {
            background: linear-gradient(135deg, #f4c542, #FFD700);
            color: #002147;
            box-shadow: 0 5px 20px rgba(244, 197, 66, 0.4);
        }

        .btn-next:hover, .btn-submit:hover {
            background: linear-gradient(135deg, #FFD700, #f4c542);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(244, 197, 66, 0.6);
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

        .alert-error {
            background: rgba(220, 38, 38, 0.9);
            color: white;
            border: 2px solid #dc2626;
        }

        /* Info Box */
        .info-box {
            background: rgba(59, 130, 246, 0.2);
            border: 2px solid rgba(59, 130, 246, 0.4);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            color: white;
        }

        .info-box h4 {
            color: #f4c542;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .info-box ul {
            list-style: none;
            padding-left: 0;
        }

        .info-box li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }

        .info-box li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #f4c542;
            font-weight: 700;
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

            .steps-container {
                flex-direction: column;
            }

            .appointment-form {
                grid-template-columns: 1fr;
            }

            .time-slots {
                grid-template-columns: repeat(2, 1fr);
            }

            .service-cards {
                grid-template-columns: 1fr;
            }

            .form-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
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
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="page-title">
            <h1>Buat Janji Temu</h1>
            <p>Mudah, Cepat, dan Terpercaya</p>
        </div>

        <!-- Steps Indicator -->
        <div class="steps-container">
            <div class="step active" id="step-indicator-1">
                <div class="step-number">1</div>
                <h3>Data Pemilik</h3>
                <p>Informasi kontak Anda</p>
            </div>
            <div class="step" id="step-indicator-2">
                <div class="step-number">2</div>
                <h3>Data Hewan</h3>
                <p>Informasi hewan peliharaan</p>
            </div>
            <div class="step" id="step-indicator-3">
                <div class="step-number">3</div>
                <h3>Layanan & Jadwal</h3>
                <p>Pilih layanan dan waktu</p>
            </div>
            <div class="step" id="step-indicator-4">
                <div class="step-number">4</div>
                <h3>Konfirmasi</h3>
                <p>Tinjau & kirim</p>
            </div>
        </div>

        <!-- Appointment Form -->
        <div class="appointment-container">
            <div id="alertBox" class="alert"></div>

            <!-- Step 1: Owner Data -->
            <div class="form-section active" id="section-1">
                <h2 class="section-title">📋 Data Pemilik</h2>
                
                <div class="info-box">
                    <h4>ℹ️ Informasi Penting</h4>
                    <ul>
                        <li>Pastikan data yang Anda masukkan benar dan lengkap</li>
                        <li>Nomor telepon akan digunakan untuk konfirmasi janji</li>
                        <li>Email akan menerima notifikasi dan pengingat jadwal</li>
                    </ul>
                </div>

                <div class="appointment-form">
                    <div class="form-group">
                        <label for="ownerName">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="ownerName" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="ownerPhone">Nomor Telepon <span class="required">*</span></label>
                        <input type="tel" id="ownerPhone" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="form-group">
                        <label for="ownerEmail">Email <span class="required">*</span></label>
                        <input type="email" id="ownerEmail" placeholder="email@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="ownerAddress">Alamat <span class="required">*</span></label>
                        <input type="text" id="ownerAddress" placeholder="Alamat lengkap" required>
                    </div>

                    <div class="form-buttons">
                        <button class="btn btn-next" onclick="nextStep(1)">Lanjut →</button>
                    </div>
                </div>
            </div>

            <!-- Step 2: Pet Data -->
            <div class="form-section" id="section-2">
                <h2 class="section-title">🐾 Data Hewan Peliharaan</h2>
                
                <div class="appointment-form">
                    <div class="form-group">
                        <label for="petName">Nama Hewan <span class="required">*</span></label>
                        <input type="text" id="petName" placeholder="Nama hewan peliharaan" required>
                    </div>

                    <div class="form-group">
                        <label for="petType">Jenis Hewan <span class="required">*</span></label>
                        <select id="petType" required>
                            <option value="">Pilih jenis hewan</option>
                            <option value="anjing">Anjing</option>
                            <option value="kucing">Kucing</option>
                            <option value="kelinci">Kelinci</option>
                            <option value="hamster">Hamster</option>
                            <option value="burung">Burung</option>
                            <option value="reptil">Reptil</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="petBreed">Ras/Breed</label>
                        <input type="text" id="petBreed" placeholder="Ras hewan (opsional)">
                    </div>

                    <div class="form-group">
                        <label for="petAge">Usia <span class="required">*</span></label>
                        <input type="text" id="petAge" placeholder="Contoh: 2 tahun 3 bulan" required>
                    </div>

                    <div class="form-group">
                        <label for="petGender">Jenis Kelamin <span class="required">*</span></label>
                        <select id="petGender" required>
                            <option value="">Pilih jenis kelamin</option>
                            <option value="jantan">Jantan</option>
                            <option value="betina">Betina</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="petWeight">Berat Badan (kg)</label>
                        <input type="number" id="petWeight" placeholder="Contoh: 5.5" step="0.1">
                    </div>

                    <div class="form-group full-width">
                        <label for="petHistory">Riwayat Kesehatan</label>
                        <textarea id="petHistory" placeholder="Ceritakan kondisi kesehatan, alergi, atau informasi penting lainnya..."></textarea>
                    </div>

                    <div class="form-buttons">
                        <button class="btn btn-prev" onclick="prevStep(2)">← Kembali</button>
                        <button class="btn btn-next" onclick="nextStep(2)">Lanjut →</button>
                    </div>
                </div>
            </div>

            <!-- Step 3: Service & Schedule -->
            <div class="form-section" id="section-3">
                <h2 class="section-title">⚕️ Pilih Layanan & Jadwal</h2>
                
                <div class="appointment-form">
                    <div class="form-group full-width">
                        <label>Pilih Layanan <span class="required">*</span></label>
                        <div class="service-cards">
                            <div class="service-card" onclick="selectService('konsultasi', this)">
                                <div class="icon">🩺</div>
                                <h4>Konsultasi</h4>
                                <p>Pemeriksaan umum & konsultasi dokter</p>
                            </div>
                            <div class="service-card" onclick="selectService('vaksinasi', this)">
                                <div class="icon">💉</div>
                                <h4>Vaksinasi</h4>
                                <p>Program vaksinasi lengkap</p>
                            </div>
                            <div class="service-card" onclick="selectService('grooming', this)">
                                <div class="icon">✂️</div>
                                <h4>Grooming</h4>
                                <p>Perawatan & kebersihan</p>
                            </div>
                            <div class="service-card" onclick="selectService('dental', this)">
                                <div class="icon">🦷</div>
                                <h4>Dental Care</h4>
                                <p>Perawatan gigi & mulut</p>
                            </div>
                            <div class="service-card" onclick="selectService('bedah', this)">
                                <div class="icon">⚕️</div>
                                <h4>Bedah</h4>
                                <p>Tindakan operasi</p>
                            </div>
                            <div class="service-card" onclick="selectService('darurat', this)">
                                <div class="icon">🚨</div>
                                <h4>Darurat</h4>
                                <p>Penanganan kasus darurat</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="appointmentDate">Tanggal <span class="required">*</span></label>
                        <input type="date" id="appointmentDate" required onchange="updateTimeSlots()">
                    </div>

                    <div class="form-group">
                        <label for="preferredDoctor">Pilih Dokter (Opsional)</label>
                        <select id="preferredDoctor">
                            <option value="">Dokter yang tersedia</option>
                            <option value="dr1">drh. Budi Santoso, Sp.KH</option>
                            <option value="dr2">drh. Rina Kusuma, M.Sc</option>
                            <option value="dr3">drh. Ahmad Kurniawan, M.Vet</option>
                            <option value="dr4">drh. Siti Aminah, Sp.DH</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label>Pilih Waktu <span class="required">*</span></label>
                        <div class="time-slots" id="timeSlots">
                            <div class="time-slot" onclick="selectTime('08:00', this)">08:00</div>
                            <div class="time-slot" onclick="selectTime('09:00', this)">09:00</div>
                            <div class="time-slot" onclick="selectTime('10:00', this)">10:00</div>
                            <div class="time-slot" onclick="selectTime('11:00', this)">11:00</div>
                            <div class="time-slot" onclick="selectTime('13:00', this)">13:00</div>
                            <div class="time-slot" onclick="selectTime('14:00', this)">14:00</div>
                            <div class="time-slot" onclick="selectTime('15:00', this)">15:00</div>
                            <div class="time-slot" onclick="selectTime('16:00', this)">16:00</div>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="complaint">Keluhan/Catatan</label>
                        <textarea id="complaint" placeholder="Jelaskan keluhan atau informasi tambahan..."></textarea>
                    </div>

                    <div class="form-buttons">
                        <button class="btn btn-prev" onclick="prevStep(3)">← Kembali</button>
                        <button class="btn btn-next" onclick="nextStep(3)">Lanjut →</button>
                    </div>
                </div>
            </div>

            <!-- Step 4: Confirmation -->
            <div class="form-section" id="section-4">
                <h2