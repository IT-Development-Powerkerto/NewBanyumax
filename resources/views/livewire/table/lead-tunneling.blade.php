<div class="py-5">
    <div class="mt-1 flex flex-col w-full py-5">
    </div>
</div>
<div class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg">
    <div class="flex flex-row justify-between items-center w-full">
        <div class="">
        <h1 class="font-semibold text-xl antialiased text-black tracking-wide">Lead Tunneling</h1>
        <div class="flex flex-row gap-2 py-2">
            <span class="font-medium text-sm text-zinc-400">1000 Data</span>
        </div>
    </div>


        <div class="flex flex-col gap-2 md:gap-0 md:flex-row w-max">
            <div class="relative mr-2">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..">
            </div>
            <div class="mr-2 w-36 md:w-fit">
                <button
                    class="text-gray-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
                    type="button" data-modal-toggle="add-manual-closing">
                    <i class="las la-chart-bar text-xl"></i>
                    <span>Add Manual Closing</span>
                </button>
                {{-- modal add manual closing --}}
                <div id="add-manual-closing" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-slate-100 rounded-lg shadow">
                            <button type="button"
                                class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-toggle="add-manual-closing">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                    Add Manual Lead</h3>
                                <form class="space-y-6" action="#">
                                    <div class="relative">
                                        <input type="text" name="operator" wire:model.defer='operator' id="operator"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Operator" required>
                                    </div>
                                    <div class="relative">
                                        <select name="campaign" id="campaign"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                            <option disabled selected>Select Campaign</option>
                                            <option value="1">Campaign One</option>
                                            <option value="2">Campaign Two</option>
                                            <option value="3">Campaign Three</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <input type="text" name="product" wire:model.defer='product' id="product"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Product" required>
                                    </div>
                                    <div class="relative">
                                        <input type="text" name="custemer-name" wire:model.defer='custemer-name'
                                            id="custemer-name"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Customer Name" required>
                                    </div>
                                    <div class="relative">
                                        <input type="text" name="custemer-phone" wire:model.defer='custemer-phone'
                                            id="custemer-phone"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Customer Phone" required>
                                    </div>
                                    <div class="relative">
                                        <input type="date" name="date" wire:model.defer='date' id="date"
                                            class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                            required>
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
                    class="text-gray-400 shadow w-full bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center flex flex-row justify-center items-center gap-2"
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
                            <button type="button"
                                class="absolute top-5 right-6 text-white bg-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                data-modal-toggle="export-lead">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">
                                    Export to Excel</h3>
                                <form class="space-y-6" action="#">
                                    <div class="flex flex-row gap-2">
                                        <div class="relative">
                                            <input type="date" name="date-one" wire:model.defer='date-one'
                                                id="date-one"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                required>
                                        </div>
                                        <div class="relative self-center">
                                            <p>-</p>
                                        </div>
                                        <div class="relative">
                                            <input type="date" name="date-two" wire:model.defer='date-two'
                                                id="date-two"
                                                class="block px-4 py-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                required>
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
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0  00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text"
                    class="bg-white text-gray-400 border-gray-200 shadow sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 placeholder-gray-400 font-medium"
                    placeholder="Select Date">
            </div>
        </div>
    </div>
