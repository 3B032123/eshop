<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('cartitem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                        <tr>
                            <th>購物車商品</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart_items as $cart_item)
                            <tr>
                                <td>商品編號：{{ $cart_item->product_id }}
                                    商品名稱：{{ $cart_item->product->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
