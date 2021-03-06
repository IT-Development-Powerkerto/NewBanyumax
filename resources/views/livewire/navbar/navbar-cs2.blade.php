<nav class="bg-white border shadow-sm border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/dashboard-cs" class="flex items-center">
            <img src="assets/img/logo.png" class="mr-2 h-3" alt="Banyumax Logo" />
        </a>
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-lg md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="assets/img/favicon.png" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 w-52 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900">Muhammad Faizal</span>
                    <span class="block text-sm font-medium text-gray-500 truncate">Admin</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">My Profile</a>
                    </li>
                    <li>
                        <a href="/logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
                <a href="/dashboard-cs" class="block py-2 pr-4 pl-3 text-gray-700 font-semibold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 hover:border-b hover:border-blue-700">Dashboard</a>
            </li>
            <li>
                <a href="/createpromotion" class="block py-2 pr-4 pl-3 text-gray-700 font-semibold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 hover:border-b hover:border-blue-700">Create Promotion</a>
            </li>
            <li>
                <a href="/reimbursment" class="block py-2 pr-4 pl-3 text-gray-700 font-semibold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 hover:border-b hover:border-blue-700">Reimbursment</a>
            </li>
            <li>
                <a href="/budgetingrealization-cs" class="block py-2 pr-4 pl-3 text-gray-700 font-semibold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 hover:border-b hover:border-blue-700">Budgeting Realization</a>
            </li>
            <li>
                <a href="/routineevaluation-cs" class="block py-2 pr-4 pl-3 text-gray-700 font-semibold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 hover:border-b hover:border-blue-700">Routine Evaluation</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
