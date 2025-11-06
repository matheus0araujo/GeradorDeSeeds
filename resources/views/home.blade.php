<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', 'Gerador de Seeds') }}</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('grayscale/assets/favicon.ico') }}" />

    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ asset('grayscale/css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('', 'Mine Seeds') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Botão</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center w-100">
            <div class="text-center w-100" style="max-width: 420px;">
                <!-- Formulário de Login (TailwindFlex adaptado) -->
                <div class="bg-gray-900 bg-opacity-75 rounded-3 shadow-lg p-4 text-start">
                    <h2 class="text-center text-white text-2xl font-semibold mb-4">Entrar</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">Email</label>
                            <input id="email" type="email" name="email" required autofocus class="form-control" placeholder="Insira seu email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Senha</label>
                            <input id="password" type="password" name="password" required class="form-control" placeholder="Inisira sua senha">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label text-white-50" for="remember">Manter conectado</label>
                            </div>
                            <a class="small text-white-50" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Entrar</button>

                        <div class="text-center mt-3">
                            <span class="text-white-50">Não tem conta?</span>
                            <a href="{{ route('register') }}" class="text-white">Registrar-se</a>
                        </div>
                    </form>
                </div>

                <!-- Botão abaixo do formulário -->
                <a class="btn btn-outline-light mt-4" href="#about">Clica aqui pra ver como funciona.</a>
            </div>
        </div>
    </div>
</header>


    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Funcionamento</h2>
                    <p class="text-white-50">
                        aqui
                    </p>
                </div>
            </div>

            <!-- exemplo de imagem: adapte o caminho se suas imagens estiverem em outro lugar -->
            <img class="img-fluid" src="{{ asset('grayscale/assets/img/ipad.png') }}" alt="..." />
        </div>
    </section>

    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; {{ date('Y') }} {{ config('app.name') }}</div>
    </footer>

    <!-- Bootstrap core JS (CDN)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS (from public/grayscale/js) -->
    <script src="{{ asset('grayscale/js/scripts.js') }}"></script>

    <!-- SB Forms -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
