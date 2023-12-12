<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mt-8 flow-root overflow-hidden">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <table class="w-full text-left">
                                <tbody>
                                    <tr>
                                        <th scope="col">編號 </th>
                                        <th scope="col">使用者編號</th>
                                        <th scope="col">創建時間</th>
                                        <th scope="col">更新時間</th>
                                        <th scope="col">訂單明細</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user_id }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->updated_at }}</td>
                                        <td>
                                            <a href="{{route('orders.show', $order)}}">展開</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
