<div>
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
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border  ring-blue-400border-blue-400"
                    placeholder="Search..">
            </div>
        </div>
    </div>
    <div class="h-max bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
                style="background-color: #06B6D41A">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        PROMOTION NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PROFUCT
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PROMOTION TYPE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMINAL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CREATOR
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTIONS
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        Generos Discount 50%
                    </td>
                    <td class="px-6 py-4">
                        Generos
                    </td>
                    <td class="px-6 py-4">
                        Shipping Cost
                    </td>
                    <td class="px-6 py-4">
                        Rp 50.000
                    </td>
                    <td class="px-6 py-4">
                        Hutari Tri
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="bg-gray-200 py-1 px-3 rounded-lg flex flex-row" aria-expanded="false" type="button" data-dropdown-toggle="dropdownAction">
                           Action 
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                          </svg>
                        </button>
                        <div class="hidden text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdownAction">
                            <ul class="py-1" aria-labelledby="dropdownAction">
                                <li>
                                    <a href="#" data-modal-toggle="edit-promotion" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                </li>
                                <li>
                                    <a href="#" data-modal-toggle="delete-product" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 " data-modal-toggle="delete-product">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="px-6 py-3 flex flex-row justify-between items-center border rounded-b-lg"
            style="background-color: #06B6D41A">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="mt-1 flex w-full">
                    <span class="font-semibold text-xs antialiased text-white tracking-wide" style="color: #7E8299">Rows per page: 10</span>
                </div>
            </div>
            <div class="flex items-center">
                <!-- Help text -->
                <span class="text-sm text-gray-700 dark:text-gray-400">
                    Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
                </span>
                <!-- Buttons -->
                <div class="inline-flex mt-2 xs:mt-0">
                    <button class="py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        < 
                    </button>
                    <button class="py-2 px-4 text-sm font-medium text-white bg-gray-800  hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        >
                    </button>
                </div>
              </div>
        </div>
    </div>
</div>