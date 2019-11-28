@extends('layouts/master')

@section('content')
<section class="container mx-auto py-20 px-10 bg-gray-100 max-w-4xl">
    <div class="flex flex-col flex-wrap -mx-2 ">
        <h1 class="text-3xl font-medium">Your Shopping Cart</h1>
        <table class="border-collaspe border-collapse table-auto ">
            <thead>
                <th class="px-4 py-2">Item</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Number</th>
                <th class="px-4 py-2">Action</th>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="border px-4 py-2">Book 1</td>
                    <td class="border px-4 py-2">10</td>
                    <!-- Remove Items / Increase +1 / Decrease By 1 -->
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2"><a class="py-1 px-2 bg-teal-400 text-white" href="#">+</a>|<a
                            class="py-1 px-2 bg-red-300 text-white" href="#">-</a>|<a
                            class="py-1 px-2 bg-red-700 text-white uppercase" href="#">Remove</a></td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Book 1</td>
                    <td class="border px-4 py-2">10</td>
                    <!-- Remove Items / Increase +1 / Decrease By 1 -->
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2"><a class="py-1 px-2 bg-teal-400 text-white" href="#">+</a>|<a
                            class="py-1 px-2 bg-red-300 text-white" href="#">-</a>|<a
                            class="py-1 px-2 bg-red-700 text-white uppercase" href="#">Remove</a></td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Book 1</td>
                    <td class="border px-4 py-2">10</td>
                    <!-- Remove Items / Increase +1 / Decrease By 1 -->
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2"><a class="py-1 px-2 bg-teal-400 text-white" href="#">+</a>|<a
                            class="py-1 px-2 bg-red-300 text-white" href="#">-</a>|<a
                            class="py-1 px-2 bg-red-700 text-white uppercase" href="#">Remove</a></td>
                </tr>
            </tbody>
        </table>
        <p class="mt-4 text-xl font-medium text-right">Total: 50$</p>
        <div class="flex justify-end mt-4">
            <button class="text-white px-6 py-3 bg-orange-600">Buy Now</button>
        </div>
    </div>
</section>
@endsection
