<x-app-layout>
    <div class="p-20 dark:bg-white">
        <h1 class="text-2xl mb-4">Sua Sacola</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if (session('cart'))
            <table class="w-full mb-6">
                <thead>
                    <tr>
                        <th class="text-left">Produto</th>
                        <th class="text-left">Cor</th>
                        <th class="text-left">Tamanho</th>
                        <th class="text-right">Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $item)
                        <tr>
                            <td>{{ $item['product']->name }}</td>
                            <td>{{ $item['color'] }}</td>
                            <td>{{ $item['size'] }}</td>
                            <td class="text-right">{{ $item['quantity'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-700 dark:text-gray-300">Sua sacola está vazia.</p>
        @endif
    </div>
</x-app-layout>


