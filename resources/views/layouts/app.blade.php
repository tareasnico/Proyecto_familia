<!DOCTYPE html>
<html lang="es">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones de Familia</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    :root {
        --custom-purple: #5e3a89;
        --custom-navbar-bg: #4a2472;
        --custom-light-bg: #f5f5ff;
    }
    
    body { 
        padding-top: 70px; 
        background-color: #f8f9fa; 
        font-family: 'Montserrat', sans-serif; 
    }
    h1, h2, h3, h4, h5, h6, .btn { 
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
    }


    .navbar-brand {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
    }
    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.85);
        font-weight: 400;
        transition: all 0.2s ease-in-out;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem; /* Borde redondeado para todos */
    }
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.1); /* Efecto hover sutil */
    }
    

    .navbar-dark .navbar-nav .nav-link.active {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.15);
        font-weight: 700;
    }


    .hero-section { position: relative; height: 60vh; min-height: 400px; background-image: url('/images/hero-background.jpg'); background-size: cover; background-position: center; color: white; }
    .hero-section::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(13, 41, 80, 0.65); z-index: 1; }
    .hero-content { position: relative; z-index: 2; }
    .info-card { text-decoration: none; color: inherit; display: block; transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; border: 1px solid #e0e0e0; }
    .info-card:hover { transform: translateY(-5px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; }
    .info-card-header { background-color: #0d2950; color: white; text-align: center; padding: 1.5rem 1rem; }
    .info-card-icon { font-size: 3rem; }
    .chatbot-toggler { position: fixed; bottom: 30px; right: 35px; width: 60px; height: 60px; background-color: var(--custom-purple); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; cursor: pointer; z-index: 1000; transition: transform 0.2s; border: none; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
    .chatbot-toggler:hover { transform: scale(1.1); }
    .chatbot-container { position: fixed; bottom: 100px; right: 35px; width: 420px; height: 550px; background: #fff; border-radius: 15px; box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.5); transform: scale(0.5); opacity: 0; pointer-events: none; transition: all 0.2s ease; transform-origin: bottom right; z-index: 1000; display: flex; flex-direction: column; }
    .chatbot-container.show { transform: scale(1); opacity: 1; pointer-events: auto; }
    .chatbot-header { padding: 12px 0; background: var(--custom-navbar-bg); color: white; text-align: center; border-radius: 15px 15px 0 0; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.2rem; margin-bottom: 0; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .chat-messages { flex-grow: 1; overflow-y: auto; padding: 15px 20px 10px; background-color: var(--custom-light-bg); }
    .chat-messages .message { display: flex; margin-bottom: 10px; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; line-height: 1.4; }
    .chat-messages .bot-message { justify-content: flex-start; }
    .chat-messages .bot-message p { background: #e9eff5; color: #333; padding: 10px 15px; border-radius: 15px 15px 15px 5px; max-width: 85%; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    .chat-messages .user-message { justify-content: flex-end; }
    .chat-messages .user-message p { background: var(--custom-purple); color: white; padding: 10px 15px; border-radius: 15px 15px 5px 15px; max-width: 85%; box-shadow: 0 1px 3px rgba(0,0,0,0.05); }
    .chat-options { flex-shrink: 0; overflow-y: auto; max-height: 220px; padding: 15px; display: flex; flex-direction: column; gap: 8px; background-color: #fff; border-top: 1px solid #eee; border-radius: 0 0 15px 15px; }
    .chat-options button { width: 100%; text-align: left; white-space: normal; height: auto; min-height: 40px; font-family: 'Montserrat', sans-serif; font-size: 0.9rem; padding: 8px 15px; border-radius: 8px; display: flex; align-items: center; }
    .chat-options button.btn-primary { background-color: var(--custom-purple); border-color: var(--custom-purple); color: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .chat-options button.btn-primary:hover { background-color: #4a2472; border-color: #4a2472; }
    .chat-options button.btn-outline-secondary { color: #555; border-color: #ccc; }
    .chat-options button.btn-outline-secondary:hover { background-color: var(--custom-light-bg); border-color: var(--custom-purple); color: var(--custom-purple); }
    .chat-options button.btn-info { background-color: #fff; border-color: var(--custom-purple); color: var(--custom-purple); font-weight: 700; transition: all 0.2s; }
    .chat-options button.btn-info:hover { background-color: var(--custom-purple); color: #fff; }
    .chat-options button.btn-link { color: var(--custom-purple); text-align: center; font-weight: 700; justify-content: center; }
    .chat-options button.btn-link:hover { text-decoration: underline; }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: var(--custom-navbar-bg);">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">Relaciones de Familia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}"><i class="bi bi-house-door-fill me-2"></i>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('parentesco') ? 'active' : '' }}" href="{{ route('parentesco') }}"><i class="bi bi-people-fill me-2"></i>Parentesco</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('filiacion') ? 'active' : '' }}" href="{{ route('filiacion') }}"><i class="bi bi-link-45deg me-2"></i>Filiación</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('adopcion') ? 'active' : '' }}" href="{{ route('adopcion') }}"><i class="bi bi-heart-fill me-2"></i>Adopción</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('matrimonio') ? 'active' : '' }}" href="{{ route('matrimonio') }}"><i class="bi bi-gem me-2"></i>Matrimonio</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('divorcio') ? 'active' : '' }}" href="{{ route('divorcio') }}"><i class="bi bi-scissors me-2"></i>Divorcio</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('organismos') ? 'active' : '' }}" href="{{ route('organismos') }}"><i class="bi bi-building-fill me-2"></i>Organismos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>@yield('content')</main>
    <button class="chatbot-toggler"><span>🤖</span></button>
    <div class="chatbot-container">
        <div class="chatbot-header"><h2>Asistente Virtual</h2></div>
        <div class="chat-messages"></div>
        <div class="chat-options"></div>
    </div>
    <script>
        const chatbotData = @json($chatbotData ?? []);
        const chatbotToggler = document.querySelector(".chatbot-toggler");
        const chatbotContainer = document.querySelector(".chatbot-container");
        const chatMessages = document.querySelector(".chat-messages");
        const chatOptions = document.querySelector(".chat-options");
        
        const addMessage = (text, sender) => { const msgContainer = document.createElement("div"); msgContainer.classList.add("message", sender === 'bot' ? 'bot-message' : 'user-message'); const p = document.createElement("p"); p.innerHTML = text; msgContainer.appendChild(p); chatMessages.appendChild(msgContainer); chatMessages.scrollTop = chatMessages.scrollHeight; };
        const displayCategories = () => { chatOptions.innerHTML = ""; Object.keys(chatbotData).forEach(category => { const button = document.createElement("button"); button.classList.add("btn", "btn-primary"); button.innerText = category; button.onclick = () => { addMessage(category, 'user'); setTimeout(() => showQuestions(category), 500); }; chatOptions.appendChild(button); }); };
        const showQuestions = (category) => {
            const questions = chatbotData[category].preguntas;
            const source = chatbotData[category].fuente;
            chatOptions.innerHTML = "";
            questions.forEach(q => {
                const button = document.createElement("button");
                button.classList.add("btn", "btn-outline-secondary", "btn-sm");
                button.innerText = q.pregunta.split('/')[0].trim();
                button.onclick = () => {
                    addMessage(q.pregunta.split('/')[0].trim(), 'user');
                    setTimeout(() => {
                        addMessage(q.respuesta, 'bot');
                        setTimeout(() => showQuestions(category), 1000);
                    }, 500);
                };
                chatOptions.appendChild(button);
            });
            if (source) {
                const sourceButton = document.createElement("button");
                sourceButton.classList.add("btn", "btn-info", "btn-sm", "mt-3");
                

                sourceButton.innerHTML = `<i class="bi bi-box-arrow-up-right me-2"></i>¿Dónde puedo encontrar más información?`;
                
                sourceButton.onclick = () => {
                    addMessage("¿Más información?", 'user');
                    setTimeout(() => { addMessage(source, 'bot'); }, 500);
                };
                chatOptions.appendChild(sourceButton);
            }
            const backButton = document.createElement("button");
            backButton.classList.add("btn", "btn-link", "btn-sm", "mt-2");
            backButton.innerText = "‹ Volver a las categorías";
            backButton.onclick = () => {
                addMessage("Volver a las categorías", 'user');
                setTimeout(() => {
                    chatMessages.innerHTML = "";
                    startChat();
                }, 500);
            };
            chatOptions.appendChild(backButton);
        };
        const startChat = () => { chatMessages.innerHTML = ''; addMessage("¡Hola! Soy tu asistente virtual. Elige una categoría para ver las preguntas frecuentes.", 'bot'); displayCategories(); };
        
        if (chatbotToggler && chatbotContainer) {
            chatbotToggler.addEventListener("click", () => {
                chatbotContainer.classList.toggle("show");
                if (chatbotContainer.classList.contains("show")) {
                    if (Object.keys(chatbotData).length > 0) {
                        startChat();
                    } else {
                        chatMessages.innerHTML = '';
                        chatOptions.innerHTML = '';
                        addMessage("El asistente virtual solo está disponible en la página de inicio.", 'bot');
                    }
                }
            });
        }
    </script>
    <footer class="bg-dark text-white text-center py-4 mt-auto">
    <div class="container">
        <p class="mb-0">© 2025 Relaciones de Familia. Todos los derechos reservados.</p>
        <p class="mb-0">Un recurso informativo creado en Posadas, Misiones.</p>
    </div>
</footer>

</body>
</html>
</body>
</html>