<head>
    <style>
        body{
            font-family: Arial;
        }
    </style>
</head>
@foreach ($personagem as $heroi)
    <h2>Nome do Personagem: {{ $heroi['nome'] }}</h2>
    <h3>Poder do Personagem: {{ $heroi['poder'] }}</h3>
@endforeach

