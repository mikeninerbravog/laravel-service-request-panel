@extends('layouts.app')

@section('title', 'Service Requests')

@section('content')
    <a href="{{ route('solicitacaos.create') }}" class="button">New Request</a>

    @if ($solicitacoes->isEmpty())
        <p>No service requests found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitacoes as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nome }}</td>
                        <td>{{ $s->titulo }}</td>
                        <td>{{ $s->categoria }}</td>
                        <td>{{ $s->status }}</td>
                        <td>
                            <a href="{{ route('solicitacaos.show', $s) }}" class="button">View</a>
                            <a href="{{ route('solicitacaos.edit', $s) }}" class="button">Edit</a>
                            <form action="{{ route('solicitacaos.destroy', $s) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
