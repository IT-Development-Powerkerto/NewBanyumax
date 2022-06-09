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
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Division
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
                        21/12/2021 11:33 WIB
                    </td>
                    <td class="px-6 py-4">
                        Zall
                    </td>
                    <td class="px-6 py-4">
                        Costumer Service
                    </td>
                    <td class="px-6 py-4">
                        Rp. 50.000
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-red-400 rounded justify-center">Rejected</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

