@extends('layouts.app')

@section('title', 'Service Request Details')

@section('content')
    <p><strong>Name:</strong> {{ $solicitacao->nome }}</p>
    <p><strong>Email:</strong> {{ $solicitacao->email }}</p>
    <p><strong>Title:</strong> {{ $solicitacao->titulo }}</p>
    <p><strong>Description:</strong> {{ $solicitacao->descricao }}</p>
    <p><strong>Category:</strong> {{ $solicitacao->categoria }}</p>
    <p><strong>Status:</strong> {{ $solicitacao->status }}</p>
    <p><strong>Created At:</strong> {{ $solicitacao->created_at }}</p>

    <a href="{{ route('solicitacaos.edit', $solicitacao) }}" class="button">Edit</a>
    <a href="{{ route('solicitacaos.index') }}" class="button">Back</a>
@endsection
