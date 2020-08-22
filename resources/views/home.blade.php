<x-master>
<x-container-box>
    @if(session()->has('pin'))

        @auth
        <x-title title="Start playing"/>
        <p class="text-sm">You're all set! Please click the button below to start the game screen</p>
        {{-- TODO: fix this route to go to the game play page --}}
        <a href="{{ route('home') }}" class="text-green-600 text-lg px-2 py-2">Play the game</a>

        @else
        <x-title title="Create user"/>
        <p class="text-sm">You have a game pin, nice work! Now create your user to play the game</p>
        <a href="{{ route('user.create') }}" class="text-green-600 text-lg px-2 py-2">Create user</a>
        @endauth

    @else
        <x-title title="Log in or create game"/>
        <p class="text-sm">Here you can create your own game using the link below, or log in to an existing game using the form on top!</p>
        <a href="{{ route('game.create') }}" class="text-green-600 text-lg px-2 py-2">Create game</a>
    @endif
</x-container-box>
</x-master>