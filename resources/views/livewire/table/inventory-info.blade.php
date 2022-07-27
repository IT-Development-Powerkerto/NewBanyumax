<div class="border bg-white rounded ">
    <div class="mt-3 py-5 px-6">
        <h1 class="font-semibold text-[#7E8299] tracking-wide text-xl">Inventory Information</h1>
    </div>

    <div class="py-5 px-6 flex flex-col md:grid md:grid-cols-12 gap-4">
        <livewire:card.inventory/>
        <livewire:card.inventory/>
        <livewire:card.inventory/>
        <livewire:card.inventory/>
    </div>

    <div class="px-6 border-t py-3 flex justify-between items-center bg-white">

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