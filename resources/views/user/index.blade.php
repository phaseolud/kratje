<x-master>
    <x-container-box>
        <x-title title="Current users"/>
        <p class="text-base">All current players are displayed here. If everyone is ready, start the game! <br>After the game has started, you can go to the game by pressing the 'Adtje Kratje' logo at the top</p>
        <div class="flex flex-col">
        @foreach ($users as $user)
            <div class="flex justify-between px-6 py-4 text-lg bg-green-200 rounded-lg mt-4"> 
                <div class="mr-20">
                {{ $user->username }}
                </div>
                <div>
                {{ $user->role }}
                </div>
            </div>
        @endforeach
        </div>
        <form action="" method="POST">
            <button type="submit" class="bg-green-600 text-white text-lg px-2 py-2 rounded-md my-4">Start the game</button>
        </form>
    </x-container-box>
</x-master>