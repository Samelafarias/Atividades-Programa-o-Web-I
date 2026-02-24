<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Web - ADS</title>

    <style>
        /* Reset simples */
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        /* Cabeçalho */
        header {
            background-color: #004080;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Menu */
        nav {
            background-color: #0066cc;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Conteúdo */
        main {
            padding: 20px;
            min-height: 400px;
        }

        .card {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        /* Rodapé */
        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

    <header>
        <h1>Sistema Web - Programação Web I</h1>
    </header>

<nav>
    <a href="{{ route('principal') }}">Home</a>
    <a href="{{ route('sobrenos') }}">Sobre</a>
    <a href="{{ route('contato') }}">Contato</a>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('app.clientes') }}">Clientes</a>
    <a href="{{ route('app.fornecedores', ['nome' => 'EmpresaX', 'status' => 'ativo', 'categoria' => 'nacional']) }}">Fornecedores</a>
    <a href="{{ route('app.produtos') }}">Produtos</a>
</nav>

    <main>
        <div class="card">
            <h2>Título da Página</h2>
            <p>
                Este é o conteúdo principal da página.
                Aqui os alunos poderão inserir dados vindos do Controller.
            </p>

            <p><strong>Exemplo de dados:</strong></p>
            <ul>
                <li>Nome: João Silva</li>
                <li>Status: Ativo</li>
                <li>Cidade: Boa Viagem</li>
            </ul>
        </div>
    </main>

    <footer>
        <p>IFCE Campus Boa Viagem - ADS - Programação Web I</p>
    </footer>

</body>
</html>