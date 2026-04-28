<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white min-h-screen p-4">
        <h2 class="text-xl font-bold mb-6">Almoxarifado</h2>

        <nav class="space-y-2">
            <a href="/dashboard" class="block hover:bg-blue-700 p-2 rounded">Dashboard</a>
            <a href="/requests/create" class="block hover:bg-blue-700 p-2 rounded">Solicitações</a>
            <a href="/products" class="block hover:bg-blue-700 p-2 rounded">Materiais</a>
            <a href="/stock" class="block hover:bg-blue-700 p-2 rounded">Estoque</a>
            <a href="/reports" class="block hover:bg-blue-700 p-2 rounded">Relatórios</a>
        </nav>
    </aside>

    <!-- Conteúdo -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>

</body>
</html>
