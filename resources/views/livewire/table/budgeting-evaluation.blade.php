<div class="px-6 py-3 flex flex-row justify-between items-center bg-white border-t border-x rounded-t-lg">
    <div class="flex flex-row justify-between items-center w-full">
        <div class="">
            <h1 class="font-semibold text-xl antialiased text-black tracking-wide">Routine Evaluation</h1>
            <div class="flex flex-row gap-2 py-2">
                <span class="font-medium text-sm text-zinc-400">1.000 Data</span>
            </div>
        </div>


        <div class="flex flex-col gap-2 md:gap-0 md:flex-row w-max">
            <div class="relative mr-2">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search..">
            </div>

            <div class="mr-2 w-36 md:w-fit">
                <button
                    class="text-gray-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                    type="button" data-modal-toggle="add-routine-evaluation">
                    <i class="las la-plus text-xl"></i>
                    <span>Routine Evaluation</span>
                </button>
            </div>
            @livewire('modal.add-routine-evaluation')
        </div>
    </div>
</div>
<div class="h-max bg-white overflow-x-auto px-5">
    <table class="w-full text-sm text-left">
        <thead class="text-xs font-semibold text-gray-400 bg-gray-100 uppercase font-mono">
            <tr>
                <th scope="col" class="text-center py-3">
                    NO
                </th>
                <th scope="col" class="text-center py-3">
                    PRODUCT
                </th>
                <th scope="col" class="text-center py-3">
                    DATE
                </th>
                <th scope="col" class="text-center py-3">
                    TIME
                </th>
                <th scope="col" class="text-center py-3">
                    RESISTANCE
                </th>
                <th scope="col" class="text-center py-3">
                    SOLUTION
                </th>
                <th scope="col" class="text-center py-3">
                    ATTACHMENT
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    Etawaku Platinum
                </td>
                <td class="px-6 py-4">
                    22-06-2022
                </td>
                <td class="px-6 py-4">
                    10:18 WIB
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam
                </td>
                <td class="px-6 py-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam
                </td>
                <td class="px-6 py-4">
                    <button class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-blue-500 hover:to-cyan-500 py-2 px-4 rounded-md">
                        Download
                    </button>
                </td>
            </tr>
        </tbody>
    </table>                    
</div>
<div class=" py-3 px-5 flex justify-between items-center border rounded-b-lg bg-white">

    <button id="dropdownDefault" data-dropdown-toggle="dropdownFilter"
        class="text-gray-500 bg-gray-200 bg-gradient-to-r hover:text-white hover:from-cyan-400 hover:to-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">10<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg></button>
    <!-- Dropdown menu -->
    <div id="dropdownFilter"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-20 dark:bg-gray-700"
        data-popper-placement="bottom"
        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(351.5px, 735.5px, 0px);">
        <ul class="py-1 text-sm text-gray-700 text-center dark:text-gray-200" aria-labelledby="dropdownDefault">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">10</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">20</a>
            </li>
        </ul>
    </div>


    <nav aria-label="Page navigation example">
        <ul class="inline-flex items-center -space-x-px">
            <li>
                <a href="#"
                    class="block py-2 px-3 ml-0 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#"
                    class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="z-10 py-2 px-3  ml-2 rounded-lg leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#"
                    class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 px-3 ml-0 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <div></div>

</div>
