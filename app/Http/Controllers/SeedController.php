<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeedController extends Controller
{
    // Página de listagem de seeds (histórico)
    public function index()
    {
        // futuramente vai buscar seeds do banco (relacionadas ao usuário)
        return view('seeds.index');
    }

    // Página para o usuário gerar uma nova seed
    public function generate()
    {
        return view('seeds.generate');
    }

    // Função que receberá o POST do formulário de geração
    public function store(Request $request)
    {
        // aqui depois você vai implementar a lógica de geração
        // por enquanto só retorna o que o usuário enviou
        return redirect()->route('seeds.index')->with('success', 'Seed gerada com sucesso (simulada).');
    }
}

