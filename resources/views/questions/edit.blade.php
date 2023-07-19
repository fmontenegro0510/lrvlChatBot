@extends('layout')

@section('content')
    <h1>Editar Pregunta</h1>

    <form action="{{ route('questions.update', $question->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Pregunta</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $question->question }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
