@if($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-800 border border-red-300 rounded-md">
        <strong>¡Ups! Hubo algunos problemas:</strong>
        <ul class="list-disc list-inside mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
    <input type="text" name="category" id="category" value="{{ old('category', $qa->category ?? '') }}" 
           class="mt-1 block w-full rounded-md border-gray-30all focus:border-indigo-500 focus:ring-indigo-500" required>
</div>

<div class="mb-4">
    <label for="question" class="block text-sm font-medium text-gray-700">Pregunta</label>
    <textarea name="question" id="question" rows="3" 
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('question', $qa->question ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label for="answer" class="block text-sm font-medium text-gray-700">Respuesta</label>
    <textarea name="answer" id="answer" rows="6" 
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('answer', $qa->answer ?? '') }}</textarea>
</div>

<div class="flex justify-end pt-4 border-t border-gray-200">
    <a href="{{ route('admin.chatbot.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md mr-2 hover:bg-gray-300 transition duration-300">
        Cancelar
    </a>
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition duration-300">
        Guardar
    </button>
</div>