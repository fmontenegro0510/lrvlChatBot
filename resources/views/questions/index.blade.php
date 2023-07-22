@extends('layout')

@section('content')
    <h1>Preguntas</h1>
    <a href="{{ route('questions.create') }}" class="btn btn-success">Agregar Pregunta</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Pregunta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('questions.destroy', $question->id) }}" method="post" style="display: inline-block">
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
