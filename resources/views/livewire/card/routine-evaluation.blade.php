<head>
</head>

<body>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/datepicker.js"></script>
    <div>
        <div
            class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
            <div class="flex flex-row justify-between items-center w-full">
                <div class="mt-1 flex flex-col w-full">
                    <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Routine Evaluation</h1>
                    <div class="flex flex-row gap-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto h-96 bg-white rounded-b-lg px-5 py-5 ">
            <div class="border-t border-black-200">

                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 1rem; margin-left:2rem;">Product
                        Name</label>
                    <select id="product"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                        style="max-width: 900px; margin-left: 8rem;">
                        <option>Generos</option>
                        <option>Freshmag</option>
                        <option>Gizidat</option>
                        <option>Etawaku</option>
                        <option>Rube</option>
                        <option>New Briswa</option>
                    </select>
                </div>
                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 1.5rem; margin-left:2rem;">Date</label>
                    <div class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                        style="max-width: 920px; margin-left: 11.5rem; margin-bottom:;">
                        <input datepicker type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="hh/bb/tttt">
                    </div>
                </div>
                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 0.5rem; margin-left:2rem;">Time</label>
                    <input type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="max-width: 900px; margin-left: 12rem; margin-bottom:;" />
                </div>
                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 1rem; margin-left:2rem;">Resistance</label>
                    <div class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                        style="max-width: 920px; margin-left: 8.75rem; margin-bottom:;">
                        <textarea id="resistance" rows="2"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 1rem; margin-left:2rem;">Solution</label>
                    <div class="text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                        style="max-width: 920px; margin-left: 10rem; margin-bottom:;">
                        <textarea id="solution" rows="2"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="flex justify-end w-full">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
