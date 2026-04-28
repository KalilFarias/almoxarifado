@extends('layouts.app')

@section('content')

    <h1 class="text-xl font-bold mb-4">Solicitação de Material</h1>

    <form method="POST" action="/requests">
        @csrf

        <div class="grid grid-cols-3 gap-4">
            <input type="text" name="sector" placeholder="Setor" class="border p-2">
            <input type="date" name="date" class="border p-2">
            <input type="text" name="responsible" placeholder="Responsável" class="border p-2">
        </div>

        <div class="mt-4">
            <input type="text" placeholder="Item" class="border p-2 w-full">
        </div>

        <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
            Adicionar
        </button>

    </form>

@endsection
