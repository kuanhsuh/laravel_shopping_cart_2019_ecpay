@extends('layouts/master')

@section('content')
<section class="container mx-auto py-20 px-10 bg-gray-100 max-w-4xl">
    <div class="flex flex-col flex-wrap -mx-2 ">
        <h1 class="text-3xl font-medium">Order Summary </h1>
        <form action="https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V2" method="post">
            <table class="border-collaspe border-collapse table-auto block">
                <thead>
                    <th class="px-4 py-2">Order Number</th>
                    <th class="px-4 py-2">User Info</th>
                    <th class="px-4 py-2">Order Info</th>
                    <th class="px-4 py-2">Total Price</th>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="border px-4 py-2">{{$order->id}}</td>
                        <td class="border px-4 py-2">{{$order->name}}</td>
                        <td class="border px-4 py-2">
                            <ul>
                                @foreach(unserialize($order->cart)->items as $item)
                                <li>{{$item['item']['title']}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="border px-4 py-2">{{unserialize($order->cart)->totalPrice}}</td>
                    </tr>
                </tbody>
            </table>
            @foreach($ecpay_params as $key=> $value)
            <input type="text" name="{{$key}}" value="{{!! $value}}">
            @endforeach
            <div class="flex flex-wrap mt-4">
                <div class="w-full text-center">
                    <a href="#"
                        class="rounded inline-block px-8 py-3 text-blue-800 bg-white border border-blue-800">取消</a>
                    <button class="rounded inline-block px-8 py-3 bg-blue-700 text-white">送出</button>
                </div>
        </form>
    </div>
</section>
@endsection
