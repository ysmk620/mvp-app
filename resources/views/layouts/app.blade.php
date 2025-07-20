<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コスメ管理アプリ(MVP)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">
                <a href="{{ route('cosmetics.index') }}">コスメ管理</a>
            </h1>
            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('cosmetics.index') }}"
                            class="px-2 py-1 rounded hover:bg-gray-100 {{ request()->routeIs('cosmetics.index') ? 'bg-gray-200 font-semibold' : '' }}">
                            一覧
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cosmetics.create') }}"
                            class="px-2 py-1 rounded hover:bg-gray-100 {{ request()->routeIs('cosmetics.create') ? 'bg-gray-200 font-semibold' : '' }}">
                            登録
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>

</html>