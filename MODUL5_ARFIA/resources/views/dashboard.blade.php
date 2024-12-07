<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            margin: 0;
            padding: 0;
            color: #333;
        }
        .navbar {
            background-color: #ff6f61;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar h2 {
            margin: 0;
            color: #fff;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #444;
        }
        .card {
            background-color: #fff;
            border: 1px solid #f5c7b8;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            font-weight: bold;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ff6f61;
        }
        .card-header i {
            font-size: 1.5rem;
        }
        .card-content p {
            color: #666;
            font-size: 1rem;
        }
        .btn {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #e65a50;
        }
        .btn-danger {
            background-color: #e74a3b;
        }
        .btn-danger:hover {
            background-color: #c0392b;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .col {
            flex: 1;
            min-width: 300px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2><i class="fas fa-university"></i> Universitas EAD Dashboard</h2>
    </div>

    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        
        <div class="row">
            <!-- Card Data Dosen -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chalkboard-teacher"></i> Data Dosen
                    </div>
                    <div class="card-content">
                        <p>Manage all data related to the lecturers in the system.</p>
                        <a href="{{ route('dosen.create') }}" class="btn">Tambah Dosen</a>
                        <a href="{{ route('dosen.index') }}" class="btn">Lihat Semua Dosen</a>
                    </div>
                </div>
            </div>

            <!-- Card Data Mahasiswa -->
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-graduate"></i> Data Mahasiswa
                    </div>
                    <div class="card-content">
                        <p>Manage all data related to the students in the system.</p>
                        <a href="{{ route('mahasiswa.create') }}" class="btn">Tambah Mahasiswa</a>
                        <a href="{{ route('mahasiswa.index') }}" class="btn">Lihat Semua Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>