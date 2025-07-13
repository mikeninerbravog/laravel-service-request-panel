@extends('layouts.app')

@section('title', 'New Service Request')

@section('content')
    <form action="{{ route('solicitacaos.store') }}" method="POST">
        @csrf

        <label for="nome">Name</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="titulo">Title</label>
        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>

        <label for="descricao">Description</label>
        <textarea name="descricao" id="descricao" required>{{ old('descricao') }}</textarea>

        <label for="categoria">Category</label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}" required>

        <button type="submit">Submit</button>
        <a href="{{ route('solicitacaos.index') }}" class="button">Cancel</a>
    </form>
@endsection
