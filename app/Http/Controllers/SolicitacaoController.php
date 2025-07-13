<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function index()
    {
        $solicitacoes = Solicitacao::all();
        return view('solicitacaos.index', compact('solicitacoes'));
    }

    public function create()
    {
        return view('solicitacaos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'titulo' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
        ]);

        Solicitacao::create($request->all());

        return redirect()->route('solicitacaos.index')->with('success', 'Solicitação criada com sucesso.');
    }

    public function show(Solicitacao $solicitacao)
    {
        return view('solicitacaos.show', compact('solicitacao'));
    }

    public function edit(Solicitacao $solicitacao)
    {
        return view('solicitacaos.edit', compact('solicitacao'));
    }

    public function update(Request $request, Solicitacao $solicitacao)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'titulo' => 'required',
            'descricao' => 'required',
            'categoria' => 'required',
            'status' => 'required',
        ]);

        $solicitacao->update($request->all());

        return redirect()->route('solicitacaos.index')->with('success', 'Solicitação atualizada com sucesso.');
    }

    public function destroy(Solicitacao $solicitacao)
    {
        $solicitacao->delete();
        return redirect()->route('solicitacaos.index')->with('success', 'Solicitação excluída.');
    }
}
