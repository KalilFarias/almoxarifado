<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<div class="flex justify-center items-center min-h-screen bg-slate-50 font-sans antialiased">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-slate-100">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-800 tracking-tight">Bem-vindo de volta</h2>
            <p class="text-slate-500 mt-2">Insira seus dados para acessar o painel</p>
        </div>

        <form method="POST" action="/" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1 ml-1">E-mail</label>
                <input type="email" name="email" placeholder="nome@exemplo.com"
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none transition-all
                              focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 placeholder:text-slate-400">
            </div>

            <div>
                <div class="flex justify-between items-center mb-1 ml-1">
                    <label class="block text-sm font-semibold text-slate-700">Senha</label>
                    <a href="#" class="text-xs font-medium text-blue-600 hover:underline">Esqueceu a senha?</a>
                </div>
                <input type="password" name="password" placeholder="••••••••"
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 outline-none transition-all
                              focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 placeholder:text-slate-400">
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="remember" class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                <label for="remember" class="ml-2 text-sm text-slate-600 cursor-pointer">Lembrar-me neste dispositivo</label>
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-700 active:scale-[0.98] text-white font-bold py-3 rounded-xl
                           transition-all duration-200 shadow-lg shadow-blue-500/25">
                Entrar na Conta
            </button>
        </form>

        <p class="text-center mt-8 text-sm text-slate-600">
            Ainda não tem conta?
            <a href="#" class="font-bold text-blue-600 hover:text-blue-700 transition-colors">Crie uma agora</a>
        </p>
    </div>
</div>
