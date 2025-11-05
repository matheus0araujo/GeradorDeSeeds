@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gerar nova Seed</h1>

    <form action="{{ route('seeds.store') }}" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="criteria">Critérios para geração:</label>
            <input type="text" name="criteria" id="criteria" class="form-control" placeholder="Ex: vila perto de bioma nevado">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Gerar</button>
    </form>
</div>
@endsection
