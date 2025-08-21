<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">

    @vite('resources/css/classic/index.css')
    @vite('resources/js/classic/index.js')
</head>

<body style="background-color: #303F9F">
    <div id="app" data-dificuldade="{{ $dificuldade }}"></div>
    <div id="image" data-image="{{ $tecnologia }}"></div>
    <div class="container">
        <div class="row">
            <h1 class="game-name">CODLE</h1>
            <p class="game-difficulty">{{ $dificuldade }}</p>
        </div>
    </div>

    <img id="guess-image" class="img-portrait" alt="Imagem a ser adivinhada"/>
    <div class="container-vidas">
        <span>☕︎</span>
        <span>☕︎</span>
        <span>☕︎</span>
        <span>☕︎</span>
        <span>☕︎</span>
</div>
<div class="flex-center">
    <div class="container-select">
<select id="slim_select">
    @foreach ($tecnologias as $tec)
    <option value="{{ $tec->id }}">{{ $tec->nome }}</option>
    @endforeach
</select>
</div>
<button id="guess-button" class="btn-tech">Adivinhar</button>
</div>
</body>

</html>
