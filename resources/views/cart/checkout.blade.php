<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            <div class="container mx-auto py-8">
                <div class="flex flex-col md:flex-row md:space-x-6">
                    <!-- Contact Information -->
                    <div class="w-full md:w-2/3">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold mb-4">Informações de Contato</h2>
                            <form>
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Endereço de Email</label>
                                    <input type="email" id="email" name="email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <h2 class="text-lg font-semibold mb-4">Informações de Envio</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Nome Completo</label>
                                        <input type="text" id="first-name" name="first-name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Endereço</label>
                                    <input type="text" id="address" name="address" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div class="mb-4">
                                    <label for="apartment" class="block text-sm font-medium text-gray-700">Ponto de referencia</label>
                                    <input type="text" id="apartment" name="apartment" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="city" class="block text-sm font-medium text-gray-700">Cidade</label>
                                        <input type="text" id="city" name="city" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="country" class="block text-sm font-medium text-gray-700">País</label>
                                        <select id="country" name="country" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                            <option>Brasil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="state" class="block text-sm font-medium text-gray-700">Estado</label>
                                        <input type="text" id="state" name="state" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">CEP</label>
                                        <input type="text" id="postal-code" name="postal-code" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                    <input type="text" id="phone" name="phone" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <h2 class="text-lg font-semibold mb-4">Pagamento</h2>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700">Método de Pagamento</label>
                                    <div class="mt-2 space-y-2">
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="payment-method" value="credit-card" class="form-radio text-indigo-600">
                                            <span class="ml-2">Cartão de Crédito</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="payment-method" value="paypal" class="form-radio text-indigo-600">
                                            <span class="ml-2">Boleto</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="payment-method" value="etransfer" class="form-radio text-indigo-600">
                                            <span class="ml-2">Pix</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                                    <input type="text" id="card-number" name="card-number" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="card-name" class="block text-sm font-medium text-gray-700">Name on card</label>
                                        <input type="text" id="card-name" name="card-name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                                        <input type="text" id="cvc" name="cvc" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="exp-month" class="block text-sm font-medium text-gray-700">Expiration month</label>
                                        <input type="text" id="exp-month" name="exp-month" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <div>
                                        <label for="exp-year" class="block text-sm font-medium text-gray-700">Expiration year</label>
                                        <input type="text" id="exp-year" name="exp-year" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="w-full md:w-1/3 mt-6 md:mt-0">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold mb-4">Resumo da Compra</h2>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h3 class="text-sm font-medium">Basic Tee</h3>
                                        <p class="text-sm text-gray-500">Black, Large</p>
                                    </div>
                                    <div>
                                        <span class="text-sm font-medium">$32.00</span>
                                    </div>
                                </div>

                            </div>
                            <div class="border-t border-gray-200 mt-4 pt-4">
                                <div class="flex justify-between text-sm font-medium">
                                    <p class="text-gray-500">Subtotal</p>
                                    <p class="text-gray-900">R$96,00</p>
                                </div>
                                <div class="flex justify-between text-sm font-medium">
                                    <p class="text-gray-500">Frete</p>
                                    <p class="text-gray-900">R$8,00</p>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 mt-4 pt-4">
                                <div class="flex justify-between text-lg font-medium">
                                    <p>Total</p>
                                    <p>R$111,00</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Confirmar Compra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer class="mt-auto"/>
    </div>
</x-app-layout>
