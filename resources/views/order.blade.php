@extends('layouts/master')

@section('content')
<section class="container mx-auto py-20 px-10 bg-gray-100 max-w-4xl">
    <h1 class="text-3xl font-medium border-b-2 border-blue-700">Order Page</h1>
    <h3 class="text-2xl font-medium my-4">Order Info</h3>
    <table class="border-collaspe border-collapse table-auto w-full">
        <thead>
            <th class="px-4 py-2">Item</th>
            <th class="px-4 py-2">Price</th>
            <th class="px-4 py-2">Number</th>
            <th class="px-4 py-2">Total</th>
        </thead>
        <tbody class="text-center">
            @foreach ($books as $book)
            <tr>
                <td class="border px-4 py-2">{{$book['item']['title']}}</td>
                <td class="border px-4 py-2">{{$book['item']['price']}}$</td>
                <td class="border px-4 py-2">{{$book['qty']}}</td>
                <td class="border px-4 py-2">{{$book['qty'] * $book['item']['price']}}$</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <h3 class="text-2xl font-medium my-4">User Info</h3>

    <form method="POST" action="/orders" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="name" id="name" type="text" placeholder="name">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="email" id="email" type="email" placeholder="email">
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Submit Order
            </button>
        </div>
        @include('layouts.error')
    </form>
</section>
@endsection
