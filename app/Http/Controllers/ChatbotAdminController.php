<?php

namespace App\Http\Controllers;

use App\Models\ChatbotQa; // Importante: Le dice al controlador que use el Modelo que creamos
use Illuminate\Http\Request;

class ChatbotAdminController extends Controller
{
    /**
     * Muestra la lista de todas las preguntas. (La página principal del panel)
     */
    public function index()
    {
        // Busca todas las preguntas en la BD, de la más nueva a la más vieja
        $qas = ChatbotQa::latest()->get();
        
        // Carga la vista 'index.blade.php' y le pasa las preguntas
        return view('admin.chatbot.index', compact('qas'));
    }

    /**
     * Muestra el formulario para crear una nueva pregunta.
     */
    public function create()
    {
        return view('admin.chatbot.create');
    }

    /**
     * Guarda la nueva pregunta en la base de datos.
     */
    public function store(Request $request)
    {
        // Valida que los campos no estén vacíos
        $request->validate([
            'category' => 'required|string|max:255',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Crea la nueva pregunta
        ChatbotQa::create($request->all());

        // Redirige de vuelta a la lista con un mensaje de éxito
        return redirect()->route('admin.chatbot.index')->with('success', 'Pregunta añadida con éxito.');
    }

    /**
     * Muestra el formulario para editar una pregunta existente.
     */
    public function edit(ChatbotQa $qa)
    {
        // $qa es la pregunta que Laravel encontró automáticamente gracias al ID de la ruta
        return view('admin.chatbot.edit', compact('qa'));
    }

    /**
     * Actualiza la pregunta en la base de datos.
     */
    public function update(Request $request, ChatbotQa $qa)
    {
        // Valida los datos
        $request->validate([
            'category' => 'required|string|max:255',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Actualiza la pregunta que encontró
        $qa->update($request->all());

        // Redirige de vuelta a la lista con un mensaje de éxito
        return redirect()->route('admin.chatbot.index')->with('success', 'Pregunta actualizada con éxito.');
    }

    /**
     * Elimina la pregunta de la base de datos.
     */
    public function destroy(ChatbotQa $qa)
    {
        $qa->delete();
        
        // Redirige de vuelta a la lista con un mensaje de éxito
        return redirect()->route('admin.chatbot.index')->with('success', 'Pregunta eliminada con éxito.');
    }
}