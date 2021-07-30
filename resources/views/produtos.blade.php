<h2>Produtos de informatica</h2>

<form action="/produto/store" method="post">

    {{ csrf_field() }}

    <input type="text" name="name">
    <button type="submit">Cadastrar</button>
</form>

