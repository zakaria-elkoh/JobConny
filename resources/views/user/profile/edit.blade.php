
@include('layouts.header')
@include('layouts.nav')

<form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-32 mb-10 rounded-3xl" action={{route('users.update', Auth::user()->id)}} method="POST">
    @csrf
    @method('PUT')
    <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Edit My Profile:</h2>
    <div>
        <label for="name" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name">
        @error('name')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="field" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Field:</label>
        <input type="text" name="field" value="{{ $user->field }}" id="field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Field">
        @error('field')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="job_name" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Job Name:</label>
        <input type="text" name="job_name" value="{{$user->job_name}}" id="job_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="job_name">
        @error('job_name')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="experience" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Years of experience:</label>
        <input type="text" name="experience" value="{{$user->experience}}" id="experience" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Experience">
        @error('experience')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="adress" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Adress:</label>
        <input type="text" name="adress" value="{{$user->adress}}" id="adress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adress">
        @error('adress')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="description" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Description:</label>
        <textarea type="text" name="description" id="description" class="bg-gray-50 border min-h-48 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description">
            {{$user->description}}
        </textarea>
        @error('description')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    {{-- <div>
        <label for="password" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Password:</label>
        <input type="text" name="password" value="{{old('password')}}" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
        @error('password')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="password_confirmation" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Confirm Password:</label>
        <input type="text" name="password_confirmation" value="{{old('password_confirmation')}}" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Confirm password">
        @error('password_confirmation')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div> --}}
    <button type="submit" name="edit_profile" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-12">Edit my profile</button>
</form>