@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Entrada de Itens</h1>

<form method="POST" action="/stock/entry">
@csrf

<select name="product_id" class="border p-2 w-full mb-3">
    @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
    @endforeach
</select>

<input type="number" name="quantity" placeholder="Quantidade"
    class="border p-2 w-full mb-3">

<button class="bg-blue-600 text-white px-4 py-2 rounded">
    Registrar
</button>

</form>

@endsection
