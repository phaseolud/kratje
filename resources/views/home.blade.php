<x-master>
    <div class="flex justify-center my-16">
        <div class="bg-gray-100 p-6 rounded-lg text-center">
                <h2 class="text-2xl font-bold text-green-600">
                    Log in or create
                </h2>
                <p class="text-sm">Here you can create your own game using the link below, or log in to an existing game using the form on top!</p>
                <a href="{{ route('game.create') }}" class="text-green-600 text-lg px-2 py-2"> Create game</a>
        </div>
    </div>
</x-master>