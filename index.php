<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banque du Caire - Login</title>
  <!-- Iconos de FontAwesome para replicar los íconos del formulario y tarjetas -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #0b0202;
      color: #ffffff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* --- Top Navbar --- */
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 40px;
      background-color: #000000;
    }

    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Enlazado del logo principal */
    .brand-logo img {
      height: 35px; /* Ajuste de altura */
      width: auto;
    }

    .top-links {
      display: flex;
      gap: 25px;
      font-size: 13px;
      color: #cccccc;
    }

    .top-links a {
      color: #cccccc;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .top-links a:hover {
      color: #ffffff;
    }

    /* --- Main Container --- */
    .main-container {
      flex: 1;
      display: flex;
      /* Sustitución del degradado por la imagen de fondo hero-card.png.jpg */
      background-image: url('hero-card.png.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding: 40px;
      position: relative;
    }

    /* Left Side: Login Box */
    .login-section {
      width: 380px;
      z-index: 2;
    }

    .login-card {
      background-color: #f7f7f7;
      color: #333333;
      padding: 35px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .card-logo {
      display: flex;
      align-items: center;
      justify-content: center; /* Centrar logo en tarjeta */
      margin-bottom: 30px;
    }

    /* Enlazado del logo dentro de la tarjeta */
    .card-logo img {
      height: 30px; /* Ajuste de altura menor */
      width: auto;
    }

    .welcome-text {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 25px;
      color: #222222;
      text-align: center; /* Centrar texto */
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group i.left-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #888888;
      font-size: 14px;
    }

    .input-group i.right-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #888888;
      font-size: 14px;
      cursor: pointer;
    }

    .input-group input {
      width: 100%;
      padding: 14px 15px 14px 40px;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      background-color: #ffffff;
      transition: border-color 0.2s;
    }

    .input-group input:focus {
      border-color: #ff4500;
    }

    .form-links {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 25px;
    }

    .form-links a.enroll {
      color: #ff4500;
      text-decoration: none;
      font-weight: 600;
    }

    .form-links a.forgot {
      color: #666666;
      text-decoration: none;
    }

    .btn-login {
      width: 100%;
      padding: 14px;
      background: linear-gradient(90deg, #ff4500, #ff5e00);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(255, 69, 0, 0.3);
      transition: background 0.3s;
    }

    .btn-login:hover {
      background: linear-gradient(90deg, #e03e00, #e55300);
    }

    /* Right Side: Hero Content */
    .hero-section {
      flex: 1;
      padding-left: 80px;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .hero-title {
      font-size: 38px;
      font-weight: 700;
      margin-bottom: 8px;
      position: relative;
      display: inline-block;
    }

    .hero-title::after {
      content: '';
      display: block;
      width: 50px;
      height: 3px;
      background-color: #ff4500;
      margin-top: 10px;
      margin-bottom: 25px;
    }

    .hero-description {
      font-size: 20px;
      line-height: 1.4;
      color: #f0f0f0;
      margin-bottom: 12px;
    }

    .hero-subdescription {
      font-size: 14px;
      color: #cccccc;
      margin-bottom: 30px;
    }

    .btn-learn-more {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 12px 24px;
      border: 1px solid #ffffff;
      border-radius: 8px;
      color: #ffffff;
      text-decoration: none;
      font-size: 14px;
      width: fit-content;
      transition: background-color 0.2s;
    }

    .btn-learn-more:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    /* Cards Section */
    .cards-container {
      display: flex;
      gap: 20px;
      margin-top: 60px;
      margin-bottom: 40px;
    }

    .feature-card {
      background-color: #f0ede9;
      color: #222222;
      border-radius: 16px;
      padding: 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      width: 320px;
      cursor: pointer;
      position: relative;
      transition: transform 0.2s;
    }

    .feature-card:hover {
      transform: translateY(-2px);
    }

    .feature-card .icon-box {
      font-size: 28px;
      color: #ff4500;
    }

    .feature-card.green .icon-box {
      color: #2e7d32;
    }

    .feature-card.green {
      background-color: #f0f5f1;
    }

    .card-content h4 {
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 4px;
    }

    .card-content p {
      font-size: 11px;
      color: #666666;
      line-height: 1.3;
    }

    .card-arrow {
      margin-left: auto;
      font-size: 12px;
      color: #333333;
    }

    /* --- Bottom Footer Bar --- */
    .footer-bar {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      display: flex;
      gap: 20px;
      font-size: 12px;
      color: #cccccc;
    }

    .footer-bar a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 500;
    }

    .footer-bar span {
      color: #666666;
    }
  </style>
</head>
<body>

  <!-- Top Navigation -->
  <header class="top-bar">
    <div class="brand-logo">
      <!-- Enlazado del logo oficial -->
      <img src="logo-bdc.png.png" alt="Banque du Caire Logo">
    </div>
    <nav class="top-links">
      <a href="#"><i class="fa-solid fa-location-dot"></i> ATM & Branch Locator</a>
      <a href="#"><i class="fa-regular fa-circle-question"></i> Help & Support</a>
      <a href="#">العربية</a>
    </nav>
  </header>

  <!-- Main Content Area -->
  <main class="main-container">
    
    <!-- Left Login Card -->
    <section class="login-section">
      <div class="login-card">
        <div class="card-logo">
          <!-- Enlazado del logo oficial dentro de la tarjeta -->
          <img src="logo-bdc.png.png" alt="Banque du Caire Logo">
        </div>

        <h2 class="welcome-text">Welcome back</h2>

        <form onsubmit="event.preventDefault();">
          <div class="input-group">
            <i class="fa-regular fa-user left-icon"></i>
            <input type="text" placeholder="Username" required>
            <i class="fa-regular fa-circle-info right-icon"></i>
          </div>

          <div class="input-group">
            <i class="fa-solid fa-lock left-icon"></i>
            <input type="password" placeholder="Password" required>
          </div>

          <div class="form-links">
            <a href="#" class="enroll">Enroll / Activate</a>
            <a href="#" class="forgot">Forgot password?</a>
          </div>

          <button type="submit" class="btn-login">Login</button>
        </form>
      </div>
    </section>

    <!-- Right Hero Section -->
    <section class="hero-section">
      <div>
        <h1 class="hero-title">Banking with An Edge</h1>
        
        <p class="hero-description">
          Your Stunning Internet banking<br>
          experience Starts with BDC
        </p>
        
        <p class="hero-subdescription">
          Your Secure Banking Is our responsibility, Banking with An Edge.
        </p>

        <a href="#" class="btn-learn-more">
          Learn More <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
        </a>
      </div>

      <!-- Feature Cards -->
      <div>
        <div class="cards-container">
          <div class="feature-card">
            <div class="icon-box">
              <i class="fa-regular fa-calendar-check"></i>
            </div>
            <div class="card-content">
              <h4>Book Appointment</h4>
              <p>Schedule a visit at your convenience.</p>
            </div>
            <i class="fa-solid fa-chevron-right card-arrow"></i>
          </div>

          <div class="feature-card green">
            <div class="icon-box">
              <i class="fa-solid fa-arrows-rotate"></i>
            </div>
            <div class="card-content">
              <h4>FX Rates</h4>
              <p>Check the latest foreign exchange rates.</p>
            </div>
            <i class="fa-solid fa-chevron-right card-arrow"></i>
          </div>
        </div>

        <!-- Footer Links inside main container -->
        <footer class="footer-bar">
          <a href="#">Locate Us</a> <span>|</span>
          <a href="#">Contact Us</a> <span>|</span>
          <a href="#">Privacy Policy</a> <span>|</span>
          <a href="#">Terms & Conditions</a> <span>|</span>
          <a href="#">FAQ</a>
        </footer>
      </div>
    </section>

  </main>

</body>
</html>
