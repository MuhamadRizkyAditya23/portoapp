<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Porto App - Digital Agency</title>
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

/* ===== NAVBAR ===== */
.navbar {
    width: 100%;
    padding: 18px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(90deg, #081c45, #0a2472);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 22px;
    font-weight: 700;
    color: white;
}

.logo-icon {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #00c6ff, #0072ff);
    border-radius: 8px;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 35px;
}

.nav-links a {
    text-decoration: none;
    color: #cbd5e1;
    font-weight: 500;
    transition: 0.3s ease;
}

.nav-links a:hover,
.nav-links .active {
    color: #38bdf8;
}

.nav-btn {
    background: linear-gradient(135deg, #00c6ff, #0072ff);
    padding: 12px 28px;
    border-radius: 30px;
    color: white;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s ease;
}

.nav-btn:hover {
    opacity: 0.85;
}

/* ===== HERO ===== */
.hero {
    padding: 120px 0;
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

/* ===== SECTION ===== */
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

/* ===== STATS ===== */
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

/* ===== FOOTER ===== */
footer {
    padding: 10px 0;
    text-align: center;
    font-size: 14px;
    opacity: 0.8;
    border-top: 1px solid rgba(255,255,255,0.2);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .nav-links {
        display: none;
    }
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 30px;
    }
}
</style>
</head>
<body>

@include('landingpage.header')
     
<section class="hero container">
   @yield('content')

    </div>

    @include('landingpage.footer')

</body>
</html>
