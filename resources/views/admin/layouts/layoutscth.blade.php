<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Digital Marketing Agency @yield('title')</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(135deg, #0f172a, #1e3a8a);
    color: white;
    line-height: 1.6;
}

.container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
}

header {
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 20px;
    font-weight: 700;
}

.btn {
    background: #3b82f6;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    transition: 0.3s ease;
    display: inline-block;
}

.btn:hover {
    background: #2563eb;
    transform: translateY(-3px);
}

.hero {
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 42px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    opacity: 0.9;
    margin-bottom: 30px;
}

.section {
    padding: 80px 0;
    text-align: center;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.card {
    background: rgba(255,255,255,0.08);
    padding: 30px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-8px);
    background: rgba(255,255,255,0.15);
}

.card h3 {
    margin-bottom: 15px;
}

.stats {
    display: flex;
    justify-content: space-around;
    margin-top: 40px;
    flex-wrap: wrap;
    gap: 20px;
}

.stat h2 {
    font-size: 32px;
    color: #60a5fa;
}

footer {
    padding: 30px 0;
    text-align: center;
    font-size: 14px;
    opacity: 0.8;
    border-top: 1px solid rgba(255,255,255,0.2);
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 30px;
    }
}
</style>
</head>
<body>

<div class="container">
    <header>
        <div class="logo">Rizky Digital</div>
        <a href="#" class="btn">Konsultasi Gratis</a>
    </header>

    <section class="hero">
        <h1>Tingkatkan Bisnis Anda Secara Digital 🚀</h1>
        <p>Kami membantu brand berkembang dengan strategi digital marketing yang terbukti meningkatkan traffic, leads, dan penjualan.</p>
        <a href="#" class="btn">Mulai Sekarang</a>
    </section>
</div>

<section class="section">
    <div class="container">
        <h2>Layanan Kami</h2>
        <div class="cards">
            <div class="card">
                <h3>Digital Strategy</h3>
                <p>Strategi pemasaran yang dirancang khusus sesuai kebutuhan bisnis Anda.</p>
            </div>
            <div class="card">
                <h3>Social Media</h3>
                <p>Konten engaging & manajemen akun profesional untuk hasil maksimal.</p>
            </div>
            <div class="card">
                <h3>Website & Landing Page</h3>
                <p>Desain modern, cepat, dan fokus pada konversi.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: rgba(0,0,0,0.2);">
    <div class="container">
        <h2>Dipercaya Banyak Klien</h2>
        <div class="stats">
            <div class="stat">
                <h2>150+</h2>
                <p>Project Selesai</p>
            </div>
            <div class="stat">
                <h2>98%</h2>
                <p>Klien Puas</p>
            </div>
            <div class="stat">
                <h2>5+</h2>
                <p>Tahun Pengalaman</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>🎁 GRATIS Audit Digital Marketing</h2>
        <p>Dapatkan analisa & strategi khusus untuk bisnis Anda sekarang juga.</p>
        <br>
        <a href="#" class="btn">Ambil Audit Gratis</a>
    </div>
</section>

<footer>
    © 2026 Rizky Digital Agency. All Rights Reserved.
</footer>

</body>
  @yield('content')
</html>
