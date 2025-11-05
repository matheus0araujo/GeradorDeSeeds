@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Histórico de Seeds</h1>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <p class="mt-3">Aqui futuramente vai aparecer a lista de seeds geradas pelo usuário.</p>
</div>
@endsection
