
<div class="px-6 py-3 flex flex-row justify-between items-center bg-white border rounded-t-lg">
    <div class="flex flex-row justify-between items-center w-full">
        <div class="relative w-36 md:w-fit">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-blue-400 dark:text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block px-4 py-2 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border  ring-blue-400border-blue-400"
                placeholder="Search..">
        </div>
    </div>
</div>
<div class="h-max bg-white rounded-b-lg">
    <table class="w-full text-sm text-left">
        <thead class="text-xs font-semibold text-gray-400 border-b uppercase font-mono"
            style="background-color: #06B6D41A">
            <tr>
                <th scope="col" class="px-6 py-3">
                    DATE
                </th>
                <th scope="col" class="px-6 py-3">
                    CS NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    REASON
                </th>
                <th scope="col" class="px-6 py-3">
                    NOMINAL
                </th>
                <th scope="col" class="px-6 py-3">
                    STATUS
                </th>
                <th scope="col" class="px-6 py-3">
                    ACTIONS
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    10/6/2022
                </td>
                <td class="px-6 py-4">
                    Alam Syah
                </td>
                <td class="px-6 py-4">
                    Pulsa untuk Paket Internet
                </td>
                <td class="px-6 py-4">
                    Rp 100.000
                </td>
                <td class="px-6 py-4">
                    <Span class="bg-blue-100 text-blue-500 py-2 px-4 rounded-md">
                        Submited
                    </Span>
                </td>
                <td class="px-6 py-4">
                    <a data-modal-toggle="delete-product" href="#" class="text-white bg-red-500 py-2 px-4 rounded-md">
                        <i class="las la-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    10/6/2022
                </td>
                <td class="px-6 py-4">
                    Alam Syah
                </td>
                <td class="px-6 py-4">
                    Pulsa untuk Paket Internet
                </td>
                <td class="px-6 py-4">
                    Rp 100.000
                </td>
                <td class="px-6 py-4">
                    <Span class="bg-red-100 text-red-500 py-2 px-4 rounded-md">
                        Rejected
                    </Span>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="text-white bg-gray-500 py-2 px-4 rounded-md">
                        <i class="las la-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b text-xs text-black">
                <td class="px-6 py-4">
                    10/6/2022
                </td>
                <td class="px-6 py-4">
                    Alam Syah
                </td>
                <td class="px-6 py-4">
                    Pulsa untuk Paket Internet
                </td>
                <td class="px-6 py-4">
                    Rp 100.000
                </td>
                <td class="px-6 py-4">
                    <Span class="bg-cyan-100 text-cyan-500 py-2 px-4 rounded-md">
                        Approved
                    </Span>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="text-white bg-gray-500 py-2 px-4 rounded-md">
                        <i class="las la-trash"></i>
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="px-6 py-3 flex flex-row justify-between items-center border rounded-b-lg"
        style="background-color: #06B6D41A">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex w-full">
                <span class="font-semibold text-xs antialiased text-white tracking-wide" style="color: #7E8299">Rows per page: 10</span>
            </div>
        </div>
        <div class="flex items-center">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
                <button class="py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < 
                </button>
                <button class="py-2 px-4 text-sm font-medium text-white bg-gray-800  hover:bg-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </button>
            </div>
            </div>
    </div>
</div>

