@extends('layouts.app')

@section('title', 'Edit Service Request')

@section('content')
    <form action="{{ route('solicitacaos.update', $solicitacao) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Name</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $solicitacao->nome) }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $solicitacao->email) }}" required>

        <label for="titulo">Title</label>
        <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $solicitacao->titulo) }}" required>

        <label for="descricao">Description</label>
        <textarea name="descricao" id="descricao" required>{{ old('descricao', $solicitacao->descricao) }}</textarea>

        <label for="categoria">Category</label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $solicitacao->categoria) }}" required>

        <label for="status">Status</label>
        <select name="status" id="status" required>
            <option value="Pending" {{ $solicitacao->status === 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Approved" {{ $solicitacao->status === 'Approved' ? 'selected' : '' }}>Approved</option>
            <option value="Rejected" {{ $solicitacao->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
        </select>

        <button type="submit">Update</button>
        <a href="{{ route('solicitacaos.index') }}" class="button">Cancel</a>
    </form>
@endsection
