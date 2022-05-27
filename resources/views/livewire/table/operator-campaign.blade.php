<div>
    <div class="px-6 py-3 flex flex-row justify-between items-center bg-gradient-to-r from-cyan-500 to-blue-500 border rounded-t-lg">
        <div class="flex flex-row justify-between items-center w-full">
            <div class="mt-1 flex flex-col w-full">
                <h1 class="font-semibold text-xl antialiased text-white tracking-wide">Operator</h1>
                <div class="flex flex-row gap-2">
                    <span class="text-gray-300 font-semibold text-sm">1 Campaigns</span>
                </div>
            </div>
            <button class="text-blue-400 w-48 shadow bg-white hover:bg-gradient-to-r from-cyan-500 to-blue-500 border hover:text-white font-medium rounded-lg text-sm px-4 py-2 flex flex-row gap-2 items-center" type="button" data-modal-toggle="add-operator">
                <i class="las la-layer-group text-xl"></i>
                <span>Add Operator</span>
            </button>
            <livewire:modal.add-operator />
        </div>
    </div>
    <div class="overflow-x-auto h-96 bg-white rounded-b-lg">
        <table class="w-full text-sm text-left">
            <thead class="text-xs font-semibold text-gray-400 bg-gray-50 border-b uppercase font-mono">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name Operator
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Whatsapp
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Assign To
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Leads
                    </th>
                    <th scope="col" class="px-6 py-3 w-52">
                        Closing
                    </th>
                    <th scope="col" class="px-6 py-3">
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
                        Customer Service
                    </td>
                    <td class="px-6 py-4">
                        cs@banyumax.id
                    </td>
                    <td class="px-6 py-4">
                        081245527645
                    </td>
                    <td class="px-6 py-4">
                        5 Campaigns
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            <h1>1 <span class="font-semibold">Daily Leads</span></h1>
                            <h1>1 <span class="font-semibold">Weekly Leads</span></h1>
                            <h1>1 <span class="font-semibold">Monthly Leads</span></h1>
                            <h1>1 <span class="font-semibold">Total Leads</span></h1>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-2">
                            <h1>1 <span class="font-semibold">Daily Closing</span></h1>
                            <h1>1 <span class="font-semibold">Weekly Closing</span></h1>
                            <h1>1 <span class="font-semibold">Monthly Closing</span></h1>
                            <h1>1 <span class="font-semibold">Total Closing</span></h1>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="bg-gradient-to-r from-orange-500 to-red-500 hover:bg-gradient-to-r hover:from-orange-400 hover:to-red-600 shadow-sm rounded-lg px-2 py-1 text-white text-xl">
                            <i class="lar la-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
