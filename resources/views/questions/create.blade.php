@extends('layout')

@section('content')
    <h1>Agregar Pregunta</h1>

    <form action="{{ route('questions.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="question">Pregunta</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
