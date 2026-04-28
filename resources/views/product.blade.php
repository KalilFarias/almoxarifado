@extends('layouts.app')

@section('content')

    <h1 class="text-xl font-bold mb-4">Materiais</h1>

    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Novo</a>

    <table class="w-full mt-4 bg-white shadow rounded">
        <thead>
        <tr>
            <th class="p-2">Código</th>
            <th class="p-2">Nome</th>
            <th class="p-2">Unidade</th>
            <th class="p-2">Estoque</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td class="p-2">{{ $product->code }}</td>
                <td class="p-2">{{ $product->name }}</td>
                <td class="p-2">{{ $product->unit }}</td>
                <td class="p-2">{{ $product->current_stock }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
