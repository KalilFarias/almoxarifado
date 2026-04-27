<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação de Material</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="bg-white shadow p-4 flex items-center gap-3">
        <span class="bg-yellow-400 text-black font-bold px-3 py-1 rounded">3</span>
        <h1 class="text-xl font-semibold text-gray-800">SOLICITAÇÃO DE MATERIAL (SETOR)</h1>
    </div>

    <!-- Conteúdo -->
    <div class="flex-1 p-6">
        <div class="bg-white shadow-xl rounded-2xl w-full h-full p-6">

            <form method="POST" action="{{ route('request.store') }}" class="space-y-4 h-full flex flex-col">
                @csrf

                <!-- Topo -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-gray-600">Setor Solicitante</label>
                        <select name="setor_id" class="w-full mt-1 border rounded-lg p-2">
                            <option value="1">Instituto de Criminalística</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Data da Solicitação</label>
                        <input type="date" name="data_solicitacao" class="w-full mt-1 border rounded-lg p-2">
                    </div>
                </div>

                <!-- Adicionar Item -->
                <div class="border rounded-xl p-4">
                    <h3 class="font-medium text-gray-700 mb-3">Adicionar Itens</h3>

                    <div class="grid grid-cols-4 gap-3">
                        <input type="text" name="itens[0][codigo]" placeholder="Código" class="border p-2 rounded-lg">
                        <input type="text" name="itens[0][descricao]" placeholder="Descrição" class="border p-2 rounded-lg col-span-2">
                        <input type="text" name="itens[0][unidade]" placeholder="Unidade" class="border p-2 rounded-lg">
                    </div>

                    <div class="grid grid-cols-4 gap-3 mt-3 items-end">
                        <input type="number" name="itens[0][quantidade]" placeholder="Quantidade" class="border p-2 rounded-lg">
                    </div>
                </div>

                <!-- Observação -->
                <div>
                    <label class="text-sm text-gray-600">Observação (opcional)</label>
                    <textarea name="observacao" class="w-full mt-1 border rounded-lg p-2" rows="3" placeholder="Digite uma observação..."></textarea>
                </div>

                <!-- Actions -->
                <div class="flex justify-between mt-4">
                    <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800">
                        Enviar para Almoxarifado
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>

</body>
</html>
