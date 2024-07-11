<div>
    <header class="bg-white dark:bg-gray-800">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="javascript:history.go(-1)"
                                class="mr-2 text-sm font-medium text-gray-900 dark:text-white dark:hover:text-gray-300">{{ $product->category }}</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                                class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li class="text-sm">
                        <a href="#" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600 dark:text-400 dark:hover:text-gray-300">{{ $product->name }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </header>
</div>