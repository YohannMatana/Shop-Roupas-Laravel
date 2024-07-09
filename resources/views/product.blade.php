<x-app-layout>
    <div class="bg-white dark:bg-gray-800">
        <div class="pt-6">
            <x-slot name="header"></x-slot>

            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <div class="h-1/2 ml-auto mr-auto w-9/12 overflow-hidden rounded-lg">
                    <img src="{{ asset('images/bolsa2.png') }}" class="mx-auto h-full rounded-lg">
                </div>

                <!-- Product info -->
                <div class="px-4 pb-16 pt-10 sm:px-6 lg:px-8 lg:pb-24 lg:pt-16">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl dark:text-white">Bolsa Shein Rosa</h1>
                    <p class="text-3xl tracking-tight text-gray-900 mt-4 dark:text-gray-300">R$ 192</p>

                    <!-- Reviews -->
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
                    </div>

                    <form class="mt-10">
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 dark:text-white">Color</h3>

                            <fieldset aria-label="Choose a color" class="mt-4" x-data="{ color: '' }">
                                <div class="flex items-center space-x-3">
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="White" :class="{ 'ring ring-offset-3': color === 'White' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="White" class="sr-only"
                                            @click="color = 'White'">
                                        <span aria-hidden="true"
                                            class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                                    </label>
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="Gray" :class="{ 'ring ring-offset-3': color === 'Gray' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Gray" class="sr-only"
                                            @click="color = 'Gray'">
                                        <span aria-hidden="true"
                                            class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                    </label>
                                    <!-- Active and Checked: "ring ring-offset-1" -->
                                    <label aria-label="Black" :class="{ 'ring ring-offset-3': color === 'Black' }"
                                        class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                        <input type="radio" name="color-choice" value="Black" class="sr-only"
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
                                <h3 class="text-sm font-medium text-gray-900 dark:text-white">Size</h3>
                                <a href="#"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-100 dark:hover:text-indigo-500">Size guide</a>
                            </div>
                            <fieldset class="mt-4" x-data="{ size: '' }">
                                <div class="grid grid-cols-4 gap-4">
                                    <label
                                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-gray-50 dark:bg-gray-300 px-4 py-3 text-sm font-medium uppercase text-gray-200 dark:text-gray-400  hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                                        :class="{ 'cursor-not-allowed': isSizeDisabled('XXS') }">
                                        <input type="radio" name="size-choice" value="XXS"
                                            :disabled="isSizeDisabled('XXS')" class="sr-only" @click="size = 'XXS'">
                                        <span>XXS</span>
                                        <span aria-hidden="true"
                                            class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200 dark:border-gray-400">
                                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200 dark:text-gray-400"
                                                viewBox="0 0 100 100" preserveAspectRatio="none"
                                                stroke="currentColor">
                                                <line x1="0" y1="100" x2="100" y2="0"
                                                    vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'XS' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 text-gray-900 dark:text-white shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XS" class="sr-only"
                                            @click="size = 'XS'">
                                        <span id="size-choice-1-label">XS</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'S' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="S" class="sr-only"
                                            @click="size = 'S'">
                                        <span id="size-choice-2-label">S</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'M' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="M" class="sr-only"
                                            @click="size = 'M'">
                                        <span id="size-choice-3-label">M</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'L' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="L" class="sr-only"
                                            @click="size = 'L'">
                                        <span id="size-choice-4-label">L</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === 'XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white dark:bg-gray-600 dark:text-white text-gray-900 shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="XL" class="sr-only"
                                            @click="size = 'XL'">
                                        <span id="size-choice-5-label">XL</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === '2XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white text-gray-900 dark:bg-gray-600 dark:text-white shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="2XL" class="sr-only"
                                            @click="size = '2XL'">
                                        <span id="size-choice-6-label">2XL</span>
                                    </label>
                                    <label :class="{ 'ring ring-offset-1': size === '3XL' }"
                                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase bg-white text-gray-900 dark:bg-gray-600 dark:text-white shadow-sm cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none sm:flex-1 sm:py-6">
                                        <input type="radio" name="size-choice" value="3XL" class="sr-only"
                                            @click="size = '3XL'">
                                        <span id="size-choice-7-label">3XL</span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>

                        <button type="submit"
                            class="mt-10 mb-10 w-full flex items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                            to bag</button>
                    </form>
                    <div
                        class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                        <!-- Description and details -->
                        <div>


                            <div class="space-y-6">
                                <p class="text-base text-gray-900 dark:text-gray-200">The Basic Tee 6-Pack allows you to fully express
                                    your vibrant personality with three grayscale options. Feeling adventurous? Put on a
                                    heather gray tee. Want to be a trendsetter? Try our exclusive colorway:
                                    &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee
                                    has you covered.</p>
                            </div>
                        </div>

                        <div class="mt-10">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
