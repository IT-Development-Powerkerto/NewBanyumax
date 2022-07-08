    <div class="h-screen w-64 bg-gray-200 shadow md:h-screen flex-col justify-between hidden sm:flex">
        <div class="px-5">
            <div class="flex flex-col justify-between h-screen">
                <div>
                    <a href="#" class="flex justify-center py-10">
                        <img src="assets/img/logo.png" class="mr-2 h-3" alt="Banyumax Logo" />
                    </a>
                    <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Flip</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-10">
                    <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Mobile Nav --}}
    <div class="w-64 h-screen bg-gray-200 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out"
        id="mobile-nav">
        <button aria-label="toggle sidebar" id="openSideBar"
            class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800"
            onclick="sidebarHandler(true)">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg7.svg"
                alt="toggler">
        </button>
        <button aria-label="Close sidebar" id="closeSideBar"
            class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
            onclick="sidebarHandler(false)">
            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg8.svg"
                alt="cross">
        </button>
        <div class="px-5">
            <div class="flex flex-col justify-between h-screen">
                <div>
                    <a href="#" class="flex justify-center py-10">
                        <img src="assets/img/logo.png" class="mr-2 h-3" alt="Banyumax Logo" />
                    </a>
                    <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Flip</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-10">
                    <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="flex items-center p-3 text-base font-normal text-gray-900 bg-white hover:bg-blue-300 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6">
        <div class="w-full h-full rounded border-dashed border-2 border-gray-300 text-3xl">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ad hic! Quae consectetur obcaecati,
            consequuntur dignissimos sequi, maxime minima placeat expedita atque provident dolor nihil. Repudiandae
            ullam commodi id deleniti.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat optio tempora incidunt. Sit facere
            optio ut dolor officia similique nisi nihil, unde itaque amet necessitatibus excepturi reiciendis nulla
            totam quis?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur provident non iure, temporibus
            recusandae aliquid. Iste nemo, odio, nulla eos, expedita eaque ab qui quasi quidem vel incidunt sed
            dolorum?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi totam veritatis accusamus labore, odio
            sit. Error molestias amet deleniti ipsa sed asperiores dignissimos. Quia optio ratione magnam nostrum,
            cupiditate minima.
        </div>
    </div> --}}