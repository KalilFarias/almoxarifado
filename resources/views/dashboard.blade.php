@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded shadow">12 Requisições</div>
        <div class="bg-white p-4 rounded shadow">08 Pendentes</div>
        <div class="bg-white p-4 rounded shadow">05 Aprovadas</div>
        <div class="bg-white p-4 rounded shadow text-red-500">236 Itens</div>
    </div>

    <div class="bg-white mt-6 p-6 rounded shadow">
        <h2 class="mb-4 font-bold">Consumo Mensal</h2>
        <div class="h-40 bg-gray-200"></div>
    </div>

@endsection
