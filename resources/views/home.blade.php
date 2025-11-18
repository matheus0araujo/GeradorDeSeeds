<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SeedGen</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('scout/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('scout/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('scout/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('scout/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('scout/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('scout/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('scout/assets/css/main.css') }}" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Gerador de seeds</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registrar</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="hero-content" data-aos="fade-up" data-aos-delay="100">
              <div class="hero-tag">
                <i class="bi bi-rocket-takeoff"></i>
                <span>Innovative Solutions</span>
              </div>
              

              <h1>
                Achieving <span class="highlight">Outstanding Results</span> for Your Growth
              </h1>

              <p class="lead">
                Our dedicated team provides exceptional service to help you reach your business goals effectively.
              </p>

              <ul class="hero-features">
                <li><i class="bi bi-check-circle"></i> Streamlined operational processes</li>
                <li><i class="bi bi-check-circle"></i> Enhanced customer engagement strategies</li>
                <li><i class="bi bi-check-circle"></i> Data-driven decision support</li>
              </ul>

              <div class="hero-cta">
                <a href="#services" class="btn btn-primary">Explore Our Services</a>
                <a href="tel:+1 (555) 987-6543" class="btn btn-link">
                  <i class="bi bi-telephone"></i> +1 (555) 987-6543
                </a>
              </div>
            </div>

          </div>
          <div class="col-lg-6">

            <div class="hero-image-wrapper" data-aos="fade-up" data-aos-delay="300">
              <section class="scout-login-section">
                <div class="login-wrapper">
                  <div class="login-card">
                    <h1 class="login-title">Faça login</h1>

                    <form class="login-form" method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group">
                        <label for="email">Email</label>
                        @if ($errors->any())
                          <div class="alert alert-danger" style="margin-bottom: 15px;">
                            {{ $errors->first() }}
                          </div>
                        @endif
                        <input 
                          type="email" 
                          id="email"
                          name="email"
                          required 
                          autofocus
                          placeholder="seu@email.com">
                      </div>

                      <div class="form-group">
                        <label for="password">Senha</label>
                        <input 
                          type="password" 
                          id="password"
                          name="password"
                          required
                          placeholder="••••••••">
                      </div>

                      <div class="form-extra">
                        <label class="remember">
                          <input type="checkbox" name="remember">
                          <span>Manter conectado</span>
                        </label>

                        <a href="#" class="forgot">Esqueceu a senha?</a>
                      </div>

                      <button type="submit" class="btn-login">Entrar</button>

                      <p class="register-text">
                        Ainda não tem conta?
                        <a href="{{ route('register') }}">Registrar</a>
                      </p>
                    </form>

                  </div>
                </div>
              </section>
            </div>  

          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

  </main><!-- End #main -->

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <!-- Mantive tudo igual, só troquei os caminhos -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span class="sitename">Scout</span>
          </a>

          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>

          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <!-- resto igual -->
        @php
        // Não alterei o layout dos outros blocos
        @endphp

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <strong class="px-1 sitename">MyWebsite</strong> All Rights Reserved</p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
<script src="{{ asset('scout/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('scout/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('scout/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('scout/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('scout/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('scout/assets/js/main.js') }}"></script>


</body>
</html>
