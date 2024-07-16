<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto">
        <div class="col-span-1"></div> <!-- Coluna vazia à esquerda -->

        <div class="col-span-1 p-6 bg-white dark:bg-gray-800">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-300 mb-4">Sua Sacola</h2>
            <div class="mt-8">
                <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                        @foreach (session('cart', []) as $key => $item)
                            <li class="flex py-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <!-- Replace with your product image -->
                                    <img src="{{ $item['product']->image_url }}" alt="{{ $item['product']->name }}" class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900 dark:text-gray-300">
                                            <h3>
                                                <!-- Replace with your product link -->
                                                <a href="#">{{ $item['product']->name }}</a>
                                            </h3>
                                            <p class="ml-4">R$ {{ number_format($item['product']->price, 2, ',', '.') }}</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $item['color'] }}</p>
                                        <p class="mt-1 text-sm text-gray-500">{{ $item['size'] }}</p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">Qtd {{ $item['quantity'] }}</p>

                                        <div class="flex">
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                                                <input type="hidden" name="color" value="{{ $item['color'] }}">
                                                <input type="hidden" name="size" value="{{ $item['size'] }}">
                                                <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-500 dark:hover:text-indigo-600">Remover</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Subtotal e botões de ação -->
            <div class=" pt-6">
                <div class="flex justify-between text-base font-medium text-gray-900 dark:text-gray-300">
                    <p>Subtotal</p>
                    <p>R${{ number_format($subtotal, 2, ',', '.') }}</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">Taxas de envio calculadas no Checkout</p>
                <div class="mt-6">
                    <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                    <p>
                        or
                        <a href="{{ route('home') }}" class="inline-flex items-center font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-600">
                            Continuar Comprando
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>



        <div class="col-span-1"></div> <!-- Coluna vazia à direita -->
    </div>

    <x-footer/>
</x-app-layout>
