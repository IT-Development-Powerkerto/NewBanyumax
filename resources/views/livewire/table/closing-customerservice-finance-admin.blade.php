<div class="py-5">
    <div class="mt-1 flex flex-col w-full py-5">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color: #7E8299">Closing Custemer Service</h1>
        <div class="flex flex-row gap-2">
            <span class="text-gray-300 font-reguler text-sm" style="color: #7E8299">100 Lead</span>
        </div>
    </div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="relative w-36 md:w-fit">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-blue-400 dark:text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border ring-blue-400 border-blue-400"
                    placeholder="Search..">
            </div>           
        </div>
    </div>

    <div class="h-max bg-white overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
                style="background-color: #06B6D41A">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        CUSTOMER
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PRODUCT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PRICE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        QUANTITY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TOTAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TARGET
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        Hanif Muslim
                    </td>
                    <td class="px-6 py-4">
                        Kopi Rubeku
                    </td>
                    <td class="px-6 py-4">
                        Rp. 90.0000
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        RP. 900.000
                    </td>
                    <td class="px-6 py-4">
                        <Span class="bg-cyan-100 text-cyan-500 py-2 px-4 font-semibold rounded-md">
                            Waiting
                        </Span>  
                    </td>
                    <td class="px-6 py-4">
                        <button data-dropdown-toggle="dropdownAction"
                            class="text-xs bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-3 py-2 text-white">
                            Action⯆
                        </button>
                        <div class="hidden list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdownAction">
                            <ul class="py-1" aria-labelledby="dropdownAction">
                                <li>
                                    <a href="#" data-modal-toggle="edit-promotion" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100">Approved</a>
                                </li>
                                <li>
                                    <a href="#" data-modal-toggle="delete-promotion" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 ">Download</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        Hanif Muslim
                    </td>
                    <td class="px-6 py-4">
                        Kopi Rubeku
                    </td>
                    <td class="px-6 py-4">
                        Rp. 90.0000
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        RP. 900.000
                    </td>
                    <td class="px-6 py-4">
                        <Span class="bg-red-100 text-red-500 py-2 px-4 font-semibold rounded-md">
                            Rejected
                        </Span>  
                    </td>
                    <td class="px-6 py-4">
                        <button data-dropdown-toggle="dropdownAction"
                            class="text-xs bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-3 py-2 text-white">
                            Action⯆
                        </button>
                        <div class="hidden list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdownAction">
                            <ul class="py-1" aria-labelledby="dropdownAction">
                                <li>
                                    <a href="#" data-modal-toggle="edit-promotion" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100">Approved</a>
                                </li>
                                <li>
                                    <a href="#" data-modal-toggle="delete-promotion" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-100 ">Download</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="px-6 py-3 flex flex-row-reverse justify-between items-center border rounded-b-lg"
        style="background-color: #E7F8FB">
        <div class="flex flex-row items-center">
            <!-- Help text -->
                <span class="font-semibold text-gray-400 py-2 text-xs antialiased tracking-wide">Rows per page: 10</span>
                <button id="FilterDropdown" data-dropdown-toggle="FiltersDropdown"
                class="text-gray-400 border-hidden hover:text-cyan-400 font-medium rounded-lg text-sm py-2.5 text-center inline-flex items-center"
                type="button"><svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>
            <!-- Dropdown menu -->
            <div id="FiltersDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow-lg w-32">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="FilterDropdown">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">5</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 hover:text-blue-700">10</a>
                    </li>
                </ul>
            </div>
                <span class="font-semibold text-gray-400 py-2 px-4 mt-1 text-xs antialiased tracking-wide">1-10 of 276</span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button class="py-2 px-4 text-2xl font-medium hover:text-cyan-400 text-gray-400 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <
                </button>
                <button class="py-2 px-4 text-2xl font-medium hover:text-cyan-400 text-gray-400 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </button>
            </div>
        </div>
    </div>
</div>