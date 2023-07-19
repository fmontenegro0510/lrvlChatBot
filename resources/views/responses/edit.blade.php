@extends('layout')

@section('content')
    <h1>Editar Respuesta</h1>

    <form action="{{ route('responses.update', $response->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question_id">Pregunta</label>
            <select class="form-control" id="question_id" name="question_id" required>
                <option value="">Selecciona una pregunta...</option>
                @foreach ($questions as $question)
                    <option value="{{ $question->id }}" @if($question->id == $response->question_id) selected @endif>{{ $question->question }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="answer">Respuesta</label>
            <textarea class="form-control" id="answer" name="answer" rows="3" required>{{ $response->answer }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
