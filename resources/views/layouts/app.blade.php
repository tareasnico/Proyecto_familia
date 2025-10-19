<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones de Familia</title>

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
            padding-top: 70px; /* Importante: espacio para el navbar fijo */
            background-color: #f8f9fa; 
            font-family: 'Montserrat', sans-serif; 
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex-grow: 1; /* Empuja el footer hacia abajo */
        }
        h1, h2, h3, h4, h5, h6, .btn { 
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        /* Estilos de tu Barra de Navegación */
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 400;
            transition: all 0.2s ease-in-out;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-dark .navbar-nav .nav-link.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.15);
            font-weight: 700;
        }
        
        /* Estilos del Chatbot */
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
    </style>

    @yield('head')

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: var(--custom-navbar-bg);">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('inicio') }}">Relaciones de Familia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('parentesco') ? 'active' : '' }}" href="{{ route('parentesco') }}">Parentesco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('filiacion') ? 'active' : '' }}" href="{{ route('filiacion') }}">Filiación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('adopcion') ? 'active' : '' }}" href="{{ route('adopcion') }}">Adopción</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('matrimonio') ? 'active' : '' }}" href="{{ route('matrimonio') }}">Matrimonio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('divorcio') ? 'active' : '' }}" href="{{ route('divorcio') }}">Divorcio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('organismos') ? 'active' : '' }}" href="{{ route('organismos') }}">Organismos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-auto" style="background-color: #f8f9fa;">
        <div class="container">
            <p class="text-muted mb-0">
                © 2025 Relaciones de Familia.
                <a href="{{ route('login') }}" class="text-muted ms-3">Control</a>
            </p>
        </div>
    </footer>

    <button class="chatbot-toggler">
        <span class="bi bi-robot"></span>
    </button>
    <div class="chatbot-container">
        <div class="chatbot-header">
            <p class="mb-0">Asistente Virtual</p>
        </div>
        <div class="chat-messages">
            </div>
        <div class="chat-options">
            </div>
    </div>
    
    <script>
        // Lógica del Chatbot (simplificada)
        document.addEventListener('DOMContentLoaded', () => {
            const chatbotToggler = document.querySelector('.chatbot-toggler');
            const chatbotContainer = document.querySelector('.chatbot-container');
            
            chatbotToggler.addEventListener('click', () => {
                chatbotContainer.classList.toggle('show');
            });
            // Aquí iría toda tu lógica completa del chatbot
        });
    </script>

</body>
</html>