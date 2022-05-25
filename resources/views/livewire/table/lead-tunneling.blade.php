<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Lead Tunneling</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">100 Lead</span>
                    <span class="text-gray-300 font-semibold text-sm">100 Spam</span>
                </div>
            </div>
            {{-- Desktop --}}
            <div class="hidden md:flex md:flex-row">
                <div class="mr-2">
                    <!-- Modal toggle -->
                    <button class="text-blue-400 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 text-center" type="button" data-modal-toggle="export-lead">
                        Export
                    </button>
                    
                    <!-- Main modal -->
                    <div id="export-lead" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="absolute top-5 right-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="export-lead">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Add Product</h3>
                                    <form class="space-y-6" action="#">
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i class="las la-calendar-week text-gray-400"></i>
                                            </div>
                                            <input type="text" name="selectdate" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Select Date" required/>
                                        </div>
                                        <div class="flex flex-row gap-3">
                                            <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Product</button>
                                            <button type="submit" class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-toggle="export-lead">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="relative mr-2">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2" placeholder="Select date">
                </div>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..">
                </div>
            </div>

            {{-- Mobile --}}

        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       Order ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Advertiser Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operator Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Whatsapp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date/Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Response
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
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
                        <div class="text-red-400">
                            05:00
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-zinc-400">
                            Waiting
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
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
                        <div class="text-emerald-300">
                            02:00
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-cyan-400">
                            Processing
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
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
                        <div class="text-emerald-300">
                            02:00
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-emerald-300">
                            Closing
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
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
                        <div class="text-emerald-300">
                            02:00
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-red-400">
                            Failed
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
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
                        <div class="text-emerald-300">
                            02:00
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-red-400">
                            Spam
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                            <i class="las la-edit"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
