@extends('layouts/master')

@section('content')
<section class="container mx-auto py-20 bg-gray-100">
    <div class="flex flex-wrap -mx-2">
        @foreach ($books as $book)
        <div class="w-full sm:w-1/3 px-2">
            <div class="border">
                <img src="https://via.placeholder.com/400x300" alt="" class="w-full">
            <h3 class="text-xl px-4 py-2 font-medium text-2xl text-center">{{ $book->title}}{{ $book->price}}$</h3>
            <p class="px-4 py-2">{{ $book->description}}</p>
                <a href="#" class="w-full block bg-blue-500 text-white py-4 text-center">Buy Now</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
