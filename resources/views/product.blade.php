<x-app-layout>

    <x-product-header :product="$product" />

    <div class="bg-white dark:bg-gray-800">
        <div class="pt-6">
            <x-slot name="header"></x-slot>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="h-4/5 ml-auto mr-auto w-auto overflow-hidden rounded-lg">
                    <img src="{{ asset('images/bolsa2.png') }}" alt="{{ $product->name }}"
                        class="mx-auto h-full rounded-lg">
                </div>

                <!-- Product info -->
                <div class="px-4 pb-16 pt-10 sm:px-6 lg:px-8 lg:pb-24 lg:pt-16">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl dark:text-white">
                        {{ $product->name }}</h1>
                    <p class="text-3xl tracking-tight text-gray-900 mt-4 dark:text-gray-300">R$
                        {{ number_format($product->price, 2, ',', '.') }}</p>

                    {{-- <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-100 dark:hover:text-indigo-500">117
                                reviews</a>
                        </div>
                    </div> --}}

                    <form action="{{ route('cart.add') }}" method="POST" class="mt-10"
                        onsubmit="return validateForm()">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">

                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">Cor</h3>

                            <fieldset aria-label="Choose a color" class="mt-4" x-data="{ color: '' }">
                                <div class="flex items-center space-x-3">
                                    <label aria-label="White" :class="{ 'ring ring-offset-3': color === 'White' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color" value="White" class="sr-only"
                                            @click="color = 'White'">
                                        <span aria-hidden="true"
                                            class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                                    </label>
                                    <label aria-label="Gray" :class="{ 'ring ring-offset-3': color === 'Gray' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color" value="Gray" class="sr-only"
                                            @click="color = 'Gray'">
                                        <span aria-hidden="true"
                                            class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                    </label>
                                    <label aria-label="Black" :class="{ 'ring ring-offset-3': color === 'Black' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color" value="Black" class="sr-only"
                                            @click="color = 'Black'">
                                        <span aria-hidden="true"
                                            class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Tamanho</h3>
                            </div>
                            <fieldset class="mt-4" x-data="{ size: '' }">
                                <div class="grid grid-cols-4 gap-4">
                                    <label :class="{ 'ring ring-offset-1': size === 'XS' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 text-gray-900 dark:text-white shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="XS" class="sr-only"
                                            @click="size = 'XS'">
                                        <span>XS</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'S' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="S" class="sr-only"
                                            @click="size = 'S'">
                                        <span>S</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'M' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="M" class="sr-only"
                                            @click="size = 'M'">
                                        <span>M</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'L' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="L" class="sr-only"
                                            @click="size = 'L'">
                                        <span>L</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="XL" class="sr-only"
                                            @click="size = 'XL'">
                                        <span>XL</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === '2XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="2XL" class="sr-only"
                                            @click="size = '2XL'">
                                        <span>2XL</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === '3XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white text-gray-900 dark:bg-gray-600 dark:text-white shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size" value="3XL" class="sr-only"
                                            @click="size = '3XL'">
                                        <span>3XL</span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        @if ($errors->has('color'))
                            <p class="text-red-500 text-xs mt-2">{{ $errors->first('color') }}</p>
                        @endif

                        @if ($errors->has('size'))
                            <p class="text-red-500 text-xs mt-2">{{ $errors->first('size') }}</p>
                        @endif

                        <button type="submit"
                            class="mt-10 mb-10 w-full flex items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Adicionar
                            a Sacola</button>
                    </form>

                    <div
                        class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>


                            <div class="space-y-6">
                                <p class="text-base text-gray-900 dark:text-gray-200">{{ $product->description }}</p>
                            </div>
                        </div>

                        {{-- <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900 dark:text-gray-400">Highlights</h3>

                            <div class="mt-4">
                                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                    <li class="text-gray-400"><span class="text-gray-600 dark:text-gray-200">Hand cut and sewn
                                            locally</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600 dark:text-gray-200">Dyed with our proprietary
                                            colors</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600 dark:text-gray-200">Pre-washed &amp;
                                            pre-shrunk</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600 dark:text-gray-200">Ultra-soft 100%
                                            cotton</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900 dark:text-gray-400">Details</h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600 dark:text-gray-200">The 6-Pack includes two black, two white, and two
                                    heather gray Basic Tees. Sign up for our subscription service and be the first to
                                    get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited
                                    release.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <x-footer />
</x-app-layout>
