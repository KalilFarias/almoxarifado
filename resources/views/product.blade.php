<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Materiais</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">

<div class="max-w-7xl mx-auto">

    <h1 class="text-3xl font-bold mb-6">Cadastro de Materiais</h1>

    <!-- FORMULÁRIO -->
    <div class="bg-white p-6 rounded-2xl shadow mb-8">
        <form action="{{ route('product.store') }}" method="POST" class="grid grid-cols-5 gap-4">
            @csrf

            <input type="text" name="code" placeholder="Código"
                   class="border p-2 rounded w-full" required>

            <input type="text" name="name" placeholder="Nome do Produto"
                   class="border p-2 rounded w-full" required>

            <input type="text" name="unit" placeholder="Unidade (ex: UN, KG)"
                   class="border p-2 rounded w-full" required>

            <input type="number" name="current_stock" placeholder="Estoque"
                   class="border p-2 rounded w-full" required>

            <button type="submit"
                    class="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">
                Cadastrar
            </button>
        </form>
    </div>

    <!-- TABELA -->
    <div class="bg-white p-6 rounded-2xl shadow">
        <table class="w-full text-left">
            <thead>
            <tr class="border-b">
                <th class="p-2">Código</th>
                <th class="p-2">Nome</th>
                <th class="p-2">Unidade</th>
                <th class="p-2">Estoque</th>
                <th class="p-2 text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr class="border-b hover:bg-gray-50">

                    <td class="p-2">{{ $product->code }}</td>
                    <td class="p-2">{{ $product->name }}</td>
                    <td class="p-2">{{ $product->unit }}</td>
                    <td class="p-2">{{ $product->current_stock }}</td>

                    <td class="p-2 flex gap-2 justify-center">

                        <!-- EDITAR -->
                        <a href="{{ route('product.edit', $product->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                            Editar
                        </a>

                        <!-- DELETAR -->
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                              onsubmit="return confirm('Tem certeza?')">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Remover
                            </button>
                        </form>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
