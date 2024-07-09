<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="bg-gray-200 dark:bg-gray-700 mx-40 py-5 h-80 flex items-center justify-center rounded-lg">
        <div class="container mx-auto px-4 pt-2 lg:px-8 my-5">
            <div class="text-center text-white">
                <div x-data="carousel()" x-init="autoRotate()" class="max-w-5xl mx-auto">
                    <div class="relative overflow-hidden rounded-lg">
                        <div x-ref="carousel" class="flex h-60 ms:h-36 transition-transform duration-300">
                            {{-- mobile h-36 web h-60 (utilizar somente imagens verticais)--}}
                            <!-- Adicione suas imagens aqui -->
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa2.png') }}" alt="Imagem 2" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa3.png') }}" alt="Imagem 3" class="h-full">
                                </a>
                            </div>
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa2.png') }}" alt="Imagem 2" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa3.png') }}" alt="Imagem 3" class="h-full">
                                </a>
                            </div>
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa2.png') }}" alt="Imagem 2" class="h-full">
                                </a>
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa3.png') }}" alt="Imagem 3" class="h-full">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <button @click="prev()" class="p-2 bg-gray-800 text-white rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <div class="space-x-2">
                            <template x-for="(image, index) in images" :key="index">
                                <button @click="goTo(index)" :class="{'bg-gray-800': currentIndex === index, 'bg-gray-400': currentIndex !== index}" class="w-3 h-3 rounded-full"></button>
                            </template>
                        </div>
                        <button @click="next()" class="p-2 bg-gray-800 text-white rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Conteúdo da Página -->
    <div class="py-12">
        <h1 class="text-center dark:text-white font-bold text-4xl pb-12">DESTAQUES</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 px-8 lg:grid-cols-4 gap-6">
                {{-- @foreach ( as ) --}}
                <div>
                    <div class="relative h-full bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                        <!-- Sale badge -->
                        <div class="absolute top-0.5 right-0.5 bg-gray-800 text-white px-2 py-1 rounded">Sale</div>
                        <!-- Product image -->
                        <img class="w-full object-contain" src="{{ asset('images/bolsa2.png') }}" alt="Product Image">
                        <!-- Product details -->
                        <div class="p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="font-bold dark:text-white">Special Item</h5>
                                <!-- Product price -->
                                <div class="text-gray-500 line-through mb-1">$20.00</div>
                                <div class="font-bold text-xl text-gray-900 dark:text-gray-200">$18.00</div>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-t-0 bg-transparent">
                            <div class="text-center">
                                <a href="#" class="inline-block bg-transparent border border-gray-800 dark:border-gray-200 text-gray-800 dark:text-gray-300 py-2 px-4 rounded hover:bg-gray-800 dark:hover:bg-white hover:text-white dark:hover:text-black">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

</x-app-layout>
