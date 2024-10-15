<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Menghubungkan ke file CSS jika ada -->
</head>
<body>
    <h1>Garuda Cyber Institute</h1>

    <h4>Jadilah Programmer handal bersama GC-INS</h4>

    <p>Grow Together With Garuda Cyber Institute</p>

    <h4>Syarat dan Ketentuan</h4>

    <ul>
        <li>Tamatan SMA/SMK</li>
        <li>Taman Perguruan Tinggi</li>
        <li>Peserta IT</li>
        <li>Freelancer</li>
    </ul>

    <h4>Cara Bergabung</h4>

    <ol>
        <li>Kunjungi website GC-INS</li>
        <li>Register</li>
        <li>Lakukan Pembayaran</li>
    </ol>

    <!-- Mengubah tombol menjadi link -->
    <a href="{{ route('register') }}">
        <button>REGISTER</button>
    </a>
</body>
</html>
