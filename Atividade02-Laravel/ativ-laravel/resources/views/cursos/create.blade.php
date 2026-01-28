<h1>Cadastrar Novo Curso</h1>
<form action="/cursos" method="POST">

    @csrf 
    <input type="text" name="nome">
    <button type="submit">Enviar</button>

</form>