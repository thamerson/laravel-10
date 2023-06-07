<h1>Nova duvida</h1>

<form action="{{route('supports.store')}}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="descricao"></textarea>
    <button type="submit">enviar</button>
</form>