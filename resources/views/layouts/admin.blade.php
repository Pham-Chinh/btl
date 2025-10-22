<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Admin Panel')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r">
            <div class="p-4 font-bold text-xl">Admin</div>
            <nav class="p-2 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Dashboard</a>
                {{-- <a href="{{ route('admin.users.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Users</a> --}}
            </nav>
        </aside>

        <!-- Main -->
        <main class="flex-1">
            <header class="bg-white border-b p-4 flex justify-between">
                <div>@yield('header','Dashboard')</div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="px-3 py-1 border rounded">Logout</button>
                    </form>
                </div>
            </header>

            <section class="p-6">
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>

