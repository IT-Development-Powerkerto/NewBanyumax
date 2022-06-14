<div>
    <div class="mt-10 flex flex-col w-full">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color: #7E8299">Data Budgeting ADV </h1>
        <div class="flex flex-row gap-2">
            <span class="text-gray-300 font-reguler text-sm" style="color: #7E8299">Daily</span>
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
                    class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 ring-blue-400 border-blue-400"
                    placeholder="Search..">
            </div>

            <div class="flex flex-col gap-2 md:gap-0 md:flex-row">
                <div class="mr-2 w-36 md:w-fit">
                    <!-- Modal toggle -->
                    <button
                        class="text-blue-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                        type="button" data-modal-toggle="export-lead">
                        <i class="las la-file-export text-xl"></i>
                        <span>Export</span>
                    </button>

                    <!-- Main modal -->
                    <div id="export-lead" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button"
                                    class="absolute top-5 right-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="export-lead">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3
                                        class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                        Filter Leads By Date</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-calendar-week text-gray-400"></i>
                                            </div>
                                            <input type="text" name="selectdate"
                                                class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                placeholder="Select Date" required />
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit"
                                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Filter</button>
                                            <button type="submit"
                                                class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                data-modal-toggle="export-lead">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative mr-2 w-36 md:w-56">

                    <button id="dr" data-dropdown-toggle="dropdown"
                        class="text-blue-400 shadow w-max bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                        type="button"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                          </svg>Filter <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                </div>
                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="h-max bg-white rounded-b-lg">
    <table class="w-full text-sm text-left">
        <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
            style="background-color: #06B6D41A">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Period
                </th>
                <th scope="col" class="px-6 py-3">
                    Adv Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Leads
                </th>
                <th scope="col" class="px-6 py-3">
                    Closing
                </th>
                <th scope="col" class="px-6 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Omzet (Rp)
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    09- Mar- 2022
                </td>
                <td class="px-6 py-4">
                    Hutari Trinurcahyani
                </td>
                <td class="px-6 py-4">
                    100 Leads
                </td>
                <td class="px-6 py-4">
                    100
                </td>
                <td class="px-6 py-4">
                    700
                </td>
                <td class="px-6 py-4" style="color:#009EF7">
                    Rp  200.000 ,00
                </td>
            </tr>
        </tbody>
    </table>
    <div class="px-6 py-3 flex flex-row justify-between items-center border rounded-b-lg"
        style="background-color: #E7F8FB">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex w-full">
                <span class="font-semibold text-xs antialiased text-white tracking-wide" style="color: #7E8299">Rows per
                    page: 10</span>
            </div>
        </div>
        <div class="flex items-center">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span
                    class="font-semibold text-gray-900 dark:text-white">10</span> of <span
                    class="font-semibold text-gray-900 dark:text-white">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button
                    class="py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < </button>
                        <button
                            class="py-2 px-4 text-sm font-medium text-white bg-gray-800  hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            >
                        </button>
            </div>
        </div>
    </div>
</div>

