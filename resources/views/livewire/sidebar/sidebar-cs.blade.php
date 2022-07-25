<aside class="h-screen sticky top-0">
    <div class="xl:flex">
        <div x-show="isOpen()" class="fixed xl:static inset-0 flex bg-white h-screen shadow-lg">
            <div @click.away="handleAway()" class="w-64 text-white bg-white shadow">

                <div class="mt-5 grid grid-cols-12 bg-white justify-between  justify-items-center items-center">
                    <div class="col-span-10 ">
                        <a href="/dashboard-cs" class="flex">
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

                <div class="flex flex-col justify-between h-screen">
                    <div class="px-5 ">
                        <!-- Dropdown menu -->
                        <ul class="space-y-2">
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] "
                                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    <span class="iconify w-5 h-5" data-icon="iconoir:home-simple"></span>
                                    <span class="flex-1 ml-3 text-left "
                                        >CS Management</span>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="/createpromotion"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] ">Create Promotion</a>
                                    </li>
                                    <li>
                                        <a href="/reimbursment"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] ">Reimbursment</a>
                                    </li>
                                    <li>
                                        <a href="/crm"
                                            class="flex items-center p-2 pl-11 w-full text-xs tracking-widest font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-[#06b6d41f] hover:text-[#06b6d4] ">CRM</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/routineevaluation-cs"
                                    class="flex items-center p-2 text-xs tracking-widest font-normal text-gray-900 rounded-lg dark:text-white hover:bg-[#06b6d41f] hover:text-[#06b6d4] dark:hover:bg-gray-700">
                                    <span class="iconify w-5 h-5" data-icon="mdi:clock-outline"></span>
                                    <span class="ml-3">Routine Evaluation</span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <div class="mb-28 px-5">
                        <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                            <li>
                                <a href="/logout"
                                    class="flex items-center px-3 py-2 text-xs tracking-widest font-normal  text-gray-900  hover:bg-[#06b6d41f] hover:text-[#06b6d4] rounded-lg">
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