<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;
use App\Models\Question;

class ResponseController extends Controller
{
    public function index()
    {
        $responses = Response::all();
        return view('responses.index', compact('responses'));
    }

    public function create()
    {
        $questions = Question::all();
        return view('responses.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required',
        ]);

        Response::create($request->all());

        return redirect()->route('responses.index')
            ->with('success', 'Respuesta creada correctamente.');
    }

    public function edit(Response $response)
    {
        $questions = Question::all();
        return view('responses.edit', compact('response', 'questions'));
    }

    public function update(Request $request, Response $response)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required',
        ]);

        $response->update($request->all());

        return redirect()->route('responses.index')
            ->with('success', 'Respuesta actualizada correctamente.');
    }

    public function destroy(Response $response)
    {
        $response->delete();

        return redirect()->route('responses.index')
            ->with('success', 'Respuesta eliminada correctamente.');
    }
}
