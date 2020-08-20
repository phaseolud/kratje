<x-master>
    <div class="flex justify-center my-16">
        <div class="bg-gray-100 p-6 rounded-lg text-center">
                <h2 class="text-2xl font-bold text-green-600">
                    Create your own game
                </h2>
                <p class="text-sm">by pressing the button below a new game pin will be made for you</p>
                <form action="/games" method="POST">
                    @csrf
                <button type="submit" class="bg-green-600 text-white text-lg px-2 py-2 rounded-md my-4">Create a pin!</button>
                </form>
        </div>
    </div>
</x-master>