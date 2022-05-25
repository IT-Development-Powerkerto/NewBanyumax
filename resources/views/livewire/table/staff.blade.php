<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Data Users</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">100 Users</span>
                </div>
            </div>
            <div class="mr-2">
                <button class="text-blue-400 w-32 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center" type="button" data-modal-toggle="add-staff">
                    <i class="las la-user-plus text-xl"></i>
                    <span>Add Staff</span>
                </button>
                <livewire:modal.add-staff />
            </div>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..">
            </div>
        </div>
    </div>
    <div class="overflow-x-auto h-96 bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Division
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        <div class="flex flex-row gap-4 items-center">
                            <img src="assets/img/favicon.png" class="w-10 h-10 rounded-lg shadow-sm border" alt="">
                            <h1>Fadilatun Nida Rahayu</h1>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        Customer Service
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex flex-row gap-2">
                            <a href="#" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#" class="bg-gradient-to-r from-orange-500 to-red-500 hover:bg-gradient-to-r hover:from-orange-400 hover:to-red-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                                <i class="lar la-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
