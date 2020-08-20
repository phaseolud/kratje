<div class="bg-gray-200 py-4">
    <nav class="container mx-auto px-2">
        <div class="flex justify-between items-center">
            <span class="text-green-600 text-3xl font-bold">Adtje Kratje</span>
            @if(session()->has('pin'))
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-xl p-2 bg-green-600 rounded-lg text-white">PIN: {{ session('pin') }}</button>
                </form>
            @else
                <div>
                    <form action="/games/logpin" method="POST">
                        @csrf
                        <input type="number" name="pin" id="pin" placeholder="game pin" class="px-2 py-3">
                        <button type="submit" class="bg-green-600 text-white text-lg px-2 py-2 rounded-md">GO</button>
                    </form>
                </div>
            @endif
        </div>
        
    </nav>
</div>