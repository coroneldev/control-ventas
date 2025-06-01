<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md flex flex-col justify-between">
        <div>
            <div class="p-6 text-center font-bold text-xl border-b">Sistema</div>
            <nav class="mt-6">
                <a href="{{ route('dashboard') }}" class="block py-2 px-6 hover:bg-gray-200">Inicio</a>
                <a href="{{ route('productos.index') }}" class="block py-2 px-6 hover:bg-gray-200">Productos</a>
            </nav>
        </div>

        <!-- Logout -->
        <div class="p-6 border-t">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-4 bg-red-100 text-red-700 hover:bg-red-200 rounded">
                    Cerrar sesión
                </button>
            </form>
        </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>
</body>
</html>
