<h1>Requisição #{{ $request->id }}</h1>

<p>Status: {{ $request->status }}</p>
<p>Observação: {{ $request->observacao }}</p>

<table border="1">
    <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Quantidade</th>
    </tr>

    @foreach($request->items as $item)
        <tr>
            <td>{{ $item->material->code }}</td>
            <td>{{ $item->material->description }}</td>
            <td>{{ $item->quantity_requested }}</td>
        </tr>
    @endforeach
</table>
