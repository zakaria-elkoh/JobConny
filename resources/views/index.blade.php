@include('layouts.header')
@include('layouts.nav')



<section class="bg-[#222] py-28">
    <div class="max-w-screen-xl mx-auto px-6 flex">
        <div class="wikis-wrapper w-full md:basis-2/3 flex flex-col gap-5 pt-7">
            <a href="#" class="w-full p-5 bg-['#555'] hover:bg-[#2a2a2a] flex items-center flex-col md:flex-row border border-gray-700 rounded-lg shadow">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="public/assets/wiki.png" alt="img">
                <div class="w-full flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">this is the title</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">this is the description</p>
                    <div class="flex justify-between text-white">
                        <span>10 min read</span>
                        <span>12/12/2023</span>
                    </div>
                    <div class="mt-5">
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-1
                            </button>
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-2
                            </button>
                    </div>
                </div>
            </a>
            <a href="#" class="w-full p-5 bg-['#555'] hover:bg-[#2a2a2a] flex items-center flex-col md:flex-row border border-gray-700 rounded-lg shadow">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="public/assets/wiki.png" alt="img">
                <div class="w-full flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">this is the title</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">this is the description</p>
                    <div class="flex justify-between text-white">
                        <span>10 min read</span>
                        <span>12/12/2023</span>
                    </div>
                    <div class="mt-5">
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-1
                            </button>
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-2
                            </button>
                    </div>
                </div>
            </a>
            <a href="#" class="w-full p-5 bg-['#555'] hover:bg-[#2a2a2a] flex items-center flex-col md:flex-row border border-gray-700 rounded-lg shadow">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="public/assets/wiki.png" alt="img">
                <div class="w-full flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">this is the title</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">this is the description</p>
                    <div class="flex justify-between text-white">
                        <span>10 min read</span>
                        <span>12/12/2023</span>
                    </div>
                    <div class="mt-5">
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-1
                            </button>
                            <button type="button" class="py-1.5 px-3 mt-1  text-sm font-medium text-white bg-[#333] rounded-full">
                                #tag-2
                            </button>
                    </div>
                </div>
            </a>
        </div>

        <div class="categories-wrapper px-0 md:px-6 md:basis-1/3">
            <div class="fixed text-center md:sticky bottom-0 md:top-24 pt-7 ps-6 w-full left-0 bg-[#444] md:bg-transparent md:text-left">
                <h3 class="text-2xl hidden md:block font-bold  mb-6 dark:text-white">Discover more of what matters to you</h3>
                <button type="button" class="category text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">category-1</button>
                <button type="button" class="category text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">category-2</button>
            </div>
        </div>

    </div>
</section>




@include('layouts.footer')