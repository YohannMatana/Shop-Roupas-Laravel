<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <!-- Cabeçalho -->
        <x-product-header2 :category="$category" />

        <!-- Conteúdo Principal -->
        <div class="flex-grow bg-white dark:bg-gray-800">
            <x-slot name="header"></x-slot>
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Products</h2>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach ($products as $product)
                        <a href="{{ route('products.show', $product->id) }}" class="group">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                {{-- <div class="absolute top-0.5 right-0.5 bg-gray-800 text-white px-2 py-1 rounded">Promoção</div> --}}
                                <img src="{{ $product->image ?? asset('images/bolsa2.png') }}" alt="{{ $product->name }}"
                                    class="h-full w-full object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700 dark:text-gray-200">{{ $product->name }}</h3>
                            <p class="mt-1 text-lg font-medium text-gray-900 dark:text-gray-400">R$
                                {{ number_format($product->price, 2, ',', '.') }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <x-footer />
    </div>
</x-app-layout>
