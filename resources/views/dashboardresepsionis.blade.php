<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Resepsionis | RSHP</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f6f8fb;
        }

        header {
            background-color: #3C2A79;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: 500;
        }

        .navbar a:hover, .navbar a.active {
            color: #FFD700;
        }

        .content {
            padding: 50px 80px;
        }

        h1 {
            color: #3C2A79;
        }

        .menu-box {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 40px;
        }

        .card {
            flex: 1 1 calc(33.333% - 20px);
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .logout-btn {
            background-color: #C92A2A;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
        }

        .logout-btn:hover {
            background-color: #A71D1D;
        }
    </style>
</head>
<body>

    <header>
        <h2>Dashboard Resepsionis</h2>
        <nav class="navbar">
            <a href="{{ route('dashboard.resepsionis') }}" class="active">Dashboard</a>
            <a href="{{ route('data.pasien') }}">Data Pasien</a>
            <a href="{{ route('buat.janji') }}">Buat Janji</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </nav>
    </header>

    <main class="content">
        <h1>Selamat Datang, Resepsionis!</h1>
        <p>Kelola data pasien, jadwal janji, dan administrasi harian di sini.</p>

        <div class="menu-box">
            <div class="card">
                <h4>Pasien Terdaftar</h4>
                <p class="fs-4 fw-bold text-primary">215</p>
            </div>
            <div class="card">
                <h4>Janji Hari Ini</h4>
                <p class="fs-4 fw-bold text-success">18</p>
            </div>
            <div class="card">
                <h4>Dokter Aktif</h4>
                <p class="fs-4 fw-bold text-warning">6</p>
            </div>
        </div>
    </main>

</body>
</html>
