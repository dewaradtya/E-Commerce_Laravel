<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8iN17U4LHrNn7ZLST9Un6IedfZopDmjL21u9aUmH7MbPrz4Lr+OQb4l5K" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Lewa Fashion</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo2.svg') }}">
</head>

<body>
    <div class="tab container mx-auto mt-2 mr-2 text-right">
        <ul class="flex">
            <li class="mr-2">
                <a href="#" class="text-sm text-gray-500 hover:text-gray-800">Order Status |</a>
            </li>
            <li class="mr-2">
                <a href="#" class="text-sm text-gray-500 hover:text-gray-800">Find a Store |</a>
            </li>
            <li class="mr-2">
                <a href="#" class="text-sm text-gray-500 hover:text-gray-800">Help |</a>
            </li>
            <li class="mr-2">
                <a href="{{ route('auth.login') }}" class="text-sm text-gray-500 hover:text-gray-800">
                    Sign In <i class="fas fa-sign-in-alt ml-1"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Navbar Section -->
    <nav class="bg-white-800">
        <div class="container mx-auto flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-xl font-semibold">
                <img src="{{ asset('img/logo2.svg') }}" alt="Logo" style="width: 90px; height: 70px;">
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="lg:hidden focus:outline-none">
                <i class="fas fa-bars" style="font-size: 24px;"></i>
            </button>

            <!-- Navbar Links -->
            <div id="navbarContent" class="hidden lg:flex space-x-4 flex-wrap mx-auto font-semibold">
                <a href="{{ route('home') }}"
                    class="mx-auto hover:text-gray-500 transition duration-300 ease-in-out">Home</a>
                <a href="{{ route('products') }}"
                    class="mx-auto hover:text-gray-500 transition duration-300 ease-in-out">Products</a>
                <a href="{{ route('about') }}"
                    class="mx-auto hover:text-gray-500 transition duration-300 ease-in-out">About Us</a>
                <a href="{{ route('contact') }}"
                    class="mx-auto hover:text-gray-500 transition duration-300 ease-in-out">Contact</a>
            </div>

            <!-- Search Form -->
            <form action="{{ route('search') }}" method="GET" class="hidden lg:block items-center relative">
                <input type="text" name="query" placeholder="Search..."
                    class="px-2 py-1 border-b border-gray-600 focus:outline-none focus:border-red-500 transition duration-300 ease-in-out pl-4">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-3 focus:outline-none"><i
                        class="fas fa-search" style="font-size: 20px;"></i></button>
            </form>
            <a href=""><i class="fas fa-shopping-cart ml-3 mb-3 hover:text-green-900 transition duration-200"
                    style="font-size: 24px;"></i></a>
        </div>
    </nav>

    <!-- Mobile Menu (initially hidden) -->
    <div id="mobileMenu" class="lg:hidden hidden bg-white-800 p-4">
        <a href="{{ route('home') }}" class="block mb-2 hover:text-gray-500 transition duration-300 ease-in-out">Home</a>
        <a href="{{ route('products') }}" class="block mb-2 hover:text-gray-500 transition duration-300 ease-in-out">Products</a>
        <a href="{{ route('about') }}" class="block mb-2 hover:text-gray-500 transition duration-300 ease-in-out">About Us</a>
        <a href="{{ route('contact') }}" class="block mb-2 hover:text-gray-500 transition duration-300 ease-in-out">Contact</a>
    
        <form action="{{ route('search') }}" method="GET" class="mt-4 relative">
            <input type="text" name="query" placeholder="Search..."
                class="block w-full mt-2 px-2 py-1 pl-4 border-b border-gray-600 focus:outline-none focus:border-red-500 transition duration-300 ease-in-out">
            <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-3 focus:outline-none"><i
                    class="fas fa-search" style="font-size: 24px;"></i></button>
        </form>
    </div>


    <!-- Content Section -->
    @yield('content')


    <!-- Footer Section -->
    <footer class="bg-white-800 py-12">
        <div class="container mx-auto flex flex-wrap justify-around footer-links">
            <div class="mb-3">
                <h3 class="text-lg font-semibold mb-3">Shop</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Categories</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Best Sellers</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">New Arrivals</a></li>
                </ul>
            </div>

            <div class="mb-3">
                <h3 class="text-lg font-semibold mb-4">Help</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Customer Service</a>
                    </li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">FAQs</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Shipping</a></li>
                </ul>
            </div>

            <div class="mb-3">
                <h3 class="text-lg font-semibold mb-3">About</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Our Story</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Mission</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Contact Us</a></li>
                </ul>
            </div>

            <div class="mb-3">
                <h3 class="text-lg font-semibold mb-4">Discover</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Blog</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Events</a></li>
                </ul>
            </div>

            <div class="mb-3">
                <h3 class="text-lg font-semibold mb-4">Explore</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Collections</a></li>
                    <li><a href="#" class="hover:text-gray-500 transition duration-300">Trends</a></li>
                </ul>
            </div>
        </div>

        {{-- footer store locator-enter your email --}}
        <div class="container mx-auto flex flex-wrap justify-around footer-links py-10">
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-4">Store Locator</h3>
                <p class="mb-4">Explore a retail store</p>
                <button type="submit"
                    class="bg-black text-white hover:bg-gray-600 transition duration-300 font-bold px-10 py-4 rounded"
                    style="border-radius:50px;">Find a Store</button>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-3">Follow Lewa</h3>
                <ul class="container mx-auto flex flex-wrap justify-around">
                    <li>
                        <a href="#">
                            <i class="fab fa-tiktok mr-2 hover:text-gray-500" style="font-size: 32px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter mx-2 hover:text-gray-500" style="font-size: 32px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram mx-2 hover:text-gray-500" style="font-size: 32px;"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Enter Your Email</h3>
                <p>Adventure is everywhere.</p>
                <p class="mb-4">Even in your inbox.</p>
                <form>
                    <input type="email" class="px-4 py-2 border border-gray-600 rounded">
                    <button type="submit" class="bg-green-900 text-white px-4 py-3 rounded"><i
                            class="far fa-paper-plane"></i></button>
                </form>
                <div class="mt-4 flex items-center">
                    <input type="checkbox" class="mr-4">
                    <label for="agree" class="text-sm">I agree to the <a href="#"
                            style="text-decoration:underline;">Privacy Policy & Terms of Use</a></label>
                </div>
            </div>
        </div>

        <div class="py-2">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-xl font-semibold flex items-center">
                    <img src="{{ asset('img/logo2.svg') }}" alt="Logo" style="width: 200px; height: 200px;">
                    <p class="mr-4">&copy; Lewa Fashion, A VF Company</p>
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="flex flex-wrap justify-around sm:mt-0">
                <p><a href="#" class="underline">CA Supply Chains Act</a></p>
                <p><a href="#" class="underline">UK Slavery Act</a></p>
                <p><a href="#" class="underline">Privacy Policy</a></p>
                <p><a href="#" class="underline">Your Privacy Choices</a></p>
                <p><a href="#" class="underline">Terms of Use</a></p>
                <p><a href="#" class="underline">Accessibility Statement</a></p>
            </div>
        </div>

    </footer>


    <!-- Script JavaScript -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <!-- Script JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        function closePromoBanner() {
            var promoBanner = document.getElementById('promoBanner');
            promoBanner.style.opacity = '0';
            setTimeout(function() {
                promoBanner.style.display = 'none';
            }, 500); // Mengatur waktu (dalam milidetik) untuk menutup secara perlahan
        }

        // Mengaitkan fungsi dengan tombol close
        var closeBtn = document.getElementById('hapusPromo');
        closeBtn.addEventListener('click', closePromoBanner);
    </script>

</body>

</html>
