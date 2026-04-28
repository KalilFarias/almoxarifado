@extends('layouts.app')

@section('content')

    <h1 class="text-xl font-bold mb-4">Aprovação</h1>

    <div class="bg-white p-4 rounded shadow">
        <p><strong>Solicitante:</strong> João</p>

        <table class="w-full mt-4">
            <thead>
            <tr>
                <th>Item</th>
                <th>Qtd</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Papel A4</td>
                <td>10</td>
                <td>Pendente</td>
            </tr>
            </tbody>
        </table>

        <div class="mt-4 flex gap-2">
            <button class="bg-green-600 text-white px-4 py-2 rounded">Aprovar</button>
            <button class="bg-red-600 text-white px-4 py-2 rounded">Rejeitar</button>
        </div>
    </div>

@endsection
