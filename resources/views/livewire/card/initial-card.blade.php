<div>
    <div class="bg-gray-50 rounded-lg shadow-lg w-full h-max">
        <div class="grid grid-cols-12 gap-2 text-xs py-5 px-5">
            <div class="col-span-3">
                <img src="/assets/img/zee.jpeg" alt="" class="w-16 h-16 rounded-lg shadow-xl shadow-gray-400">
            </div>
            <div class="col-span-7 text-sm">
                <span class="py-1">Primary Holder Name</span>
                <div class="flex flex-wrap py-1 text-xs text-gray-600">
                    <span>Jenius-</span>
                    <span>1808765435678906</span>
                </div>
                <span class="py-1">Rp 40.000.0000</span>
                <span></span>
            </div>
            <div class="col-span-2">
                <div class="flex flex-row text-white text-xl -mt-1">
                    <button class="text-[#7E8299] rounded las la-edit hover:text-cyan-500"
                        data-modal-toggle="edit-reporitng-budget-disbursement"></button>
                    <button
                        class="text-[#7E8299] rounded las la-trash-alt hover:text-red-700"
                        data-modal-toggle="delete-reporitng-budget-disbursement"></button>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-t-lg border-b w-full h-max overflow-x-auto">
            {{-- <div class="grid grid-cols-12 gap-2 text-xs py-5 px-5">
                <div class="col-span-4 text-xs flex flex-col">
                    <span>Secondary card name</span>
                    <span>Abdan Syakuro </span>
                    <span>Fakhri Azmi</span>
                    <span>Wiwit Suganda</span>
                </div>
                <div class="col-span-5 text-xs flex flex-col">
                    <span>Secondary card name</span>
                    <span>1809876543456789 </span>
                    <span>1809876543456789</span>
                    <span>W1809876543456789</span>
                </div>
                <div class="col-span-3 text-xs flex flex-col">
                    <span>Nominal</span>
                    <span>Rp 15.000.000</span>
                    <span>Rp 15.000.000</span>
                    <span>Rp 10.000.000</span>
                </div>
            </div> --}}
            <table class="w-full text-sm text-left">
                <thead class="text-xs font-semibold text-gray-400 bg-gray-100 uppercase font-mono">
                    <tr>
                        <th scope="col" class="text-center py-3">
                            Secondary card name
                        </th>
                        <th scope="col" class="text-center py-3">
                            Secondary card name
                        </th>
                        <th scope="col" class="text-center py-3">
                            Nominal
                        </th>
                </thead>
                <tbody>
                    <tr class="bg-white border-b text-xs text-black">
                        <td class="pl-2 py-4">
                            Wiwit Suganda
                        </td>
                        <td class=" py-4">
                            1809876543456789
                        </td>
                        <td class="pr-2 py-4">
                            Rp 10.000.000
                        </td>
                    </tr>
                    <tr class="bg-white border-b text-xs text-black">
                        <td class="pl-2 py-4">
                        Abdan Syakuro
                        </td>
                        <td class=" py-4">
                            1809876543456789
                        </td>
                        <td class="pr-2 py-4">
                            <span>Rp 15.000.000</span>
                        </td>
                    </tr>
                </tbody>
            </table> 
        </div>
        <div class="flex justify-between text-sm text-gray-400 px-4 py-2">
            <span>12/ 07/2022</span>
            <button class="flex">
                <span class="iconify" data-icon="carbon:document-attachment"></span>
                Download Attachment
            </button>
        </div>
    </div>
</div>
