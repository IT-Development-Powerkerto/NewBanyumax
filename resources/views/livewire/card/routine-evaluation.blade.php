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
        <div class="h-max bg-white rounded-b-lg px-5 py-5 mb-3">
            <div class="border-t border-black-200">

                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style=" margin-top: 1rem; margin-left:2rem;">Product
                        Name</label>
                    <select id="product"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                        style="max-width: 900px; margin-bottom: 1rem; margin-left: 8rem;">
                        <option>Generos</option>
                        <option>Freshmag</option>
                        <option>Gizidat</option>
                        <option>Etawaku</option>
                        <option>Rube</option>
                        <option>New Briswa</option>
                    </select>
                </div>
                <div class="flex">
                    <label class="text-sm font-medium text-black-500" style="margin-top: 1rem; margin-left:2rem;">Date</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="max-width: 900px; margin-bottom: 1rem; margin-left: 12rem;" type="date" name="date">
                </div>

                <div class="flex">
                    <label class="text-sm font-medium text-black-500"
                        style="margin-top:0.5rem; margin-left:2rem;">Time</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="max-width: 900px;  margin-left: 12rem;" id="time" type="time" name="time">
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
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
