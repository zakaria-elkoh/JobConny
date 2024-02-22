
@include('layouts.header')

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

@include('layouts.rep-aside')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            {{-- <a href={{ route('rep.dash.recruiters.create') }} class="text-white block w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-6 my-10 ml-auto dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Recruiter</a> --}}
            <form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-16 mb-10 rounded-3xl" action={{route('rep.dash.company.update', 1)}} method="POST">
                @csrf
                @method('PUT')
                <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Company Details:</h2>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
                    <input type="text" name="name" value="{{$company->name}}" id="name" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company Name">
                    @error('name')
                        <span class="text-red-400">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Email:</label>
                    <input type="text" name="email" value="{{$company->email}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company Email">
                    @error('email')
                        <span class="text-red-400">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Phone:</label>
                    <input type="text" name="phone" value="{{$company->phone}}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company phone">
                    @error('phone')
                        <span class="text-red-400">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="field" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Field:</label>
                    <input type="text" name="field" value="{{$company->field}}" id="field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company field">
                    @error('field')
                        <span class="text-red-400">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="adress" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Adress:</label>
                    <input type="text" name="adress" value="{{$company->adress}}" id="adress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company adress">
                    @error('adress')
                        <span class="text-red-400">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm mt-5 font-medium text-gray-900 dark:text-white">Description:</label>
                    <textarea type="text" name="description" id="description" class="bg-gray-50 border min-h-48 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company description">
                        {{$company->description}}
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
                <button type="submit" name="create_recruiter" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-12">Edit My Company</button>
            </form>

        </div>

    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
