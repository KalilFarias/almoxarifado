@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">Estoque</h1>

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr>
            <th class="p-2">Produto</th>
            <th class="p-2">Atual</th>
            <th class="p-2">Mínimo</th>
            <th class="p-2">Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td class="p-2">{{ $product->name }}</td>
            <td class="p-2">{{ $product->current_stock }}</td>
            <td class="p-2">{{ $product->min_stock }}</td>
            <td class="p-2">
                @if($product->current_stock < $product->min_stock)
                    <span class="text-red-500">Baixo</span>
                @else
                    <span class="text-green-500">Normal</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
