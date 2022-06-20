<div class="py-5">
    <div class="mt-1 flex flex-col w-full py-5">
        <h1 class="font-semibold text-xl antialiased text-white tracking-wide" style="color: #7E8299">Weekly Info ADV</h1>
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

            <div class="flex flex-col gap-2 md:gap-0 md:flex-row">
                <div class="mr-2 w-36 md:w-fit">
                    <button
                        class="text-blue-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                        type="button" data-modal-toggle="add-manual-closing">
                        <i class="las la-chart-bar text-xl"></i>
                        <span>Detail</span>
                    </button>
                    {{-- modal add manual closing --}}
                    <div id="add-manual-closing" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-slate-100 rounded-lg shadow">
                                <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="Detail">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3
                                        class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                        Detail</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="relative">
                                            <input type="text" name="operator" wire:model.defer='operator' id="operator" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Operator" required>
                                        </div>
                                        <div class="relative">
                                            <select name="campaign" id="campaign" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                                <option disabled selected>Select Campaign</option>
                                                <option value="1">Campaign One</option>
                                                <option value="2">Campaign Two</option>
                                                <option value="3">Campaign Three</option>
                                            </select>
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="product" wire:model.defer='product' id="product" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Product" required>
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="custemer-name" wire:model.defer='custemer-name' id="custemer-name" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Customer Name" required>
                                        </div>
                                        <div class="relative">
                                            <input type="text" name="custemer-phone" wire:model.defer='custemer-phone' id="custemer-phone" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Customer Phone" required>
                                        </div>
                                        <div class="relative">
                                            <input type="date" name="date" wire:model.defer='date' id="date" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit"
                                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Export</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal add manual closing --}}
                </div>

                <div class="mr-2 w-36 md:w-fit">
                    <!-- Modal toggle -->
                    <button
                        class="text-blue-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                        type="button" data-modal-toggle="export-lead">
                        <i class="las la-print text-xl"></i>
                        <span>Export</span>
                    </button>

                    <!-- Main modal -->
                    <div id="export-lead" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-slate-100 rounded-lg shadow">
                                <button type="button" class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="export-lead">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3
                                        class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                        Export to Excel</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="flex flex-row gap-2">
                                            <div class="relative">
                                                <input type="date" name="date-one" wire:model.defer='date-one' id="date-one" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                            </div>
                                            <div class="relative self-center">
                                                <p>-</p>
                                            </div>
                                            <div class="relative">
                                                <input type="date" name="date-two" wire:model.defer='date-two' id="date-two" class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit"
                                                class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Export</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative mr-2 w-36 md:w-56">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-blue-400 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0  00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text"
                        class="bg-gray-50 border text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ring-blue-400 border-blue-400 block w-full pl-10 p-2"
                        placeholder="Select date">
                </div>
            </div>
        </div>
    </div>
    <div class="h-max bg-white overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
                style="background-color: #06B6D41A">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Advertiser
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Week 1
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Week 2
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Week 3
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Week 4
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Omzet per Month
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        Hanif Muslim Azhar
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000  
                    </td>
                    <td class="px-6 py-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Rp 100.000.000
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2
                    </td>
                    <td class="px-6 py-4">
                        Awal Azwihani
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000  
                    </td>
                    <td class="px-6 py-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Rp 100.000.000
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4">
                        Rifan Tri Yulianto
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000  
                    </td>
                    <td class="px-6 py-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Rp 100.000.000
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        4
                    </td>
                    <td class="px-6 py-4">
                        Isnan Aditia
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000  
                    </td>
                    <td class="px-6 py-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Rp 100.000.000
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        Hanif Muslim Azhar
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000
                    </td>
                    <td class="px-6 py-4">
                        Rp 21.000.000  
                    </td>
                    <td class="px-6 py-4 text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Rp 100.000.000
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