@include('layouts.header')
{{-- @include('layouts.nav') --}}
<form class="p-6 bg-[#333] max-w-screen-md mx-auto mt-28 mb-10 rounded-3xl" action="{{ route('recruiter.joboffers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="text-3xl font-extrabold mb-5 text-center dark:text-white">Create a New Job Offer:</h2>
    <input type="hidden" name="company_id" value="{{ $company_id }}"> 
    <div> 
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Offer Title:</label>
        <input type="text" name="title" id="title" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title" value="{{ old('title') }}">
        @error('title')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
        <textarea name="description" id="description" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description">{{ old('description') }}</textarea> 
        @error('description')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="contract_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contract Type:</label>
        <input placeholder="Contract Type CDI ..." type="text" name="contract_type" id="contract_type" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contract Type" value="{{ old('contract_type') }}"> 
        @error('contract_type')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City:</label>
        <input placeholder="City " type="text" name="city" id="city" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contract Type" value="{{ old('city') }}">
        @error('city')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="sector_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector:</label>
        <select name="sector_id" id="sector_id" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($sectors as $sector) 
                <option value="{{ $sector->id }}">{{ $sector->title }}</option>
            @endforeach
        </select>
        @error('sector_id')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-5">
        <label for="experience_years" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Years of Experience:</label>
        <input type="number" name="experience_years" id="experience_years" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Years of Experience" value="{{ old('experience_years') }}">
        @error('experience_years')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salary:</label>
        <input type="number" name="salary" id="salary" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Salary" value="{{ old('salary') }}"> 
        @error('salary')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-5"> 
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Offer Image:</label>
        <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('image')
            <span class="text-red-400">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="text-white block mx-auto bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm py-2.5 px-10 mt-5">Create Job Offer</button>
</form>