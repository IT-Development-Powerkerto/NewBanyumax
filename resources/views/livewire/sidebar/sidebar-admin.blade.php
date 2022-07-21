<aside class="h-full sticky top-0">
    <div class="xl:flex">
        <div x-show="isOpen()" class="fixed xl:static inset-0 flex bg-white h-screen shadow-lg">
            <div @click.away="handleAway()" class="w-64 text-white bg-white shadow">

                <div class="mt-5 grid grid-cols-12 bg-white justify-between justify-items-center items-center">
                    <div class="col-span-10 ">
                        <a href="/dashboard-admin" class="flex">
                            <img src="assets/img/logo.png" class="mr-2 h-3" alt="Banyumax Logo" />
                        </a>
                    </div>
                    <div class="col-span-2">
                        <a @click.prevent="handleClose()"
                            class="p-3 hover:text-cyan-500 text-black flex-1 flex items-center" href="#">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col justify-between h-screen overflow-y-auto">
                    <div class="px-5 ">
                        <!-- Dropdown menu -->
                        <ul class="space-y-2">
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] "
                                    aria-controls="dropdown-adminmanagement"
                                    data-collapse-toggle="dropdown-adminmanagement">
                                    <span class="iconify w-5 h-5" data-icon="iconoir:home-simple"></span>
                                    <span class="flex-1 ml-3 text-left ">Admin Management</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-adminmanagement" class="hidden py-2 space-y-2">
                                    <li>
                                        <ul class="px-5">
                                            <li class="px-3">
                                                <a href="/dashboard-ceo"
                                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">CEO</a>
                                            </li>
                                            <li class="px-3">
                                                <a href="/dashboard-manager"
                                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">Manager</a>
                                            </li>
                                            <li>
                                                <button id="dropdownNavbarLink" data-dropdown-placement="right" data-dropdown-toggle="dropdown-finance-admin" class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">
                                                    <span class="flex-1 ml-3 text-left ">Finance</span>
                                                    <span class="iconify" data-icon="akar-icons:chevron-right"></span>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-finance-admin" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                                        <li>
                                                            <a href="/dashboard-finance" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="/dashboard-budgetrequest-finance" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Request</a>
                                                        </li>
                                                        <li>
                                                            <a href="/dashboard-budgetrealization-finance" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Realization</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <button id="dropdownNavbarLink" data-dropdown-placement="right" data-dropdown-toggle="dropdown-advertiser-admin" class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">
                                                    <span class="flex-1 ml-3 text-left ">Advertiser</span>
                                                    <span class="iconify" data-icon="akar-icons:chevron-right"></span>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-advertiser-admin" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                                        <li>
                                                            <a href="/campaign-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Campaign</a>
                                                        </li>
                                                        <li>
                                                            <a href="/operator-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Operator</a>
                                                        </li>
                                                        <li>
                                                            <a href="/budgetingdisbursment-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Disbursment</a>
                                                        </li>
                                                        <li>
                                                            <a href="/budgetingrealization-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Realization</a>
                                                        </li>
                                                        <li>
                                                            <a href="/rountineevaluation-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Routine Evaluation</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <button id="dropdownNavbarLink" data-dropdown-placement="right" data-dropdown-toggle="dropdown-cs-admin" class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">
                                                    <span class="flex-1 ml-3 text-left ">Custemer Service</span>
                                                    <span class="iconify" data-icon="akar-icons:chevron-right"></span>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-cs-admin" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                                        <li>
                                                            <a href="/createpromotion-cs-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Create Promotion</a>
                                                        </li>
                                                        <li>
                                                            <a href="/reimbursment-cs-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Reimbursment</a>
                                                        </li>
                                                        <li>
                                                            <a href="/routineevaluation-cs-admin" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Routine Evaluation</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <button id="dropdownNavbarLink" data-dropdown-placement="right" data-dropdown-toggle="dropdown-inputer-admin" class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">
                                                    <span class="flex-1 ml-3 text-left ">Admin Inputer</span>
                                                    <span class="iconify" data-icon="akar-icons:chevron-right"></span>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-inputer-admin" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-56 dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                                        <li>
                                                            <a href="/dashboard-inputer" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="/budgetingrequest-inputer" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Request</a>
                                                        </li>
                                                        <li>
                                                            <a href="/budgetingrealization-inputer" class="block px-4 py-2  text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] text-xs tracking-widest">Budgeting Realization</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] "
                                    aria-controls="dropdown-logistik" data-collapse-toggle="dropdown-logistik">
                                    <span class="iconify w-5 h-5"
                                        data-icon="material-symbols:package-outline-rounded"></span>
                                    <span class="flex-1 ml-3 text-left ">Logistic</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-logistik" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="/logistic-warehouse"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">Warehouse</a>
                                    </li>
                                    <li>
                                        <a href="/logistic-expedisi"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">Expedisi</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] "
                                    aria-controls="dropdown-reporting" data-collapse-toggle="dropdown-reporting">
                                    <span class="iconify w-5 h-5" data-icon="carbon:chart-combo"></span>
                                    <span class="flex-1 ml-3 text-left ">Reporting</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-reporting" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="/live-reporting"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">Live Reporting</a>
                                    </li>
                                    <li>
                                        <a href="/pivoting"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4]">Pivoting</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <div class="mb-28 px-5">
                        <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                            <li>
                                <a href="/logout"
                                    class="flex items-center px-3 py-2 text-xs tracking-widest font-normal text-gray-900 hover:bg-[#06b6d41f] hover:text-[#06b6d4] rounded-lg">
                                    <span class="iconify w-5 h-5" data-icon="ic:sharp-log-out"></span>
                                    <span class="ml-3">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <div>
            <nav class="text-gray-700 bg-white flex">
                <div x-show="!isOpen()" class="flex fixed-top">
                    <a x-show="!isOpen()" @click.prevent="handleOpen()"
                        class="p-2 hover:bg-cyan-500 hover:text-white" href="#">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
            </nav>
        </div>
</aside>


<script>
    function sidebar() {
        const breakpoint = 1280
        return {
            open: {
                above: true,
                below: false,
            },
            isAboveBreakpoint: window.innerWidth > breakpoint,

            handleResize() {
                this.isAboveBreakpoint = window.innerWidth > breakpoint
            },

            isOpen() {
                console.log(this.isAboveBreakpoint)
                if (this.isAboveBreakpoint) {
                    return this.open.above
                }
                return this.open.below
            },
            handleOpen() {
                if (this.isAboveBreakpoint) {
                    this.open.above = true
                }
                this.open.below = true
            },
            handleClose() {
                if (this.isAboveBreakpoint) {
                    this.open.above = false
                }
                this.open.below = false
            },
            handleAway() {
                if (!this.isAboveBreakpoint) {
                    this.open.below = false
                }
            },
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
