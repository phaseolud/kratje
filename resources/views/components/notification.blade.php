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

@if (session()->has('warning'))
    <div class="container mx-auto">
        <div class="">
            <ul class="mt-2">
                    <li class="bg-orange-400 border border-orange-500 text-white text-sm rounded-lg p-2 mb-2">{{ session('warning') }}</li>
            </ul>
        </div>
    </div>
@endif
