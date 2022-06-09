<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg"
        style="margin-top:3rem">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Budgeting Req nonADV</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">1 Request</span>
                </div>
            </div>
        </div>
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            style="width: 200px" type="date" name="date">
    </div>
    <div class="overflow-x-auto h-max bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Division
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Request
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Attachment
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        1
                    </td>
                    <td class="px-6 py-4">
                        Admin
                    </td>
                    <td class="px-6 py-4">
                        Rp. 550.064.593
                    </td>
                    <td class="px-6 py-4">
                        Rp. 140.000.000
                    </td>
                    <td class="px-6 py-4  text-green-500">
                        Aprove
                    </td>
                    <td class="px-6 py-4">
                        <div>

                            <button id="dropdownActionButton4" data-dropdown-toggle="dropdownAction4"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-4 py-1 text-white text-sm"
                                type="button">Actions <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>

                            <div id="dropdownAction4"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(352.5px, 590.5px, 0px);">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDividerButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2">Aprove</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2">Reject</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2">Download File</a>
                                    </li>
                            </div>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
