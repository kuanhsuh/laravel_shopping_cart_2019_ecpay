@extends('layouts/master')

@section('content')
<section class="container mx-auto py-20 px-10 bg-gray-100 max-w-4xl">
    <div class="flex flex-col flex-wrap -mx-2 ">
        <h1 class="text-3xl font-medium">Your Shopping Cart </h1>
        @if(session()->has('cart'))
        <table class="border-collaspe border-collapse table-auto ">
            <thead>
                <th class="px-4 py-2">Item</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Number</th>
                <th class="px-4 py-2">Action</th>
            </thead>
            <tbody class="text-center">
                @foreach ($books as $book)
                <tr>
                    <td class="border px-4 py-2">{{$book['item']['title']}}</td>
                    <td class="border px-4 py-2">{{$book['item']['price']}}</td>
                    <!-- Remove Items / Increase +1 / Decrease By 1 -->
                    <td class="border px-4 py-2">{{$book['qty']}}</td>
                    <td class="border px-4 py-2">
                        <a class="py-1 px-2 bg-teal-400 text-white"
                            href="/increase-one-item/{{$book['item']['id']}}">+</a>|
                        <a class="py-1 px-2 bg-red-300 text-white"
                            href="/decrease-one-item/{{$book['item']['id']}}">-</a>|
                        <a class="py-1 px-2 bg-red-700 text-white uppercase"
                            href="/remove-item/{{$book['item']['id']}}">Remove</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Cart is Empty</p>
        @endif
        <p class="mt-4 text-xl font-medium text-right">Total Qty: {{ $totalQty}}</p>
        <p class="mt-4 text-xl font-medium text-right">Total: {{ $totalPrice}}$</p>
        <div class="flex justify-end mt-4">
            <a href="/clear-cart" class="mr-4 px-6 py-3 border border bg-white text-orange-600 border-orange-600">Clear
                Cart</a>
            <a href="/order/new" class="text-white px-6 py-3 bg-orange-600">Buy Now</a>
        </div>
    </div>
</section>
@endsection
