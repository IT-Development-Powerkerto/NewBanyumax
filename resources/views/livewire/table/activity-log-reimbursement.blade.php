<div>
    <div
        class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg" style="margin-top:1rem">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Activity logs</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">2 Activity</span>
                </div>
            </div>
            <livewire:modal.add-operator />
        </div>
    </div>
    <div class="h-max bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Timestamp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CS Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Reason
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Submition Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2022-03-04 10:19:03 WIB
                    </td>
                    <td class="px-6 py-4">
                        Admin
                    </td>
                    <td class="px-6 py-4">
                        coba
                    </td>
                    <td class="px-6 py-4">
                        Rp. 100
                    </td>
                    <td class="px-6 py-4">
                        <span class="border-2 border-pulple-200 rounded justify-center" style="color:#7239EA;">Wait</span>
                    </td>
                </tr>
                <tr class="bg-white border-b text-xs text-black">
                    <td class="px-6 py-4">
                        2022-04-19 15:14:20 WIB
                    </td>
                    <td class="px-6 py-4">
                        Fadilatun Nida Rahayu
                    </td>
                    <td class="px-6 py-4">
                        AA
                    </td>
                    <td class="px-6 py-4">
                        Rp. 12.000
                    </td>
                    <td class="px-6 py-4">
                        <span class="border-2 border-pulple-200 rounded justify-center" style="color:#7239EA;">Wait</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

