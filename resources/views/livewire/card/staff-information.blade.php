<div>
    <div class="flex py-5">
        <div class="mt-1 flex flex-col w-full">
            <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color:#7E8299">Staff
                Information</h1>
            <div class="flex flex-row gap-2">
                <span class="font-reguler text-sm" style="color:#7E8299">73 Staff</span>
            </div>
        </div>
        <button
            class="text-blue-400 h-max w-36 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center"
            type="button" data-modal-toggle="add-campaign">
            {{-- <a href= {{ route('campaign.create') }}> --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            <span>Add Staff</span>
        </button>
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
                        Staff
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Poin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-20 h-max rounded-full" src="assets/img/team/team-1.png" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-semibold text-black truncate dark:text-white">
                                    Mei Dwila Nawa Sapta Ningtyas
                                </p>
                                <p class="text-sm font-reguler text-gray-500 truncate dark:text-white">
                                    +1234567890
                                </p>
                                <p
                                    class="text-sm w-max py-1 px-2 rounded-lg bg-red-300 text-red-500 truncate dark:text-white border">
                                    work</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p
                            class="text-sm w-max py-1 px-2 rounded-lg bg-purple-300 text-purple-500 font-semibold truncate dark:text-white border">
                            50 Point</p>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-row">
                            <a href="#"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-r ml-2 from-orange-500 to-red-500 hover:text-red-700 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="las la-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="px-6 py-3 flex flex-row-reverse justify-between items-center border rounded-b-lg"
            style="background-color: #06B6D41A">
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
</div>