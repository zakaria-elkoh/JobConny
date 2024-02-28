
@include('layouts.header')
<form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-28 mb-10 rounded-3xl" action="{{ route('admin.users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Edit User Role:</h2>

    <div>
        <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role:</label>
        <select name="role_id" id="role_id" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                    {{ $role->title }} 
                </option>
            @endforeach
         </select>
        @error('role_id') 
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-5">Update User Role</button>
</form>