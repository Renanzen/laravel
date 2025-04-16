<form action="{{ route('view.add.personagem') }}" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <br>

    <label for="poder">Poder</label>
    <input type="text" name="poder" id="poder">
    <br>

    <button type="submit">Cadastrar</button>
</form>