@foreach($clientes as $cliente)
    <li>{{ $cliente }}</li>
@endforeach
@empty($clientes)
    <p>Nenhum cliente cadastrado.</p>
@endempty