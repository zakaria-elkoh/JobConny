
@include('layouts.header')
@include('layouts.nav')

<form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-32 mb-10 rounded-3xl" action={{route('rep.dash.company.store')}} method="POST">
    @csrf
    <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Create a Company:</h2>
    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
        <input type="text" name="name" value="{{old('name')}}" id="name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company Name">
        @error('name')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="email" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Email:</label>
        <input type="text" name="email" value="{{old('email')}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company Email">
        @error('email')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="phone" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Phone:</label>
        <input type="text" name="phone" value="{{old('phone')}}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company phone">
        @error('phone')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="field" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Field:</label>
        <input type="text" name="field" value="{{old('field')}}" id="field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company field">
        @error('field')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="adress" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Adress:</label>
        <input type="text" name="adress" value="{{old('adress')}}" id="adress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company adress">
        @error('adress')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="description" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Description:</label>
        <textarea type="text" name="description" id="description" class="bg-gray-50 border min-h-48 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company description">
            {{old('description')}}
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
    <button type="submit" name="create_company" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-12">Create Company</button>
</form>