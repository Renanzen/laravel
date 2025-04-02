@extends('_partials/main')

@section('conteudo')
<div class="cadastrar-animal-container">
    <h2>Cadastro de Animal</h2>
     <form action="{{ route('listar-animais') }}" method="POST">
      @csrf
      <label for="nome">Nome do Animal:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="especie">Cor:</label>
      <input type="text" id="cor" name="cor" required>

      <label for="especie">Peso:</label>
      <input type="text" id="peso" name="peso" required>

      <label for="idade">Idade (em anos):</label>
      <input type="number" id="idade" name="idade" min="0" required>

      <label for="especie">Espécie:</label>
      <input type="text" id="especie" name="especie" required>
      
      <label for="especie">Raça:</label>
      <input type="text" id="raca" name="raca" required>

      <button type="submit" class="btn-custom-primary">Cadastrar Animal</button>
    </form>
  </div>
@endsection