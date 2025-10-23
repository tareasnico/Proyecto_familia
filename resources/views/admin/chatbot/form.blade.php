@if($errors->any())
    <div class="alert alert-danger">
        <strong>¡Ups! Hubo algunos problemas:</strong>
        <ul class="mt-2 mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label for="category" class="form-label">Categoría</label>
    <select name="category" id="category" class="form-select" required>
        <option value="">-- Seleccione una categoría --</option>
        
        @foreach($categorias as $categoria)
            <option value="{{ $categoria }}" {{ old('category', $qa->category ?? '') == $categoria ? 'selected' : '' }}>
                {{ $categoria }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="question" class="form-label">Pregunta</label>
    <textarea name="question" id="question" rows="3" 
              class="form-control" required>{{ old('question', $qa->question ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="answer" class="form-label">Respuesta</label>
    <textarea name="answer" id="answer" rows="6" 
              class="form-control" required>{{ old('answer', $qa->answer ?? '') }}</textarea>
</div>

<div class="d-flex justify-content-end gap-2 pt-3 border-top">
    <a href="{{ route('admin.chatbot.index') }}" class="btn btn-secondary">
        Cancelar
    </a>
    <button type="submit" class="btn btn-success">
        Guardar
    </button>
</div>