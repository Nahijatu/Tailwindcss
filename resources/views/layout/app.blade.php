<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>


  <!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
    

        <!-- Hamburger Menu (Mobile) -->
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div id="menu" class="hidden lg:flex space-x-4">
            <a href="/" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Home</a>
            <a href="/about" class="text-white hover:bg-blue-700 px-3 py-2 rounded">About</a>
            <a href="/services" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Services</a>
            <a href="/contact" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Contact</a>
        </div>

        <!-- User Dropdown -->
        <div class="hidden lg:block relative">
            <button id="user-menu" class="text-white focus:outline-none flex items-center space-x-2">
                <span>Hi, User</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden space-y-2 mt-4">
        <a href="/" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Home</a>
        <a href="/about" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">About</a>
        <a href="/services" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Services</a>
        <a href="/contact" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Contact</a>
    </div>
</nav>
@yield('content')
<!-- Tailwind CSS Script -->
<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').onclick = function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    };

    // Toggle user dropdown menu
    document.getElementById('user-menu').onclick = function() {
        document.getElementById('dropdown').classList.toggle('hidden');
    };
</script>

</body>
</html>

<!-- Navbar
<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
    

        <!-- Hamburger Menu (Mobile) -->
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div id="menu" class="hidden lg:flex space-x-4">
            <a href="/" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Home</a>
            <a href="/about" class="text-white hover:bg-blue-700 px-3 py-2 rounded">About</a>
            <a href="/services" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Services</a>
            <a href="/contact" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Contact</a>
        </div>

        <!-- User Dropdown -->
        <div class="hidden lg:block relative">
            <button id="user-menu" class="text-white focus:outline-none flex items-center space-x-2">
                <span>Hi, User</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="/settings" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden space-y-2 mt-4">
        <a href="/" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Home</a>
        <a href="/about" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">About</a>
        <a href="/services" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Services</a>
        <a href="/contact" class="block text-white hover:bg-blue-700 px-4 py-2 rounded">Contact</a>
    </div>
</nav>

<!-- Tailwind CSS Script -->
<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').onclick = function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    };

    // Toggle user dropdown menu
    document.getElementById('user-menu').onclick = function() {
        document.getElementById('dropdown').classList.toggle('hidden');
    };
</script> -->
