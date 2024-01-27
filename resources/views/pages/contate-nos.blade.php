@extends('index')

@section('content')
    <div id="container-contate-nos">
        <div class="contact-container-1">
            <h2>Eternity IA</h2>
            <h3>Contate-nos</h3>
        </div>
        <div class="contact-container-2">
            <div id="contact-incontainer">
                <img src="../img/icons8-support-100.png" alt="" width="40px">
                <h4>Ao enviar um e-mail para nossa equipe você receberá uma resposta em pouco tempo</h4>
                <button onclick="enviarEmail()">Envie-nos um email</button>
            </div>
        </div>
    </div>
@endsection
