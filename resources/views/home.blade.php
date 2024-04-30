@extends('layouts.app')
<!-- Promo Section -->
<div id="promoBanner" class="bg-black text-center py-2 flex items-center justify-between">
    <p class="text-sm text-white flex-grow">Use the promo code: PROMO10 to save 10% ! <a href="#"
            class="underline">See details.</a></p>

    <!-- Tombol Hapus dengan Karakter Unicode -->
    <button id="hapusPromo" class="text-white ml-2 focus:outline-none">&#10006;</button>
</div>

@section('content')
{{-- 1 --}}
    <div class="relative bg-cover bg-center bg-no-repeat h-screen mb-5 "
        style="background-image: url('{{ asset('img/bg1.avif') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="container mx-auto text-center text-white">
                <h1 class="text-4xl font-bold mb-4">Discover Your Fashion</h1>
                <p class="text-lg mb-5">Choose the style that you prefer and evaluate the effectiveness of this style.</p>
                <button type="submit" class="bg-white hover:bg-gray-400 font-bold mr-2 px-10 py-4 rounded"
                    style="border-radius:50px; color: #000;">Shop Men's</button>
                <button type="submit" class="bg-white hover:bg-gray-400 font-bold mr-2 px-10 py-4 rounded"
                    style="border-radius:50px; color: #000;">Shop Women's</button>
                <button type="submit" class="bg-white hover:bg-gray-400 font-bold mr-2 px-10 py-4 rounded"
                    style="border-radius:50px; color: #000;">Shop Kid's</button>
            </div>
        </div>
    </div>


    {{-- 2 --}}
    <div class="container mx-auto py-12 mb-5">
        <h1 class="text-3xl mb-4 font-semibold ml-4">Shop by Activity</h1>

        <div class="grid grid-cols-3 gap-4">
            <!-- 3 Gambar di atas -->
            <div class="max-w-sm mx-auto">
                <div class="bg-gray-100 font-semibold">
                    <img src="{{ asset('img/card-hike.avif') }}" alt="Image 1" class="w-full h-auto">
                    <div class="p-2">
                        <p class="block my-2">Hike</p>
                    </div>
                </div>
            </div>

            <div class="max-w-sm mx-auto">
                <div class="bg-gray-100 font-semibold">
                    <img src="{{ asset('img/card-trailrun.avif') }}" alt="Image 2" class="w-full h-auto">
                    <div class="p-2">
                        <p class="block my-2">Trail Run</p>
                    </div>
                </div>
            </div>

            <div class="max-w-sm mx-auto">
                <div class="bg-gray-100 font-semibold">
                    <img src="{{ asset('img/card-climb.avif') }}" alt="Image 3" class="w-full h-auto">
                    <div class="p-2">
                        <p class="block my-2">Climb</p>
                    </div>
                </div>
            </div>

            <!-- 2 Gambar di bawah -->
            <div class="max-w-sm mx-auto">
                <div class="bg-gray-100 font-semibold">
                    <img src="{{ asset('img/card-snow.avif') }}" alt="Image 4" class="w-full h-auto">
                    <div class="p-2">
                        <p class="block my-2">Snow</p>
                    </div>
                </div>
            </div>

            <div class="max-w-sm mx-auto">
                <div class="bg-gray-100 font-semibold">
                    <img src="{{ asset('img/card-expedition.avif') }}" alt="Image 5" class="w-full h-auto">
                    <div class="p-2">
                        <p class="block my-2">Expedition</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- 3 --}}
    <div class="container mx-auto py-12 bg-gray-100 mb-5">
        <h1 class="text-3xl mb-4 font-semibold ml-4">Extend your snow day.</h1>
        <p class="mb-4 ml-4">Discover gear that goes bell to bell, from your backyard to the backcountry.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-2">
            <div class="max-w-full mx-auto">
                <div class="bg-white font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/kids.avif') }}" alt="Image 1" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block text-center my-2"> Shop Kid's <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>

            <div class="max-w-full mx-auto">
                <div class="bg-white font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/women.avif') }}" alt="Image 2" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block text-center my-2">Shop Women's <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>

            <div class="max-w-full mx-auto">
                <div class="bg-white font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/men.avif') }}" alt="Image 3" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block text-center my-2">Shop Men's <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 4 --}}
    <div class="container mx-auto py-12 mb-5">
        <h1 class="text-3xl mb-4 font-semibold ml-4">For around the block—and beyond.</h1>
        <p class="mb-4 ml-4">Go where no slipper has ever gone before.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Gambar 1 -->
            <div class="max-w-full mx-auto">
                <div class="bg-gray-100 font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/slipper1.avif') }}" alt="Image 1" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block my-2">Shop Men's Slipper <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
    
            <!-- Gambar 2 -->
            <div class="max-w-full mx-auto">
                <div class="bg-gray-100 font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/slipper2.avif') }}" alt="Image 2" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block my-2">Shop Women's Slipper <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    {{-- 5 --}}
    <div class="container mx-auto bg-gray-100 py-12 mb-5">
        <h1 class="text-3xl mb-4 font-semibold ml-4">Keep pace with the cold.</h1>
        <p class="mb-4 ml-4">Stay the course in warm, packable layers built for running when the digits drop.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Gambar 1 -->
            <div class="max-w-full mx-auto">
                <div class="font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/trailrun1.avif') }}" alt="Image 1" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block my-2">Shop Women's Trail Run <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
    
            <!-- Gambar 2 -->
            <div class="max-w-full mx-auto">
                <div class="font-semibold rounded overflow-hidden">
                    <img src="{{ asset('img/trailrun2.avif') }}" alt="Image 2" class="w-full h-auto">
                    <div class="p-3">
                        <a href="#" class="block my-2">Shop Men's Trail Run <i class="fas fa-arrow-right ml-1" style="font-size: 14px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    {{-- 6 --}}
    <div class="text-center py-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4 mx-2">Sign up for text updates Get $20 off online orders $100 or more.</h1>
        <p class="text-xl font-semibold text-gray-800 m-2">Text <span class="text-code">SUMMIT</span> to <span class="text-code">XXXXX</span></p>
        <p class="text-gray-600 my-4 mx-12">Exclusions apply. By texting SUMMIT to XXXXX, you consent to receive text messages from Lewa Fashion using automated technology. Consent is not a condition for purchase. Message & data rates may apply. <a href="" style="text-decoration: underline">See Terms.</a></p>
    </div>
@endsection
