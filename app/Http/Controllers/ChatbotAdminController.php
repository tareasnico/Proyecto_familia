<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatbotQa;

class ChatbotAdminController extends Controller
{
    public function index(Request $request)
    {
        $categorias = ChatbotQa::select('category')->distinct()->pluck('category');

        $categoriaSeleccionada = $request->input('categoria_filtro');

        $qas = ChatbotQa::when($categoriaSeleccionada, function ($query, $categoriaSeleccionada) {
            return $query->where('category', $categoriaSeleccionada);
        })
        ->orderBy('category') 
        ->get();

        return view('admin.chatbot.index', compact('qas', 'categorias', 'categoriaSeleccionada'));
    }

    public function create()
    {
        $categorias = ChatbotQa::select('category')->distinct()->pluck('category');
        return view('admin.chatbot.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        ChatbotQa::create($request->only(['category', 'question', 'answer']));

        return redirect()
            ->route('admin.chatbot.index')
            ->with('success', '✅ Pregunta agregada correctamente.');
    }

    public function edit(ChatbotQa $qa)
    {
        $categorias = ChatbotQa::select('category')->distinct()->pluck('category');
        return view('admin.chatbot.edit', compact('qa', 'categorias'));
    }

    public function update(Request $request, ChatbotQa $qa)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        $qa->update($request->only(['category', 'question', 'answer']));

        return redirect()
            ->route('admin.chatbot.index')
            ->with('success', '✏️ Pregunta actualizada correctamente.');
    }

    public function destroy(ChatbotQa $qa)
    {
        $qa->delete();

        return redirect()
            ->route('admin.chatbot.index')
            ->with('success', '🗑️ Pregunta eliminada correctamente.');
    }
}