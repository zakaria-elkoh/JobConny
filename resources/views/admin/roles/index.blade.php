@include('layouts.header')
{{-- @include('layouts.nav') --}}
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

            <a href="{{route('admin.roles.create')}}" class="text-white mx-6 block w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add role</a>
            
            <!-- table to show the details of the roles  -->
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            role Title
                        </th>
                        <th scope="col" class="py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($roles as $role)
                        <tr class="odd:bg-white text-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                {{$role->id}}
                            </th>
                            <th class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                {{$role->title}}
                            </th>
                            <td class="py-4">
                                <a href="{{route('admin.roles.edit', $role->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>

        </div>

    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>