</div>
<div class="h-max bg-white overflow-x-auto px-5">
    <table class="w-full text-sm text-left">
        <thead class="text-xs font-semibold text-gray-400 bg-gray-100 uppercase font-mono">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Order ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Advertiser
                </th>
                <th scope="col" class="px-6 py-3">
                    Operator
                </th>
                <th scope="col" class="px-6 py-3">
                    Customer
                </th>
                <th scope="col" class="px-6 py-3">
                    No. Whatsapp
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Response
                </th>
                <th scope="col" class="px-6 py-3">
                    Progress
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    Ord-41737
                </td>
                <td class="px-6 py-4">
                    Rifan Tri Yulianto
                </td>
                <td class="px-6 py-4">
                    Fadilatun Nida Rahayu
                </td>
                <td class="px-6 py-4">
                    Lilin Sugiarti
                </td>
                <td class="px-6 py-4">
                    6281348948716
                </td>
                <td class="px-6 py-4">
                    Generos
                </td>
                <td class="px-6 py-4">
                    2022-05-25 08:07:30
                </td>
                <td class="px-6 py-4">
                    <div class="w-max rounded-md bg-red-100 text-red-400 px-3 py-1">
                        05:00
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-400 bg-gray-100 rounded-md px-3 py-1 text-center">
                        Waiting
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#"
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                        <i class="las la-edit"></i>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    Ord-41737
                </td>
                <td class="px-6 py-4">
                    Rifan Tri Yulianto
                </td>
                <td class="px-6 py-4">
                    Fadilatun Nida Rahayu
                </td>
                <td class="px-6 py-4">
                    Lilin Sugiarti
                </td>
                <td class="px-6 py-4">
                    6281348948716
                </td>
                <td class="px-6 py-4">
                    Generos
                </td>
                <td class="px-6 py-4">
                    2022-05-25 08:07:30
                </td>
                <td class="px-6 py-4">
                    <div class="w-max rounded-md bg-red-100 text-red-400 px-3 py-1">
                        05:00
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-400 bg-gray-100 rounded-md px-3 py-1 text-center">
                        Processing
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#"
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                        <i class="las la-edit"></i>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    Ord-41737
                </td>
                <td class="px-6 py-4">
                    Rifan Tri Yulianto
                </td>
                <td class="px-6 py-4">
                    Fadilatun Nida Rahayu
                </td>
                <td class="px-6 py-4">
                    Lilin Sugiarti
                </td>
                <td class="px-6 py-4">
                    6281348948716
                </td>
                <td class="px-6 py-4">
                    Generos
                </td>
                <td class="px-6 py-4">
                    2022-05-25 08:07:30
                </td>
                <td class="px-6 py-4">
                    <div class="w-max rounded-md bg-red-100 text-red-400 px-3 py-1">
                        05:00
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-400 bg-gray-100 rounded-md px-3 py-1 text-center">
                        Complete
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="/editleadtunneling"
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                        <i class="las la-edit"></i>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    Ord-41737
                </td>
                <td class="px-6 py-4">
                    Rifan Tri Yulianto
                </td>
                <td class="px-6 py-4">
                    Fadilatun Nida Rahayu
                </td>
                <td class="px-6 py-4">
                    Lilin Sugiarti
                </td>
                <td class="px-6 py-4">
                    6281348948716
                </td>
                <td class="px-6 py-4">
                    Generos
                </td>
                <td class="px-6 py-4">
                    2022-05-25 08:07:30
                </td>
                <td class="px-6 py-4">
                    <div class="w-max rounded-md bg-red-100 text-red-400 px-3 py-1">
                        02:00
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-400 bg-gray-100 rounded-md px-3 py-1 text-center">
                        Waiting
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#"
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                        <i class="las la-edit"></i>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    Ord-41737
                </td>
                <td class="px-6 py-4">
                    Rifan Tri Yulianto
                </td>
                <td class="px-6 py-4">
                    Fadilatun Nida Rahayu
                </td>
                <td class="px-6 py-4">
                    Lilin Sugiarti
                </td>
                <td class="px-6 py-4">
                    6281348948716
                </td>
                <td class="px-6 py-4">
                    Generos
                </td>
                <td class="px-6 py-4">
                    2022-05-25 08:07:30
                </td>
                <td class="px-6 py-4">
                    <div class="w-max rounded-md bg-red-100 text-red-400 px-3 py-1">
                        02:00
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-400 bg-gray-100 rounded-md px-3 py-1 text-center">
                        Spam
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#"
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                        <i class="las la-edit"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="px-6 py-3 flex justify-between items-center border rounded-b-lg bg-white">

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
</div>
</div>
