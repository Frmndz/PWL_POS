<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold">POS System</a>
                <div class="flex space-x-4">
                    <a href="{{ route('home') }}" class="hover:bg-blue-500 px-3 py-2 rounded {{ request()->routeIs('home') ? 'bg-blue-700' : '' }}">Home</a>
                    <a href="{{ route('products.index') }}" class="hover:bg-blue-500 px-3 py-2 rounded {{ request()->routeIs('products.*') ? 'bg-blue-700' : '' }}">Products</a>
                    <a href="{{ route('sales.index') }}" class="hover:bg-blue-500 px-3 py-2 rounded {{ request()->routeIs('sales.*') ? 'bg-blue-700' : '' }}">Sales</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} POS System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>