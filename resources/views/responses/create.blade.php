@extends('layout')

@section('content')
    <h1>Agregar Respuesta</h1>

    <form action="{{ route('responses.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="question_id">Pregunta</label>
            <select class="form-control" id="question_id" name="question_id" required>
                <option value="">Selecciona una pregunta...</option>
                @foreach ($questions as $question)
                    <option value="{{ $question->id }}">{{ $question->question }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="answer">Respuesta</label>
            <textarea class="form-control" id="answer" name="answer" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
