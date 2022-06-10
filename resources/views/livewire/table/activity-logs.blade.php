<div>
    <div
        class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg" style="margin-top:1rem">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Activity logs</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">3 Activity</span>
                </div>
            </div>
            <livewire:modal.add-operator />
        </div>
    </div>
    <div class="h-96 bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Timestamp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Division
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Attachment
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2022-03-04 00:00:00
                    </td>
                    <td class="px-6 py-4">
                        coba
                    </td>
                    <td class="px-6 py-4">
                        Admin
                    </td>
                    <td class="px-6 py-4">
                        Rp. 100
                    </td>
                    <td class="px-6 py-4">
                        lorem ipsum
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            <button type="button"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">Download</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2022-05-30 00:00:00
                    </td>
                    <td class="px-6 py-4">
                        10170
                    </td>
                    <td class="px-6 py-4">
                        Admin
                    </td>
                    <td class="px-6 py-4">
                        Rp. 550.064.593
                    </td>
                    <td class="px-6 py-4">
                        30 May Admin Adv
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            <button type="button"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">Download</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2022-05-31 00:00:00
                    </td>
                    <td class="px-6 py-4">
                        Iklan Etawa
                    </td>
                    <td class="px-6 py-4">
                        Advertiser
                    </td>
                    <td class="px-6 py-4">
                        Rp. 2.000.000
                    </td>
                    <td class="px-6 py-4">
                        -
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            <button type="button"
                                class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-blue-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">Download</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

