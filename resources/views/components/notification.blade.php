@if ($errors->any())
    <div class="container mx-auto">
        <div class="">
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li class="bg-red-400 border border-red-500 text-white text-sm rounded-lg p-2 mb-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif