@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-8">

            <h1 class="text-2xl font-bold mb-6 text-gray-800">
                Adicionar Material
            </h1>

            <form method="POST" action="{{ route('products.store') }}" class="space-y-5">
                @csrf

                {{-- Nome --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Nome do Material
                    </label>
                    <input type="text" name="name"
                           class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           required>
                </div>

                {{-- Código --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Código
                    </label>
                    <input type="text" name="code"
                           class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           required>
                </div>

                {{-- Quantidade --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Quantidade
                    </label>
                    <input type="number" name="quantity"
                           class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           required>
                </div>
                {{-- Unidade de medida --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Unidade de Medida
                    </label>
                    <input type="text" name="unit"
                           class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           required>
                </div>

                {{-- Descrição --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Descrição
                    </label>
                    <textarea name="description"
                              class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                              rows="3"></textarea>
                </div>

                {{-- Botões --}}
                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('products.index') }}"
                       class="text-gray-600 hover:text-gray-800">
                        ← Voltar
                    </a>

                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Salvar
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
