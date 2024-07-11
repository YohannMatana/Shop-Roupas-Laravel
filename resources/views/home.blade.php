<x-app-layout>

    <div class="bg-gray-200 dark:bg-gray-700 mx-10 mt-6 py-5 h-80 flex items-center justify-center rounded-lg">
        <div class="container mx-auto px-4 pt-2 lg:px-8 my-5">
            <div class="text-center text-white">
                <div x-data="carousel()" x-init="autoRotate()" class="max-w-5xl mx-auto">
                    <div class="relative overflow-hidden rounded-lg">
                        <div x-ref="carousel" class="flex h-60 ms:h-36 transition-transform duration-300">
                            {{-- mobile h-36 web h-60 (utilizar somente imagens verticais) --}}
                            <!-- Adicione suas imagens aqui -->
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/tatuagem.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                            </div>
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa2.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                            </div>
                            <div class="min-w-full flex">
                                <a href="#" class="block mx-auto rounded overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/bolsa3.png') }}" alt="Imagem 1" class="h-full">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <button @click="prev()" class="p-2 bg-gray-800 text-white rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <div class="space-x-2">
                            <template x-for="(image, index) in images" :key="index">
                                <button @click="goTo(index)"
                                    :class="{ 'bg-gray-800': currentIndex === index, 'bg-gray-400': currentIndex !== index }"
                                    class="w-3 h-3 rounded-full"></button>
                            </template>
                        </div>
                        <button @click="next()" class="p-2 bg-gray-800 text-white rounded-full">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Conteúdo da Página -->

    <div class="bg-white dark:bg-gray-800">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="text-5xl font-semibold text-center text-gray-700 dark:text-gray-200 p-6">Produtos</h1>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($categories as $category)
                    <a href="{{ route('product.list', $category->name) }}" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                class="h-full w-full object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 font-medium text-lg text-gray-700 dark:text-gray-200">{{ $category->name }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
