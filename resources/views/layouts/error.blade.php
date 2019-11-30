@if ($errors->any())
<div class="mt-8">
    <ul class="list-inside list-disc">
        @foreach ($errors->all() as $error)
        <li class="px-4 py-2 my-2 border rounded border-red-400 text-red-400">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
