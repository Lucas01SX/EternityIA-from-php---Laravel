<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Eternity IA</title>
        <!-- Fonts -->
        @yield('styles')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/index.css">
    </head>
    <body class="antialiased">
        <nav>
            <ul class="ul-nav-1">
                <li class="logo">
                    <img src="../img/logo.png" alt="" width="100px" height="100px">
                </li>
                <a href='/'><li class="ul-nav-1-li">Página Inicial</li></a>
                <a href='/servicos'><li class="ul-nav-1-li">Serviços</li></a>
                <a href='/sobre-nos'><li class="ul-nav-1-li">Sobre nós</li></a>
                <a href='/contate-nos'><li class="ul-nav-1-li">Contate-nos</li></a>
            </ul>
            <ul class="ul-nav-2">
                <a href="https://www.linkedin.com/in/eternity-ia-b053892aa/"><li class="ul-nav-2-li"><img src="../img/icons8-linkedin-50.png" alt="Linkedin"></li></a>
                <li class="ul-nav-2-li" onclick="enviarEmail()"><img src="../img/icons8-mail-50.png" alt="E-mail"></li>
                <a href="https://twitter.com/EternityIa"><li class="ul-nav-2-li"><img src="../img/icons8-twitter-50.png" alt="Twitter"></li></a>
            </ul>
        </nav>
        <div class="fade-effect">
            <header>
                <div id="header-section">
                    <div class="header-section-1">
                        <h1>Bem-Vindo(a) a Eternity IA</h1>
                        <p>A Eternity IA se destaca como uma pioneira em inovação, sobressaindo-se no desenvolvimento de inteligência artificial especializada na automação da geração de textos e apresentações. Suas avançadas técnicas de processamento de linguagem natural proporcionam soluções eficazes e personalizadas, ajustando-se aos diversos estilos de escrita conforme as demandas específicas. Firme em seu compromisso com a transparência e ética, a IA transforma radicalmente a criação de conteúdo escrito e visual, consolidando-se como líder na vanguarda da inovação no vasto domínio da inteligência artificial.</p>
                    </div>
                </div>
                <div class="header-section-3">
                    <a href='/sobre-nos'><button>Sobre-nós</button></a>
                    <button onclick="enviarEmail()">Contate-nos</button>
                </div>
            </header>
        </div>
        <div>
            <main class="fadde-effect">
                @yield('content')
            </main>
        </div>
        <footer>
            <div id="container-4">
                <p>Contate-nos para mais informações!</p>
                <div class="nome-email">
                    <div class="nome">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome1" name="nome1" required placeholder="Digite seu nome!">
                    </div>
                    <div class="email">
                        <label for="email">Email:</label>
                        <input type="email" id="email1" name="email1" required placeholder="Digite seu e-mail!">
                    </div>
                </div>
                <div class="mensagem">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem1" name="mensagem1" rows="4" required placeholder="Digite sua mensagem!"></textarea>
                </div>
                <button onclick="validarFormulario()">Enviar</button>
            </div>
            <div class="contact">
                <img src="../img/logo.png" alt="" width="150px" height="150px">
                <div>
                    <p>Eternitycloudcontato@hotmail.com</p>
                    <p>© Todos os direitos reservados</p>
                </div>
            </div>
        </footer>
        @yield('scripts')
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Adicione o plugin jQuery.scrollTo -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="../js/index.js"></script>
    </body>
</html>
