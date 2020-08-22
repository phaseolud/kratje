<div class="bg-gray-200 py-4">
    <nav class="container mx-auto px-2">
        <div class="flex justify-between items-center">
            <a class="text-green-600 text-3xl font-bold" href="/">Adtje Kratje</a>
            @if(session()->has('pin'))
            <div class="flex">
                @auth
                    <div class="text-xl py-2 px-3 bg-green-600 rounded-lg text-white mr-3">
                        {{ auth()->user()->username }}
                    </div>
                @endauth
                <form action="/logout" method="POST">
                    @csrf
                    <div class="inline-block relative" x-data="{ open: false }">
                    <button type="button" class="text-xl p-2 bg-green-600 hover:bg-green-700 rounded-lg text-white inline-block focus:outline-none" @click="open = !open">PIN: {{ session('pin') }}</button>
                    <button type="submit" class="bg-white hover:bg-gray-100 left-0 absolute mt-12 shadow rounded p-2 text-lg text-green-600 border border-green-600 focus:outline-none" x-show="open" @click.away="open = false">Log out</button>
                    </div>
                </form>
            </div>
            @else
                <div>
                    <form action="/games/logpin" method="POST">
                        @csrf
                        <input type="number" name="pin" id="pin" placeholder="game pin" class="px-2 py-3 focus:outline-none">
                        <button type="submit" class="bg-green-600 text-white text-lg px-2 py-2 rounded-md">GO</button>
                    </form>
                </div>
            @endif
        </div>
        
    </nav>
</div>