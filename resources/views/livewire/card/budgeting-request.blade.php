<div>
    <div
        class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Budgeting Request</h1>
                <div class="flex flex-row gap-2">
                </div>
            </div>
        </div>
    </div>
    <div class="h-max bg-white rounded-b-lg px-5 py-5 ">
        <div class="border-t border-black-200">

            <div class="flex">
                <label class="text-sm font-medium text-black-500"
                    style=" margin-top: 1rem; margin-left:2rem;">Division</label>
                <div class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                    style="max-width: 900px; margin-left: 10.75rem;">
                    <input type="text" id="division" value="Admin" disabled
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="flex">
                <label class="text-sm font-medium text-black-500"
                    style=" margin-top: 2rem; margin-left:2rem;">Reason</label>
                <div class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                    style="max-width: 900px; margin-left: 11rem;">
                    <textarea id="reason" rows="2"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
            </div>
            <div class="flex">
                <label class="text-sm font-medium text-black-500" style=" margin-top: 1.5rem; margin-left:2rem;">Nominal
                    (Rp)</label>
                <div class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                    style="max-width: 900px; margin-left: 8.25rem;">
                    <input type="text" id="nominal"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="flex">
                <label class="text-sm font-medium text-black-500" style=" margin-top: 1.5rem; margin-left:2rem;">Attachment</label>
                <div class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 space-x-3"
                    style="max-width: 900px; margin-left: 9rem;">
                    <input
                        class="block mb-5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="attachment" type="file">
                </div>
            </div>
        </div>
        <div class="flex justify-end w-full">
            <button type="button"
                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl" style="margin-right: 6rem; margin-top: 1rem;">Submit</button>
        </div>
    </div>
</div>

