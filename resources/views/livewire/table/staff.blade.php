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
                
                <!-- Main modal -->
                <div id="add-staff" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button" class="absolute top-5 right-6 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-staff">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-base font-semibold text-gray-900 dark:text-white border-b pb-2">Add Staff</h3>
                                <form class="space-y-6" action="#">
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-user-tie text-gray-400"></i>
                                        </div>
                                        <input type="text" name="fullname" id="fullname" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Fullname" required>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-envelope text-gray-400"></i>
                                        </div>
                                        <input type="email" name="email" id="email" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Email" required>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-phone text-gray-400"></i>
                                        </div>
                                        <input type="text" name="phone" id="phone" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Phone" required>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-user-circle text-gray-400"></i>
                                        </div>
                                        <input type="text" name="username" id="username" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-user-lock text-gray-400"></i>
                                        </div>
                                        <input type="password" name="password" id="password" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-user-friends text-gray-400"></i>
                                        </div>
                                        <select id="countries" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                                            <option selected>Select Role</option>
                                            <option value="Role">Role</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <i class="las la-image text-gray-400"></i>
                                        </div>
                                        <label type="file" name="image-product" id="image-product" class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Image" required>
                                            <span class="text-gray-500">Image</span>
                                            <input type="file" name="image-product" id="image-product" class="hidden" placeholder="Image" required>
                                        </label>
                                    </div>
                                    <div class="flex flex-row gap-3">
                                        <button type="submit" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add Product</button>
                                        <button type="submit" class="w-full text-white bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-400 hover:to-red-600 border focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" data-modal-toggle="add-staff">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
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
