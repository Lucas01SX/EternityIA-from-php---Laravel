@extends('index')

@section('content')
    <div id="container-servicos">
        <div id="Planos">
            <div class="plano-basic">
                <img src="../img/icons8-chatgpt-48.png" alt="Basic Plan" width="60px">
                <h2 class="text-basic text-basic-1">Plano Basic - Mensal</h2>
                <h4 class="text-basic text-basic-2">O Plano basic contém:</h4>
                <h3 class="text-basic text-basic-3">Limite de palavras</h3>
                <h4 class="text-basic text-basic-4">No Plano basic você tem um limite diário de 700 palavras</h4>
                <h3 class="text-basic text-basic-5">GPT 3.5</h3>
                <h4 class="text-basic text-basic-6">O Plano basic contém o GPT 3.5 que é uma tecnologia de IA anterior as mais atuais.</h4>
                <h3 class="text-basic text-basic-7">Geração De Textos</h3>
                <h4 class="text-basic text-basic-8">O Plano Basic oferece exclusivamente a funcionalidade de geração de textos, permitindo aos usuários criar uma variedade de conteúdos escritos. Com foco específico nessa capacidade, é uma opção direcionada para aqueles que buscam uma solução simples e eficaz para a criação de textos.</h4>
            </div>
            <div class="plano-cristal">
                <img src="../img/icons8-chatgpt-64.png" alt="Medium Plan" width="70px">
                <h2 class="text-basic text-basic-1">Plano Cristal - Mensal</h2>
                <h4 class="text-basic text-basic-2">O Plano Cristal contém:</h4>
                <h3 class="text-basic text-basic-3">Limite de palavras</h3>
                <h4 class="text-basic text-basic-4">No Plano Cristal você tem um Limite diário de 4000 palavras</h4>
                <h3 class="text-basic text-basic-5">GPT 3.5</h3>
                <h4 class="text-basic text-basic-6">O Plano Cristal contém o GPT 3.5 que é uma Teconologia de IA anterior as mais atuais.</h4>
                <h3 class="text-basic text-basic-7">Geração De Textos E Apresentações</h3>
                <h4 class="text-basic text-basic-8">O Plano Cristal oferece uma combinação poderosa de recursos, incluindo a geração de textos e apresentações. Com essa assinatura, os usuários têm acesso a uma ampla variedade de ferramentas, permitindo criar não apenas textos envolventes, mas também apresentações visualmente impactantes. É uma opção abrangente para atender às necessidades de criação de conteúdo em diferentes formatos.</h4>
            </div>
            <div class="plano-ruby">
                <img src="../img/icons8-chatgpt-100.png" alt="Big Plan" width="60px">
                <h2 class="text-basic text-basic-1">Plano Ruby - Mensal</h2>
                <h4 class="text-basic text-basic-2">O Plano Ruby contém:</h4>
                <h3 class="text-basic text-basic-3">Limite de palavras</h3>
                <h4 class="text-basic text-basic-4">No Plano Ruby você não tem Limite de palavras!!!</h4>
                <h3 class="text-basic text-basic-5">GPT 4, DALL-E, e mais</h3>
                <h4 class="text-basic text-basic-6">O plano Ruby oferece recursos avançados com GPT-4 e DALL-E, possibilitando geração de textos sofisticados e aprimoramento de imagens em textos ou apresentações. Ideal para usuários que buscam uma abordagem integrada de criação de conteúdo.</h4>
                <h3 class="text-basic text-basic-7">Geração De Textos, Apresentações E Imagens</h3>
                <h4 class="text-basic text-basic-8">O plano Ruby proporciona uma experiência abrangente de criação de conteúdo, permitindo a geração de imagens, apresentações e textos. Ideal para usuários que buscam uma solução completa e avançada para suas necessidades criativas.</h4>
            </div>
        </div>
        <button class="assinar-serviço-btn" onclick="enviarEmail()">Assinar Serviço!</button>
    </div>
@endsection
