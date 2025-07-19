<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コスメ管理アプリ(MVP)</title>
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow mb-6">
        <div class="container mx-auto px-4 py-3 flex space-x-4">
            <a href="{{ route('cosmetics.index') }}"
                class="text-gray-700 hover:text-gray-900 {{ request()->routeIs('cosmetics.index') ? 'font-bold' : '' }}">
                コスメ一覧
            </a>
            <a href="{{ route('cosmetics.create') }}"
                class="text-gray-700 hover:text-gray-900 {{ request()->routeIs('cosmetics.create') ? 'font-bold' : '' }}">
                コスメ登録
            </a>
        </div>
    </nav>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>

</html>