<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Seeds - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen flex flex-col items-center justify-center bg-cover bg-center text-white" style="background-image: url('/images/fundo-minecraft.png');">
    <!-- camada escura -->
    <div class="absolute inset-0 bg-black/60"></div>

    <main class="relative z-10 text-center px-6">
        <h1 class="text-5xl md:text-6xl font-bold mb-4 drop-shadow-lg">
            Gerador de Seeds
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Explore mundos infinitos no Minecraft com apenas um clique.
        </p>
        <a href="{{ route('login') }}" class="bg-green-600 hover:bg-green-700 transition-all px-6 py-3 rounded-xl font-semibold">
            Entrar
        </a>
        <a href="{{ route('register') }}" class="ml-4 bg-gray-700 hover:bg-gray-800 transition-all px-6 py-3 rounded-xl font-semibold">
            Registrar-se
        </a>
    </main>

    <footer class="relative z-10 mt-auto mb-4 text-sm text-gray-300">
        © {{ date('Y') }} Gerador de Seeds - Criado por Matheuzinho
    </footer>
</body>
</html>
