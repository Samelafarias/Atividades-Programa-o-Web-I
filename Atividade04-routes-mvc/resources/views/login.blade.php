@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card">
        <h1>Login</h1>
        <p>Introduza as suas credenciais para aceder à área restrita do sistema.</p>
        
        <form>
            <div style="margin-bottom: 10px;">
                <label>Utilizador:</label><br>
                <input type="text" name="user">
            </div>
            <div>
                <label>Palavra-passe:</label><br>
                <input type="password" name="password">
            </div>
            <br>
            <button type="submit">Entrar</button>
        </form>
    </div>
@endsection