{{-- resources/views/components/app-layout.blade.php --}}
@props(['title' => config('app.name')])

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    {{-- AdminLTE + Vite --}}
    @vite(['resources/js/app.js'])

    {{-- Font Awesome / AdminLTE assets (se ainda não tiver no app.js) --}}
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Content Wrapper --}}
    <div class="content-wrapper p-3">

        {{-- Header slot do Breeze (opcional) --}}
        @if (isset($header))
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{ $header }}
                        </div>
                    </div>
                </div>
            </section>
        @endif

        {{-- Conteúdo principal --}}
        <section class="content">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </section>

    </div>

    {{-- Footer (opcional) --}}
    @includeWhen(View::exists('layouts.footer'), 'layouts.footer')

</div>

{{-- Scripts do AdminLTE --}}
<script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
</body>
</html>
