<x-master>
<x-container-box>
  <x-title title="Create your account"/>
  <p class="text-sm text-center">Now you can create your account by providing a username and your role.<br>A player is someone who drinks, while the coach helps the player with achieving their goal</p>

  <form action="/user" method="POST" class="w-full max-w-xs mt-4">
      @csrf
      <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username">
        </div>
      <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
            Role
          </label>
          <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" name="role">
              <option value="player">player</option>
              <option value="coach">coach</option>
          </select>
        </div>
  <button type="submit" class="bg-green-600 text-white text-lg px-2 py-2 rounded-md my-4">Create User</button>
  </form>
</x-container-box>
</x-master>