@extends('layout')

@section('content')
    <h1>Respuestas</h1>
    <a href="{{ route('responses.create') }}" class="btn btn-success">Agregar Respuesta</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responses as $response)
                <tr>
                    <td>{{ $response->id }}</td>
                    <td>{{ $response->question->question }}</td>
                    <td>{{ $response->answer }}</td>
                    <td>
                        <a href="{{ route('responses.edit', $response->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('responses.destroy', $response->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
