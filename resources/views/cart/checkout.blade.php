<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            <div class="container mx-auto py-8">
                <div class="flex flex-col md:flex-row md:space-x-6">
                    <!-- Contact Information -->
                    <div class="w-full md:w-2/3">
                        <div class="dark:bg-white bg-gray-100 p-6 rounded-lg shadow-lg">
                            <h2 class="text-lg font-semibold mb-4">Informações de Contato</h2>
                            <form id="payment-form">
                                @csrf
                                <!-- Campo de Email -->
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Endereço de Email</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <!-- Campo de Telefone -->
                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                    <input type="text" id="phone" name="phone" value="{{ $user->telefone }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <!-- Nome Completo -->
                                <div class="grid grid-cols-1 mb-4 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                                        <input type="text" id="first-name" name="first-name" value="{{ $user->name }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                                <!-- Endereço -->
                                <div class="mb-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Endereço</label>
                                    <input type="text" id="address" name="address" value="{{ $user->endereco }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <!-- Ponto de Referência -->
                                <div class="mb-4">
                                    <label for="apartment" class="block text-sm font-medium text-gray-700">Ponto de Referência</label>
                                    <input type="text" id="apartment" name="apartment" value="{{ $user->ponto_referencia }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <!-- Cidade e Estado -->
                                <div class="grid grid-cols-1 mb-4 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                                        <input type="text" id="city" name="city" value="{{ $user->cidade }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="state" class="block text-sm font-medium text-gray-700">Estado</label>
                                        <input type="text" id="state" name="state" value="{{ $user->estado }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                                <!-- CEP -->
                                <div class="grid grid-cols-1 mb-4 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">CEP</label>
                                        <input type="text" id="postal-code" name="postal-code" value="{{ $user->cep }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">País</label>
                                        <input type="text" id="postal-code" name="postal-code" value="{{ $user->pais }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>

                                <!-- Payment Method Selection -->
                                <h2 class="text-lg font-semibold mb-4">Pagamento</h2>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Método de Pagamento</label>
                                    <div class="mt-2 space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="payment-method" value="card" class="form-radio text-indigo-600" checked>
                                            <span class="ml-2">Cartão de Crédito</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="payment-method" value="pix" class="form-radio text-indigo-600">
                                            <span class="ml-2">Pix</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Stripe Elements Placeholder -->
                                <div id="card-element" class="mb-4"></div>
                                <div id="pix-element" class="mb-4"></div>

                                <!-- Stripe Errors -->
                                <div id="card-errors" role="alert" class="text-red-500 mb-4"></div>

                            </form>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="w-full md:w-1/3 mt-6 md:mt-0">
                        <div class="dark:bg-white bg-gray-100 p-6 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold mb-4">Resumo da Compra</h2>
                            <div class="space-y-4">
                                @foreach ($cart as $item)
                                    <div class="flex items-center justify-between">
                                        <div class="h-16 w-16 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="{{ $item['product']->image }}" alt="{{ $item['product']->name }}" class="h-full w-full object-center">
                                        </div>
                                        <div class="ml-4 flex-grow">
                                            <h3 class="text-sm font-medium">{{ $item['product']->name }}</h3>
                                            <p class="text-sm text-gray-500">{{ $item['color'] }}, {{ $item['size'] }}</p>
                                        </div>
                                        <div>
                                            <span class="text-sm font-medium">R$ {{ number_format($item['product']->price, 2, ',', '.') }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-6">
                                <form method="POST" action="{{ route('cart.calculateFrete') }}">
                                    @csrf
                                    <div class="flex justify-between text-sm font-medium mt-4">
                                        <input name="cep" x-data x-ref="cepInput" x-init="$refs.cepInput.addEventListener('input', function () { this.value = this.value.replace(/[^0-9]/g, '').slice(0, 8).replace(/(\d{5})(\d{3})/, '$1-$2') })" type="text" class="w-2/3 px-3 py-2 border border-gray-300 rounded-md" placeholder="CEP" required>
                                        <button type="submit" class="w-1/3 bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 ml-2">Calcular Frete</button>
                                    </div>
                                </form>
                            </div>
                            <div class="border-t border-gray-200 mt-4 pt-4">
                                <div class="flex justify-between text-sm font-medium">
                                    <p class="text-gray-500">Subtotal</p>
                                    <p class="text-gray-900">R$ {{ number_format($subtotal, 2, ',', '.') }}</p>
                                </div>
                                <div class="flex justify-between text-sm font-medium">
                                    <p class="text-gray-500">Frete</p>
                                    <p class="text-gray-900">R$ {{ number_format($frete, 2, ',', '.') }}</p>
                                </div>
                                <div class="flex justify-between text-sm font-medium text-gray-900 mt-4">
                                    <p class="text-base">Total</p>
                                    <p class="text-base">R$ {{ number_format($subtotal + $frete, 2, ',', '.') }}</p>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button id="submit-button" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 mt-4">
                                Confirmar Compra
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <x-footer/>
    </div>
</x-app-layout>
